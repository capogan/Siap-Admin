@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Pengguna</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-12">
                        <div class="x_panel">

                            <div class="x_content">
                                <br />
                                <form class="form-horizontal form-label-left">

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Nomor KTP</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" name="identity_number" id="identity_number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Nama Depan </label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" name="first_name" id="first_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Nama Belakang </label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" name="last_name" id="last_name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-sm-3  control-label">Jenis Kelamin</label>

                                        <div class="col-md-9 col-sm-9 ">

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" checked name="iCheck"> Pria
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="iCheck"> Wanita
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Tempat Lahir </label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" name="place_of_birth" id="place_of_birth">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 ">Tanggal Lahir </label>
                                        </label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function timeFunctionLong(input) {
                                                    setTimeout(function() {
                                                        input.type = 'text';
                                                    }, 60000);
                                                }
                                            </script>
                                        </div>
                                    </div>



                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-3">
                                            <button type="button" class="btn btn-primary">Cancel</button>
                                            <button type="reset" class="btn btn-primary">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
