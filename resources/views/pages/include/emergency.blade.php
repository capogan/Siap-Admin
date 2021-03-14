<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Informasi Kontak Darurat</h2>
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->emergency_name ?? "-"}}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Hubungan
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->sibling_name ?? "-"}}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nomor Telepon Saudara</label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->emergency_phone ?? "-"}}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->emergency_full_address ?? "-"}}</h5>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Propinsi</label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->province_name ?? "-" }}</h5>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kabupaten / Kota</label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->city_name ?? "-" }}</h5>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kecamatan</label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->emergency_sub_kecamatan ?? "-" }}</h5>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kelurahan</label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->emergency_sub_kelurahan ?? "-" }}</h5>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kodepos</label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->emergency_zip_code ?? "-" }}</h5>
                        </div>
                    </div>


                    <div class="ln_solid"></div>
                </form>
            </div>
        </div>
    </div>
</div>