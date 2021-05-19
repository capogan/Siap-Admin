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
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business">Informasi Usaha</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="document-tab" data-toggle="tab" href="#document" role="tab" aria-controls="document" >Bank/Dokumen Usaha</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="commissioner-tab" data-toggle="tab" href="#commissioner" role="tab" aria-controls="commissioner">Direktur Utama</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="director-tab" data-toggle="tab" href="#director" role="tab" aria-controls="director" >Komisaris Utama</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade active show" id="business" role="tabpanel" aria-labelledby="business-tab">
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
                                            <div class="tab-pane fade " id="commissioner" role="tabpanel"  aria-labelledby="commissioner-tab">
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
                                                            <tr>
                                                                <th>Email</th>
                                                                <td colspan="2">{{$funding->eqycdata ? $funding->eqycdata->email : '' }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Phone</th>
                                                                <td colspan="2">{{$funding->eqycdata ? $funding->eqycdata->phone_number : '' }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nik</th>
                                                                <td colspan="2">{{$funding->eqycdata ? $funding->eqycdata->nik : '' }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Last Updated</th>
                                                                <td colspan="2">{{$funding->eqycdata ? $funding->eqycdata->updated_at : '' }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Agreement File</th>
                                                                <td colspan="2">{{$funding->agreementfile ? $funding->agreementfile->document_id : '' }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>EKYC Log Status</th>
                                                                <td colspan="2"><button class="btn btn-primary log-director-modal">lihat</button></td>
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
                                                                            src="http://172.31.143.11/upload/lender/file/{{$item->identity_photo}}">
                                                                    </div>
                                                                    <h5 class="profile-username text-center pt-5">Foto Direktur </h5>
                                                                </div>
                                                            </div>
                                                            <div class="card card-primary card-outline mt-4">
                                                                <div class="card-body box-profile">
                                                                    <div class="text-center">
                                                                        <img class="profile-user-img img-fluid"
                                                                            src="http://172.31.143.11/upload/lender/file/{{$item->self_photo}}">
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
                                                                                src="http://172.31.143.11/upload/lender/file/{{$item->identity_photo}}">
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
                                                                                src="http://172.31.143.11/upload/lender/file/{{$item->identity_photo}}">
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
                                                                @if($index == 0 && $item->ekyc_commissioner != null)
                                                                    <table id="example1" class="table table-bordered table-striped">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>EKYC Status</th>
                                                                            <td colspan="2">{{$item->ekyc_commissioner->status == 'verified' ? $item->ekyc_commissioner->status : ''}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>EKYC Log Status</th>
                                                                            <td colspan="2"><button class="btn btn-primary log-commissioner-modal">lihat</button></td>
                                                                        </tr>
                                                                        </thead>
                                                                    </table>
                                                                @endif
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
                                                                    <button class="btn btn-primary" id="update_status_lender" attr="{{$funding->id}}">
                                                                        <i class="fa fa-check pr-1"></i>
                                                                        Setuju
                                                                    </button>

                                                                </div>
                                                            </table>
                                                        </div>
                                                    </div>
                                                @endif
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
@endsection
@section('js')
<script src="{{ asset('/js/lender_verification.js') }}"></script>
@endsection