@extends('layouts.main')
@section('content')


    <div class="row" style="display: block;">
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Permintaan Pinjaman</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="table-responsive">
                        <table id="table_lender" class="table table-striped jambo_table bulk_action" style="width:100%">
                            <thead>

                            <th class="column-title">No</th>
                            <th class="column-title">Nama</th>
                            <th class="column-title">Email</th>
                            <th class="column-title">Tanggal Daftar</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
@section('js')
    <script src="{{ asset('/js/lender_verification.js') }}"></script>
    <script>
        init_data_table();
    </script>

@endsection

@endsection
