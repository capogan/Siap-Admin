<div class="x_panel">
    <div class="x_title">
        <h2>Detail Data Usaha</h2>
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

        <section class="content invoice">


            <!-- /.row -->

            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>Nama Usaha</th>
                                <td>{{$loan->business_name}}</td>
                            </tr>
                            <tr>
                                <th>Kriteria Bisnis</th>
                                <td>{{$loan->title_business}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Usaha</th>
                                <td>{{$loan->industry_sectore}}</td>
                            </tr>
                            <tr>
                                <th>Badan Hukum</th>
                                <td>{{$loan->legality_name}}</td>
                            </tr>

                            <tr>
                                <th>Lama Usaha</th>
                                <td>{{$loan->business_long}}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Karyawan</th>
                                <td>{{$loan->total_employee_name}}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi Usaha</th>
                                <td>{{$loan->business_description}}</td>
                            </tr>
                            <tr>
                                <th>Status Kepemilikan Tempat Usaha</th>
                                <td>{{$loan->place_status_name}}</td>
                            </tr>
                            <tr>
                                <th>Lama Bekerjasama</th>
                                <td>{{$loan->partnership_since_name}}</td>
                            </tr>
                            <tr>
                                <th>Alamat Usaha</th>
                                <td>{{$loan->business_full_address}}</td>
                            </tr>
                            <tr>
                                <th>Propinsi</th>
                                <td>{{$loan->province_name}}</td>
                            </tr>
                            <tr>
                                <th>Kota</th>
                                <td>{{$loan->city}}</td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td>{{$loan->business_kecamatan}}</td>
                            </tr>
                            <tr>
                                <th>Kelurahan</th>
                                <td>{{$loan->villages_name}}</td>
                            </tr>
                            <tr>
                                <th>Kodepos</th>
                                <td>{{$loan->business_zip_code}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon Usaha</th>
                                <td>{{$loan->business_phone_number}}</td>
                            </tr>
                            <tr>
                                <th>Penghasilan Usaha per 6 bulan</th>
                                <td>{{$loan->average_sales_revenue_six_month}}</td>
                            </tr>
                            <tr>
                                <th>Pengeluaran Usaha per 6 bulan</th>
                                <td>{{$loan->average_monthly_expenditure_six_month}}</td>
                            </tr>
                            <tr>
                                <th>Keuntungan Usaha per 6 bulan</th>
                                <td>{{$loan->average_monthly_profit_six_month}}</td>
                            </tr>



                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- /.col -->
            </div>

        </section>
    </div>
</div>