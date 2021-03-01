@extends('layouts.main')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Informasi Permintaan</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Informasi pinjaman</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="#">Settings 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nomor Faktur
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="first-name" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Pemohon
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="last-name" name="last-name" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pinjaman yang Diajukan</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="middle-name" class="form-control" type="text" name="middle-name">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">list Barang</label>
                                <div class="col-md-6 col-sm-6 ">
{{--                                    <ul style="list-style: none">--}}
{{--                                        <li>--}}
{{--                                            <label class="">--}}
{{--                                                <div class="icheckbox_flat-green checked" style="position: relative;"><input type="checkbox" class="flat" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Tv--}}
{{--                                            </label>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <label class="">--}}
{{--                                                <div class="icheckbox_flat-green checked" style="position: relative;"><input type="checkbox" class="flat" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Tv--}}
{{--                                            </label>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <label class="">--}}
{{--                                                <div class="icheckbox_flat-green checked" style="position: relative;"><input type="checkbox" class="flat" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Tv--}}
{{--                                            </label>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
                                    <div id="tags_1_tagsinputs" class="tagsinput" style="width: auto; min-height: 100px; height: 100px;">
                                        <span class="tag"><span>Tv&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                                        <span class="tag"><span>antena&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                                        <span class="tag"><span>Router&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                                    </div>

                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Pengajuan <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="middle-name" class="form-control" type="text" name="middle-name">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Gambar Dokumen <small>periksa dokumen yang di unggah </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Image Name</strong>
                                        </p>
                                        <p>Snow and Ice Incoming</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Image Name</strong>
                                        </p>
                                        <p>Snow and Ice Incoming</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Image Name</strong>
                                        </p>
                                        <p>Snow and Ice Incoming</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Image Name</strong>
                                        </p>
                                        <p>Snow and Ice Incoming</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Image Name</strong>
                                        </p>
                                        <p>Snow and Ice Incoming</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Image Name</strong>
                                        </p>
                                        <p>Snow and Ice Incoming</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Image Name</strong>
                                        </p>
                                        <p>Snow and Ice Incoming</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Image Name</strong>
                                        </p>
                                        <p>Snow and Ice Incoming</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Image Name</strong>
                                        </p>
                                        <p>Snow and Ice Incoming</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Image Name</strong>
                                        </p>
                                        <p>Snow and Ice Incoming</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="row">
        <div class="x_panel" style="">
            <div class="x_title">
                <h2>Verifikasi Telepon <small> Sedang di Proses : Verifikasi Pekerjaan Calon Peminjam</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="container">
                    <div class="row">

                        <div class="col-md-5">
                           
                           <b> Nomor Telepon Tempat Usaha</b>
                        </div>
                        <div class="col">
                       
                        <span>0216549873</span>
                        
                        </div>
                        <div class="col">
                           <button type="button" class="btn btn-success btn-xs">
                         
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                         <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                         </svg>

                         Panggil
                    
                          </button>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <b>Nomor Telepon Tempat Usaha Tambahan</b>
                        </div>
                        <div class="col">
                            <span>02165498731</span>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-success btn-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>
                                Panggil
                          </button>
                        </div>
                    </div>
                    <div class="row">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal Tindakan</th>
                          <th>Status Telepon</th>
                          <th>Rekaman</th>
                          <th>Nama Agent</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>dd/mm/yyyy</td>
                          <td>Telepon Sibuk</td>
                          <td> <span class="badge badge-danger">none</span></td>
                          <td>Horas</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>dd/mm/yyyy</td>
                          <td>Tersambung</td>
                          <td> <button type="button" class="btn btn-info btn-sm"><i class="fa fa-file-movie-o"></i> rekaman</button></td>
                          <td>Horas</td>
                        </tr>
                       
                      </tbody>
                    </table>
                    </div>
                    <div class="row">
                       
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Submit</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-link">Lihat Histori >></button>
                        </div>
                    </div>
                    <div class="row mt-5">
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-warning"><i class="fa fa-share"></i> Lanjutkan Proses</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                            Telepon Kembali
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> Tolak pengajuan</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
<div class="row">
<div class="x_panel">
            <div class="x_title">
                <h2>Verifikasi Telepon <small> Sedang di Proses : Verifikasi Pekerjaan Calon Peminjam</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col"><p>Nomor  Telepon Tempat Usaha</p></div>
                                <div class="col"><p>0216549873</p></div>
                                <div class="col"><p>Sama</p></div>
                                <div class="col"><p>Beda</p></div>
                                <div class="col">
                                    <input type="text" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col"><p>Alamat tempat usaha</p></div>
                                <div class="col"><p>327763282837001</p></div>
                                <div class="col"><p>Sama</p></div>
                                <div class="col"><p>Beda</p></div>
                                <div class="col">
                                    <input type="text" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                 <div class="col"><p>No KTP Pemohon</p></div>
                                <div class="col"><p>Staf Admin</p></div>
                                <div class="col"><p>Sama</p></div>
                                <div class="col"><p>Beda</p></div>
                                <div class="col">
                                    <input type="text" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                 <div class="col"><p>Alamat Detail Usaha</p></div>
                                <div class="col"><p>JL. Bla bla bla</p></div>
                                <div class="col"><p>Sama</p></div>
                                <div class="col"><p>Beda</p></div>
                                <div class="col">
                                    <input type="text" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col"><p>Bidang usaha</p></div>
                                <div class="col"><p>Wijaya Elektronik</p></div>
                                <div class="col"><p>Sama</p></div>
                                <div class="col"><p>Beda</p></div>
                                <div class="col">
                                    <input type="text" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                 <div class="col"><p>Detail Jenis Bidang Usaha</p></div>
                                <div class="col"><p>Distributor Kvision</p></div>
                                <div class="col"><p>Sama</p></div>
                                <div class="col"><p>Beda</p></div>
                                <div class="col">
                                    <input type="text" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                 <div class="col"><p>Badan Hukum Usaha</p></div>
                                <div class="col"><p>Usaha Dagang</p></div>
                                <div class="col"><p>Sama</p></div>
                                <div class="col"><p>Beda</p></div>
                                <div class="col">
                                    <input type="text" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col"><p>Status Tempat Usaha</p></div>
                                <div class="col"><p>Kontrak per bulan</p></div>
                                <div class="col"><p>Sama</p></div>
                                <div class="col"><p>Beda</p></div>
                                <div class="col">
                                    <input type="text" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col"><p>rata Pendapatan penjualan Perbulan dalam 6 bulan terakhir</p></div>
                                <div class="col"><p>0216549873</p></div>
                                <div class="col"><p>Sama</p></div>
                                <div class="col"><p>Beda</p></div>
                                <div class="col">
                                    <input type="text" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col"><p>Nomor  Telepon Tempat Usaha</p></div>
                                <div class="col"><p>12.500.000</p></div>
                                <div class="col"><p>Sama</p></div>
                                <div class="col"><p>Beda</p></div>
                                <div class="col">
                                    <input type="text" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col"><p>rata - rata Pengeluaran Perbulan dalam  dalam 6 bulan terakhir</p></div>
                                <div class="col"><p>10.000.000</p></div>
                                <div class="col"><p>Sama</p></div>
                                <div class="col"><p>Beda</p></div>
                                <div class="col">
                                    <input type="text" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col"><p>rata-rata Keuntungan perbulan  dalam 6 bulan terakhir</p></div>
                                <div class="col"><p>2.500.000</p></div>
                                <div class="col"><p>Sama</p></div>
                                <div class="col"><p>Beda</p></div>
                                <div class="col">
                                    <input type="text" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <p>Penjelasan kegiatan usaha</p>
                                </div>
                                 <div class="col">
                                    <input type="text" placeholder="Tuliskan Jabatan dan Nama Penerima Telepon" id="keterangan" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <p>Kesimpulan  Analisa </p>
                                </div>
                                <div class="col">
                                <span class="badge badge-success">RISIKO RENDAH</span>
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
</div>


<div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Gambar Dokumen <small>periksa dokumen yang di unggah </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                        <h6>Video</h6>
                        </div>

                        <div class="row mt-1">
                            <div class="col">
                                
                                    
                                        <video width="755"  controls>
                                        <source src="" type="video/mp4">
                                    </video>
                           
                        </div>
                        <div class="row mt-4">
                        <div class="col">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Foto Diri</strong>
                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Foto Tempat Usaha</strong>
                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Foto bukti kepemilikan </strong>
                                        </p>
                                        <p><strong>atau kontrak tempat usaha</strong>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{asset('images/media.jpg')}}" alt="image">
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><strong>Foto Aktivitas Usaha</strong>
                                        </p>
                                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- /page content -->
@endsection
