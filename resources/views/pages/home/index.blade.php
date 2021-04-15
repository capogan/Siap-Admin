@extends('layouts.main')
@section('content')

    <!-- page content -->

            <!-- top tiles -->
            <div class="row" style="display: inline-block;" >
                <div class="tile_count">
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Jumlah Pengguna</span>
                        <div class="count">{{$count_users}}</div>
                        <span class="count_bottom"> Orang pengguna </span>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Jumlah Permintaan Pinjaman</span>
                        <div class="count">{{$count_loan}}</div>
                        <span class="count_bottom"> Orang Permintaan </span>
                    </div>

                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Jumlah Permintaan Pendanaan</span>
                        <div class="count green">{{$count_funding}}</div>
                        <span class="count_bottom"> Orang Permintaan </span>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Total Borrower</span>
                        <div class="count green">{{$count_borrower}}</div>
                        <span class="count_bottom"> Orang pengguna </span>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Lender</span>
                        <div class="count">{{$count_lender}}</div>
                        <span class="count_bottom"> Orang pengguna </span>
                    </div>

                </div>
            </div>
            <!-- /top tiles -->
        <!-- /page content -->
    <div class="row">
        <div class="col-md-6 col-sm-6  widget_tally_box">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Monitor</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content" style="height:250px;overflow:auto;">
                    <table id="table_monitor" class="table table-striped jambo_table bulk_action" style="width:100%">
                        <thead>
                        <th class="column-title">Status</th>
                        <th class="column-title">Jumlah</th>
                        </thead>
                        <tbody>
                        @foreach($master_status as $val)
                            <tr>
                            <td>{{$val->title}}</td>
                            <td>{{$val->count}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@section('js')
    <script src="{{ asset('/js/home.js') }}"></script>
@endsection

@endsection
