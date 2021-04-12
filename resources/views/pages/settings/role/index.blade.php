@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Wewenang (Roles)</h2>

                    <ul class="nav navbar-right panel_toolbox">
                        <li><a href="/setting/users/add"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah User</button></a></li>
                        <li><a href="/setting/role/add"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Wewenang</button></a></li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <table id="roles_table" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Nama Wewenang</th>
                                        <th>Tanggal Pembuatan</th>
                                        <th>Dibuat Oleh</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@section('js')
    <script src="{{ asset('/js/settings.js') }}"></script>
    <script>
        init_roles_table();
    </script>
@endsection
@endsection