@extends('layouts.main')
@section('content')
    <style>
        .glyphicon { margin-right:5px; }

    </style>
    <div class="row" style="display: block;">
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Pengingat Penagihan</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    {{--                @include('pages.collect.tab.advance_search')--}}
                </div>


                <div class="x_content">
                    <div class="table-responsive">
                        <table id="table_bad_credit" class="table table-striped jambo_table bulk_action dataTable no-footer dtr-inline" style="width:100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>No Invoice</th>
                                <th>Nama</th>
                                <th>Pembayaran ke-</th>
                                <th>Jumlah</th>
                                <th>Tanggal Jatuh Tempo</th>
                                <th>Status</th>
                                <th></th>
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

@section('js')
    <script src="{{ asset('/js/badcredit.js') }}"></script>
    <script>
        init_data_table();
    </script>
@endsection

@endsection