<section class="content invoice">

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-md-12">
            <p class="lead">&nbsp;</p>
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