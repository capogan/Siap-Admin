<div class="x_panel">
    <div class="x_title">
        <h2>Detail Data Pribadi</h2>
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
                                <th>Nomor Ktp</th>
                                <td>{{$loan->identity_number}}</td>
                            </tr>
                            <tr>
                                <th>Nama Depan</th>
                                <td>{{$loan->first_name}}</td>
                            </tr>
                            <tr>
                                <th>Nama Belakang</th>
                                <td>{{$loan->last_name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$loan->email}}</td>
                            </tr>

                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{$loan->gender}}</td>
                            </tr>
                            <tr>
                                <th>Tempat & Tanggal Lahir</th>
                                <td>{{$loan->place_of_birth}} {{$loan->date_of_birth}}</td>
                            </tr>
                            <tr>
                                <th>Status Pernikahan</th>
                                <td>{{$loan->married_status_title}}</td>
                            </tr>
                            <tr>
                                <th>Alamat Domisili</th>
                                <td>{{$loan->address}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Ponsel</th>
                                <td>{{$loan->phone_number}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Whatsapp</th>
                                <td>{{$loan->whatsapp_number}}</td>
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