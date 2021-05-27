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
                                <th>Pembayaran ke-</th>
                                <td>{{$stages}}</td>
                            </tr>
                            <tr>
                                <th>Total Tagihan</th>
                                <td>{{Utils::convert_currency($info_installments->amount)}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Jatuh Tempo</th>
                                <td>{{$info_installments->due_date_payment}}</td>
                            </tr>
                            <tr>
                                <th>Total Peminjaman</th>
                                <td>{{Utils::convert_currency($loan->loan_amount)}}</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-gear"></i> Buat Kode Pembayaran</button>
                                    <input type="text" class="form-control" name="payment_code" id="payment_code">
                                </td>
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