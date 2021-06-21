<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Verifikasi Telepon</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Telepon Darurat
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{$get_data_emergency->emergency_phone ?? "-"}}">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-phone"></i></button>
                                     <button type="button" class="btn btn-danger"><i class="fa fa-microphone"></i></button>
                                </span>
                            </div>

                        </div>
                    </div>

                    <button type="button" id="btn_desc_add_1" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                    <table class="table table-striped" id="table_description_crm_1">
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
                        @foreach($phone_description_emergency_contact as $key => $val)
                            <tr>
                                <td class="number">{{$loop->iteration}}</td>
                                <td>{{$val->created_at}}</td>
                                <td>{{Utils::convert_status_phone($val->phone_status)}}</td>
                                <td>{{$val->phone_description}}</td>
                                @if($val->phone_status == '5')
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

<div class="row">
    <div class="col-md-6 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Informasi Kontak Darurat</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->emergency_name ?? "-"}}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Hubungan
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->sibling_name ?? "-"}}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nomor Telepon Saudara</label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->emergency_phone ?? "-"}}</h5>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
                        <div class="col-md-6 col-sm-6 ">
                            <h5 class="" for="first-name">{{$get_data_emergency->emergency_full_address ?? "-"}}</h5>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                </form>
            </div>
        </div>
    </div>


    <div class="col-md-6 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Kesimpulan</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>

                <form id="result_from_emergency_form">
                    <label class="col-form-label label-align" for="first-name">Kesimpulan <span class="required">*</span>
                    </label>
                    <input type="hidden" name="uid" id="uid" value="{{$uid}}">
                    <select id="result_text" name="result_text" class="form-control">
                        <option value="">--Pilih salah satu--</option>
                        <option value="recommendation" {{ $get_data_emergency->emergency_response === "recommendation" ? "selected" : "" }}>Rekomendasi</option>
                        <option value="notrecommended" {{ $get_data_emergency->emergency_response === "notrecommended" ? "selected" : "" }}>Tidak direkomendasi</option>

                    </select>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<div class="ln_solid"></div>
<button type="button" class="btn btn-primary next-step float-right">Selanjutnya ></button>
<button class="btn btn-danger float-right" type="button" onclick="reject_function(11)"><i class="fa fa-close"></i> Tolak</button>
