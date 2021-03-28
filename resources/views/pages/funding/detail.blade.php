@extends('layouts.main')
@section('content')
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
                                                <li class="nav-item">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">EKYC Perusahaan</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">

                                                @if($funding->directors)
                                                    @foreach($funding->directors as $item)
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <!-- Profile Image -->
                                                            <div class="card card-primary card-outline">
                                                                <div class="card-body box-profile">
                                                                    <div class="text-center">
                                                                        <img class="profile-user-img img-fluid img-circle"
                                                                            src="http://172.31.143.11/upload/lender/file/{{$item->identity_photo}}">
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
                                                                            src="http://172.31.143.11/upload/lender/file/{{$item->self_photo}}">
                                                                    </div>
                                                                    <h5 class="profile-username text-center pt-5">Foto KTP</h5>

                                                                </div>
                                                                <!-- /.card-body -->
                                                            </div>
                                                            <!-- /.card -->
                                                        </div>
                                                        <div class="col-9">
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
                                                                    <td colspan="2" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span></td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th>No KTP</th>
                                                                    <td colspan="2">{{$item->director_nik}}</td>
                                                                    <td colspan="3" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Nomor NPWP</th>
                                                                    <td colspan="2">{{$item->director_npwp}}</td>
                                                                    <td colspan="3" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tanggal Lahir</th>
                                                                    <td colspan="2">{{$item->director_dob}}</td>
                                                                    <td colspan="3" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td colspan="2">{{$item->director_email}}</td>
                                                                    <td colspan="3" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Nomor Telepon</th>
                                                                    <td colspan="2">{{$item->director_phone_number}}</td>
                                                                    <td colspan="3" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tanggal Bergabung</th>
                                                                    <td colspan="2">{{$item->created_at}}</td>
                                                                    <td colspan="2" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span></td>
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
                                                                    <td>Kecataman</td>
                                                                    <td>{{$item->district->name}}</td>
                                                                    <td colspan="2"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Kelurahan</td>
                                                                    <td>{{$item->village->name}}</td>
                                                                    <td colspan="2" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span></td>
                                                                </tr>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <th>Alamat Lengkap</th>
                                                                    <td colspan="2">
                                                                        Jl.Jendral Sudirman No.20
                                                                    </td>
                                                                    <td colspan="2" class="text-center"><span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span></td>
                                                                </tr> -->
                                                                </tbody>
                                                            </table>
                                                            <button class="btn btn-success mb-3"><i class="fa fa-check pr-2"></i>Cek EKYC</button>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                @endif

                                                <div class="card-footer text-center">

                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-close pr-1"></i>
                                                        Tolak
                                                    </button>

                                                    <button class="btn btn-primary">
                                                        <i class="fa fa-check pr-1"></i>
                                                        Lanjut
                                                    </button>

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
                                                                                src="{{url('images/profile.png')}}">
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
                                                                                src="{{url('images/profile.png')}}">
                                                                        </div>
                                                                        <h5 class="profile-username text-center pt-5">Foto KTP</h5>

                                                                    </div>
                                                                    <!-- /.card-body -->
                                                                </div>
                                                                <!-- /.card -->
                                                            </div>
                                                            <div class="col-9">
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
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                        </td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>NIK</th>
                                                                        <td colspan="2">{{$item->commissioner_nik}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Nomor NPWP</th>
                                                                        <td colspan="2">{{$item->commissioner_npwp}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Tanggal Lahir</th>
                                                                        <td colspan="2">{{$item->commissioner_dob}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Email</th>
                                                                        <td colspan="2">{{$item->commissioner_email}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Nomor Telepon</th>
                                                                        <td colspan="2">{{$item->commissioner_phone_number}}</td>
                                                                        <td colspan="3" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Tanggal Bergabung</th>
                                                                        <td colspan="2">{{$item->created_at}}</td>
                                                                        <td colspan="2" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Alamat</th>
                                                                        <td colspan="4">{{$item->commissioner_address}}</td>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Provinsi</td>
                                                                        <td>{{$item->province_id}}</td>
                                                                        <td colspan="2"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Kabupaten / kota</td>
                                                                        <td>{{$item->regency_id}}</td>
                                                                        <td colspan="2"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Kecataman</td>
                                                                        <td>{{$item->district_id}}</td>
                                                                        <td colspan="2"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Kelurahan</td>
                                                                        <td>{{$item->village_id}}</td>
                                                                        <td colspan="2" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                        </td>
                                                                    </tr>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Alamat Lengkap</th>
                                                                        <td colspan="2">
                                                                            Jl.Jendral Sudirman No.20
                                                                        </td>
                                                                        <td colspan="2" class="text-center">
                                                                            <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <button class="btn btn-success mb-3"><i class="fa fa-check pr-2"></i>Cek EKYC</button>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                                <div class="card-footer text-center">

                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-close pr-1"></i>
                                                        Tolak
                                                    </button>

                                                    <button class="btn btn-primary">
                                                        <i class="fa fa-check pr-1"></i>
                                                        Lanjut
                                                    </button>

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
                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <thead>
                                                            <tr>
                                                                <th>Akta Pendirian</th>
                                                                <td colspan="4"></td>
                                                            <tr>
                                                                <td></td>
                                                                <td>No Akta</td>
                                                                <td>8932178372</td>
                                                                <td colspan="2" class="text-center"><span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Lolos</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Tangal Akta</td>
                                                                <td>09/09/2021</td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Data Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>No Pengesahan AHU</td>
                                                                <td>989SAK0ASA</td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Data Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Lihat Akta Pendirian</td>
                                                                <td><a href="">Lihat Akta Pendirian</a></td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Data Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Lihat Pengesahan AHU</td>
                                                                <td><a href="">Lihat Pengesahan</a></td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Data Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Masukan Link Pengesahan AHU</td>
                                                                <td><a href="">Link Pengesahan AHU</a></td>
                                                                <td colspan="2" class="text-center">
                                                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                                                </td>
                                                            </tr>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <th>Akta Perubahan</th>
                                                                <td colspan="4"></td>
                                                            <tr>
                                                                <td></td>
                                                                <td>No Akta</td>
                                                                <td>8932178372</td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Tangal Akta</td>
                                                                <td>09/09/2021</td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>No Pengesahan AHU</td>
                                                                <td>989SAK0ASA</td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Lihat Akta Pendirian</td>
                                                                <td>-</td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Lihat Pengesahan AHU</td>
                                                                <td>-</td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Hasil Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Masukan Link Pengesahan AHU</td>
                                                                <td>-</td>
                                                                <td colspan="2" class="text-center">
                                                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                                                </td>
                                                            </tr>
                                                            </tr>
                                                            <tr>
                                                                <th>Detail Perusahaan</th>
                                                                <td colspan="2"></td>
                                                                <td class="text-center">
                                                                    <span class="bg-success text-white p-1"><i class="fa fa-check pr-2"></i>Lolos</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-center">Alamat</th>
                                                                <td colspan="4"></td>
                                                            <tr>
                                                                <td></td>
                                                                <td>Provinsi</td>
                                                                <td>DKI Jakarta</td>
                                                                <td colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Kabupaten</td>
                                                                <td>Jakarta Selatan</td>
                                                                <td colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Kecataman</td>
                                                                <td>Kuningan</td>
                                                                <td colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Kelurahan</td>
                                                                <td>Ragunan</td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Data Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-center">Alamat Detail</th>
                                                                <td colspan="2">
                                                                    Jl. Jendral Sudirman No.2
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Data Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-center">Nomor Telepon</th>
                                                                <td colspan="2">
                                                                    021-3232-1213
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Data Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-center">Website Perusahaan</th>
                                                                <td colspan="2">
                                                                    <a href="">wwww.mnckapital.co.id</a>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Data Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Laporan Keuangan</th>
                                                                <td><a href="">Klik to Download</a></td>
                                                                <td colspan="4"></td>
                                                            <tr>
                                                                <td></td>
                                                                <td>Kewajaran Nilai Liability</td>
                                                                <td></td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Data Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Kewajaran Ekuitas</td>
                                                                <td></td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Data Sama</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Kewajaran Asset</td>
                                                                <td></td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Data Sama</span>
                                                                </td>
                                                            </tr>
                                                            </tr>
                                                            <tr>
                                                                <th>Rekening Modal</th>
                                                                <td></td>
                                                                <td colspan="4"></td>
                                                            <tr>
                                                                <td></td>
                                                                <td>Transaksi Peminjaman Modal</td>
                                                                <td></td>
                                                                <td colspan="2" class="text-center">
                                                                    <span class="bg-success text-white text-white p-1"><i class="fa fa-check pr-2"></i>Data Sama</span>
                                                                </td>
                                                            </tr>
                                                            </tr>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="card-footer text-center">

                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-close pr-1"></i>
                                                                Tolak
                                                            </button>

                                                            <button class="btn btn-primary" id="update_status_lender" attr="{{$funding->id}}">
                                                                <i class="fa fa-check pr-1"></i>
                                                                Setuju
                                                            </button>

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
            </div>
        </section>
    </div>
@endsection
@section('js')
<script src="{{ asset('/js/lender_verification.js') }}"></script>
@endsection