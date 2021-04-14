@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Informasi Pengguna</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-12">
                        <div class="x_panel">

                            <div class="x_content">
                                <br />

                                <div class="x_content">

                                    <ul class="nav nav-tabs justify-content-end bar_tabs" id="myTab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="false"><i class="fa fa-user"></i> Informasi Personal</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="bussiness-tab" data-toggle="tab" href="#bussines1" role="tab" aria-controls="bussiness" aria-selected="false"><i class="fa fa-suitcase"></i> Data Usaha</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false"><i class="fa fa-mobile-phone"></i> Informasi Kerabat</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="myTabContent">

                                        <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab">
                                            @include('pages.borrower.include.info_profile')
                                        </div>

                                        <div class="tab-pane fade" id="bussines1" role="tabpanel" aria-labelledby="bussiness-tab">
                                            @include('pages.borrower.include.info_business')
                                        </div>

                                        <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                                            @include('pages.borrower.include.info_emergency')
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@section('js')
<script src="{{ asset('/js/customer_service.js') }}"></script>
@endsection
@endsection
