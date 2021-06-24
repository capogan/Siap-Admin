@extends('layouts.main')
@section('content')
<style>
.text-white >.fa-check{
    padding: 8px !important;
}
</style>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Verifikasi Data EKYC</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-11">
                                        <h5 class="card-title text-bold">Verifikasi Data dan EKYC</h5>
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <ul class="nav nav-tabs justify-content-end bar_tabs" id="myTab" role="tablist">
{{--                                                <li class="nav-item">--}}
{{--                                                    <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business">Informasi Pribadi</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="nav-item">--}}
{{--                                                    <a class="nav-link" id="document-tab" data-toggle="tab" href="#document" role="tab" aria-controls="document" >{{$funding->individuinfo->individualjob ? 'Informasi Pekerjaan' : 'Informasi Usaha'}}</a>--}}
{{--                                                </li>--}}
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="commissioner-tab" data-toggle="tab" href="#commissioner" role="tab" aria-controls="commissioner">Dokumen</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="document-tab" data-toggle="tab" href="#document" role="tab" aria-controls="document" >{{$funding->individuinfo->individualjob ? 'Informasi Pekerjaan' : 'Informasi Usaha'}}</a>
                                                </li>


                                                <li class="nav-item">
                                                    <a class="nav-link" id="vp-tab" data-toggle="tab" href="#vp" role="tab" aria-controls="vp">Verifikasi Pekerjaan / Usaha</a>
                                                </li>

                                               
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade " id="business" role="tabpanel" aria-labelledby="business-tab">
                                                <div class="row">
                                                    <div class="x_content">
                                                        <h1>Informasi Pribadi</h1>
                                                        @if($funding->individuinfo != null)
                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <tbody>
                                                            
                                                            <tr>
                                                                <th>No KTP</th>
                                                                <td colspan="2">{{$funding->individuinfo->identity_number}}</td>
                                                                <td colspan="3" class="text-center">
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>Nama Lengkap</th>
                                                                <td colspan="2">{{$funding->individuinfo->full_name}}</td>
                                                                <td colspan="3" class="text-center">
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>Nomor Telepon</th>
                                                                <td colspan="2">{{$funding->phone_number_verified}}</td>
                                                                <td colspan="3" class="text-center">
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>Nomor Whatsapp</th>
                                                                <td colspan="2">{{$funding->individuinfo->whatsapp_number}}</td>
                                                                <td colspan="3" class="text-center">
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>Email</th>
                                                                <td colspan="2">{{$funding->individuinfo->email}}</td>
                                                                <td colspan="3" class="text-center">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Jenis Kelamin</th>
                                                                <td colspan="2">{{$funding->individuinfo->gender}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>Tempat Tanggal Lahir</th>
                                                                <td colspan="2">{{$funding->individuinfo->pob}} , {{$funding->individuinfo->dob}}</td>
                                                                <td colspan="3" class="text-center">
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>Pendidikan Terakhir</th>
                                                                <td colspan="2">{{$funding->individuinfo->educations->level}}</td>
                                                                <td colspan="3" class="text-center">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nama Ibu Kandung</th>
                                                                <td colspan="2">{{$funding->individuinfo->mother_name}}</td>
                                                                <td colspan="3" class="text-center">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Status Pernikahan</th>
                                                                <td colspan="2">{{$funding->individuinfo->married_status}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Status Tempat Tinggal</th>
                                                                <td colspan="2">{{$funding->individuinfo->status_of_residence}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>Nomor NPWP</th>
                                                                <td colspan="2">{{$funding->individuinfo->no_npwp}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>Jumlah Kartu Kredit</th>
                                                                <td colspan="2">{{$funding->individuinfo->total_credit_card}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>No BPJS TK</th>
                                                                <td colspan="2">{{$funding->individuinfo->no_bpjs_tk}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>No BPJS Kesehatan</th>
                                                                <td colspan="2">{{$funding->individuinfo->no_bpjs_kesehatan}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Alamat</th>
                                                                <td colspan="4">{{$funding->individuinfo->full_address}}</td>
                                                            <tr>
                                                                <td></td>
                                                                <td>Provinsi</td>
                                                                <td>{{$funding->individuinfo->provinces ? $funding->individuinfo->provinces->name : ''}}</td>
                                                                <td colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Kabupaten</td>
                                                                <td>{{$funding->individuinfo->cities ? $funding->individuinfo->cities->name : ''}}</td>
                                                                <td colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Kecamatan</td>
                                                                <td>{{$funding->individuinfo->districts ? $funding->individuinfo->districts->name: ''}}</td>
                                                                <td colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Kelurahan</td>
                                                                <td>{{$funding->individuinfo->villagess ? $funding->individuinfo->villagess->name : ''}}</td>
                                                                <td colspan="2" class="text-center"></td>
                                                            </tr>

                                                            <tr>
                                                                <td></td>
                                                                <td>Kode pos</td>
                                                                <td>{{$funding->individuinfo->kodepos}}</td>
                                                                <td colspan="2" class="text-center"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                         <h3>Informasi Kerabat</h3>
                                                         @if($funding->individuinfo->individuemergency)
                                                            <table id="example1" class="table table-bordered table-striped">
                                                                <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Nama Kerabat</td>
                                                                    <td>{{$funding->individuinfo->individuemergency->emergency_name}}</td>
                                                                    <td colspan="2" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Hubungan</td>
                                                                    <td>{{$funding->individuinfo->individuemergency->emergency_siblings}}</td>
                                                                    <td colspan="2" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Nomor Telepon Kerabat</td>
                                                                    <td>{{$funding->individuinfo->individuemergency->emergency_phone_number}}</td>
                                                                    <td colspan="2" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Alamat Kerabat</td>
                                                                    <td>{{$funding->individuinfo->individuemergency->emergency_full_address}}</td>
                                                                    <td colspan="2" class="text-center"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            @endif
                                                            
                                                        <h3>Informasi Bank</h3>
                                                        @if($funding->individuinfo->individubank)
                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <tbody>
                                                            <tr>
                                                                <th>Nama Bank Penerima</th>
                                                                <td colspan="2">{{$funding->individuinfo->individubank->id_bank}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nomor Rekening</th>
                                                                <td colspan="2">{{$funding->individuinfo->individubank->account_number}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nama Rekening</th>
                                                                <td colspan="2">{{$funding->individuinfo->individubank->account_name}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nomor Telepon yang Didaftarkan di Bank</th>
                                                                <td colspan="2">{{$funding->individuinfo->individuemergency->phone_number_register_in_bank}}</td>
                                                                <td colspan="3" class="text-center">
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                    <div class="col-12">
                                                        <table>
                                                            <div class="card-footer text-center">
                                                                <button class="btn btn-danger reject_status_lender" id="reject_status_lender" attr="{{$funding->id}}" data-status="reject">
                                                                    <i class="fa fa-close pr-1"></i>
                                                                    Tolak
                                                                </button>
                                                                <a class="btn btn-secondary" href="#myTabContent" onclick="$('#director-tab').click()">
                                                                    <i class="fa fa-arrow-left"></i>
                                                                    Kembali
                                                                </a>
                                                                <a class="btn btn-primary" href="#myTabContent" onclick="$('#document-tab').click()">
                                                                    Lanjutkan
                                                                    <i class="fa fa-arrow-right"></i>
                                                                </a>
                                                                </div>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="document" role="tabpanel" aria-labelledby="document-tab">

                                                @if($funding->individuinfo->individubusiness != '' || $funding->individuinfo->individubusiness !== null)
                                                <h3>Informasi Usaha</h3>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th>Nama Usaha</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->company_name}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor Telepon Perusahaan</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->phone_number}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Status Badan Hukum Usaha </th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->business_legality->legality_name}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor Izin Usaha</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->no_siup}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor NPWP Usaha</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->no_npwp}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Berdiri</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->date_of_business_birth}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Status Tempat Usaha</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->place_status->place_status_name}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis Bidang Usaha</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->type->industry_sectore}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Detil Jenis Bidang Usaha</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->business_type_detail}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                <h3>Informasi Alamat Tempat Usaha</h3>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th>Provinsi</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->province}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kota</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->city}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kecamatan</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->district}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kelurahan</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->villages}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kode Pos</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->kodepos}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat Lengkap Tempat Usaha </th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->full_address}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                <h3>Informasi Keuangan dan Karyawan</h3>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th>Rata-Rata Penjualan per Bulan</th>
                                                        <td colspan="2">Rp {{number_format($funding->individuinfo->individubusiness->average_sales_revenue_six_month, 0 , '.','.')}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Rata-Rata Pengeluaran per Bulan</th>
                                                        <td colspan="2">Rp {{number_format($funding->individuinfo->individubusiness->average_monthly_expenditure_six_month, 0 , '.','.')}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Rata-Rata Keuntungan per Bulan</th>
                                                        <td colspan="2">Rp {{$funding->individuinfo->individubusiness->average_monthly_profit_six_month ? number_format($funding->individuinfo->individubusiness->average_monthly_profit_six_month, 0 , '.','.') : ''}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total Karyawan Saat Ini</th>
                                                        <td colspan="2">{{$funding->individuinfo->individubusiness->total_employee}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                @else
                                                <h3>Informasi Pekerjaan</h3>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th>Nama Perusahaan</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->company_name}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor Telepon Perusahaan</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->company_phone_number}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>NPWP</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->npwp}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pekerjaan</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->job}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tingkat Pendapatan</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->payment_level}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Penggajian</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->payment_date}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->company_full_address}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                <table id="example1" class="table table-bordered table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th>Provinsi</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->provinces->name}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kota</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->cities->name}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kecamatan</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->districts->name}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kelurahan</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->villagess->name}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kode Pos</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->kodepos}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat</th>
                                                        <td colspan="2">{{$funding->individuinfo->individualjob->company_full_address}}</td>
                                                        <td colspan="3" class="text-center">

                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                @endif

                                                <div class="card-footer text-center">
                                                    <button class="btn btn-danger reject_status_lender" id="reject_status_lender" attr="{{$funding->id}}" data-status="reject">
                                                        <i class="fa fa-close pr-1"></i>
                                                        Tolak
                                                    </button>
                                                    <a class="btn btn-secondary" href="#myTabContent" onclick="$('#business-tab').click()">
                                                        <i class="fa fa-arrow-left"></i>
                                                        Kembali
                                                    </a>
                                                    <a class="btn btn-primary" href="#myTabContent" onclick="$('#commissioner-tab').click()">
                                                        Lanjutkan
                                                        <i class="fa fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
<<<<<<< HEAD
                                            
                                            <div class="tab-pane fade " id="commissioner" role="tabpanel"  aria-labelledby="commissioner-tab">
=======
                                            <div class="tab-pane fade" id="director" role="tabpanel" aria-labelledby="director-tab">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="card card-primary card-outline">
                                                            <div class="card-body box-profile">
                                                                <div class="text-center">
                                                                    <img class="profile-user-img img-fluid"
                                                                        src="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->individuinfo->individufile->identity_image}}">
                                                                </div>
                                                                <h5 class="profile-username text-center pt-5">Swafoto</h5>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="card card-primary card-outline mt-4">
                                                            <div class="card-body box-profile">
                                                                <div class="text-center">
                                                                    <img class="profile-user-img img-fluid"
                                                                        src="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->individuinfo->individufile->identity_image}}">
                                                                </div>
                                                                <h5 class="profile-username text-center pt-5">Foto KTP</h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <nav aria-label="breadcrumb">
                                                            <ol class="breadcrumb">
                                                                <li class="breadcrumb-item text-bold">Verifikasi Data EKYC dan Komisaris Utama</li>
                                                            </ol>
                                                        </nav>
                                                        
                                                            <table id="example1" class="table table-bordered table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>EKYC Status</th>
                                                                    <td colspan="2">{{$eqcy ? 'verified' : 'Not verified'}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>EKYC Log Status</th>
                                                                    <td colspan="2"><button class="btn btn-primary log-commissioner-modal">lihat</button></td>
                                                                </tr>
                                                                </thead>
                                                            </table>
                                                        
                                                        <table id="example1" class="table table-bordered table-striped">
                                                                <tr>
                                                                    <th>No KTP</th>
                                                                    <td colspan="2">{{$funding->individuinfo->identity_number}}</td>
                                                                    <td colspan="3" class="text-center">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <th>Nama Lengkap</th>
                                                                    <td colspan="2">{{$funding->individuinfo->full_name}}</td>
                                                                    <td colspan="3" class="text-center">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <th>Nomor Telepon</th>
                                                                    <td colspan="2">{{$funding->phone_number_verified}}</td>
                                                                    <td colspan="3" class="text-center">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td colspan="2">{{$funding->individuinfo->email}}</td>
                                                                    <td colspan="3" class="text-center">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Jenis Kelamin</th>
                                                                    <td colspan="2">{{$funding->individuinfo->gender}}</td>
                                                                    <td colspan="3" class="text-center">
                                                                        
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <th>Tempat Tanggal Lahir</th>
                                                                    <td colspan="2">{{$funding->individuinfo->pob}} , {{$funding->individuinfo->dob}}</td>
                                                                    <td colspan="3" class="text-center">
                                                                    </td>
                                                                </tr>
                                                            <thead>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <table>
                                                                <div class="card-footer text-center">
                                                                    <button class="btn btn-danger reject_status_lender" id="reject_status_lender" attr="{{$funding->id}}" data-status="reject">
                                                                        <i class="fa fa-close pr-1"></i>
                                                                        Tolak
                                                                    </button>
                                                                    <a class="btn btn-secondary" href="#myTabContent" onclick="$('#business-tab').click()">
                                                                        <i class="fa fa-arrow-left"></i>
                                                                        Kembali
                                                                    </a>
                                                                    <a class="btn btn-primary" href="#myTabContent" onclick="$('#commissioner-tab').click()">
                                                                        Lanjutkan
                                                                        <i class="fa fa-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </table>
                                                        </div>
                                                    </div>
                                            </div> 
                                            <div class="tab-pane fade active show" id="commissioner" role="tabpanel"  aria-labelledby="commissioner-tab">
>>>>>>> b914d832e041b2a3d2e153e11c937d7c4bb61140
                                                    <div class="row">
                                                    @if($funding->individuinfo->individufile != '' || $funding->individuinfo->individufile !== null)
                                                        <h3>Unggah Berkas Pribadi</h3>
                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <tbody>
                                                            <tr>
                                                                <th>KTP</th>
                                                                <td colspan="2"><img style="width:35% !important" src="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->individuinfo->individufile->identity_image}}"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Swafoto</th>
                                                                <td colspan="2"><img style="width:35% !important" src="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->individuinfo->individufile->self_image}}"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>NPWP</th>
                                                                <td colspan="2"><img style="width:35% !important" src="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->individuinfo->individufile->npwp_image}}"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <h3>Unggah Berkas Pekerjaan</h3>
                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <tbody>
                                                            <tr>
                                                                <th>NPWP Usaha</th>
                                                                <td colspan="2"><img style="width:35% !important" src="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->individuinfo->individufile->business_npwp_image}}"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tempat Usaha</th>
                                                                <td colspan="2"><img style="width:35% !important" src="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->individuinfo->individufile->business_place_image}}"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Surat Izin Usaha atau Sejenisnya</th>
                                                                <td colspan="2"><img style="width:35% !important" src="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->individuinfo->individufile->license_business_document_image}}"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Bukti Kepemilikan / Kontrak Tempat Usaha</th>
                                                                <td colspan="2"><img style="width:35% !important" src="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->individuinfo->individufile->proof_of_ownership_image}}"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Dokumen Usaha</th>
                                                                <td colspan="2"><img style="width:35% !important" src="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->individuinfo->individufile->document_image}}"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Aktifitas Usaha </th>
                                                                <td colspan="2"><img style="width:35% !important" src="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->individuinfo->individufile->business_activity_image}}"></td>
                                                            </tr>
                                                            </tbody>
                                                     </table>
                                                    @endif
                                                    {{-- <textarea class="form-control" style="resize:none;" name="reason" id="reson"></textarea> --}}
                                                </div>
                                                    
                                                <div class="card-footer text-center">
                                                    <button class="btn btn-danger reject_status_lender" id="reject_status_lender" attr="{{$funding->id}}" data-status="reject">
                                                        <i class="fa fa-close pr-1"></i>
                                                        Tolak
                                                    </button>
                                                    <a class="btn btn-secondary" href="#myTabContent" onclick="$('#document-tab').click()">
                                                        <i class="fa fa-arrow-left"></i>
                                                        Kembali
                                                    </a>
                                                    <a class="btn btn-primary" attr="{{$funding->id}}" href="javascript:void(0)" id="approve_individual_lender">
                                                        Setujui
                                                        <i class="fa fa-check pr-1"></i>
                                                    </a>
                                                </div>
                                               
                                            </div>


                                            <div class="tab-pane fade " id="vp" role="tabpanel"  aria-labelledby="vbu-tab">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <h2>Verifikasi Telepon</h2>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <br />
                                                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                                                    <div class="item form-group">
                                                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Telepon Darurat
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 ">
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control" value="{{$funding->phone_number_verified}}">
                                                                                <span class="input-group-btn">
                                                                                    <button type="button" class="btn btn-primary"><i class="fa fa-phone"></i></button>
                                                                                     <button type="button" class="btn btn-danger"><i class="fa fa-microphone"></i></button>
                                                                                </span>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <button type="button" id="btn_desc_add_1" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                                                    <table class="table table-striped" id="table_description_crm_3">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Tanggal Tindakan</th>
                                                                            <th>Status Telepon</th>
                                                                            <th>Deskripsi</th>
                                                                            <th>Rekaman</th>
                                                                            <th>Nama Agent</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
{{--                                                                        @foreach($phone_description_emergency_contact as $key => $val)--}}
{{--                                                                            <tr>--}}
{{--                                                                                <td class="number">{{$loop->iteration}}</td>--}}
{{--                                                                                <td>{{$val->created_at}}</td>--}}
{{--                                                                                <td>{{Utils::convert_status_phone($val->phone_status)}}</td>--}}
{{--                                                                                <td>{{$val->phone_description}}</td>--}}
{{--                                                                                @if($val->phone_status == '5')--}}
{{--                                                                                    <td><button type="button" class="btn btn-success"><i class="fa fa-headphones"></i></button></td>--}}
{{--                                                                                @else--}}
{{--                                                                                    <td>-</td>--}}
{{--                                                                                @endif--}}
{{--                                                                                <td>{{$val->updated_by}}</td>--}}
{{--                                                                            </tr>--}}
{{--                                                                        @endforeach--}}
                                                                        </tbody>
                                                                    </table>



                                                                    <div class="row">
                                                                        <div class="x_panel">
                                                                            <div class="x_title">
                                                                                <h2>Penyamaan Data</h2>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <div class="x_content">
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col">

                                                                                                <div class="row">
                                                                                                    <div class="col">
                                                                                                        <p>Nama</p>
                                                                                                    </div>
                                                                                                    <div class="col">
                                                                                                        <p>{{$funding->individuinfo->full_name}}</p>
                                                                                                    </div>

                                                                                                    <div class="col">
                                                                                                        <label><input type="radio" name="result" value="1" class="flat"> Sama</label>
                                                                                                    </div>
                                                                                                    <div class="col">
                                                                                                        <label><input type="radio" name="result"  value="0" class="flat"> Beda</label>
                                                                                                    </div>
                                                                                                    <div class="col">
                                                                                                        <input type="text" placeholder="keterangan" id="description_" name="description_" class="form-control ">
                                                                                                    </div>
                                                                                                </div>

                                                                                            <div class="row">
                                                                                                <div class="col">
                                                                                                    <p>Nomor KTP</p>
                                                                                                </div>
                                                                                                <div class="col">
                                                                                                    <p>{{$funding->individuinfo->identity_number}}</p>
                                                                                                </div>

                                                                                                <div class="col">
                                                                                                    <label><input type="radio" name="result" value="1" class="flat"> Sama</label>
                                                                                                </div>
                                                                                                <div class="col">
                                                                                                    <label><input type="radio" name="result"  value="0" class="flat"> Beda</label>
                                                                                                </div>
                                                                                                <div class="col">
                                                                                                    <input type="text" placeholder="keterangan" id="description_" name="description_" class="form-control ">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row">
                                                                                                <div class="col">
                                                                                                    <p>Alamat Domisili</p>
                                                                                                </div>
                                                                                                <div class="col">
                                                                                                    <p>{{$funding->individuinfo->full_address}}</p>

                                                                                                </div>

                                                                                                <div class="col">
                                                                                                    <label><input type="radio" name="result" value="1" class="flat"> Sama</label>
                                                                                                </div>
                                                                                                <div class="col">
                                                                                                    <label><input type="radio" name="result"  value="0" class="flat"> Beda</label>
                                                                                                </div>
                                                                                                <div class="col">
                                                                                                    <input type="text" placeholder="keterangan" id="description_" name="description_" class="form-control ">
                                                                                                </div>
                                                                                            </div>


                                                                                        <!--form end-->
                                                                                        </div>
                                                                                        <!---->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ln_solid"></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <button class="btn btn-danger reject_status_lender" id="reject_status_lender" attr="{{$funding->id}}" data-status="reject">
                                                        <i class="fa fa-close pr-1"></i>
                                                        Tolak
                                                    </button>
                                                    <a class="btn btn-secondary" href="#myTabContent" onclick="$('#document-tab').click()">
                                                        <i class="fa fa-arrow-left"></i>
                                                        Kembali
                                                    </a>
                                                    <a class="btn btn-primary" attr="{{$funding->id}}" href="javascript:void(0)" id="approve_individual_lender">
                                                        Setujui
                                                        <i class="fa fa-check pr-1"></i>
                                                    </a>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="modal_add_crm_description" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog  modal-lg ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Tambah deskripsi</h4>
                    </div>
                    <form id="add_crm_description_form" name="contact" role="form">
                        <input type="hidden" name="id_status_phone" id="id_status_phone">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Status Telepon</label>
                                <select class="form-control" name="phone_status" id="phone_status">
                                    <option value="">--Pilih salah satu--</option>
                                    <option value="1">Tidak Aktif</option>
                                    <option value="2">Tidak ditempat</option>
                                    <option value="3">Nomor Salah</option>
                                    <option value="4">Tidak ditempat</option>
                                    <option value="5">Tersambung</option>
                                    <option value="6">Pemohon meminta reschedule telepon</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message">Description</label>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>

                        </div>
                        <div class="x_content bs-example-popovers">
                            <div id="alert-message" class="alert" role="alert">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <input type="submit" class="btn btn-success" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="{{ asset('/js/lender_verification.js') }}"></script>
<script>
$('#check_ekyc_button').click(function(){

    var dialog = bootbox.dialog({
        title: 'Rincian EKYC',
        message: '<p>'+ $("#log_messages_ekyc").html()+'</p>'
    });
});
</script>
@endsection