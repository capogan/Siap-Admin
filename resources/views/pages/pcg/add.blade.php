@extends('layouts.main')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Short Fall <small>masukkan data shortfall</small></h2>
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
                <br>
                <form id="shortfall_form">
                    <input type="hidden" value="{{ $id_loan }}" name="id_loan" id="id_loan">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan I <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 ">
                            <select name="month1" id="month1" class="form-control">
                                <option value=""></option>
                                @foreach($months as $month)
                                    <option value="{{$month}}" {{ isset($get_shortfall->month_1) && $get_shortfall->month_1  == $month ? "selected" : "" }}  >{{$month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <input type="text" name="amount_1" id="amount_1" class="form-control" value="{{isset($get_shortfall->invoice_amount_1 ) ? $get_shortfall->invoice_amount_1 : '' }}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan II <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 ">
                            <select name="month2" id="month2" class="form-control">
                                <option value=""></option>
                                @foreach($months as $month)
                                    <option value="{{$month}}"  {{ isset($get_shortfall->month_2) && $get_shortfall->month_2  == $month ? "selected" : "" }} >{{$month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <input type="text"  name="amount_2" id="amount_2"  class="form-control" value="{{isset($get_shortfall->invoice_amount_2 ) ? $get_shortfall->invoice_amount_2 : '' }}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan III <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 ">
                            <select name="month3" id="month3" class="form-control">
                                <option value=""></option>
                                @foreach($months as $month)
                                    <option value="{{$month}}" {{ isset($get_shortfall->month_3) && $get_shortfall->month_3  == $month ? "selected" : "" }}>{{$month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <input type="text"  name="amount_3" id="amount_3"  class="form-control" value="{{isset($get_shortfall->invoice_amount_3 ) ? $get_shortfall->invoice_amount_3 : '' }}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan IV <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 ">
                            <select name="month4" id="month4" class="form-control">
                                <option value=""></option>
                                @foreach($months as $month)
                                    <option value="{{$month}}" {{isset($get_shortfall->month_4) && $get_shortfall->month_4  == $month ? "selected" : "" }}>{{$month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <input type="text"  name="amount_4" id="amount_4"  class="form-control" value="{{isset($get_shortfall->invoice_amount_4 ) ? $get_shortfall->invoice_amount_4 : '' }}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan V <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 ">
                            <select name="month5" id="month5" class="form-control">
                                <option value=""></option>
                                @foreach($months as $month)
                                    <option value="{{$month}}" {{ isset($get_shortfall->month_5) && $get_shortfall->month_5  == $month ? "selected" : "" }} >{{$month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <input type="text"  name="amount_5" id="amount_5"  class="form-control" value="{{isset($get_shortfall->invoice_amount_5 ) ? $get_shortfall->invoice_amount_5 : '' }}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan VI <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 ">
                            <select name="month6" id="month6" class="form-control">
                                <option value=""></option>
                                @foreach($months as $month)
                                    <option value="{{$month}}" {{ isset($get_shortfall->month_6) && $get_shortfall->month_6  == $month ? "selected" : "" }}>{{$month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <input type="text"  name="amount_6" id="amount_6"  class="form-control" value="{{isset($get_shortfall->invoice_amount_6 ) ? $get_shortfall->invoice_amount_6 : '' }}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan VII <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 ">
                            <select name="month7" id="month7" class="form-control">
                                <option value=""></option>
                                @foreach($months as $month)
                                    <option value="{{$month}}" {{ isset($get_shortfall->month_7) && $get_shortfall->month_7  == $month ? "selected" : "" }} >{{$month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <input type="text"  name="amount_7" id="amount_7"  class="form-control" value="{{isset($get_shortfall->invoice_amount_7 ) ? $get_shortfall->invoice_amount_7 : '' }}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan VIII <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 ">
                            <select name="month8" id="month8" class="form-control">
                                <option value=""></option>
                                @foreach($months as $month)
                                    <option value="{{$month}}" {{ isset($get_shortfall->month_8) && $get_shortfall->month_8  == $month ? "selected" : "" }}>{{$month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <input type="text"  name="amount_8" id="amount_8"  class="form-control" value="{{isset($get_shortfall->invoice_amount_8 ) ? $get_shortfall->invoice_amount_8 : '' }}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan IX <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 ">
                            <select name="month9" id="month9" class="form-control">
                                <option value=""></option>
                                @foreach($months as $month)
                                    <option value="{{$month}}" {{ isset($get_shortfall->month_9) && $get_shortfall->month_9  == $month ? "selected" : "" }}>{{$month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <input type="text"  name="amount_9" id="amount_9"  class="form-control" value="{{isset($get_shortfall->invoice_amount_9 ) ? $get_shortfall->invoice_amount_9 : '' }}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan X <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 ">
                            <select name="month10" id="month10" class="form-control">
                                <option value=""></option>
                                @foreach($months as $month)
                                    <option value="{{$month}} " {{ isset($get_shortfall->month_10) && $get_shortfall->month_10  == $month ? "selected" : "" }}>{{$month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <input type="text"  name="amount_10" id="amount_10"  class="form-control" value="{{isset($get_shortfall->invoice_amount_10 ) ? $get_shortfall->invoice_amount_10 : '' }}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan XI <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 ">
                            <select name="month11" id="month11" class="form-control">
                                <option value=""></option>
                                @foreach($months as $month)
                                    <option value="{{$month}}" {{ isset($get_shortfall->month_11) && $get_shortfall->month_10  == $month ? "selected" : "" }}>{{$month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <input type="text"  name="amount_11" id="amount_11"  class="form-control" value="{{isset($get_shortfall->invoice_amount_11 ) ? $get_shortfall->invoice_amount_11 : '' }}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan XII <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 ">
                            <select name="month12" id="month12" class="form-control">
                                <option value=""></option>
                                @foreach($months as $month)
                                    <option value="{{$month}}" {{ isset($get_shortfall->month_2) && $get_shortfall->month_12  == $month ? "selected" : "" }}>{{$month}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <input type="text"  name="amount_12" id="amount_12"  class="form-control" value="{{isset($get_shortfall->invoice_amount_12 ) ? $get_shortfall->invoice_amount_12 : '' }}">
                        </div>
                    </div>



                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button type="submit" id="btn_submit_shortfall" class="btn btn-success"><i class="fa fa-calculator"></i> Update Kredit Scoring</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Keterangan skor dan hasil sementara </h2>
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

                <section class="content invoice">

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-md-6">
                            <p class="lead">&nbsp;</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th style="width:50%">Usia :</th>
                                        <td>{{Utils::calculate_age($get_user->date_of_birth,'years')}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Jumlah Tanggungan :</th>
                                        <td>{{$get_user->master_dependent_title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status Badan Hukum:</th>
                                        <td>{{$get_user->legality_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kriteria Usaha:</th>
                                        <td>{{$get_user->title_business}}</td>
                                    </tr>
                                    <tr>
                                        <th>Lama Usaha:</th>
                                        <td>{{$get_user->master_since_title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status tempat Usaha:</th>
                                        <td>{{$get_user->place_status_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Lama kerjasama dengan supplier:</th>
                                        <td>{{$get_user->master_partner_title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Biro Kredit:</th>
                                        <td>{{$get_user->beurau_credit_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Faktor Pendapatan:</th>
                                        <td>{{$get_user->industry_sectore}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <p class="lead">Akumulasi Skor</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th style="width:50%">Skor Total:</th>
                                        <td><span id="total_score"></span></td>
                                    </tr>
                                    <tr>
                                        <th>Total Persentasi</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Status:</th>
                                        <td>-<span id="status_score"></span></td>
                                    </tr>
                                    <tr>
                                        <th>Batas Disetujui:</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Potongan dari faktor pendapatan</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Batas Disetujui (Final):</th>
                                        <td>-</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-primary" onclick="calculate_scoring()">check scoring</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <button class="btn btn-danger" id="btn_reject"><i class="fa fa-close"></i> Tolak Pengajuan</button>
                <button class="btn btn-primary" id="btn_send_loan"><i class="fa fa-send-o"></i> Kirim Pengajuan</button>
            </div>
        </div>
    </div>
    <div id="modal_reject_reason" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="reject_form">
                    <input type="hidden" name="id_loan" id="id_loan" value="{{$id_loan}}">
                    <div class="modal-body">
                        <p>Berikan Alasan penolakan</p>
                        <textarea class="form-control" name="desc_reject" id="desc_reject" style="resize: none" rows="10"></textarea>
                        <br>
                        <div class="alert-dismissible result-message " role="alert"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modal_confirm_loan" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Apakah Anda yakin?</h4>
                </div>
                <form id="confirm_form">
                    <input type="hidden" name="id_loan" id="id_loan" value="{{$id_loan}}">
                    <div class="modal-body">
                        <p>Anda akan menyetujui Pinjaman Ini?</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <input type="submit" class="btn btn-primary" value="Yakin">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script src="{{ asset('/js/pcg.js') }}"></script>
    <script>
        // calculate_scoring();
    </script>

@endsection
@endsection