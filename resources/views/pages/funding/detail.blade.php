@extends('layouts.main')
@section('content')
<style>
.text-white >.fa-check{
    padding: 8px !important;
}
</style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!-- <h1 class="m-0 text-dark">Kelola Admin</h1> -->
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Verifikasi Data EKYC</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
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
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">Direktur Utama</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">Komisaris Utama</a>
                                                </li>
{{--                                                <li class="nav-item">--}}
{{--                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">EKYC Perusahaan</a>--}}
{{--                                                </li>--}}
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home1" role="tabpanel"  aria-labelledby="home-tab">

                                                @if($funding->directors)
                                                    @foreach($funding->directors as $item)
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <!-- Profile Image -->
                                                            <div class="card card-primary card-outline">
                                                                <div class="card-body box-profile">
                                                                    <div class="text-center">
                                                                        <img class="profile-user-img img-fluid img-circle"
                                                                            src="https://siapdanain.id/upload/lender/file/{{$item->identity_photo}}">
                                                                    </div>
                                                                    <h5 class="profile-username text-center pt-5">Foto Direktur </h5>
                                                                </div>
                                                                <!-- /.card-body -->
                                                            </div>
                                                            <!-- /.card -->
                                                            <!-- Profile Image -->
                                                            <div class="card card-primary card-outline mt-4">
                                                                <div class="card-body box-profile">
                                                                    <div class="text-center">
                                                                        <img class="profile-user-img img-fluid img-circle"
                                                                            src="https://siapdanain.id/upload/lender/file/{{$item->self_photo}}">
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
                                                                    <li class="breadcrumb-item text-bold">Verifikasi Data EKYC dan Direktur Utama</li>
                                                                </ol>
                                                            </nav>
                                                            <table id="example1" class="table table-bordered table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td colspan="2">{{$item->director_name}}</td>
                                                                    <td colspan="2" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span></td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th>No KTP</th>
                                                                    <td colspan="2">{{$item->director_nik}}</td>
                                                                    <td colspan="3" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Nomor NPWP</th>
                                                                    <td colspan="2">{{$item->director_npwp}}</td>
                                                                    <td colspan="3" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tanggal Lahir</th>
                                                                    <td colspan="2">{{$item->director_dob}}</td>
                                                                    <td colspan="3" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td colspan="2">{{$item->director_email}}</td>
                                                                    <td colspan="3" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Nomor Telepon</th>
                                                                    <td colspan="2">{{$item->director_phone_number}}</td>
                                                                    <td colspan="3" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tanggal Bergabung</th>
                                                                    <td colspan="2">{{$item->created_at}}</td>
                                                                    <td colspan="2" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span></td>
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
                                                                    <td colspan="2" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span></td>
                                                                </tr>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <th>Alamat Lengkap</th>
                                                                    <td colspan="2">
                                                                        Jl.Jendral Sudirman No.20
                                                                    </td>
                                                                    <td colspan="2" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span></td>
                                                                </tr> -->
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                    @endforeach
                                                @endif
                                                <div class="card-footer text-center">
                                                    <button class="btn btn-danger reject_status_lender" id="reject_status_lender" attr="{{$funding->id}}" data-status="reject">
                                                        <i class="fa fa-close pr-1"></i>
                                                        Tolak
                                                    </button>
                                                    <a class="btn btn-primary" href="#myTabContent" onclick="$('#profile-tab').click()">
                                                        Lanjutkan
                                                        <i class="fa fa-arrow-right"></i>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                                                @if($funding->commissioners)
                                                    @foreach($funding->commissioners as $item)
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <!-- Profile Image -->
                                                                <div class="card card-primary card-outline">
                                                                    <div class="card-body box-profile">
                                                                        <div class="text-center">
                                                                            <img class="profile-user-img img-fluid img-circle"
                                                                                src="https://siapdanain.id/upload/lender/file/{{$item->identity_photo}}">
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
                                                                            <img class="profile-user-img img-fluid img-circle"
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
                                                                    <tr>
                                                                        <th>Nama</th>
                                                                        <td colspan="2">{{$item->commissioner_name}}</td>
                                                                        <td colspan="2" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span>
                                                                        </td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>NIK</th>
                                                                        <td colspan="2">{{$item->commissioner_nik}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Nomor NPWP</th>
                                                                        <td colspan="2">{{$item->commissioner_npwp}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Tanggal Lahir</th>
                                                                        <td colspan="2">{{$item->commissioner_dob}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Email</th>
                                                                        <td colspan="2">{{$item->commissioner_email}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Nomor Telepon</th>
                                                                        <td colspan="2">{{$item->commissioner_phone_number}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Tanggal Bergabung</th>
                                                                        <td colspan="2">{{$item->created_at}}</td>
                                                                        <td colspan="2" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span>
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
                                                                        <td colspan="2" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span></td>
                                                                    </tr>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Alamat Lengkap</th>
                                                                        <td colspan="2">
                                                                            Jl.Jendral Sudirman No.20
                                                                        </td>
                                                                        <td colspan="2" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i></span>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
{{--                                                <div class="card-footer text-center">--}}
{{--                                                    <button class="btn btn-danger reject_status_lender" id="reject_status_lender" attr="{{$funding->id}}" data-status="reject">--}}
{{--                                                        <i class="fa fa-close pr-1"></i>--}}
{{--                                                        Tolak--}}
{{--                                                    </button>--}}
{{--                                                    <a class="btn btn-secondary" href="#myTabContent" onclick="$('#home-tab').click()">--}}
{{--                                                        <i class="fa fa-arrow-left"></i> Kembali--}}
{{--                                                    </a>--}}
{{--                                                    <a class="btn btn-primary" href="#myTabContent" onclick="$('#contact-tab').click()">--}}
{{--                                                        Lanjutkan--}}
{{--                                                        <i class="fa fa-arrow-right"></i>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <table>
                                                                <div class="card-footer text-center">
                                                                    <button class="btn btn-danger reject_status_lender" id="reject_status_lender" attr="{{$funding->id}}" data-status="reject">
                                                                        <i class="fa fa-close pr-1"></i>
                                                                        Tolak
                                                                    </button>

                                                                    <a class="btn btn-secondary" href="#myTabContent" onclick="$('#profile-tab').click()">
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

                                            </div>


                                            <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
                                                <div class="row">
                                                    <div class="col">
                                                        <nav aria-label="breadcrumb">
                                                            <ol class="breadcrumb">
                                                                <li class="breadcrumb-item text-bold">EKYC Perusahaan</li>
                                                            </ol>
                                                        </nav>
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

                                                        <a class="btn btn-secondary" href="#myTabContent" onclick="$('#profile-tab').click()">
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