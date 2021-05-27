<!-- start user projects -->
<table class="data table table-striped no-margin">
    <thead>
    <tr>
        <th>No</th>
        <th>Nomor Faktur</th>
        <th>Pembayaran ke</th>
        <th>Total Pembayaran</th>
        <th>Status</th>
        <th>Tanggal jatuh tempo</th>
    </tr>
    </thead>
    <tbody>
    @foreach($loan_installments as $val)
        <tr>
        <td>{{ $loop->iteration }} </td>
        <td>{{$val->invoice_number}}</td>
        <td>{{$val->stages}}</td>
        <td>{{Utils::convert_currency($val->amount)}}</td>
        <td>{{$val->status_name}} </td>
        <td>{{$val->due_date_payment_installment}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<!-- end user projects -->