@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Daftar user admin</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form id="add_pcg_form" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="full_name" name="full_name" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No Telepon </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="phone_number" class="form-control" type="text" name="phone_number">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea class="form-control" style="resize:none;" name="address" id="address"></textarea>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Username <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="username" class="form-control" type="text" name="username">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="password" class="form-control" type="password" name="password">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Penanganan Kode Member <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="member_code_list" id="member_code_list">
                                    <option value="">--Pilih Kode Member--</option>
                                    @foreach($pcg_member_code as $val)
                                         <option value="{{$val->member_code}}">{{$val->member_code}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Bank <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="id_bank" id="id_bank">
                                    @foreach($list_bank as $val)
                                        <option value="{{$val->id}}">{{$val->bank_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No Rekening <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="bank_account" class="form-control" type="text" name="bank_account">
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button id="btn_submit_admin" type="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@section('js')
    <script src="{{ asset('/js/settings.js') }}"></script>
    <script>
        init_data_table();
    </script>
@endsection
@endsection