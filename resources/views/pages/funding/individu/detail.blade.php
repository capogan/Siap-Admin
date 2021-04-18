@extends('layouts.main')
@section('content')
    <!-- page content -->
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Verifikasi data Pendana</h2>
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

            <ul class="nav nav-tabs justify-content-end bar_tabs" id="myTab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="false">Dokumen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">EKYC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" id="bussiness-tab" data-toggle="tab" href="#bussines1" role="tab" aria-controls="bussiness" aria-selected="false">Pekerjaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" id="emergency_contact-tab" data-toggle="tab" href="#emergency_contact1" role="tab" aria-controls="emergency_contact" aria-selected="false">Kontak Darurat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">History Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" id="crm-tab" data-toggle="tab" href="#crm" role="tab" aria-controls="crm" aria-selected="false">Verifikasi Telepon</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab">
                    @include('pages.funding.individu.include.document')
                </div>
                <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                    @include('pages.funding.individu.include.ekyc')
                </div>
                <div class="tab-pane fade" id="bussines1" role="tabpanel" aria-labelledby="bussiness-tab">

                </div>
                <div class="tab-pane fade" id="emergency_contact1" role="tabpanel" aria-labelledby="emergency_contact-tab">

                </div>
                <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">

                </div>
                <div class="tab-pane fade" id="crm" role="tabpanel" aria-labelledby="crm-tab">

                </div>

            </div>

        </div>
    </div>
</div>
@section('js')
    <script>
        $("#history_table").DataTable();
    </script>
    <script src="{{ asset('/js/verification.js') }}"></script>
@endsection
@endsection
