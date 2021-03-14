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
                            <h5 class="" for="first-name">{{ $loan_request->invoice_number ?? "-" }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Pemohon
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{ $loan_request->uid ?? "-" }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pinjaman yang Diajukan</label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{ Utils::convert_currency($loan_request->loan_amount) ?? "-" }}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Pengajuan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{ $loan_request->created_at ?? "-" }}</h5>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                </form>
            </div>
        </div>
    </div>
</div>