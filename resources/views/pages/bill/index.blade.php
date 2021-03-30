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
                            <th>Tujuan Nomor Telepon</th>
                            <td>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Pilih...</option>
                                    <option>Telepon Kantor</option>
                                    <option>Ponsel</option>
                                    <option>Whatsapp</option>
                                </select>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-success">
                                    <i class="fa fa-phone"></i>
                                </button>
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Nama Peminjam</th>
                            <td>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan">
                            </td>
                            <td class="text-center">
                                <button class="btn btn-success">
                                    <i class="fa fa-phone"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th>Staus</th>
                            <td colspan="2">
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Pilih...</option>
                                    <option>Tersambung</option>
                                    <option>Tidak Aktif</option>
                                    <option>Tidak Terdaftar</option>
                                    <option>Tidak di Tempat</option>
                                    <option>Salah Sambung</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Janji Bayar</th>
                            <td colspan="2">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td colspan="2">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nomor Tujuan</th>
                            <th>Nomor Telepon</th>
                            <th>Status</th>
                            <th>Janji Bayar</th>
                            <th>Keterangan</th>
                            <th>Rekaman</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>09/Januari/2021</td>
                            <td>Kantor</td>
                            <td>021 321 321</td>
                            <td>Tersambung</td>
                            <td>20/20/2021</td>
                            <td>Keterangan</td>
                            <td>Keterangan</td>
                        </tr>
                        <tr>
                            <td>09/Januari/2021</td>
                            <td>Kantor</td>
                            <td>021 321 321</td>
                            <td>Tersambung</td>
                            <td>20/20/2021</td>
                            <td>Keterangan</td>
                            <td>Keterangan</td>
                        </tr>
                        <tr>
                            <td>09/Januari/2021</td>
                            <td>Kantor</td>
                            <td>021 321 321</td>
                            <td>Tersambung</td>
                            <td>20/20/2021</td>
                            <td>Keterangan</td>
                            <td>Keterangan</td>
                        </tr>
                        <tr>
                            <td>09/Januari/2021</td>
                            <td>Kantor</td>
                            <td>021 321 321</td>
                            <td>Tersambung</td>
                            <td>20/20/2021</td>
                            <td>Keterangan</td>
                            <td>Keterangan</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
            <div class="card-header d-flex p-0">
                <ul class="nav nav-pills ml-auto p-2">
                    <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab"><i class="fa fa-briefcase pr-2"></i>Data Pinjaman</a></li>
                     <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Data Pribadi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Data Usaha</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Data Verifikator</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab_5" data-toggle="tab">Kode Pembayaran</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="card-header">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Penaggihan</li>
                                    <li class="breadcrumb-item text-bold">Data Pinjaman</li>
                                </ol>
                            </nav>
                            <div class="row">
                                <div class="col-12">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Nomor Pinjaman</th>
                                            <td>021-213-321</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>Nama Peminjam</th>
                                            <td>
                                                jajang
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nominal Pinjaman</th>
                                            <td>
                                                Rp. 10.250.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tangal Pencairan</th>
                                            <td>
                                                29/01/2021
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jangka Waktu Pinjaman</th>
                                            <td>
                                                14 Hari
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Biaya Administrasi</th>
                                            <td>
                                                Rp. 250.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Pinjaman diterima</th>
                                            <td>
                                                Rp. 10.0000.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Bunga</th>
                                            <td>
                                                Rp. 205.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Denda</th>
                                            <td>
                                                0
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nilai Tagihan</th>
                                            <td>
                                                Rp. 10.455.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Jatuh Temp</th>
                                            <td>
                                                14/03/2021
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Keterlambatan</th>
                                            <td>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12 mt-4">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">Penaggihan</li>
                                            <li class="breadcrumb-item text-bold">Data Pembelian</li>
                                        </ol>
                                    </nav>
                                    <table id="example1" class="table table-bordered table-striped align-middle">
                                        <thead>
                                        <tr>
                                            <th>Nomor Faktur</th>
                                            <td>31239893012</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>Nilai Pembelian</th>
                                            <td>Rp. 5000.0000,00</td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi Faktur</td>
                                            <td>
                                                <textarea class="form-control" rows="2" placeholder="data banyak data banyakdata banyakdata banyakdata banyakdata banyakdata banyakdata banyakdata banyakdata banyakdata banyakdata banyakdata banyakdata banyak" disabled></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Penerima Barang</td>
                                            <td>02/02/2021</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_2">
                        <div class="row">
                            <div class="col-4">
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="img-fluid img-circle my-4"
                                                 src="image/profile.png" width="200px">
                                            <h5>Foto KTP</h5>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="img-fluid img-circle my-4"
                                                 src="image/profile.png" width="200px">
                                            <h5>Bukti Pinjaman</h5>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="col-8">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">Penaggihan</li>
                                        <li class="breadcrumb-item text-bold">Data Pribadi</li>
                                    </ol>
                                </nav>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <td>Jajang</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Nomor KTP</th>
                                        <td>
                                            367111029189812
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status Penikahan</th>
                                        <td>
                                            Kawin
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tujuan Pinjaman</th>
                                        <td>
                                            Modal Bisnis
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Alamat Domisili</th>
                                        <td>
                                            Jl.Merdeka Barat Jakarta Selatan
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Telepon Pribadi</th>
                                        <td>
                                            0897627272
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Telepon BANK</th>
                                        <td>
                                            0897863173
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Kontak Tambahan</th>
                                    </tr>
                                    <tr>
                                        <th>Anak Laki-Laki/Perempuan</th>
                                        <td>
                                            Perempuan
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pasangan</th>
                                        <td>
                                            Junah
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Lokasi Pengajuan</th>
                                    </tr>
                                    <tr>
                                        <th>Kordinat</th>
                                        <td>
                                            <a href="https://www.google.com/maps/d/u/0/viewer?ie=UTF8&hl=en&t=h&om=1&msa=0&ll=32.884590000000024%2C-117.24199&spn=0.001838%2C0.003787&z=19&mid=1GC-26pGg4Z58eto8mukpi6dyUj4">https://www.google.com/maps/@-6.2273378,106.8296488,15z</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_3">
                        <div class="row">
                            <div class="col-4">
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="img-fluid img-circle my-4"
                                                 src="image/profile.png" width="200px">
                                            <h5>Foto ID Card</h5>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="img-fluid img-circle my-4"
                                                 src="image/profile.png" width="200px">
                                            <h5>Slip Gaji</h5>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="col-8">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">Penaggihan</li>
                                        <li class="breadcrumb-item text-bold">Data Usaha</li>
                                    </ol>
                                </nav>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Nama Peminjam</th>
                                        <td>Jajang</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Nama Perusahaan</th>
                                        <td>
                                            PT. Fintech Indonesia
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Alamat Perusahan</th>
                                        <td>
                                            Jl.Merdeka Barat Jakarta Selatan
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Jabatan</th>
                                        <td>
                                            Staff
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Detail Pekerjaan</th>
                                        <td>
                                            Admin
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Penggajian</th>
                                        <td>
                                            Bulanan 23
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Telepon Kantor</th>
                                        <td>
                                            021-90821832
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_4">
                        <div class="row">
                            <div class="col-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">Penaggihan</li>
                                        <li class="breadcrumb-item text-bold">Data Verifikasi Pinjaman</li>
                                    </ol>
                                </nav>
                                <table id="example1" class="table table-bordered table-striped align-middle">
                                    <thead>
                                    <tr>
                                        <th>Nama Pemohon</th>
                                        <td>Ogan</td>
                                        <td class="text-center">
                                            <span class="bg-success p-1"><i class="fa fa-check pr-2"></i> Data Sama</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="alias suryanto" disabled>
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Nomor Telepon Tempat Usaha</th>
                                        <td>0932193821938219</td>
                                        <td class="text-center">
                                            <span class="bg-success p-1"><i class="fa fa-check pr-2"></i> Data Sama</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Alamat Tempat Usaha</th>
                                        <td>Jl. Jendral Sudirman No.46</td>
                                        <td class="text-center">
                                            <span class="bg-success p-1"><i class="fa fa-check pr-2"></i> Data Sama</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Bidang Usaha</th>
                                        <td>Jasa Pencetakan</td>
                                        <td class="text-center">
                                            <span class="bg-success p-1"><i class="fa fa-check pr-2"></i> Data Sama</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Detail Jenis Bidang Usaha</th>
                                        <td>Detail</td>
                                        <td class="text-center">
                                            <span class="bg-success p-1"><i class="fa fa-check pr-2"></i> Data Sama</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Badan Hukum Usaha</th>
                                        <td>Pesoalan Terbatas</td>
                                        <td class="text-center">
                                            <span class="bg-success p-1"><i class="fa fa-check pr-2"></i> Data Sama</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status Tempat Usaha</th>
                                        <td>Milik Pribadi</td>
                                        <td class="text-center">
                                            <span class="bg-success p-1"><i class="fa fa-check pr-2"></i> Data Sama</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Rata Pendapatan Penjualan Perbulan dalam 6 bulan terkhir</th>
                                        <td>> Rp. 30.000.000</td>
                                        <td class="text-center">
                                            <span class="bg-success p-1"><i class="fa fa-check pr-2"></i> Data Sama</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Rata-Rata Keuntungan Perbulan dalam 6 bulan terakhir</th>
                                        <td>< Rp. 30.000.000</td>
                                        <td class="text-center">
                                            <span class="bg-success p-1"><i class="fa fa-check pr-2"></i> Data Sama</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Rata-Rata Keuntungan Perbulan dalam 6 bulan terakhir</th>
                                        <td>Rp. 10.000.000 - Rp. 30.0000.000</td>
                                        <td class="text-center">
                                            <span class="bg-success p-1"><i class="fa fa-check pr-2"></i> Data Sama</span>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" disabled>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_5">
                        <div class="row">
                            <div class="col-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">Penaggihan</li>
                                        <li class="breadcrumb-item text-bold">Riwayat Pembayaran</li>
                                    </ol>
                                </nav>
                                <table id="example1" class="table table-bordered table-striped align-middle">
                                    <thead>
                                    <tr>
                                        <th>Nama Peminjam</th>
                                        <td>Jajang</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Total Tagihan</th>
                                        <td>Rp. 1500.000,00</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-primary">Buat Kode Pembayaran</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bank Negara Indonesia</td>
                                        <td>9891237183712</td>
                                    </tr>
                                    <tr>
                                        <td>Masa Berlaku</td>
                                        <td>14:00 29/09/2021</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
    </div>
</div>

@endsection