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
                                    <tr class="even pointer">
                                        <td class=" "><a href="/loan/detail/121000040">121000040</a></td>
                                        <td class=" ">Februari 23, 2021 11:30:12 PM</td>
                                        <td class=" ">John Blank L</td>
                                        <td class=" ">Paid</td>
                                        <td class="a-right a-right ">$7.45</td>
                                        <td class=" last">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class=" "><a href="/loan/detail/121000039">121000039</a></td>
                                        <td class=" ">Februari 23, 2021 11:30:12 PM</td>
                                        <td class=" ">John Blank L</td>
                                        <td class=" ">Paid</td>
                                        <td class="a-right a-right ">$741.20</td>
                                        <td class=" last"><a href="#">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75</div>
                                                </div></a>
                                        </td>
                                    </tr>
                                    <tr class="even pointer">
                                        <td class=" "><a href="/loan/detail/121000038">121000038</a></td>
                                        <td class=" ">Februari 22, 2021 11:30:12 PM</td>
                                        <td class=" ">Mike Smith</td>
                                        <td class=" ">Paid</td>
                                        <td class="a-right a-right ">$432.26</td>
                                        <td class=" last"><a href="#">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

@endsection
