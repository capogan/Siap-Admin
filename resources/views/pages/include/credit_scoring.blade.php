<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Cek Kredit Skoring</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
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
                            <input type="hidden" value="{{$get_data_users->uid_request_loan}}" id="uid" name="uid">
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
                                    <td><h5 id="status_score">Rp. {{number_format($get_data_users->loan_amount,0,'.','.') ?? ''}}</h5></td>
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

            </div>
        </div>
    </div>
</div>

<div class="ln_solid"></div>
<button type="button" id="scoring_next" class="btn btn-primary next-step float-right" style="display: none" >Selanjutnya ></button>
<button class="btn btn-danger float-right" type="button" id="btn_reject_credit_scoring" style="display: none" onclick="reject_function('3')"><i class="fa fa-close"></i> Tolak</button>