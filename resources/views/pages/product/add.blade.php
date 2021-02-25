@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambah Data Produk</h2>
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
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Produk<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="product_name" placeholder="" required="required">
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tenor<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="tenor" data-validate-length-range="5,15" type="number"></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Biaya Admin<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="admin_fee" required="required" type="text" placeholder="%"></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Bunga<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="interest_fee" data-validate-linked="email" required="required" placeholder="%"></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Denda <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder="%"></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Maksimal Denda <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="max_penalty_fee" data-validate-minmax="10,100" required="required" placeholder="%">
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Status <span class="required">*</span></label>

                            <div class="col-md-6 col-sm-6">
                                <br/>
                                <div class="">
                                    <div class="">
                                        <label>
                                            <input type="checkbox" name="status" class="js-switch" checked /> Checked
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


    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Target Peminjam</h2>
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
                    <form id="form_product_target" novalidate="">
                        <input type="hidden" name="update_form" value="">
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Usia</label>
                            <div class="col-md-3 col-sm-3">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="product_name" placeholder="" required="required">
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="product_name" placeholder="" required="required">
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Minimal Pendapatan</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="mix_sallary" data-validate-length-range="5,15" type="number"></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Minimal Pendidikan</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control">
                                    <option></option>
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA / SLTA</option>
                                    <option>D3</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                </select>
                            </div>

                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Durasi Aktif Merchant</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder=""></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Daftar Bunga per lokasi</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control select2_multiple">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a href="/product"><button class="btn btn-danger" type="button"><i class="fa fa-close"></i> Batal</button></a>
                                <button type="submit" id="btn_product_target_submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Bidang Usaha Score</h2>
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
                    <form id="form_product_bussiness" novalidate="">
                        <input type="hidden" name="update_form" value="">
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Tidak berbadan hukum</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="product_name" placeholder="" required="required">
                            </div>

                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Yayasan</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="mix_sallary" data-validate-length-range="5,15" type="number"></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Persekutuan Komanditer (CV)</label>
                            <div class="col-md-6 col-sm-6">
                                 <input class="form-control" name="admin_fee" required="required" type="text" placeholder="">
                            </div>

                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Perusahaan Perseorangan</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder=""></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Perusahaan Terbatas</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder="">
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Usaha Dagang</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder="">
                            </div>
                        </div>
                        <div class="ln_solid"></div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Keuntungan Minus</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder="">
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Keuntungan < Rp. 3.000.000</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder="">
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Keuntungan 4.000.000 - 6.000.000</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder="">
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Keuntungan > Rp. 6.000.000</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder="">
                            </div>
                        </div>

                        <div class="ln_solid"></div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pendapatan < Rp. 3.000.000</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder="">
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pendapatan 3.000.000 - 6.000.000</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder="">
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pendapatan > Rp. 6.000.000</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="penalty_fee" data-validate-minmax="10,100" required="required" placeholder="">
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a href="/product"><button class="btn btn-danger" type="button"><i class="fa fa-close"></i> Batal</button></a>
                                <button type="submit" id="btn_product_bussines_submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
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
