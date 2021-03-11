@extends('layouts.main')
@section('content')
{{--    <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="x_panel">--}}
{{--                <div class="x_title">--}}
{{--                    <h2>Tambah Data</h2>--}}
{{--                    <ul class="nav navbar-right panel_toolbox">--}}
{{--                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>--}}
{{--                        </li>--}}
{{--                        <li class="dropdown">--}}
{{--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>--}}
{{--                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                <a class="dropdown-item" href="#">Settings 1</a>--}}
{{--                                <a class="dropdown-item" href="#">Settings 2</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a class="close-link"><i class="fa fa-close"></i></a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="clearfix"></div>--}}
{{--                </div>--}}
{{--                <div class="x_content">--}}
{{--                    <form id="form_product" novalidate="">--}}
{{--                        <input type="hidden" name="update_form" value="">--}}
{{--                        <div class="field item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3  label-align">Usia<span class="required">*</span></label>--}}
{{--                            <div class="col-md-6 col-sm-6">--}}
{{--                                <select class="form-control" name="age" id="age">--}}
{{--                                    <option value="">Pilih Usia</option>--}}
{{--                                    @foreach($age as $key => $val )--}}
{{--                                        <option value="{{$val->code}}">{{$val->name_score}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="field item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah Tanggungan<span class="required">*</span></label>--}}
{{--                            <div class="col-md-6 col-sm-6">--}}
{{--                                <select class="form-control" name="status_legal" id="status_legal">--}}
{{--                                    <option value="">Pilih Jumlah Tanggungan </option>--}}
{{--                                    @foreach($dependents_number as $key => $val )--}}
{{--                                        <option value="{{$val->code}}">{{$val->name_score}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="field item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3  label-align">Status Badan hukum<span class="required">*</span></label>--}}
{{--                            <div class="col-md-6 col-sm-6">--}}
{{--                                <select class="form-control" name="status_legal" id="status_legal">--}}
{{--                                        <option value="">Pilih Badan Hukum</option>--}}
{{--                                        @foreach($legal_status as $key => $val )--}}
{{--                                        <option value="{{$val->code}}">{{$val->name_score}}</option>--}}
{{--                                        @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="field item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3  label-align">Kriteria Usaha<span class="required">*</span></label>--}}
{{--                            <div class="col-md-6 col-sm-6">--}}
{{--                                <select class="form-control" name="bussiness_criteria" id="bussiness_criteria">--}}
{{--                                    <option value="">Pilih Kriteria Bisnis</option>--}}
{{--                                    @foreach($bussiness_criteria as $key => $val )--}}
{{--                                        <option value="{{$val->code}}">{{$val->name_score}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="field item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3  label-align">Lama Usaha<span class="required">*</span></label>--}}
{{--                            <div class="col-md-6 col-sm-6">--}}
{{--                                <select class="form-control" name="age_of_bussiness" id="age_of_bussiness">--}}
{{--                                    <option value="">Pilih Lama Usaha</option>--}}
{{--                                    @foreach($age_of_bussiness as $key => $val )--}}
{{--                                        <option value="{{$val->code}}">{{$val->name_score}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="field item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3  label-align">Status Tempat Usaha <span class="required">*</span></label>--}}
{{--                            <div class="col-md-6 col-sm-6">--}}
{{--                                <select class="form-control" name="bussiness_criteria" id="bussiness_criteria">--}}
{{--                                    <option value="">Pilih Status Tempat Usaha</option>--}}
{{--                                    @foreach($business_place_status as $key => $val )--}}
{{--                                        <option value="{{$val->code}}">{{$val->name_score}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="field item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3  label-align">Lama Bekerja sama dengan supplier <span class="required">*</span></label>--}}
{{--                            <div class="col-md-6 col-sm-6">--}}
{{--                                <select class="form-control" name="established_business" id="established_business">--}}
{{--                                    <option value="">Pilih Lama bekerja sama</option>--}}
{{--                                    @foreach($duration_active_merchant as $key => $val )--}}
{{--                                        <option value="{{$val->code}}">{{$val->name_score}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="field item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3  label-align">Kredit Biro <span class="required">*</span></label>--}}
{{--                            <div class="col-md-6 col-sm-6">--}}
{{--                                <select class="form-control" name="bureau_credit" id="bureau_credit">--}}
{{--                                    <option value="">Pilih Kredit Biro</option>--}}
{{--                                    @foreach($bureau_credit as $key => $val )--}}
{{--                                        <option value="{{$val->code}}">{{$val->name_score}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="field item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3  label-align">faktor pendapatan <span class="required">*</span></label>--}}
{{--                            <div class="col-md-6 col-sm-6">--}}
{{--                                <select class="form-control" name="income_factory" id="income_factory">--}}
{{--                                    <option value="">Pilih faktor pendapatan</option>--}}
{{--                                    @foreach($income_factory as $key => $val )--}}
{{--                                        <option value="{{$val->code}}">{{$val->name_score}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="field item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3  label-align">Shortfall <span class="required">*</span></label>--}}
{{--                            <div class="col-md-6 col-sm-6">--}}
{{--                               <input type="file" name="shortfall" id="shortfall">--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="ln_solid"></div>--}}
{{--                        <div class="item form-group">--}}
{{--                            <div class="col-md-6 col-sm-6 offset-md-3">--}}
{{--                                <a href="/product"><button class="btn btn-danger" type="button"><i class="fa fa-close"></i> Batal</button></a>--}}
{{--                                <button type="submit" id="btn_product_submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-6 col-sm-6  ">--}}
{{--            <div class="x_panel">--}}
{{--                <div class="x_title">--}}
{{--                    <h2>Daily active users <small>Sessions</small></h2>--}}
{{--                    <ul class="nav navbar-right panel_toolbox">--}}
{{--                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>--}}
{{--                        </li>--}}
{{--                        <li class="dropdown">--}}
{{--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>--}}
{{--                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                <a class="dropdown-item" href="#">Settings 1</a>--}}
{{--                                <a class="dropdown-item" href="#">Settings 2</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li><a class="close-link"><i class="fa fa-close"></i></a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="clearfix"></div>--}}
{{--                </div>--}}
{{--                <div class="x_content">--}}
{{--                    <ul class="list-unstyled timeline">--}}
{{--                        <li>--}}
{{--                            <div class="block">--}}
{{--                                <div class="tags">--}}
{{--                                    <a href="" class="tag">--}}
{{--                                        <span>Entertainment</span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="block_content">--}}
{{--                                    <h2 class="title">--}}
{{--                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="byline">--}}
{{--                                        <span>13 hours ago</span> by <a>Jane Smith</a>--}}
{{--                                    </div>--}}
{{--                                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="block">--}}
{{--                                <div class="tags">--}}
{{--                                    <a href="" class="tag">--}}
{{--                                        <span>Entertainment</span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="block_content">--}}
{{--                                    <h2 class="title">--}}
{{--                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="byline">--}}
{{--                                        <span>13 hours ago</span> by <a>Jane Smith</a>--}}
{{--                                    </div>--}}
{{--                                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="block">--}}
{{--                                <div class="tags">--}}
{{--                                    <a href="" class="tag">--}}
{{--                                        <span>Entertainment</span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="block_content">--}}
{{--                                    <h2 class="title">--}}
{{--                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="byline">--}}
{{--                                        <span>13 hours ago</span> by <a>Jane Smith</a>--}}
{{--                                    </div>--}}
{{--                                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
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
                                    <option value="{{$month}}" {{ $get_shortfall->month_1  == $month ? "selected" : "" }}  >{{$month}}</option>
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
                                    <option value="{{$month}}"  {{ $get_shortfall->month_2  == $month ? "selected" : "" }} >{{$month}}</option>
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
                                    <option value="{{$month}}" {{ $get_shortfall->month_3  == $month ? "selected" : "" }}>{{$month}}</option>
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
                                    <option value="{{$month}}" {{ $get_shortfall->month_4  == $month ? "selected" : "" }}>{{$month}}</option>
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
                                    <option value="{{$month}}" {{ $get_shortfall->month_5  == $month ? "selected" : "" }} >{{$month}}</option>
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
                                    <option value="{{$month}}" {{ $get_shortfall->month_6  == $month ? "selected" : "" }}>{{$month}}</option>
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
                                    <option value="{{$month}}" {{ $get_shortfall->month_7  == $month ? "selected" : "" }} >{{$month}}</option>
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
                                    <option value="{{$month}}" {{ $get_shortfall->month_8  == $month ? "selected" : "" }}>{{$month}}</option>
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
                                    <option value="{{$month}}" {{ $get_shortfall->month_9  == $month ? "selected" : "" }}>{{$month}}</option>
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
                                    <option value="{{$month}} " {{ $get_shortfall->month_10  == $month ? "selected" : "" }}>{{$month}}</option>
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
                                    <option value="{{$month}}" {{ $get_shortfall->month_10  == $month ? "selected" : "" }}>{{$month}}</option>
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
                                    <option value="{{$month}}" {{ $get_shortfall->month_12  == $month ? "selected" : "" }}>{{$month}}</option>
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
                            <button class="btn btn-danger" type="button">Batal</button>
                            <button type="submit" id="btn_submit_shortfall" class="btn btn-success">Submit</button>
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
                                        <th style="width:50%">Usia:</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Jumlah Tanggungan:</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Status Badan Hukum:</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Kriteria Usaha:</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Lama Usaha:</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Status tempat Usaha:</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Lama kerjasama dengan supplier:</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Biro Kredit:</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Faktor Pendapatan:</th>
                                        <td>-</td>
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
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Total Persentasi</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Status:</th>
                                        <td>-</td>
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
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script src="{{ asset('/js/pcg.js') }}"></script>
@endsection
@endsection