<div class="row">
    <div class="col-md-6 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Analisa Alamat</h2>
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alamat Usaha Pemohon
                        </label>
                        <div class="col-md-12 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->business_full_address  ?? "-" }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Provinsi
                        </label>
                        <div class="col-md-12 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->province_name  ?? "-" }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kabupaten / kota</label>
                        <div class="col-md-12 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->regencies_name  ?? "-" }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kecamatan</label>
                        <div class="col-md-12 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->district_name  ?? "-" }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kelurahan</label>
                        <div class="col-md-12 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->villages_name  ?? "-" }}</h5>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                </form>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Analisa Usaha</h2>
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Usaha
                        </label>
                        <div class="col-md-12 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->business_name  ?? "-" }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Status Badan Hukum Usaha
                        </label>
                        <div class="col-md-12 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->legality_name  ?? "-" }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nomor Izin Usaha</label>
                        <div class="col-md-12 col-sm-6 ">
                            <h5 class="" for="first-name"></h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jenis Bidang Usaha</label>
                        <div class="col-md-12 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->industry_sectore  ?? "-"  }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Status Tempat Usaha</label>
                        <div class="col-md-12 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->place_status_name  ?? "-" }}</h5>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                </form>
            </div>
        </div>

    </div>



    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Analisa Keberlangsungan Usaha</h2>
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Rata Pendapatan penjualan Perbulan dalam 6 bulan terakhir
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{ $get_data_business->average_sales_revenue_six_month ?? "-"   }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">rata-rata Keuntungan perbulan dalam 6 bulan terakhir
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->average_monthly_profit_six_month  ?? "-" }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">rata - rata Pengeluaran Perbulan dalam 6 bulan terakhir</label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->average_monthly_expenditure_six_month  ?? "-" }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Total Karyawan saat ini</label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->total_employees ?? "-" }} Orang</h5>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Durasi Merchant Active
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_business->partnership_since ?? "-"}} Tahun</h5>
                        </div>
                    </div>


                    <div class="ln_solid"></div>
                </form>
            </div>
        </div>
    </div>

</div>
<div class="ln_solid"></div>
<button type="button" class="btn btn-primary next-step float-right">Selanjutnya ></button>
<button class="btn btn-danger float-right" type="button" onclick="reject_function(9)"><i class="fa fa-close"></i> Tolak</button>
