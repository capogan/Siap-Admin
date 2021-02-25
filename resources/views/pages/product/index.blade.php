@extends('layouts.main')
@section('content')
            <div class="row" style="display: block;">
                <div class="clearfix"></div>

                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{$subtitle}}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="/product/add"><button class="btn btn-sm btn-primary">Tambah Produk</button></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <div class="table-responsive">
                                <table id="table_product" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama Produk</th>
                                        <th>Tenor (Hari)</th>
                                        <th>Biaya admin (%)</th>
                                        <th>Bunga (%)</th>
                                        <th>Denda (%)</th>
                                        <th>Maksimal Denda (%)</th>
                                        <th>Status</th>
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
@section('js')
    <script src="{{ asset('/js/product.js') }}"></script>
    <script>
        init_data_table();
    </script>
@endsection
@endsection
