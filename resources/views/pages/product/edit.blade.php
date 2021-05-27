@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ubah Data Produk</h2>
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
                        <input type="hidden" name="update_form" value="active">
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Produk<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="product_name" placeholder="" value="{{$product->name}}">
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tenor<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="tenor" data-validate-length-range="5,15" type="number" value="{{$product->tenor}}"></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Biaya Admin<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="admin_fee" required="required" type="text" placeholder="%" value="{{$product->admin_fee}}"></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Bunga<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="interest_fee" data-validate-linked="email" required="required" placeholder="%"  value="{{$product->interest_fee}}"></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Denda <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder="%"  value="{{$product->penalty_fee}}"></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Maksimal Denda <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="max_penalty_fee" data-validate-minmax="10,100" required="required" placeholder="%"  value="{{$product->max_penalty_fee}}">
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Status <span class="required">*</span></label>

                            <div class="col-md-6 col-sm-6">
                                <br/>
                                <div class="">
                                    <div class="">
                                        <label>
                                            <input type="checkbox" name="status" class="js-switch" {{ $product->status ==  true ? 'checked' : ''  }} />
                                        </label>
                                    </div>
                                </div>
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
@section('js')
    <script src="{{ asset('/js/product.js') }}"></script>
@endsection

@endsection
