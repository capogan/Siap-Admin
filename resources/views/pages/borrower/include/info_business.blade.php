
<form class="form-horizontal form-label-left">
    <div class="form-group row ">
        <label class="control-label col-md-3 col-sm-3 ">Nama Usaha</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" name="business_name" id="business_name" value="{{$get_data_business->business_name  ?? "-" }}" >
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Kriteria Usaha </label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="business_criteria" name="business_criteria" style="width: 100%;">
                <option></option>
                @foreach($business_criteria as $key => $val)
                    @if(isset($get_data_business->id_cap_of_business))
                        <option value="{{$val->id}}"  {{  $get_data_business->id_cap_of_business == $val->id ? "selected" : "" }}>{{ $val->title_business }}</option>
                    @else
                        <option value="{{$val->id}}">{{$val->title_business}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Industri </label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="business_income_factor" name="business_income_factor" style="width: 100%;">
                <option></option>
                @foreach($business_income_factory as $key => $val)
                    @if(isset($get_data_business->id_credit_score_income_factor))
                        <option value="{{$val->id}}"  {{  $get_data_business->id_credit_score_income_factor == $val->id ? "selected" : "" }}>{{ $val->industry_sectore }}</option>
                    @else
                        <option value="{{$val->id}}">{{$val->industry_sectore}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Status Badan Hukum Usaha </label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="business_legality" name="business_legality" style="width: 100%;">
                <option></option>
                @foreach($business_legality as $key => $val)
                    @if(isset($get_data_business->legality_status))
                        <option value="{{$val->id}}"  {{  $get_data_business->legality_status == $val->id ? "selected" : "" }}>{{ $val->legality_name }}</option>
                    @else
                        <option value="{{$val->id}}">{{$val->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Lama Usaha</label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" name="business_established_since" id="business_established_since">
                <option >--Pilih--</option>
                @foreach($business_established_since as $key => $val)
                    @if(isset($get_data_business->business_established_since))
                        <option value="{{$val->id}}" {{  $get_data_business->business_established_since == $val->id ? "selected" : "" }} >{{$val->title}}</option>
                    @else
                        <option value="{{$val->id}}">{{$val->title}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Total Karyawan</label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" name="number_of_employee" id="number_of_employee">
                <option selected=""> --Pilih--</option>
                @foreach($business_total_employee as $key => $val)
                    @if(isset($get_data_business->total_employees))
                        <option value="{{$val->id}}" {{  $get_data_business->total_employees == $val->id ? "selected" : "" }} >{{$val->title}}</option>
                    @else
                        <option value="{{$val->id}}">{{$val->title}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Deskripsi Usaha</label>
        <div class="col-md-9 col-sm-9 ">
            <textarea class="form-control" name="business_description" id="business_description">{{$get_data_business->business_description}}</textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Status Tempat Usaha</label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" name="business_location_status">
                <option >--Pilih--</option>
                @foreach($business_place_status as $key => $val)
                    @if(isset($get_data_business->business_place_status))
                        <option value="{{$val->id}}" {{  $get_data_business->business_place_status== $val->id ? "selected" : "" }} >{{$val->place_status_name}}</option>
                    @else
                        <option value="{{$val->id}}">{{$val->place_status_name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Lama Bekerja Sama</label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" name="business_partner">
                <option >--Pilih--</option>
                @foreach($partner_since as $key => $val)
                    @if(isset($get_data_business->partnership_since))
                        <option value="{{$val->id}}" {{  $get_data_business->partnership_since == $val->id ? "selected" : "" }} >{{$val->title}}</option>
                    @else
                        <option value="{{$val->id}}">{{$val->title}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Alamat Usaha</label>
        <div class="col-md-9 col-sm-9 ">
            <textarea class="form-control" name="business_full_address" id="business_full_address">{{$get_data_business->business_full_address}}</textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Propinsi</label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="province_business" name="province_business" onChange="get_city_business(this.value);">
                <option value="">Pilih Propinsi</option>
                @foreach($provinces as $key => $val)
                    @if(isset($get_data_business->business_province))
                        <option value="{{$val->id}}"  {{  $get_data_business->business_province == $val->id ? "selected" : "" }}>{{$val->name}}</option>
                    @else
                        <option value="{{$val->id}}">{{$val->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Kota</label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="city_business" name="city_business" onchange="get_district_business(this.value)">
                @if(isset($get_data_business->regencies_name ))
                    <option value="{{$get_data_business->business_city}}">{{$get_data_business->regencies_name}}</option>
                @endif
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Kecamatan</label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="district_business" name="district_business" onchange="get_villages_business(this.value)" >
                @if(isset($get_data_business->business_sub_kecamatan ))
                    <option value="{{$get_data_business->business_sub_kecamatan}}">{{$get_data_business->district_name}}</option>
                @endif
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Kelurahan</label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" id="vilages_business" name="vilages_business">
                @if(isset($get_data_business->business_sub_kelurahan ))
                    <option value="{{$get_data_business->business_sub_kelurahan}}">{{$get_data_business->villages_name}}</option>
                @endif
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Kodepos</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" value="{{$get_data_business->business_zip_code ?? ''}}" name="business_zip_code" placeholder="Kode Pos">
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Nomor Telepon</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" name="phone_number_business"  value="{{$get_data_business->business_phone_number ?? ''}}" class="form-control" placeholder="Nomor telepon kantor">
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Rata-rata Pendapatan 6 bulan terakhir</label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" name="revenue"id="revenue">
                <option value="">--Pilih Salah Satu--</option>
                <option value="minus" {{ $get_data_business->average_sales_revenue_six_month == 'minus' ? "selected" : "" }}>Minus</option>
                <option value="< Rp. 10.000.000" {{ $get_data_business->average_sales_revenue_six_month == '< Rp. 10.000.000' ? "selected" : "" }}>< Rp. 10.000.000</option>
                <option value="> Rp. 30.000.000" {{ $get_data_business->average_sales_revenue_six_month == '> Rp. 30.000.000' ? "selected" : "" }}>> Rp. 30.000.000</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Rata-rata Keuntungan 6 bulan terakhir</label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" name="profit"id="profit">
                <option value="">--Pilih Salah Satu--</option>
                <option value="minus" {{ $get_data_business->average_monthly_profit_six_month == 'minus' ? "selected" : "" }}>Minus</option>
                <option value="< Rp. 10.000.000" {{ $get_data_business->average_monthly_profit_six_month == '< Rp. 10.000.000' ? "selected" : "" }}>< Rp. 10.000.000</option>
                <option value="Rp. 10.000.001 - Rp. 30.000.000" {{ $get_data_business->average_monthly_profit_six_month == 'Rp. 10.000.001 - Rp. 30.000.000' ? "selected" : "" }}>Rp. 10.000.001 - Rp. 30.000.000</option>
                <option value="Rp. 30.000.001 - 50.000.000" {{ $get_data_business->average_monthly_profit_six_month == 'Rp. 30.000.001 - 50.000.000' ? "selected" : "" }}>Rp. 30.000.001 - 50.000.000</option>
                <option value="Rp. 50.000.001 - 100.000.000" {{ $get_data_business->average_monthly_profit_six_month == 'Rp. 50.000.001 - 100.000.000' ? "selected" : "" }}>Rp.50.000.001 - 100.000.000</option>
                <option value="> Rp. 100.000.000" {{ $get_data_business->average_monthly_profit_six_month == '> Rp. 100.000.000' ? "selected" : "" }}>> Rp. 100.000.000</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Rata-rata Pengeluaran 6 bulan terakhi</label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" name="expenditure"id="expenditure">
                <option value="">--Pilih Salah Satu--</option>
                <option value="minus" {{ $get_data_business->average_monthly_expenditure_six_month == 'minus' ? "selected" : "" }}>Minus</option>
                <option value="< Rp. 10.000.000" {{ $get_data_business->average_monthly_expenditure_six_month == '< Rp. 10.000.000' ? "selected" : "" }}>< Rp. 10.000.000</option>
                <option value="Rp. 10.000.001 - Rp. 30.000.000" {{ $get_data_business->average_monthly_expenditure_six_month == 'Rp. 10.000.001 - Rp. 30.000.000' ? "selected" : "" }}>Rp. 10.000.001 - Rp. 30.000.000</option>
                <option value="Rp. 30.000.001 - 50.000.000" {{ $get_data_business->average_monthly_expenditure_six_month == 'Rp. 30.000.001 - 50.000.000' ? "selected" : "" }}>Rp. 30.000.001 - 50.000.000</option>
                <option value="Rp. 50.000.001 - 100.000.000" {{ $get_data_business->average_monthly_expenditure_six_month == 'Rp. 50.000.001 - 100.000.000' ? "selected" : "" }}>Rp.50.000.001 - 100.000.000</option>
                <option value="> Rp. 100.000.000" {{ $get_data_business->average_monthly_expenditure_six_month == '> Rp. 100.000.000' ? "selected" : "" }}>> Rp. 100.000.000</option>
            </select>
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-9 col-sm-9  offset-md-3">
            <a href="/borrower/detail/{{$uid}}"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i> Batal</button></a>
            <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Simpan</button>
        </div>
    </div>

</form>