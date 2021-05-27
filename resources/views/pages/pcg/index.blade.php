@extends('layouts.main')
@section('content')

    <!-- page content -->

    <!-- top tiles -->
    <div class="row" style="display: inline-block;" >
        <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Jumlah Pengguna</span>
                <div class="count">123</div>
                <span class="count_bottom"> Orang pengguna </span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Jumlah Permintaan Pinjaman</span>
                <div class="count"></div>
                <span class="count_bottom"> Orang Permintaan </span>
            </div>

            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Jumlah Permintaan Pendanaan</span>
                <div class="count"></div>
                <span class="count_bottom"> Orang Permintaan </span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Total Borrower</span>
                <div class="count"></div>
                <span class="count_bottom"> Orang pengguna </span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Lender</span>
                <div class="count"></div>
                <span class="count_bottom"> Orang pengguna </span>
            </div>

        </div>
    </div>

@section('js')
    <script src="{{ asset('/js/home.js') }}"></script>
@endsection

@endsection
