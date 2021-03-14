@extends('layouts.main')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Detail No Faktur</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <section class="content invoice">


                        <!-- /.row -->

                        <div class="row">
                            <!-- /.col -->
                            <div class="col-md-6">
                                <h3 class="green"><i class="fa fa-paint-brush"></i> Skor Sementara : {{$loan_request->current_score->score ?? 0}}</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>

                                        <tr>
                                            <th>Nomor Faktur</th>
                                            <td>{{$loan_request->invoice_number}}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Peminjam</th>
                                            <td><a href="/borrower/{{$loan_request->uid}}">{{$loan_request->get_user->name}}</a></td>
                                        </tr>
                                        <tr>
                                            <th>Total Peminjaman</th>
                                            <td>{{$loan_request->loan_amount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Periode Peminjaman</th>
                                            <td>{{$loan_request->loan_period}}</td>
                                        </tr>
                                        <tr>
                                            <th>Biaya Admin(%)</th>
                                            <td>{{$loan_request->admin_fee_percentage}}</td>
                                        </tr>
                                        <tr>
                                            <th>Biaya Admin</th>
                                            <td>{{$loan_request->admin_fee_amount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Biaya Bunga(%)</th>
                                            <td>{{$loan_request->interest_fee_percentage}}</td>
                                        </tr>
                                        <tr>
                                            <th>Biaya Bunga</th>
                                            <td>{{$loan_request->interest_fee_amount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Total Pembayaran</th>
                                            <td>{{$loan_request->disbrusement}}</td>
                                        </tr>
                                        <tr>
                                            <th>Total Pengembalian</th>
                                            <td>{{$loan_request->repayment}}</td>
                                        </tr>
                                        <tr>
                                            <th>Denda(%)</th>
                                            <td>{{$loan_request->penalty_percentage}}</td>
                                        </tr>
                                        <tr>
                                            <th>Denda Maksimum(%)</th>
                                            <td>{{$loan_request->penalty_max_percentage}}</td>
                                        </tr>
                                        <tr>
                                            <th>Total Maksimal Denda</th>
                                            <td>{{$loan_request->penalty_max_amount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{Utils::convert_status($loan_request->status)}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Permintaan</th>
                                            <td>{{$loan_request->created_at}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>

                        <div class="row no-print">
                            <div class=" ">
                                <a href="/loan/verification/data/{{$loan_request->id}}"><button class="btn btn-primary pull-right"><i class="fa fa-credit-card"></i>  Verifikasi Data Peminjam</button></a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>



@endsection