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

        <div class="x_panel" style="">
            <div class="x_title">
                <h2>Verifikasi Telepon <small> Cek persaamaan data peminjam melalui telepon</small></h2>
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

                        <div class="col-sm-4">
                            Nomor Telepon Tempat Usaha
                            <div class="form-group">
                                <div class="input-group date" id="myDatepicker">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            Only Date Picker
                            <div class="form-group">
                                <div class="input-group date" id="myDatepicker2">
                                    <div class="">

                                    </div>
                                    <span class="input-group-addon">
                            </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            Only Time Picker <small>For 24H format use format: 'HH:mm'</small>
                            <div class="form-group">
                                <div class="input-group date" id="myDatepicker3">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- /page content -->
@endsection
