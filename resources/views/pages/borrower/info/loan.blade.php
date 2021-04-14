<!-- start user projects -->
<table class="data table table-striped no-margin">
    <thead>
    <tr>
        <th>No</th>
        <th>Nomor Faktur</th>
        <th>Jumlah Pinjaman</th>
        <th>Jangka Waktu</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
        @foreach($get_loan as $val)
            <tr>
            <td>{{ $loop->iteration }} </td>
            <td>{{$val->invoice_number}}</td>
            <td>{{Utils::convert_currency($val->loan_amount)}}</td>
            <td>{{$val->loan_period}} Hari</td>
            <td>{{$val->title}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<!-- end user projects -->