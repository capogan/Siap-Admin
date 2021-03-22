@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Permintaan Pinjaman</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="#">Settings 1</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <table id="table_pcg" class="table table-striped table-bordered dataTable no-footer">
                    <thead>
                    <tr class="headings">
                        <th class="">No </th>
                        <th class="column-title">Nomor Faktur </th>
                        <th class="column-title">Tanggal Pemesanan </th>
                        <th class="column-title">Borrower </th>
                        <th class="column-title">Nomor KTP </th>
                        <th class="column-title">Status </th>
                        <th class="column-title">Total Pinjaman </th>
                        <th class="column-title">Tindakan </th>
                    </tr>
                    </thead>

                    <tbody>
{{--                    @foreach($loan_request as $key=> $val)--}}

{{--                        <tr class="even pointer">--}}
{{--                            <td class=" ">{{$val->invoice_number}}</td>--}}
{{--                            <td class=" ">{{$val->request_loan_created_at}}</td>--}}
{{--                            <td class=" ">{{$val->user_name}}</td>--}}
{{--                            <td class=" ">{{$val->identity_number}}</td>--}}
{{--                            <td class=" ">{{Utils::convert_status($val->request_loan_status)}}</td>--}}
{{--                            <td class="a-right a-right ">{{number_format($val->loan_amount,2)}}</td>--}}
{{--                            <td>--}}
{{--                                <a href="/pcg/users/data/{{$val->id}}/step-1"><button class="btn btn-default"><i class="fa fa-folder-open"></i></button></a>--}}
{{--                            </td>--}}

{{--                        </tr>--}}

{{--                    @endforeach--}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    @section('js')
        <script src="{{ asset('/js/pcg.js') }}"></script>
        <script>
            init_data_table();
        </script>
    @endsection
@endsection
