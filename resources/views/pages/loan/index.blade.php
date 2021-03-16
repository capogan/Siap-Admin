@extends('layouts.main')
@section('content')

            <div class="row" style="display: block;">
                <div class="clearfix"></div>

                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Data Permintaan Pinjaman</h2>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">

                            <p>Melihat semua data permintaan borrower berdasarkan <code>Nomor Faktur</code></p>

                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <th class="column-title">Nomor Faktur </th>
                                        <th class="column-title">Tanggal Pemesanan </th>
                                        <th class="column-title">Borrower </th>
                                        <th class="column-title">Status </th>
                                        <th class="column-title">Total Pinjaman </th>
                                        <th class="column-title no-link last"><span class="nobr">Kredit Score</span>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($loan_request as $key=> $val)

                                        <tr class="even pointer">
                                            <td class=" "><a href="/loan/invoice/detail/{{$val->id}}">{{$val->invoice_number}}</a></td>
                                            <td class=" ">{{$val->created_at}}</td>
                                            <td class=" "><a href="/borrower/detail/{{$val->uid}}">{{$val->get_user->name}}</a></td>
                                            <td class=" ">{{Utils::convert_status($val->status)}}</td>
                                            <td class="a-right a-right ">{{number_format($val->loan_amount,2)}}</td>
                                            <td class=" last">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: {{$val->current_score->score ?? 0}}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="{{$val->current_score->score ?? 0 }}">{{$val->current_score->score ?? '0'}}</div>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

@endsection
