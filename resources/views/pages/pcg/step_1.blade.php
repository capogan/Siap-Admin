@extends('layouts.main')
@section('content')

    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-bars"></i> Tabs <small>Float right</small></h2>
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
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">Detail Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">Detail Score</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab">
                        <section class="content invoice">

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-md-12">
                                    <p class="lead">&nbsp;</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tbody>
                                            <tr>
                                                <th style="width:50%">Nomor Faktur :</th>
                                                <td><h5>{{$get_user->invoice_number}}</h5></td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Nama Pemohon :</th>
                                                <td>{{$get_user->first_name }}</td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Total Pinjaman :</th>
                                                <td>{{Utils::convert_currency($get_user->loan_amount) }}</td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Lama Pinjaman :</th>
                                                <td>{{$get_user->loan_period }}</td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Persentase Biaya Admin :</th>
                                                <td>{{$get_user->admin_fee_percentage }}%</td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Total Biaya Admin :</th>
                                                <td>{{Utils::convert_currency($get_user->admin_fee_amount) }}</td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Persentase Bunga :</th>
                                                <td>{{$get_user->admin_fee_percentage }}%</td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Total Bunga :</th>
                                                <td>{{Utils::convert_currency($get_user->interest_fee_amount) }}</td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Total Pencairan:</th>
                                                <td>{{Utils::convert_currency($get_user->disbrusement) }}</td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Total Pembayaran:</th>
                                                <td>{{Utils::convert_currency($get_user->repayment) }}</td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Persentase Denda:</th>
                                                <td>{{$get_user->penalty_percentage }} %</td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Total Maksimal Denda:</th>
                                                <td>{{$get_user->penalty_max_percentage }} %</td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%">Status Pinjaman:</th>
                                                <td><h3>{{Utils::convert_status($get_user->penalty_max_percentage) }}</h3></td>
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
        <a href="step-2"><button class="btn btn-primary pull-right"><i class="fa fa-arrow-right"></i> Lanjut</button></a>
    </div>

@section('js')
    <script src="{{ asset('/js/pcg.js') }}"></script>

@endsection

@endsection