@extends('layouts.main')
@section('content')

    <div class="row" style="display: block;">
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Pengingat Penagihan</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <td>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan">
                            </td>
                            <th>Nomor Pengajuan</th>
                            <td> <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan"></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan">
                            </td>
                            <th>Nomor Pengajuan</th>
                            <td> <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan"></td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">
                                <button class="btn btn-primary">
                                    Cari
                                </button>
                                <button class="btn btn-success">
                                    Reset
                                </button>
                            </th>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-head-fixed text-nowrap text-center">
                    <thead>
                    <tr>
                        <th>No Urut</th>
                        <th>Kode</th>
                        <th>Produk</th>
                        <th>Nama</th>
                        <th>Jumlah Pinjaman yang diajukan</th>
                        <th>Tanggal Pencairan Dana</th>
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>p2378237289</td>
                        <td>Pinjaman Produktif</td>
                        <td>Edy</td>
                        <td>1000000</td>
                        <td>02/02/2021</td>
                        <td>02/02/2021</td>
                        <td>Keterlambatan</td>
                        <td>
                            <a href="">Detail</a>
                            <a href="/bill/reminder/detail">Pengajuan Detail</a>
                            <a href="">Kunci</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>p2378237289</td>
                        <td>Pinjaman Produktif</td>
                        <td>Edy</td>
                        <td>1000000</td>
                        <td>02/02/2021</td>
                        <td>02/02/2021</td>
                        <td>Keterlambatan</td>
                        <td>
                            <a href="">Detail</a>
                            <a href="/bill/reminder/detail">Pengajuan Detail</a>
                            <a href="">Kunci</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>p2378237289</td>
                        <td>Pinjaman Produktif</td>
                        <td>Edy</td>
                        <td>1000000</td>
                        <td>02/02/2021</td>
                        <td>02/02/2021</td>
                        <td>Keterlambatan</td>
                        <td>
                            <a href="">Detail</a>
                            <a href="/bill/reminder/detail">Pengajuan Detail</a>
                            <a href="">Kunci</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>p2378237289</td>
                        <td>Pinjaman Produktif</td>
                        <td>Edy</td>
                        <td>1000000</td>
                        <td>02/02/2021</td>
                        <td>02/02/2021</td>
                        <td>Keterlambatan</td>
                        <td>
                            <a href="">Detail</a>
                            <a href="/bill/reminder/detail">Pengajuan Detail</a>
                            <a href="">Kunci</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>p2378237289</td>
                        <td>Pinjaman Produktif</td>
                        <td>Edy</td>
                        <td>1000000</td>
                        <td>02/02/2021</td>
                        <td>02/02/2021</td>
                        <td>Keterlambatan</td>
                        <td>
                            <a href="">Detail</a>
                            <a href="/bill/reminder/detail">Pengajuan Detail</a>
                            <a href="">Kunci</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>p2378237289</td>
                        <td>Pinjaman Produktif</td>
                        <td>Edy</td>
                        <td>1000000</td>
                        <td>02/02/2021</td>
                        <td>02/02/2021</td>
                        <td>Keterlambatan</td>
                        <td>
                            <a href="">Detail</a>
                            <a href="/bill/reminder/detail">Pengajuan Detail</a>
                            <a href="">Kunci</a>
                        </td>
                    </tr>

                    </tbody>
                    </table>
                </div>
            </div>







        </div>
    </div>
</div>

@endsection