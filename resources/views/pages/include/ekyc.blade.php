<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>EKYC</h2>
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
                <div class="col-md-3 col-sm-3  profile_left">
                    <div class="profile_img">
                        <div id="crop-avatar">
                            <!-- Current avatar -->
                            <img class="img-responsive avatar-view" src="/images/picture.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 ">

                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td>NIK</td>
                            <td>{{$get_data_users->identity_number}}</td>
                            <td class="e_nik"></td>
                        </tr>
                        <tr>
                            <td>NAMA</td>
                            <td>{{$get_data_users->first_name}} {{$get_data_users->last_name ?? $get_data_users->first_name}}</td>
                            <td class="e_name"></td>
                        </tr>
                        <tr>
                            <td>TEMPAT LAHIR</td>
                            <td>{{$get_data_users->place_of_birth }}</td>
                            <td class="e_pob"></td>
                        </tr>
                        <tr>
                            <td>TANGGAL LAHIR</td>
                            <td>{{$get_data_users->date_of_birth }}</td>
                            <td class="e_dob"></td>

                        </tr>
                        <tr>
                            <td>ALAMAT</td>
                            <td>{{$get_data_users->address }}</td>
                            <td class="e_address"></td>
                        </tr>
                        <tr>
                            <td>FOTO DIRI</td>
                            <td></td>
                            <td class="e_selfie"></td>
                        </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-warning" id="check_ekyc_button"><i class="fa fa-refresh"></i> CEK EKYC</button>
                    <span class="e_result"></span>
                    <div class="ln_solid"></div>
                    <button type="button" class="btn btn-primary next-step float-right">Selanjutnya ></button>
                    <button type="button" class="btn btn-secondary  prev-step  float-right">< Kembali</button>

                </div>
            </div>
        </div>
    </div>
</div>