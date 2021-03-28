<div class="row">
    <div class="col-md-6 col-sm-12 ">
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

                    <div class="ln_solid"></div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Kesimpulan</h2>
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
                <br>
                <form id="result_from_emergency_form">
                    <label class="col-form-label label-align" for="first-name">Kesimpulan <span class="required">*</span>
                    </label>
                    <input type="hidden" name="uid" id="uid" value="{{$uid}}">
                    <select id="result_text" name="result_text" class="form-control">
                        <option value="">--Pilih salah satu--</option>
                        <option value="recommendation" {{ $get_data_emergency->emergency_response === "recommendation" ? "selected" : "" }}>Rekomendasi</option>
                        <option value="notrecommended" {{ $get_data_emergency->emergency_response === "notrecommended" ? "selected" : "" }}>Tidak direkomendasi</option>

                    </select>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<div class="ln_solid"></div>
<button type="button" class="btn btn-primary next-step float-right">Selanjutnya ></button>
<button class="btn btn-danger float-right" type="button" onclick="reject_function(11)"><i class="fa fa-close"></i> Tolak</button>
