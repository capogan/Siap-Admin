@extends('layouts.main')
@section('content')

    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-bars"></i> Tabs <small>Float right</small></h2>
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


                <ul class="nav nav-tabs justify-content-end bar_tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">Detail Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">Detail Score</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Shortfall</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                        <section class="content invoice">
                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-md-12">
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
                            <!-- /.row -->
                        </section>
                    </div>
                </div>

            </div>
        </div>
        <a href="step-1"><button class="btn btn-bd-download pull-left"><i class="fa fa-arrow-left"></i> Kembali</button></a>
        <a href="step-3"><button class="btn btn-primary pull-right"><i class="fa fa-arrow-right"></i> Lanjut</button></a>
    </div>


@section('js')
    <script src="{{ asset('/js/pcg.js') }}"></script>
    <script>
        $('input').on('change click keyup input paste',(function (event) {
            $(this).val(function (index, value) {
                return 'Rp' + value.replace(/(?!\.)\D/g, "").replace(/(?<=\..*)\./g, "").replace(/(?<=\.\d\d).*/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            });
        }));

    </script>
@endsection

@endsection