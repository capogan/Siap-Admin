<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Verifikasi Telepon</h2>
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Telepon tempat usaha
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{$get_data_business->business_phone_number ?? '-' }}">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-phone"></i></button>
                                     <button type="button" class="btn btn-danger"><i class="fa fa-microphone"></i></button>
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Telepon Tempat Usaha Tambahan
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-phone"></i></button>
                                      <button type="button" class="btn btn-danger"><i class="fa fa-microphone"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="btn_desc_add" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Tindakan</th>
                            <th>Status Telepon</th>
                            <th>Deskripsi</th>
                            <th>Rekaman</th>
                            <th>Nama Agent</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($phone_description as $key => $val)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$val->created_at}}</td>
                                <td>{{Utils::convert_status_phone($val->phone_status)}}</td>
                                <td>{{$val->phone_description}}</td>
                                @if($val->phone_status == '4')
                                    <td><button type="button" class="btn btn-success"><i class="fa fa-headphones"></i></button></td>
                                @else
                                <td>-</td>
                                @endif
                                <td>{{$val->updated_by}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="ln_solid"></div>
                </form>
            </div>
        </div>
    </div>
</div>


<form id="crm_form" data-parsley-validate class="form-horizontal form-label-left">
<div class="row">
    <div class="x_panel">
        <div class="x_title">
            <h2>Penyamaan Data</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">Settings 1</a>
                        </li>
                        <li>
                            <a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="close-link">
                        <i class="fa fa-close"></i>
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="container">
                <div class="row">
                    <div class="col">

                        @foreach($data_crm as $key => $val)
                            <div class="row">
                                <div class="col">
                                    <p>{{$key}}</p>
                                    <input type="hidden" value="{{$key}}" id="variable" name="variable[]">
                                </div>
                                <div class="col">
                                    <p>{{$val}}</p>
                                    <input type="hidden" value="{{$val}}" id="data_user" name="data_user_{{ $loop->iteration }}">
                                </div>

                                <div class="col">
                                    <label><input type="radio" name="result_{{ $loop->iteration }}" value="1" class="flat"> Sama</label>
                                </div>
                                <div class="col">
                                    <label><input type="radio" name="result_{{ $loop->iteration }}"  value="0" class="flat"> Beda</label>
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="keterangan" id="description_{{ $loop->iteration }}" name="decription_{{ $loop->iteration }}" class="form-control ">
                                </div>
                            </div>
                        <br>
                        @endforeach

                        <!--form end-->
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Kesimpulan Telepon</h2>
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
                    <input type="hidden" name="id_loan" id="id_loan" value="{{$id_loan}}">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Penjelasan Kegiatan Usaha <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="input-group">
                                <textarea class="form-control" style="resize: none" id="description_business" name="description_business"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Kesimpulan Analisa Data <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="input-group">
                                <div class="row">
                                    <div class="col">
                                        <label><input type="radio" name="risk" class="flat" value="Resiko Rendah"> Resiko Rendah</label>
                                    </div>
                                    <div class="col">
                                        <label><input type="radio" name="risk" class="flat" value="Resiko Sedang"> Resiko Sedang</label>
                                    </div>
                                    <div class="col">
                                        <label><input type="radio" name="risk" class="flat" value="Resiko Tinggi"> Resiko Tinggi</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Catatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="input-group">
                                <textarea class="form-control" style="resize: none" name="noted" id="noted"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button class="btn btn-danger" type="button" id="btn_reject"><i class="fa fa-close"></i> Tolak</button>
                            <button type="button" class="btn btn-primary" id="btn_submit_crm"><i class="fa fa-external-link-square"></i> Konfirmasi</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</form>