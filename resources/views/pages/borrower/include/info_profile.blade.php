<form id="edit_profile_form" class="form-horizontal form-label-left">
    <input type="hidden" name="uid" id="uid" value="{{$personal_info->uid}}">
    <div class="form-group row ">
        <label class="control-label col-md-3 col-sm-3 ">Nomor KTP</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="identity_number" id="identity_number" value="{{$personal_info->identity_number}}" >
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Nama Depan </label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="first_name" id="first_name" value="{{$personal_info->first_name}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Nama Belakang </label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="last_name" id="last_name" value="{{$personal_info->last_name}}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-3 col-sm-3  control-label"></label>

        <div class="col-md-9 col-sm-9 ">
            @if($personal_info->gender == 'male')
                <div class="radio">
                    <label>
                        <input type="radio" class="flat" checked name="gender" value="male"> Pria
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" class="flat" name="gender" value="female"> Wanita
                    </label>
                </div>
            @else
                <div class="radio">
                    <label>
                        <input type="radio" class="flat"  name="gender" value="male"> Pria
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" class="flat" checked name="gender" value="female"> Wanita
                    </label>
                </div>
            @endif

        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Tempat Lahir </label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="pob" id="pob" value="{{$personal_info->place_of_birth}}">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 ">Tanggal Lahir </label>
        </label>
        <div class="col-md-9 col-sm-9 ">
            <input id="dob" name="dob" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text"  value="{{$personal_info->date_of_birth}}">
            <script>
                function timeFunctionLong(input) {
                    setTimeout(function() {
                        input.type = 'text';
                    }, 60000);
                }
            </script>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Alamat </label>
        <div class="col-md-9 col-sm-9 ">
            <textarea class="form-control" name="address" id="address">{{$personal_info->address}}</textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Provinsi </label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="province" name="province" onChange="get_city(this.value);" style="width: 100%;">
                <option></option>
                @foreach($provinces as $key => $val)
                    @if(isset($personal_info->province))
                        <option value="{{$val->id}}"  {{  $personal_info->province == $val->id ? "selected" : "" }}>{{$val->name}}</option>
                    @else
                        <option value="{{$val->id}}">{{$val->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Kota </label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="city" name="city" onchange="get_district(this.value)">
                @if(isset($personal_info->city ))
                    <option value="{{$personal_info->city}}">{{$personal_info->city_name}}</option>
                @endif
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Kecamatan </label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="district" name="district" onchange="get_villages(this.value)" >
                @if(isset($personal_info->district ))
                    <option value="{{$personal_info->district}}">{{$personal_info->district_name}}</option>
                @endif
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Kelurahan </label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="vilages" name="vilages">
                @if(isset($personal_info->villages ))
                    <option value="{{$personal_info->villages}}">{{$personal_info->villages_name}}</option>
                @endif
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">KodePos</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="zip_code" id="zip_code" value="{{$personal_info->zip_code}}">
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Nomor Telepon</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{$personal_info->phone_number}}">
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Nomor Whatsapp</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="whatsapp_number" id="whatsapp_number" value="{{$personal_info->whatsapp_number}}">
        </div>
    </div>



    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Pendidikan </label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control select2" id="education" name="education">
                <option>Pilih Pendidikan</option>
                @foreach($education as $val)
                    @if(isset($personal_info->education))
                        <option value="{{$val->id}}" {{ $personal_info->education == $val->id ? "selected" : "" }} >{{$val->level}}</option>
                    @else
                        <option value="{{$val->id}}" >{{$val->level}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Nomor NPWP</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="npwp_number" id="npwp_number" value="{{$personal_info->npwp_number}}">
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Total Kartu Kredit</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="total_cc" id="total_cc" value="{{$personal_info->total_cc}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Nomor BPJS Ketenaga Kerjaan</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="bpjs_number" id="bpjs_number" value="{{$personal_info->bjps_employee_number}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Nomor BPJS Kesehatan</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="bpjs_number" id="bpjs_number" value="{{$personal_info->bjps_health_number}}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-3 col-sm-3  control-label">Status Pernikahan</label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="married_status" name="married_status">
                <option value="">Pilih Status Pernikahan</option>
                @foreach($married_status as $val)
                    @if(isset($personal_info->married_status ))
                        <option value="{{$val->id}}" {{ $personal_info->married_status == $val->id ? "selected" : "" }} >{{$val->status}}</option>
                    @else
                        <option value="{{$val->id}}">{{$val->status}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Nama ibu kandung</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="mother_name" id="mother_name" value="{{$personal_info->mother_name}}">
        </div>
    </div>


    <div class="ln_solid"></div>
    <div class="result-message"></div>
    <div class="form-group">
        <div class="col-md-9 col-sm-9  offset-md-3">
            <a href="/borrower/detail/{{$uid}}"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i> Batal</button></a>
            <button type="submit" data-text="<i class='fa fa-edit'></i> Simpan" class="btn btn-success"><i class="fa fa-edit"></i> Simpan</button>
        </div>
    </div>

</form>