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
                                <input type="text" class="form-control">
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

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Tindakan</th>
                            <th>Status Telepon</th>
                            <th>Rekaman</th>
                            <th>Nama Agent</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>10 Maret 2021 13:15:00</td>
                            <td>Telepon Sibuk</td>
                            <td>-</td>
                            <td>Ogan</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>10 Maret 2021 14:15:00</td>
                            <td>Tersambung</td>
                            <td><button type="button" class="btn btn-sm btn-success">Mendengarkan Rekaman</button></td>
                            <td>Ogan</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="ln_solid"></div>
                </form>
            </div>
        </div>
    </div>
</div>



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
                                </div>
                                <div class="col">
                                    <p>{{$val}}</p>
                                </div>
                                <div class="col">
                                    <label><input type="radio" name="iCheck{{ $loop->iteration }}" class="flat"> Sama</label>
                                </div>
                                <div class="col">
                                    <label><input type="radio" name="iCheck{{ $loop->iteration }}" class="flat"> Beda</label>
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="keterangan" id="description{{ $loop->iteration }}" name="decription" class="form-control ">
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
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Penjelasan Kegiatan Usaha
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="input-group">
                                <textarea class="form-control" style="resize: none"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Kesimpulan Analisa Data
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="input-group">
                                <div class="row">
                                    <div class="col">
                                        <label><input type="radio" name="iCheck" class="flat"> Resiko Rendah</label>
                                    </div>
                                    <div class="col">
                                        <label><input type="radio" name="iCheck" class="flat"> Resiko Sedang</label>
                                    </div>
                                    <div class="col">
                                        <label><input type="radio" name="iCheck" class="flat"> Resiko Tinggi</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Catatan
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="input-group">
                                <textarea class="form-control" style="resize: none"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="ln_solid"></div>
                </form>
            </div>
        </div>
    </div>
</div>