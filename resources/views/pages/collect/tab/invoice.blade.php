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
                <div class="col-md-12">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>Nomor Faktur</th>
                                <td>{{$loan->invoice_number}}</td>
                            </tr>
                            <tr>
                                <th>Nama Peminjam</th>
                                <td><a href="/borrower/{{$loan->uid}}">{{$loan->get_user->name}}</a></td>
                            </tr>
                            <tr>
                                <th>Total Peminjaman</th>
                                <td>{{Utils::convert_currency($loan->loan_amount)}}</td>
                            </tr>
                            <tr>
                                <th>Periode Peminjaman</th>
                                <td>{{$loan->loan_period}}</td>
                            </tr>
                            <tr>
                                <th>Biaya Admin(%)</th>
                                <td>{{$loan->admin_fee_percentage}}</td>
                            </tr>
                            <tr>
                                <th>Biaya Admin</th>
                                <td>{{Utils::convert_currency($loan->admin_fee_amount)}}</td>
                            </tr>
                            <tr>
                                <th>Biaya Bunga(%)</th>
                                <td>{{$loan->interest_fee_percentage}}</td>
                            </tr>
                            <tr>
                                <th>Biaya Bunga</th>
                                <td>{{Utils::convert_currency($loan->interest_fee_amount)}}</td>
                            </tr>
                            <tr>
                                <th>Total Pembayaran</th>
                                <td>{{Utils::convert_currency($loan->disbrusement)}}</td>
                            </tr>
                            <tr>
                                <th>Total Pengembalian</th>
                                <td>{{Utils::convert_currency($loan->repayment)}}</td>
                            </tr>
                            <tr>
                                <th>Denda(%)</th>
                                <td>{{$loan->penalty_percentage}}</td>
                            </tr>
                            <tr>
                                <th>Denda Maksimum(%)</th>
                                <td>{{$loan->penalty_max_percentage}}</td>
                            </tr>
                            <tr>
                                <th>Total Maksimal Denda</th>
                                <td>{{$loan->penalty_max_amount}}%</td>
                            </tr>

                            <tr>
                                <th>Tanggal Permintaan</th>
                                <td>{{$loan->created_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.col -->
            </div>

        </section>
    </div>
</div>