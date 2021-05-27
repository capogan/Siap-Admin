@extends('layouts.main')
@section('content')

    <div class="row" style="display: block;">
        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Permintaan Pendanaan</h2>
                    <div class="clearfix"></div>
                </div>


                <div class="x_content">


                    <div class="table-responsive">
                        <table id="table_funding_individu" class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th class="column-title">No </th>
                                <th class="column-title">Tanggal Permintaan </th>
                                <th class="column-title">Nama Lender</th>
                                <th class="column-title">Status</th>
                                <th class="column-title"></th>
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
    <script src="{{ asset('/js/funding_individu.js') }}"></script>
    <script>
        init_data_table();
    </script>
@endsection
@endsection

