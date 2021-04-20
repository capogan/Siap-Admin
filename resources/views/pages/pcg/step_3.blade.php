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
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <input type="hidden" value="{{$id_loan}}" id="id_loan" name="id_loan">
                <input type="hidden" value="{{$get_user->uid_request_loan}}" id="uid" name="uid">
                <table class="table">
                        <tbody>
                        <tr>
                            <th style="width:50%">Persentasi Skor:</th>
                            <td><h3 id="total_score">{{isset($score) ? $score['credit_score'] : '-'}} %</h3></td>
                        </tr>
                        <tr>
                            <th style="width:50%">Skor:</th>
                            <td><h3 id="score">{{isset($score['score']) ? $score['score'] : '-'}}</h3></td>
                        </tr>
                        <tr>
                            <th>Total Persentasi kredibilitas</th>
                            <td><h3 id="credibility_percentage">{{isset($score['message']['credibiliti_percentage']) ? $score['message']['credibiliti_percentage'] : '-'}}</h3></td>
                        </tr>
                        <tr>
                            <th>Status:</th>
                            <td><h5 id="status_score">{{isset($score['message']['credibiliti_status'] ) ? $score['message']['credibiliti_status'] : '-'}}</h5></td>
                        </tr>

                        <tr>
                            <th>Nilai Pengajuan:</th>
                            <td><h5 id="status_score">Rp. {{number_format($get_user->loan_amount,0,'.','.') ?? ''}}</h5></td>
                        </tr>

                        <tr>
                            <th>Limit Pinjaman</th>
                            <td><h5 id="credit_limit">Rp.{{isset($score) ? number_format($score['message']['credit_limit'] , 0 ,'.' ,'.') : '0'}}</h5></td>
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
                        <a class="nav-link disabled" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Shortfall</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">Detail Score</a>
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
        <a href="step-2"><button class="btn btn-bd-download pull-left"><i class="fa fa-arrow-left"></i> Kembali</button></a>
        
        <button class="btn btn-primary pull-right" id="btn_send_loan" style="display:none"><i class="fa fa-arrow-right"></i> Setujui</button>
        <button class="btn btn-danger pull-right" id="btn_reject"><i class="fa fa-close"></i> Tolak Pengajuan</button>
    </div>

    <div id="modal_reject_reason" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="reject_form">
                    <input type="hidden" name="id_loan" id="id_loan" value="{{$id_loan}}">
                    <div class="modal-body">
                        <p>Berikan Alasan penolakan</p>
                        <textarea class="form-control" name="desc_reject" id="desc_reject" style="resize: none" rows="10"></textarea>
                        <br>
                        <div class="alert-dismissible result-message " role="alert"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modal_confirm_loan" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Apakah Anda yakin?</h4>
                </div>
                <form id="confirm_form">
                    <input type="hidden" name="id_loan" id="id_loan" value="{{$id_loan}}">
                    <div class="modal-body">
                        <p>Anda akan menyetujui Pinjaman Ini?</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary">Yakin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@section('js')
    <script src="{{ asset('vendors/echarts/dist/echarts.min.js')}}"></script>
    <script src="{{ asset('/js/pcg.js') }}"></script>
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, { type: 'bar', data: { labels: [], datasets: [] } });
        //drawchart(a,b,c,d,e,f);
    </script>
@endsection

@endsection