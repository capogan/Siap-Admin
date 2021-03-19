<section class="content invoice">

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-md-12">
            <p class="lead">&nbsp;</p>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <tbody>
                    <tr>
                        <th style="width:50%">Nomor Faktur :</th>
                        <td><h5>{{$get_user->invoice_number}}</h5></td>
                    </tr>
                    <tr>
                        <th style="width:50%">Nama Pemohon :</th>
                        <td>{{$get_user->first_name.' '.$get_user->last_name }}</td>
                    </tr>
                    <tr>
                        <th style="width:50%">Total Pinjaman :</th>
                        <td>{{Utils::convert_currency($get_user->loan_amount) }}</td>
                    </tr>
                    <tr>
                        <th style="width:50%">Lama Pinjaman :</th>
                        <td>{{$get_user->loan_period }}</td>
                    </tr>
                    <tr>
                        <th style="width:50%">Persentase Biaya Admin :</th>
                        <td>{{$get_user->admin_fee_percentage }}%</td>
                    </tr>
                    <tr>
                        <th style="width:50%">Total Biaya Admin :</th>
                        <td>{{Utils::convert_currency($get_user->admin_fee_amount) }}</td>
                    </tr>
                    <tr>
                        <th style="width:50%">Persentase Bunga :</th>
                        <td>{{$get_user->admin_fee_percentage }}%</td>
                    </tr>
                    <tr>
                        <th style="width:50%">Total Bunga :</th>
                        <td>{{Utils::convert_currency($get_user->interest_fee_amount) }}</td>
                    </tr>
                    <tr>
                        <th style="width:50%">Total Pencairan:</th>
                        <td>{{Utils::convert_currency($get_user->disbrusement) }}</td>
                    </tr>
                    <tr>
                        <th style="width:50%">Total Pembayaran:</th>
                        <td>{{Utils::convert_currency($get_user->repayment) }}</td>
                    </tr>
                    <tr>
                        <th style="width:50%">Persentase Denda:</th>
                        <td>{{$get_user->penalty_percentage }} %</td>
                    </tr>
                    <tr>
                        <th style="width:50%">Total Maksimal Denda:</th>
                        <td>{{$get_user->penalty_max_percentage }} %</td>
                    </tr>
                    <tr>
                        <th style="width:50%">Status Pinjaman:</th>
                        <td><h3>{{Utils::convert_status($get_user->penalty_max_percentage) }}</h3></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- /.row -->
</section>