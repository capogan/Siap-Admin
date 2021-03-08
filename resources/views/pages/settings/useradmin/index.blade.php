@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Daftar Admin</h2>

                <ul class="nav navbar-right panel_toolbox">
                    <li><a href="/setting/users/add"><button class="btn btn-sm btn-primary">Tambah User</button></a></li>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">

                            <table id="user_admin_table" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Tingkat</th>
                                    <th>Tanggal Pembuatan</th>
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
        init_data_table();
    </script>
@endsection
@endsection