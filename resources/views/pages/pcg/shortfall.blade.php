@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Permintaan Pinjaman</h2>
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
                            <th class="column-title">Status </th>
                            <th class="column-title">Total Pinjaman </th>
                            <th class="column-title">Tindakan </th>
                        </tr>
                        </thead>

                        <tbody>
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
