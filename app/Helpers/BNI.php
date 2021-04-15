<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class BNI
{

    private $BASE_URL = "https://apidev.bni.co.id";
    private $HOST = "8067";
    private $API_KEY = "7dcadd68-6bbb-462e-a28e-f06c9bd7c231";
    private $CLIENT_ID = "f94a5de7-243c-424a-bd46-42fcdd095621";
    private $CLIENT_SECRET = "aa5596e4-5782-4329-b69d-38eacd1a05ba";
    private $COMPANY_ID = "SIAPDANAIN";
    private $ACCESS_TOKEN = "";
    private $EXPIRES_AT;

    public function request($endpoint, $data)
    {
        $body = $this->buildBody($data);

        if (time() >= strtotime($this->EXPIRES_AT)) {
            $this->login();
        }

        $url = $this->BASE_URL . ":" . $this->HOST . $endpoint . "?access_token=" . $this->ACCESS_TOKEN;
        print($url);

        $response = Http::withHeaders([
            'X-API-Key' => $this->API_KEY
        ])->post($url, $body);

        // print($response->body());
        return $response;
    }

    private function login()
    {
        print("login\n");
        $url = "/api/oauth/token";
        $response = Http::asForm()->withHeaders([
            'Authorization' => "Basic " . base64_encode($this->CLIENT_ID . ':' . $this->CLIENT_SECRET)
        ])->post($this->BASE_URL . ":" . $this->HOST . $url, [
            'grant_type' => 'client_credentials',
        ]);

        $res = json_decode($response->body(), true);

        $this->ACCESS_TOKEN = $res['access_token'];
        $expiresIn = $res['expires_in'];
        $this->EXPIRES_AT =  date("Y-m-d H:i:s", strtotime("+$expiresIn seconds"));
    }

    private function buildBody($data)
    {
        $header = [
            'companyId' => $this->COMPANY_ID,
            "parentCompanyId" => "",
            "requestUuid" => "29FCB72E71D34C48"
        ];

        $data["header"] = $header;
        $request["request"] = $data;

        if ($this->HOST == "8067") {
            $signature = $this->generateSignatureSandbox($request);
        } else {
            $signature = $this->generateSignature($request);
        }


        $request["request"]["header"]["signature"] = $signature;
        return $request;
    }

    private function generateSignatureSandbox($data)
    {
        $url = "/api/jwtCreator";
        $body = [
            "header" => [
                "alg" => "HS256",
                "typ" => "JWT"
            ],
            "body" => $data,
            "x-api-key" => $this->API_KEY
        ];
        $response = Http::post($this->BASE_URL . ":" . $this->HOST . $url, $body);

        $res = json_decode($response->body(), true);

        return $res['signature'];
    }

    private function generateSignature($data)
    {
        // Create token header as a JSON string
        $header = JSON_encode([
            'typ' => 'JWT',
            'alg' => 'HS256'
        ]);
        // Create token payload as a JSON string
        $payload = JSON_encode($data);
        // Encode Header to Base64Url String
        $base64UrlHeader = str_replace(
            ['+', '/', '='],
            ['-', '_', ''],
            base64_encode($header)
        );
        // Encode Payload to Base64Url String
        $base64UrlPayload = str_replace(
            ['+', '/', '='],
            ['-', '_', ''],
            base64_encode($payload)
        );
        // Create Signature Hash
        $signature = hash_hmac(
            'sha256',
            $base64UrlHeader . "." . $base64UrlPayload,
            $this->API_KEY,
            true
        );
        // Encode Signature to Base64Url String
        $base64UrlSignature = str_replace(
            ['+', '/', '='],
            ['-', '_', ''],
            base64_encode($signature)
        );
        // Create JWT
        $jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
        return $jwt;
    }
}
