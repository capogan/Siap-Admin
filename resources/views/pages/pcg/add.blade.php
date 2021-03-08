@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambah Data</h2>
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
                    <form id="form_product" novalidate="">
                        <input type="hidden" name="update_form" value="">
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Usia<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="age" id="age">
                                    <option value="">Pilih Usia</option>
                                    @foreach($age as $key => $val )
                                        <option value="{{$val->code}}">{{$val->name_score}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah Tanggungan<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="status_legal" id="status_legal">
                                    <option value="">Pilih Jumlah Tanggungan </option>
                                    @foreach($dependents_number as $key => $val )
                                        <option value="{{$val->code}}">{{$val->name_score}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Status Badan hukum<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="status_legal" id="status_legal">
                                        <option value="">Pilih Badan Hukum</option>
                                        @foreach($legal_status as $key => $val )
                                        <option value="{{$val->code}}">{{$val->name_score}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Kriteria Usaha<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="bussiness_criteria" id="bussiness_criteria">
                                    <option value="">Pilih Kriteria Bisnis</option>
                                    @foreach($bussiness_criteria as $key => $val )
                                        <option value="{{$val->code}}">{{$val->name_score}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Lama Usaha<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="age_of_bussiness" id="age_of_bussiness">
                                    <option value="">Pilih Lama Usaha</option>
                                    @foreach($age_of_bussiness as $key => $val )
                                        <option value="{{$val->code}}">{{$val->name_score}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Status Tempat Usaha <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="bussiness_criteria" id="bussiness_criteria">
                                    <option value="">Pilih Status Tempat Usaha</option>
                                    @foreach($business_place_status as $key => $val )
                                        <option value="{{$val->code}}">{{$val->name_score}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Lama Bekerja sama dengan supplier <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="established_business" id="established_business">
                                    <option value="">Pilih Lama bekerja sama</option>
                                    @foreach($duration_active_merchant as $key => $val )
                                        <option value="{{$val->code}}">{{$val->name_score}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Kredit Biro <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="bureau_credit" id="bureau_credit">
                                    <option value="">Pilih Kredit Biro</option>
                                    @foreach($bureau_credit as $key => $val )
                                        <option value="{{$val->code}}">{{$val->name_score}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">faktor pendapatan <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="income_factory" id="income_factory">
                                    <option value="">Pilih faktor pendapatan</option>
                                    @foreach($income_factory as $key => $val )
                                        <option value="{{$val->code}}">{{$val->name_score}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Shortfall <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                               <input type="file" name="shortfall" id="shortfall">
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a href="/product"><button class="btn btn-danger" type="button"><i class="fa fa-close"></i> Batal</button></a>
                                <button type="submit" id="btn_product_submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection