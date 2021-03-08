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

                        <!-- Table row -->
                        <div class="row">
                            <div class="  table">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Qty</th>
                                        <th>Product</th>
                                        <th>Serial #</th>
                                        <th style="width: 59%">Description</th>
                                        <th>Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Call of Duty</td>
                                        <td>455-981-221</td>
                                        <td>El snort testosterone trophy driving gloves handsome gerry Richardson helvetica tousled street art master testosterone trophy driving gloves handsome gerry Richardson
                                        </td>
                                        <td>$64.50</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Need for Speed IV</td>
                                        <td>247-925-726</td>
                                        <td>Wes Anderson umami biodiesel</td>
                                        <td>$50.00</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Monsters DVD</td>
                                        <td>735-845-642</td>
                                        <td>Terry Richardson helvetica tousled street art master, El snort testosterone trophy driving gloves handsome letterpress erry Richardson helvetica tousled</td>
                                        <td>$10.70</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Grown Ups Blue Ray</td>
                                        <td>422-568-642</td>
                                        <td>Tousled lomo letterpress erry Richardson helvetica tousled street art master helvetica tousled street art master, El snort testosterone</td>
                                        <td>$25.99</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row no-print">
                            <div class=" ">
                                <a href="/loan/verification/data/{{$loan_request->uid}}"><button class="btn btn-primary pull-right"><i class="fa fa-credit-card"></i>  Verifikasi Data Peminjam</button></a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>



@endsection