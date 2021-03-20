@extends('layouts.main')
@section('content')

    <div class="col-md-4 col-sm-4  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Skor</h2>
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
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>

    <div class="col-md-8 col-sm-4  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Hasil Skor</h2>
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
                <input type="hidden" value="{{$id_loan}}" id="id_loan" name="id_loan">
                <input type="hidden" value="{{$get_user->uid_request_loan}}" id="uid" name="uid">
                <table class="table">
                        <tbody>
                        <tr>
                            <th style="width:50%">Detail hasil:</th>
                            <td><h3 id="total_score"></h3></td>
                        </tr>
                        <tr>
                            <th>Total Persentasi</th>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Status:</th>
                            <td>-<span id="status_score"></span></td>
                        </tr>
                        <tr>
                            <th>Batas Disetujui:</th>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Potongan dari faktor pendapatan</th>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Batas Disetujui (Final):</th>
                            <td>-</td>
                        </tr>
                        </tbody>
                    </table>
                <button class="btn btn-secondary" onclick="calculate_scoring()"><i class="fa fa-calculator"></i> Hitung Skor</button>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Info Personal & Usaha</h2>
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
                        <a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">Detail Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">Detail Score</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Shortfall</a>
                    </li>
                </ul>
            </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="profile1" role="tabpanel" aria-labelledby="profile-tab">

                        <section class="content invoice">
                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tbody>
                                            <tr>
                                                <th style="width:50%">Usia :</th>
                                                <td>{{Utils::calculate_age($get_user->date_of_birth,'years')}}</td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Jumlah Tanggungan :</th>
                                                <td>{{$get_user->master_dependents_title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Status Badan Hukum:</th>
                                                <td>{{$get_user->legality_name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Kriteria Usaha:</th>
                                                <td>{{$get_user->title_business}}</td>
                                            </tr>
                                            <tr>
                                                <th>Lama Usaha:</th>
                                                <td>{{$get_user->master_business_since_title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Status tempat Usaha:</th>
                                                <td>{{$get_user->place_status_name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Lama kerjasama dengan supplier:</th>
                                                <td>{{$get_user->master_partnership_since_title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Biro Kredit:</th>
                                                <td>{{$get_user->beurau_credit_name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Faktor Pendapatan:</th>
                                                <td>{{$get_user->industry_sectore}}</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>
                </div>

            </div>
        </div>
        <a href="step-1"><button class="btn btn-bd-download pull-left"><i class="fa fa-arrow-left"></i> Kembali</button></a>
        <a href="step-3"><button class="btn btn-primary pull-right"><i class="fa fa-arrow-right"></i> Lanjut</button></a>
    </div>




@section('js')
    <script src="{{ asset('vendors/echarts/dist/echarts.min.js')}}"></script>
    <script src="{{ asset('/js/pcg.js') }}"></script>
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, { type: 'bar', data: { labels: [], datasets: [] } });
    </script>
@endsection

@endsection