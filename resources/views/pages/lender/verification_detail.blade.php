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
                                        <h5 class="card-title text-bold">Verifikasi Data dan EKYC Pendana Badan Hukum</h5>
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
{{--                                                    <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business">Informasi Usaha</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="nav-item">--}}
{{--                                                    <a class="nav-link" id="document-tab" data-toggle="tab" href="#document" role="tab" aria-controls="document" >Bank/Dokumen Usaha</a>--}}
{{--                                                </li>--}}
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="commissioner-tab" data-toggle="tab" href="#commissioner" role="tab" aria-controls="commissioner">EKYC Direktur Utama</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="director-tab" data-toggle="tab" href="#director" role="tab" aria-controls="director" >EKYC Komisaris Utama</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="vbu-tab" data-toggle="tab" href="#vbu" role="tab" aria-controls="vbu">Verifikasi Perusahaan</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                                                <div class="row">
                                                    <div class="x_content">
                                                        <h1>Informasi Perusahaan</h1>
                                                        @if($funding->business != null)
                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <tbody>
                                                            <tr>
                                                                <th>Nama Usaha</th>
                                                                <td colspan="2">{{$funding->business->business_name}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nomor NPWP</th>
                                                                <td colspan="2">{{$funding->business->npwp}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email</th>
                                                                <td colspan="2">{{$funding->business->email}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nomor Telepon</th>
                                                                <td colspan="2">{{$funding->business->phone_number}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Website</th>
                                                                <td colspan="2">{{$funding->business->website}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Alamat</th>
                                                                <td colspan="4">{{$funding->business->address}}</td>
                                                            <tr>
                                                                <td></td>
                                                                <td>Provinsi</td>
                                                                <td>{{$funding->business->province ? $funding->business->province->name : ''}}</td>
                                                                <td colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Kabupaten</td>
                                                                <td>{{$funding->business->regency ? $funding->business->regency->name : ''}}</td>
                                                                <td colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Kecamatan</td>
                                                                <td>{{$funding->business->district ? $funding->business->district->name : ''}}</td>
                                                                <td colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Kelurahan</td>
                                                                <td>{{$funding->business->village ? $funding->business->village->name : ''}}</td>
                                                                <td colspan="2" class="text-center"></td>
                                                            </tr>
                                                            
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                         <h3>Informasi Sertifikat Perusahaan</h3>
                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <tbody>
                                                            <tr>
                                                                <th>Nomor Induk Berusaha (NIB)</th>
                                                                <td colspan="2">{{$funding->business->induk_berusaha_number}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nomor pengesahaan KEMENKUMHAM AHU</th>
                                                                <td colspan="2">{{$funding->business->tdp_number}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Akta pendirian & tanggal</th>
                                                                <td colspan="2">{{$funding->business->akta_pendirian}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nomor pengesahaan KEMENKUMHAM AHU</th>
                                                                <td colspan="2">{{$funding->business->phone_number}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Akta perubahan terakhir & tanggal</th>
                                                                <td colspan="2">{{$funding->business->letter_register_pengesahan_kemenkunham}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nomor pengesahaan KEMENKUMHAM AHU</th>
                                                                <td colspan="2">{{$funding->business->letter_change_pengesahan_kemenkunham}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <h3>Informasi Aset</h3>
                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <tbody>
                                                            <tr>
                                                                <th>Jumlah Setoran Modal</th>
                                                                <td colspan="2">Rp {{number_format($funding->business->amount_setoran_modal , 0 , '.','.')}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nilai Ekuitas</th>
                                                                <td colspan="2">Rp {{number_format($funding->business->equity_value, 0 , '.','.')}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Wajib Pajak</th>
                                                                <td colspan="2">{{ $funding->business->taxpayer}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nilai Aset</th>
                                                                <td colspan="2">Rp {{number_format($funding->business->asset_value, 0 , '.','.')}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Kewajiban Jangka Pendek</th>
                                                                <td colspan="2">Rp {{number_format($funding->business->short_term_obligations, 0 , '.','.')}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pendapatan Tahun berjalan sampai dengan saat ini</th>
                                                                <td colspan="2">Rp {{number_format($funding->business->annual_income, 0 , '.','.')}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Beban Operasional tahun berjalan sampai dengan saat ini</th>
                                                                <td colspan="2">Rp {{number_format($funding->business->operating_expenses, 0 , '.','.')}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Laba - Rugi periode Tahun berjalan sampai dengan saat ini</th>
                                                                <td colspan="2">Rp {{number_format($funding->business->profit_and_loss, 0 , '.','.')}}</td>
                                                                <td colspan="3" class="text-center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-12">
                                                        <table>
                                                            <div class="card-footer text-center">
                                                                <button class="btn btn-danger reject_status_lender" id="reject_status_lender" attr="{{$funding->id}}" data-status="reject">
                                                                    <i class="fa fa-close pr-1"></i>
                                                                    Tolak
                                                                </button>
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
                                                <h3>Informasi Bank</h3>
                                                @if($funding->rekening != '' || $funding->rekening !== null)
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th>Nama Bank Penerima</th>
                                                        <td colspan="2">{{$funding->rekening->bank}}</td>
                                                        <td colspan="3" class="text-center">
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor Rekening</th>
                                                        <td colspan="2">{{$funding->rekening->rekening_number}}</td>
                                                        <td colspan="3" class="text-center">
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama Rekening</th>
                                                        <td colspan="2">{{$funding->rekening->rekening_name}}</td>
                                                        <td colspan="3" class="text-center">
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor Rekening Dana Lender</th>
                                                        <td colspan="2">{{$funding->rekening->rdl_number}}</td>
                                                        <td colspan="3" class="text-center">
                                                            
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                @endif
                                                <h3>Dokumen</h3>
                                                <div class="row">
                                                @if($funding->document != '' || $funding->document !== null)
                                                <table id="example1" class="table table-bordered table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <th>NPWP</th>
                                                            <td colspan="2"><img style="width:35% !important" src="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->document->npwp}}"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Dokumen NIB</th>
                                                            <td colspan="2"><a target="_blank" href="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->document->nib}}">view</a></td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th>Dokumen TDP</th>
                                                            <td colspan="2"><a target="_blank" href="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->document->tdp}}">view</a></td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th>Dokumen kta Pendirian & Pengesahaan AHU</th>
                                                            <td colspan="2"><a target="_blank" href="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->document->akta_pendirian}}">view</a></td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th>Dokumen akta Perubahan Terakhir & Pengesahaan AHU</th>
                                                            <td colspan="2"><a target="_blank" href="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->document->akta_perubahan}}">view</a></td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th>Dokumen Struktur Organisasi Perusahaan </th>
                                                            <td colspan="4"><a target="_blank" href="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->document->structure_organization}}">view</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Neraca </th>
                                                            <td colspan="4"><a target="_blank" href="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->document->balance_sheet}}">view</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Dokumen Laporan Arus Kas </th>
                                                            <td colspan="4"><a target="_blank" href="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->document->cash_flow_statement}}">view</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Laporan Laba Rugi </th>
                                                            <td colspan="4"><a target="_blank" href="http://127.0.0.1:8000/upload/lender/file/attachment/{{$funding->document->income_statement}}">view</a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    @endif
                                                </div>
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
                                            <div class="tab-pane fade active show " id="commissioner" role="tabpanel"  aria-labelledby="commissioner-tab">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <nav aria-label="breadcrumb">
                                                            <ol class="breadcrumb">
                                                                <li class="breadcrumb-item text-bold">Verifikasi Data EKYC dan Direktur Utama</li>
                                                            </ol>
                                                        </nav>

                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <thead>
                                                            <tr>
                                                                <th>Status akun digisign</th>
                                                                <td colspan="2">{{$funding->eqycdata ? $funding->eqycdata->status_activation : '' }}</td>
                                                            </tr>
{{--                                                            <tr>--}}
{{--                                                                <th>Email</th>--}}
{{--                                                                <td colspan="2">{{$funding->eqycdata ? $funding->eqycdata->email : '' }}</td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Phone</th>--}}
{{--                                                                <td colspan="2">{{$funding->eqycdata ? $funding->eqycdata->phone_number : '' }}</td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Nik</th>--}}
{{--                                                                <td colspan="2">{{$funding->eqycdata ? $funding->eqycdata->nik : '' }}</td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Last Updated</th>--}}
{{--                                                                <td colspan="2">{{$funding->eqycdata ? $funding->eqycdata->updated_at : '' }}</td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Agreement File</th>--}}
{{--                                                                <td colspan="2">{{$funding->agreementfile ? $funding->agreementfile->document_id : '' }}</td>--}}
{{--                                                            </tr>--}}
                                                            <tr>
                                                                <th>EKYC Log Status</th>
                                                                <td colspan="2"><button class="btn btn-primary log-director-modal" id="digisign_director_logs">lihat</button></td>
                                                            </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>

                                                @if($funding->directors)
                                                    @foreach($funding->directors as $index => $item)
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="card card-primary card-outline">
                                                                <div class="card-body box-profile">
                                                                    <div class="text-center">
                                                                        <img class="profile-user-img img-fluid"
                                                                            src="https://siapdanain.id/upload/lender/file/{{$item->self_photo}}">
                                                                    </div>
                                                                    <h5 class="profile-username text-center pt-5">Foto Direktur </h5>
                                                                </div>
                                                            </div>
                                                            <div class="card card-primary card-outline mt-4">
                                                                <div class="card-body box-profile">
                                                                    <div class="text-center">
                                                                        <img class="profile-user-img img-fluid"
                                                                            src="https://siapdanain.id/upload/lender/file/{{$item->identity_photo}}">
                                                                    </div>
                                                                    <h5 class="profile-username text-center pt-5">Foto KTP</h5>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            
                                                            <table id="example1" class="table table-bordered table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td colspan="2">{{$item->director_name}}</td>
                                                                    <td colspan="2" class="text-center"></td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th>No KTP</th>
                                                                    <td colspan="2">{{$item->director_nik}}</td>
                                                                    <td colspan="3" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Nomor NPWP</th>
                                                                    <td colspan="2">{{$item->director_npwp}}</td>
                                                                    <td colspan="3" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tanggal Lahir</th>
                                                                    <td colspan="2">{{$item->director_dob}}</td>
                                                                    <td colspan="3" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td colspan="2">{{$item->director_email}}</td>
                                                                    <td colspan="3" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Nomor Telepon</th>
                                                                    <td colspan="2">{{$item->director_phone_number}}</td>
                                                                    <td colspan="3" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tanggal Bergabung</th>
                                                                    <td colspan="2">{{$item->created_at}}</td>
                                                                    <td colspan="2" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Alamat</th>
                                                                    <td colspan="4">{{$item->address}}</td>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Provinsi</td>
                                                                    <td>{{$item->province->name}}</td>
                                                                    <td colspan="2"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Kabupaten</td>
                                                                    <td>{{$item->regency->name}}</td>
                                                                    <td colspan="2"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Kecamatan</td>
                                                                    <td>{{$item->district->name}}</td>
                                                                    <td colspan="2"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Kelurahan</td>
                                                                    <td>{{$item->village->name}}</td>
                                                                    <td colspan="2" class="text-center"></td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <th>Alamat Lengkap</th>
                                                                    <td colspan="2">
                                                                        Jl.Jendral Sudirman No.20
                                                                    </td>
                                                                    <td colspan="2" class="text-center"></td>
                                                                </tr> -->
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    <div class="card-footer text-center">
                                                        <button class="btn btn-danger reject_status_lender" id="reject_status_lender" attr="{{$funding->id}}" data-status="reject">
                                                            <i class="fa fa-close pr-1"></i>
                                                            Tolak
                                                        </button>
                                                        <a class="btn btn-secondary" href="#myTabContent" onclick="$('#document-tab').click()">
                                                            <i class="fa fa-arrow-left"></i>
                                                            Kembali
                                                        </a>
                                                        <a class="btn btn-primary" href="#myTabContent" onclick="$('#director-tab').click()">
                                                            Lanjutkan
                                                            <i class="fa fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="tab-pane fade" id="director" role="tabpanel" aria-labelledby="director-tab">
                                                @if($funding->commissioners)
                                                    @foreach($funding->commissioners as $item)
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <!-- Profile Image -->
                                                                <div class="card card-primary card-outline">
                                                                    <div class="card-body box-profile">
                                                                        <div class="text-center">
                                                                            <img class="profile-user-img img-fluid"
                                                                                src="https://siapdanain.id/upload/lender/file/{{$item->self_photo}}">
                                                                        </div>
                                                                        <h5 class="profile-username text-center pt-5">Foto Komisaris Utama</h5>
                                                                    </div>
                                                                    <!-- /.card-body -->
                                                                </div>
                                                                <!-- /.card -->
                                                                <!-- Profile Image -->
                                                                <div class="card card-primary card-outline mt-4">
                                                                    <div class="card-body box-profile">
                                                                        <div class="text-center">
                                                                            <img class="profile-user-img img-fluid"
                                                                                src="https://siapdanain.id/upload/lender/file/{{$item->identity_photo}}">
                                                                        </div>
                                                                        <h5 class="profile-username text-center pt-5">Foto KTP</h5>

                                                                    </div>
                                                                    <!-- /.card-body -->
                                                                </div>
                                                                <!-- /.card -->
                                                            </div>
                                                            <div class="col-7">
                                                                <nav aria-label="breadcrumb">
                                                                    <ol class="breadcrumb">
                                                                        <li class="breadcrumb-item text-bold">Verifikasi Data EKYC dan Komisaris Utama</li>
                                                                    </ol>
                                                                </nav>
                                                                
                                                                <table id="example1" class="table table-bordered table-striped">
                                                                    <thead>
                                                                    {{-- <tr>
                                                                        <th>EKYC Status</th>
                                                                        <td colspan="2">{{$item->ekyc_commissioner->status == 'verified' ? $item->ekyc_commissioner->status : ''}}</td>
                                                                    </tr> --}}
                                                                    <tr>
                                                                        <th>EKYC Log Status</th>
                                                                        <td colspan="2"><button class="btn btn-primary log-director-modal" id="digisign_director_logs_commissioner">lihat</button></td>
                                                                    </tr>
                                                                    </thead>
                                                                </table>
                                                                
                                                                <table id="example1" class="table table-bordered table-striped">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Nama</th>
                                                                        <td colspan="2">{{$item->commissioner_name}}</td>
                                                                        <td colspan="2" class="text-center">
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>NIK</th>
                                                                        <td colspan="2">{{$item->commissioner_nik}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Nomor NPWP</th>
                                                                        <td colspan="2">{{$item->commissioner_npwp}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Tanggal Lahir</th>
                                                                        <td colspan="2">{{$item->commissioner_dob}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Email</th>
                                                                        <td colspan="2">{{$item->commissioner_email}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Nomor Telepon</th>
                                                                        <td colspan="2">{{$item->commissioner_phone_number}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Tanggal Bergabung</th>
                                                                        <td colspan="2">{{$item->created_at}}</td>
                                                                        <td colspan="2" class="text-center">
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Alamat</th>
                                                                        <td colspan="4">{{$item->address}}</td>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Provinsi</td>
                                                                        <td>{{$item->province->name}}</td>
                                                                        <td colspan="2"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Kabupaten</td>
                                                                        <td>{{$item->regency->name}}</td>
                                                                        <td colspan="2"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Kecamatan</td>
                                                                        <td>{{$item->district->name}}</td>
                                                                        <td colspan="2"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Kelurahan</td>
                                                                        <td>{{$item->village->name}}</td>
                                                                        <td colspan="2" class="text-center"></td>
                                                                    </tr>
                                                                    </tr>
                                                                    
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <table>
                                                                <div class="card-footer text-center">
                                                                    <button class="btn btn-danger reject_status_lender" id="reject_status_lender" attr="{{$funding->id}}" data-status="reject">
                                                                        <i class="fa fa-close pr-1"></i>
                                                                        Tolak
                                                                    </button>
                                                                    <a class="btn btn-secondary" href="#myTabContent" onclick="$('#commissioner-tab').click()">
                                                                        <i class="fa fa-arrow-left"></i>
                                                                        Kembali
                                                                    </a>
                                                                    <a class="btn btn-primary" href="#myTabContent" onclick="$('#vbu-tab').click()">
                                                                        Lanjutkan
                                                                        <i class="fa fa-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </table>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="tab-pane fade " id="vbu" role="tabpanel"  aria-labelledby="vbu-tab">
                                                <div class="row">
                                                    <h3>PENGECEKAN INFORMASI PERUSAHAAN DENGAN AKTA PENDIRIAN</h3>
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <th>Akta Pendirian</th>
                                                            <td colspan="3" style="vertical-align:middle"><a href="https://siapdanain.id/upload/lender/file/attachment/{{$funding->document->tdp}}" target="_blank">Lihat</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nomor dan Tanggal Akta Pendirian</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->akta_pendirian}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_1" id="akta_pendirian_1">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_1" id="akta_pendirian_1">Beda</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Nama Perusahaan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->business_name}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="nama_perusahaan_2" id="nama_perusahaan_2">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="nama_perusahaan_2" id="nama_perusahaan_2">Beda</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Alamat Perusahaan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->address}}<br/>
                                                                Propinsi : {{$funding->business->id_province ? $funding->business->province->name : '-'}}<br/>
                                                                Kabupaten : {{$funding->business->id_regency ? $funding->business->regency->name : '-'}}<br/>
                                                                Kecamatan : {{$funding->business->id_district ? $funding->business->district->name : '-'}}<br/>
                                                                Kelurahan : {{$funding->business->id_village ? $funding->business->village->name : '-'}}<br/>
                                                            </td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="alamat_perusahaan_3" id="alamat_perusahaan_3">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="alamat_perusahaan_3" id="alamat_perusahaan_3">Beda</label></td>
                                                        </tr>


                                                        </tbody>
                                                    </table>
                                                </div>


                                                <div class="row">
                                                    <h4>PENGECEKAN INFORMASI PERUSAHAAN DENGAN PENGESAHAN KEMENKUNHAM AKTA PENDIRIAN</h4>
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <th>Dokumen Pengesahan Kemenkumham</th>
                                                            <td colspan="3" style="vertical-align:middle"><a href="https://siapdanain.id/upload/lender/file/attachment/{{$funding->document->akta_pendirian}}" target="_blank">Lihat</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nomor pengesahaan Kemenkumham</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->letter_register_pengesahan_kemenkunham}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_4" id="akta_pendirian_4">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_4" id="akta_pendirian_4">Beda</label></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Perusahaan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->business_name}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_5" id="akta_pendirian_5">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_5" id="akta_pendirian_5">Beda</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Alamat Perusahaan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->address}}<br/>
                                                                Propinsi : {{$funding->business->id_province ? $funding->business->province->name : '-'}}<br/>
                                                                Kabupaten : {{$funding->business->id_regency ? $funding->business->regency->name : '-'}}<br/>
                                                                Kecamatan : {{$funding->business->id_district ? $funding->business->district->name : '-'}}<br/>
                                                                Kelurahan : {{$funding->business->id_village ? $funding->business->village->name : '-'}}<br/>
                                                            </td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_6" id="akta_pendirian_6">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_6" id="akta_pendirian_6">Beda</label></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>


                                                <div class="row">
                                                    <h4>PENGECEKAN INFORMASI PERUSAHAAN DENGAN NOMOR INDUK BERUSAHA</h4>
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <th>Dokumen Nomor Induk Berusaha (NIB)</th>
                                                            <td colspan="3" style="vertical-align:middle"><a href="https://siapdanain.id/upload/lender/file/attachment/{{$funding->document->nib}}" target="_blank">Lihat</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nomor Induk Berusaha</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->induk_berusaha_number}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_7" id="akta_pendirian_7">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_7" id="akta_pendirian_7">Beda</label></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Perusahaan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->business_name}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_8" id="akta_pendirian_8">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_8" id="akta_pendirian_8">Beda</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Alamat Perusahaan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->address}}<br/>
                                                                Propinsi : {{$funding->business->id_province ? $funding->business->province->name : '-'}}<br/>
                                                                Kabupaten : {{$funding->business->id_regency ? $funding->business->regency->name : '-'}}<br/>
                                                                Kecamatan : {{$funding->business->id_district ? $funding->business->district->name : '-'}}<br/>
                                                                Kelurahan : {{$funding->business->id_village ? $funding->business->village->name : '-'}}<br/>
                                                            </td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_9" id="akta_pendirian_9">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_9" id="akta_pendirian_9">Beda</label></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>


                                                <div class="row">
                                                    <h3>PENGECEKAN INFORMASI PERUSAHAAN DENGAN AKTA PERUBAHAN TERAKHIR</h3>
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <th>Akta Pendirian</th>
                                                            <td colspan="3" style="vertical-align:middle"><a href="https://siapdanain.id/upload/lender/file/attachment/{{$funding->document->akta_perubahan}}" target="_blank">Lihat</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nomor dan Tanggal Akta Pendirian</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->last_akta_perubahan ? $funding->business->last_akta_perubahan :'' }}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_10" id="akta_pendirian_10">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_10" id="akta_pendirian_10">Beda</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Nama Perusahaan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->business_name }}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_11" id="akta_pendirian_11">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_11" id="akta_pendirian_11">Beda</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Alamat Perusahaan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->address}}<br/>
                                                                Propinsi : {{$funding->business->id_province ? $funding->business->province->name : '-'}}<br/>
                                                                Kabupaten : {{$funding->business->id_regency ? $funding->business->regency->name : '-'}}<br/>
                                                                Kecamatan : {{$funding->business->id_district ? $funding->business->district->name : '-'}}<br/>
                                                                Kelurahan : {{$funding->business->id_village ? $funding->business->village->name : '-'}}<br/>
                                                            </td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_12" id="akta_pendirian_12">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_12" id="akta_pendirian_12">Beda</label></td>
                                                        </tr>


                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="row">
                                                    <h4>PENGECEKAN INFORMASI PERUSAHAAN DENGAN PENGESAHAN KEMENKUNHAM AKTA PERUBAHAN TERAKHIR</h4>
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <th>Dokumen Pengesahan Kemenkumham</th>
                                                            <td colspan="3" style="vertical-align:middle"><a href="https://siapdanain.id/upload/lender/file/attachment/{{$funding->document->structure_organization}}" target="_blank">Lihat</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nomor pengesahaan Kemenkumham</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->letter_change_pengesahan_kemenkunham ? $funding->business->letter_change_pengesahan_kemenkunham : ''}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_13" id="akta_pendirian_13">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_13" id="akta_pendirian_13">Beda</label></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Perusahaan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->business_name}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_14" id="akta_pendirian_14">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_14" id="akta_pendirian_14">Beda</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Alamat Perusahaan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->address}}<br/>
                                                                Propinsi : {{$funding->business->id_province ? $funding->business->province->name : '-'}}<br/>
                                                                Kabupaten : {{$funding->business->id_regency ? $funding->business->regency->name : '-'}}<br/>
                                                                Kecamatan : {{$funding->business->id_district ? $funding->business->district->name : '-'}}<br/>
                                                                Kelurahan : {{$funding->business->id_village ? $funding->business->village->name : '-'}}<br/>
                                                            </td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_15" id="akta_pendirian_15">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_15" id="akta_pendirian_15">Beda</label></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>


                                                <div class="row">
                                                    <h3>ANALISA BERDASARKAN LAPORAN KEUANGAN</h3>
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <th>Laporan neraca Keuangan</th>
                                                            <td colspan="3" style="vertical-align:middle"><a href="https://siapdanain.id/upload/lender/file/attachment/{{$funding->document->balance_sheet}}" target="_blank">Lihat</a></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Laporan Laba Rugi</th>
                                                            <td colspan="3" style="vertical-align:middle"><a href="https://siapdanain.id/upload/lender/file/attachment/{{$funding->document->income_statement}}" target="_blank">Lihat</a></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Laporan Arus Kas</th>
                                                            <td colspan="3" style="vertical-align:middle"><a href="https://siapdanain.id/upload/lender/file/attachment/{{$funding->document->cash_flow_statement}}" target="_blank">Lihat</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total Setoran Modal</th>
                                                            <td colspan="1" style="vertical-align:middle">{{Utils::convert_currency($funding->business->amount_setoran_modal)}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_16" id="akta_pendirian_16">Rekomendasi</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_16" id="akta_pendirian_16">Belum direkomendasi</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Nilai Aset</th>
                                                            <td colspan="1" style="vertical-align:middle">{{Utils::convert_currency($funding->business->asset_value)}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_17" id="akta_pendirian_17">Rekomendasi</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_17" id="akta_pendirian_17">Belum direkomendasi</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Nilai Ekuitas</th>
                                                            <td colspan="1" style="vertical-align:middle">{{Utils::convert_currency($funding->business->equity_value)}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_18" id="akta_pendirian_18">Rekomendasi</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_18" id="akta_pendirian_18">Belum direkomendasi</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Kewajiban Jangka Pendek</th>
                                                            <td colspan="1" style="vertical-align:middle">{{Utils::convert_currency($funding->business->short_term_obligations)}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_19" id="akta_pendirian_19">Rekomendasi</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_19" id="akta_pendirian_19">Belum direkomendasi</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Pendapatan Tahun Berjalan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{Utils::convert_currency($funding->business->annual_income)}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_20" id="akta_pendirian_20">Rekomendasi</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_20" id="akta_pendirian_20">Belum direkomendasi</label></td>
                                                        </tr>


                                                        {{--TEST--}}

                                                        <tr>
                                                            <th>Dokumen Kartu NPWP</th>
                                                            <td colspan="3" style="vertical-align:middle"><a href="https://siapdanain.id/upload/lender/file/attachment/{{$funding->document->npwp}}" target="_blank">Lihat</a></td>
                                                        </tr>

                                                        <tr>
                                                            <th>status Pajak</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->taxpayer}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_21" id="akta_pendirian_21">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_21" id="akta_pendirian_21">Beda</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Nomor NPWP</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->npwp}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_22" id="akta_pendirian_22">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_22" id="akta_pendirian_22">Beda</label></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Perusahaan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->business_name}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_23" id="akta_pendirian_23">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_23" id="akta_pendirian_23">Beda</label></td>
                                                        </tr>

                                                        <tr>
                                                            <th>Alamat Perusahaan</th>
                                                            <td colspan="1" style="vertical-align:middle">{{$funding->business->address}}<br/>
                                                                Propinsi : {{$funding->business->id_province ? $funding->business->province->name : '-'}}<br/>
                                                                Kabupaten : {{$funding->business->id_regency ? $funding->business->regency->name : '-'}}<br/>
                                                                Kecamatan : {{$funding->business->id_district ? $funding->business->district->name : '-'}}<br/>
                                                                Kelurahan : {{$funding->business->id_village ? $funding->business->village->name : '-'}}<br/>
                                                            </td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_24" id="akta_pendirian_24">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_24" id="akta_pendirian_24">Beda</label></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="row">
                                                    <h3>PENGECEKAN REKENING TRANSAKSI</h3>
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <th>NAMA PADA REKENING</th>
                                                            <td colspan="2" style="vertical-align:middle">{{$funding->rekening->rekening_name}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_25" id="akta_pendirian_25">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_25" id="akta_pendirian_25">Beda</label></td>
                                                        </tr>
                                                        <tr>
                                                            <th>NAMA BANK</th>
                                                            <td colspan="2" style="vertical-align:middle"> {{$funding->rekening->bank ? $funding->rekening->bank : '-'}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_26" id="akta_pendirian_26">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_26" id="akta_pendirian_26">Beda</label></td>
                                                        </tr>
                                                        <tr>
                                                            <th>NOMOR REKENING</th>
                                                            <td colspan="2" style="vertical-align:middle"> {{$funding->rekening->rekening_number ? $funding->rekening->rekening_number : '-'}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_27" id="akta_pendirian_27">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_27" id="akta_pendirian_27">Beda</label></td>
                                                        </tr>
                                                        <tr>
                                                            <th>NOMOR REKENING DANA LENDER (RDL) BNI</th>
                                                            <td colspan="2" style="vertical-align:middle"> {{$funding->rekening->rdl_number ? $funding->rekening->rdl_number : '-'}}</td>
                                                            <td colspan="1"><label><input type="radio" class="flat" name="akta_pendirian_28" id="akta_pendirian_28">Sama</label></td>
                                                            <td colspan="1"><label><input type="radio" class="flat"  name="akta_pendirian_28" id="akta_pendirian_28">Beda</label></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>


                                                <div class="card-footer text-center">
                                                    <button class="btn btn-danger reject_status_lender" id="reject_status_lender" attr="{{$funding->id}}" data-status="reject">
                                                        <i class="fa fa-close pr-1"></i>
                                                        Tolak
                                                    </button>
                                                    <a class="btn btn-secondary" href="#myTabContent" onclick="$('#director-tab').click()">
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
    </div>
    <div id="log_messages_ekyc" style="display: none">
        @if($eqyc)
            <?php $msg ='';?>
            @foreach ($eqyc as $item)
                <?php 
                
                $nofif = json_decode($item->response , true);
                
                if($nofif != null)
                {
                    if(array_key_exists('JSONFile' , $nofif)){
                        if(array_key_exists('notif' , $nofif['JSONFile'])){
                            $msg .= '<p>'.$nofif['JSONFile']['notif'].'</p>';
                        }
                        
                    }
                    if(array_key_exists('result' , $nofif)){
                        if(array_key_exists('notif' , $nofif))
                        $msg .= '<p>'.$nofif['notif'].'</p>';
                    }
                }else{
                    echo '<p>Data di reject</p>';
                }

                ?>
                
            @endforeach
            <?php print_r($msg);?>
        @endif
    </div>

    <div id="log_messages_ekyc_coms" style="display: none">
        @if($eqyc_coms)
            <?php $msg ='';?>
            
                <?php 
                
                $nofif = json_decode($eqyc_coms->response , true);
                if($nofif != null)
                {
                    if(array_key_exists('JSONFile' , $nofif)){
                        if(array_key_exists('notif' , $nofif['JSONFile'])){
                            $msg .= '<p>'.$nofif['JSONFile']['notif'].'</p>';
                        }
                        
                    }
                    if(array_key_exists('result' , $nofif)){
                        if(array_key_exists('notif' , $nofif))
                        $msg .= '<p>'.$nofif['notif'].'</p>';
                    }
                }else{
                    echo '<p>Data di reject</p>';
                }
                ?>
                 <?php print_r($msg);?>
        @endif
    </div>
    

@endsection
@section('js')
<script src="{{ asset('/js/lender_verification.js') }}"></script>

<script>
    $(document).on('click', '#digisign_director_logs', function(){
        var dialog = bootbox.dialog({
            title: 'EKYC Logs',
            message: '<p>'+ $("#log_messages_ekyc").html()+'</p>'
        });
    });
    $(document).on('click', '#digisign_director_logs_commissioner', function(){
        var dialog = bootbox.dialog({
            title: 'EKYC Logs',
            message: '<p>'+ $("#log_messages_ekyc_coms").html()+'</p>'
        });
    });
</script>
@endsection