
<form  class="form-horizontal form-label-left">
    <div class="form-group row ">
        <label class="control-label col-md-3 col-sm-3 ">Nama Kontak Darurat<span>*</span></label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" placeholder="Nama Kerabat" id="emergency_name" name="emergency_name" value="{{isset($get_data_emergency->emergency_name ) ? $get_data_emergency->emergency_name : '' }}" >
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-3 col-sm-3 ">Hubungan </label>
        <div class="col-md-9 col-sm-9 ">
            <select class="form-control" name="relationship_as" id="relationship_as">
                <option value="">Pilih Hubungan</option>
                @foreach($siblings as $val)
                    @if(isset($get_data_emergency->id_siblings_master))
                        <option value="{{$val->id}}" {{  $get_data_emergency->id_siblings_master== $val->id ? "selected" : "" }} >{{$val->sibling_name}}</option>
                    @else
                        <option value="{{$val->id}}" >{{$val->sibling_name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row ">
        <label class="control-label col-md-3 col-sm-3 ">Nomor Telepon Kerabat<span>*</span></label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" class="form-control" placeholder="Nomor Telepon Kerabat" id="emergency_phone" name="emergency_phone" value="{{isset($get_data_emergency->emergency_phone ) ? $get_data_emergency->emergency_phone : '' }}" >
        </div>
    </div>

    <div class="form-group row ">
        <label class="control-label col-md-3 col-sm-3 ">Alamat<span>*</span></label>
        <div class="col-md-9 col-sm-9 ">
            <textarea class="form-control" name="emergency_full_address" id="emergency_full_address">{{isset($get_data_emergency->emergency_full_address ) ? $get_data_emergency->emergency_full_address : '' }}</textarea>
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