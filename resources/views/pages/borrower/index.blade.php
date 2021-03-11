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
                    <div class="table-responsive">
                        <table id="table_borrower" class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th class="column-title">No</th>
                                <th class="column-title">Nama</th>
                                <th class="column-title">Email</th>
                                <th class="column-title">Tanggal Daftar</th>
                                </th>
                                <th class="bulk-actions" colspan="7">
                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
@section('js')
    <script src="{{ asset('/js/borrower.js') }}"></script>
    <script>
        init_data_table();
    </script>

@endsection

@endsection
