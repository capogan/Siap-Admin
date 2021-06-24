@extends('layouts.main')
@section('content')
    <!-- page content -->

    <div class="">
        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
{{--                    Upload Document--}}
                    <div class="tab-content" id="myTabContent">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>CREDIT LIMIT</h2>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-md-12 col-sm-12 ">
                                            <table class="table table-hover">
                                                <tbody>
                                                <tr>
                                                    <td>Nomor Invoice</td>
                                                    <td>{{$loan_request->invoice_number ?? ''}}</td>
                                                    <td class="e_nik"></td>
                                                </tr>
                                                <tr>
                                                    <td>Nilai Pencairan</td>
                                                    <td>Rp {{number_format($loan_request->disbrusement, 0 , '.','.')}}</td>
                                                    <td class="e_name"></td>
                                                </tr>
                                                <tr>
                                                    <td>Scoring</td>
                                                    <td>{{$credit_limit['credibiliti_percentage'] ?? '' }}</td>
                                                    <td class="e_pob"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Kredit limit</td>
                                                    <td>Rp {{number_format($credit_limit['credit_limit'], 0 , '.','.')}}</td>
                                                    <td class="e_dob"></td>

                                                </tr>
                                                <tr>
                                                    <td>Kredibilitas status</td>
                                                    <td>{{$credit_limit['credibiliti_status'] ?? ''}}</td>
                                                    <td class="e_address"></td>
                                                </tr>
                                                <tr>
                                                    <td>Catatan</td>
                                                    <td><span style="color: red;">{{$loan_request->approve_reason_under_limit_scoring ?? '-'}}</span></td>
                                                    <td class="e_address"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <span class="e_result"></span>
                                            <div class="ln_solid"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Gambar Dokumen <small>periksa dokumen yang di unggah </small></h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div>
                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="{{ isset($get_data_document->identity_photo) ? 'https://siapdanain.id/'.$get_data_document->identity_photo : '/images/no_photo.jpeg' }}" alt="image">
                                                        <div class="mask no-caption">
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-eye" onclick="showImage( '{{ isset($get_data_document->identity_photo) ? 'https://siapdanain.id/'.$get_data_document->identity_photo : '/images/no_photo.jpeg' }}'  )"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <p><strong>Foto Ktp</strong>
                                                        </p>
                                                        <p>{{$get_data_document->noted_identity_photo ?? '-'}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="{{ isset($get_data_document->self_photo) ? 'https://siapdanain.id/'.$get_data_document->self_photo : '/images/no_photo.jpeg' }}" alt="image">
                                                        <div class="mask no-caption">
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-eye" onclick="showImage( '{{ isset($get_data_document->self_photo) ? 'https://siapdanain.id/'.$get_data_document->self_photo : '/images/no_photo.jpeg' }}'  )"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <p><strong>Foto Diri</strong>
                                                        </p>
                                                        <p> {{$get_data_document->noted_self_photo ?? '-'}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="{{ isset($get_data_document->npwp_photo) ? 'https://siapdanain.id/'.$get_data_document->npwp_photo : '/images/no_photo.jpeg' }}" alt="image">
                                                        <div class="mask no-caption">
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-eye" onclick="showImage( '{{ isset($get_data_document->npwp_photo) ? 'https://siapdanain.id/'.$get_data_document->npwp_photo : '/images/no_photo.jpeg' }}'  )"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <p><strong>Foto Npwp</strong>
                                                        </p>
                                                        <p>{{$get_data_document->noted_npwp_photo ?? '-'}}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="{{ isset($get_data_document->business_build_photo) ? 'https://siapdanain.id/'.$get_data_document->business_build_photo : '/images/no_photo.jpeg' }}" alt="image">
                                                        <div class="mask no-caption">
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-eye" onclick="showImage( '{{ isset($get_data_document->business_build_photo) ? 'https://siapdanain.id/'.$get_data_document->business_build_photo : '/images/no_photo.jpeg' }}'  )"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <p><strong>Foto bangunan Usaha</strong>
                                                        </p>
                                                        <p>{{$get_data_document->noted_business_build_photo ?? '-'}}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="{{ isset($get_data_document->siup_photo) ? 'https://siapdanain.id/'.$get_data_document->siup_photo : '/images/no_photo.jpeg' }}" alt="image">
                                                        <div class="mask no-caption">
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-eye" onclick="showImage( '{{ isset($get_data_document->siup_photo) ? 'https://siapdanain.id/'.$get_data_document->siup_photo : '/images/no_photo.jpeg' }}'  )"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <p><strong>Foto SIUP usaha</strong>
                                                        </p>
                                                        <p>{{$get_data_document->noted_siup_photo ?? '-'}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="{{ isset($get_data_document->business_activity_photo) ? 'https://siapdanain.id/'.$get_data_document->business_activity_photo : '/images/no_photo.jpeg' }}" alt="image">
                                                        <div class="mask no-caption">
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-eye" onclick="showImage( '{{ isset($get_data_document->business_activity_photo) ? 'https://siapdanain.id/'.$get_data_document->business_activity_photo : '/images/no_photo.jpeg' }}'  )"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <p><strong>Foto aktifitas usaha</strong>
                                                        </p>
                                                        <p>{{$get_data_document->noted_business_activity_photo ?? '-'}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="{{ isset($get_data_document->npwp_business_photo) ? 'https://siapdanain.id/'.$get_data_document->npwp_business_photo : '/images/no_photo.jpeg' }}" alt="image">
                                                        <div class="mask no-caption">
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-eye" onclick="showImage( '{{ isset($get_data_document->npwp_business_photo) ? 'https://siapdanain.id/'.$get_data_document->npwp_business_photo : '/images/no_photo.jpeg' }}'  )"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <p><strong>Foto NPWP usaha</strong>
                                                        </p>
                                                        <p>{{$get_data_document->noted_npwp_business_photo ?? '-'}}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ln_solid"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>EKYC</h2>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-md-3 col-sm-3  profile_left">
                                            <div class="profile_img">
                                                <div id="crop-avatar">
                                                    <!-- Current avatar -->
                                                    <img class="img-responsive avatar-view" src="{{isset($get_data_document->self_photo) ? 'https://siapdanain.id/'.$get_data_document->self_photo : '/images/no_photo.jpeg'}}" style="width: 80%" alt="Avatar" title="Change the avatar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-9 ">

                                            <table class="table table-hover">
                                                <tbody>
                                                <tr>
                                                    <td>NIK</td>
                                                    <td>{{$get_data_users->identity_number ?? ''}}</td>
                                                    <td class="e_nik"></td>
                                                </tr>
                                                <tr>
                                                    <td>NAMA</td>
                                                    <td>{{$get_data_users->first_name}} {{$get_data_users->last_name ?? $get_data_users->first_name}}</td>
                                                    <td class="e_name"></td>
                                                </tr>
                                                <tr>
                                                    <td>TEMPAT LAHIR</td>
                                                    <td>{{$get_data_users->place_of_birth ?? '' }}</td>
                                                    <td class="e_pob"></td>
                                                </tr>
                                                <tr>
                                                    <td>TANGGAL LAHIR</td>
                                                    <td>{{$get_data_users->date_of_birth ?? '' }}</td>
                                                    <td class="e_dob"></td>

                                                </tr>
                                                <tr>
                                                    <td>ALAMAT</td>
                                                    <td>{{$get_data_users->address ?? ''}}</td>
                                                    <td class="e_address"></td>
                                                </tr>
                                                <tr>
                                                    <td>FOTO DIRI</td>
                                                    <td></td>
                                                    <td class="e_selfie"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <span class="e_result"></span>
                                            <div class="ln_solid"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Analisa Usaha</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Usaha
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <h5 class="" for="first-name">{{$get_data_business->business_name  ?? "-" }}</h5>
                                            </div>
                                        </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Status Badan Hukum Usaha
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name">{{$get_data_business->legality_name  ?? "-" }}</h5>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nomor Izin Usaha</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name"></h5>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jenis Bidang Usaha</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name">{{$get_data_business->industry_sectore  ?? "-"  }}</h5>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Status Tempat Usaha</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name">{{$get_data_business->place_status_name  ?? "-" }}</h5>
                                                </div>
                                            </div>

                                    </div>
                                </div>

                            </div>



                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Analisa Keberlangsungan Usaha</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Rata Pendapatan penjualan Perbulan dalam 6 bulan terakhir
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name">{{ $get_data_business->average_sales_revenue_six_month ?? "-"   }}</h5>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">rata-rata Keuntungan perbulan dalam 6 bulan terakhir
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name">{{$get_data_business->average_monthly_profit_six_month  ?? "-" }}</h5>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">rata - rata Pengeluaran Perbulan dalam 6 bulan terakhir</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name">{{$get_data_business->average_monthly_expenditure_six_month  ?? "-" }}</h5>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Total Karyawan saat ini</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name">{{$get_data_business->total_employees ?? "-" }} Orang</h5>
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Durasi Merchant Active
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name">{{$get_data_business->partnership_since ?? "-"}} Tahun</h5>
                                                </div>
                                            </div>


                                            <div class="ln_solid"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>

{{--                       EMERGENCY--}}
                        <div class="row">
                            <div class="col-md-6 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Informasi Kontak Darurat</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name">{{$get_data_emergency->emergency_name ?? "-"}}</h5>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Hubungan
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name">{{$get_data_emergency->sibling_name ?? "-"}}</h5>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nomor Telepon Saudara</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name">{{$get_data_emergency->emergency_phone ?? "-"}}</h5>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <h5 class="" for="first-name">{{$get_data_emergency->emergency_full_address ?? "-"}}</h5>
                                                </div>
                                            </div>

                                            <div class="ln_solid"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Kesimpulan</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br>
                                        <form id="result_from_emergency_form">
                                            <label class="col-form-label label-align" for="first-name">Kesimpulan <span class="required">*</span>
                                            </label>
                                            <input type="hidden" name="uid" id="uid" value="{{$uid}}">
                                            @if($get_data_emergency->emergency_response =='recommendation')
                                            <h3>Di Rekomendasikan</h3>
                                            @else
                                                <h3>Tidak Rekomendasikan</h3>
                                            @endif
                                            <div class="ln_solid"></div>
                                        </form>

                                        <table class="table table-striped" id="table_description_crm">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal Tindakan</th>
                                                <th>Status Telepon</th>
                                                <th>Deskripsi</th>
                                                <th>Rekaman</th>
                                                <th>Nama Agent</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($phone_description )
                                                @foreach($phone_description_emergency as $key => $val)
                                                    <tr>
                                                        <td class="number">{{$loop->iteration}}</td>
                                                        <td>{{$val->created_at}}</td>
                                                        <td>{{Utils::convert_status_phone($val->phone_status)}}</td>
                                                        <td>{{$val->phone_description}}</td>
                                                        @if($val->phone_status == '5')
                                                            <td><button type="button" class="btn btn-success"><i class="fa fa-headphones"></i></button></td>
                                                        @else
                                                            <td>-</td>
                                                        @endif
                                                        <td>{{$val->updated_by}}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <div class="col"></div>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>History Peminjaman</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="history_table" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                        <tr>
                                                            <th>Nomor Faktur</th>
                                                            <th>Tanggal Peminjaman</th>
                                                            <th>Status</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Verifikasi Telepon</h2>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Telepon tempat usaha
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="{{$get_data_business->business_phone_number ?? '-' }}">

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Telepon Tempat Usaha Tambahan
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">

                                                    </div>
                                                </div>
                                            </div>

                                            <table class="table table-striped" id="table_description_crm">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Tindakan</th>
                                                    <th>Status Telepon</th>
                                                    <th>Deskripsi</th>
                                                    <th>Rekaman</th>
                                                    <th>Nama Agent</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if($phone_description )
                                                @foreach($phone_description as $key => $val)
                                                    <tr>
                                                        <td class="number">{{$loop->iteration}}</td>
                                                        <td>{{$val->created_at}}</td>
                                                        <td>{{Utils::convert_status_phone($val->phone_status)}}</td>
                                                        <td>{{$val->phone_description}}</td>
                                                        @if($val->phone_status == '5')
                                                            <td><button type="button" class="btn btn-success"><i class="fa fa-headphones"></i></button></td>
                                                        @else
                                                            <td>-</td>
                                                        @endif
                                                        <td>{{$val->updated_by}}</td>
                                                    </tr>
                                                @endforeach
                                                @else
                                                    <div class="col"></div>
                                                @endif
                                                </tbody>
                                            </table>

                                            <div class="ln_solid"></div>
                                        </form>
                                    </div>

                                    <div class="x_content">
                                        <form id="crm_form" data-parsley-validate class="form-horizontal form-label-left">
                                            <div class="row">
                                                <div class="x_panel">
                                                    <div class="x_title">
                                                        <h2>Penyamaan Data</h2>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col">
                                                                    @if( $data_crm)
                                                                            @foreach($data_crm as $key => $val)
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <p>{{$val->variable}}</p>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <p>{{$val->data_user}}</p>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        @if($val->result == '1')
                                                                                            <label>Sama</label>
                                                                                        @else
                                                                                            <label>Beda</label>
                                                                                        @endif
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        @if($val->description != '')
                                                                                            <p>{{$val->description}}</p>
                                                                                        @else
                                                                                            <h5>-</h5>
                                                                                        @endif

                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                            @endforeach
                                                                    @else
                                                                        <div class="col"></div>
                                                                    @endif

                                                                <!--form end-->
                                                                </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="x_content">

                                        <input type="hidden" name="id_loan" id="id_loan" value="{{$id_loan}}">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Penjelasan Kegiatan Usaha <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <div class="input-group">
                                                    <textarea class="form-control" style="resize: none" id="description_business" name="description_business">{{ $phone_verification->desc_business_activities ?? ''}}</textarea>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Kesimpulan Analisa Data <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <div class="input-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label><input type="radio" name="risk" class="flat" value="Resiko Rendah" {{ isset($phone_verification->result_data_analyst ) ? $phone_verification->result_data_analyst == "Resiko Rendah" ? "checked" : "" : '' }}> Resiko Rendah</label>
                                                        </div>
                                                        <div class="col">
                                                            <label><input type="radio" name="risk" class="flat" value="Resiko Sedang" {{ isset($phone_verification->result_data_analyst) ? $phone_verification->result_data_analyst == "Resiko Sedang" ? "checked" : "" : '' }}> Resiko Sedang</label>
                                                        </div>
                                                        <div class="col">
                                                            <label><input type="radio" name="risk" class="flat" value="Resiko Tinggi" {{ isset($phone_verification->result_data_analyst) ? $phone_verification->result_data_analyst == "Resiko Tinggi" ? "checked" : "" : '' }}> Resiko Tinggi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Catatan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <div class="input-group">
                                                    <textarea class="form-control" style="resize: none" name="noted" id="noted">{{$phone_verification->noted ?? ''}}</textarea>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Review Fintech Data Center(FDC)</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="history_table" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                        <tr>
                                                            <th>ID Pelanggan</th>
                                                            <th>No KTP</th>
                                                            <th>Nama</th>
                                                            <th>Nilai Pinjaman</th>
                                                            <th>Tanggal Pencairan</th>
                                                            <th>Tanggal Jatuh Tempo</th>
                                                            <th>DPD Terakhir</th>
                                                            <th>DPD Max</th>
                                                            <th>Sisa Pinjaman</th>
                                                            <th>Kualitas Pinjaman</th>
                                                            <th>Status Pinjaman</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                    <button class="btn btn-success"><i class="fa fa-refresh" aria-hidden="true"></i> Periksa FDC</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Biro Kredit</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div id="echart_gauge" style="height:370px;"></div>
                                    </div>
                                    <button type="button" class="btn btn-primary" onClick="biro_kredit();"><i class="fa fa-external-link-square"></i> Biro kredit</button>
                                    <button type="button" class="btn btn-success" id="btn_submit_crm"><i class="fa fa-cloud-download"></i> Detail Biro Kredit</button>
                                </div>
                            </div>
                        </div>


                        <div class="item form-group pull-right">
                            <div class="">
                                <button class="btn btn-danger" type="button" id="btn_reject6"><i class="fa fa-close"></i> Tolak</button>
                                <button type="button" class="btn btn-primary"  onclick="confirm_data('{{$id_loan}}')"><i class="fa fa-external-link-square"></i> Konfirmasi</button>
                            </div>
                        </div>


                    </div>

                    </div>
                </div>
            </div>


            <div id="modal_reject_reason" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form id="reject_form">
                            <input type="hidden" name="id_loan" id="id_loan" value="{{$id_loan}}">
                            <div class="modal-body">
                                <p>Berikan Alasan penolakan</p>
                                <textarea class="form-control" name="desc_reject" id="desc_reject" style="resize: none" rows="10"></textarea>
                                <div class="alert-dismissible result-message" role="alert"></div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@section('js')

    <script src="{{ asset('/js/verification_final.js') }}"></script>

    <script>
        $("#history_table").DataTable();
    </script>

@endsection
@endsection
