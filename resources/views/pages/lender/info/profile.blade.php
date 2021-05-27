<form class="form-horizontal form-label-left">

    <div class="form-group row">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nomor KTP <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->identity_number}}</h5>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Depan <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->first_name}}</h5>
        </div>
    </div>
    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Belakang</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->last_name}}</h5>
        </div>
    </div>
    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->email}}</h5>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
        <div class="col-md-6 col-sm-6 ">
            <div id="gender" class="btn-group" data-toggle="buttons">
                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                    <input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Male &nbsp;
                </label>
                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                    <input type="radio" name="gender" value="female" class="join-btn"> Female
                </label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->place_of_birth}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->date_of_birth}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->address}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Propinsi</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->province}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kota</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->city}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kodepos</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->zip_code}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Terakhir</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->level_education}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Tanggungan</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->number_of_dependents}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nomor NPWP</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->npwp_number}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Kartu Kredit</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->total_cc}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No BPJS Ketenagakerjaan</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->bpjs_employee_number}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No BPJS Kesehatan</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->bpjs_health_number}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nomor Telepon</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->phone_number}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nomor Whatsapp</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->whatsapp_number}}</h5>
        </div>
    </div>
    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Status Pernikahan</label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->status_married}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama ibu kandung </label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->mother_name}}</h5>
        </div>
    </div>

    <div class="ln_solid"></div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Saudara </label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->emergency_name}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Hubungan </label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->sibling_name}}</h5>
        </div>
    </div>
    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nomor Telepon Saudara </label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->emergency_phone}}</h5>
        </div>
    </div>

    <div class="form-group row">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat </label>
        <div class="col-md-6 col-sm-6 ">
            <h5 class="" for="first-name">{{$user->emergency_full_address}}</h5>
        </div>
    </div>

</form>