<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Gambar Dokumen <small>periksa dokumen yang di unggah </small></h2>
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

                <div>
                    <div class="col-md-55">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{ isset($get_data_document->identity_photo) ? 'http://172.31.143.11/'.$get_data_document->identity_photo : '/images/no_photo.jpeg' }}" alt="image">
                                <div class="mask no-caption">
                                    <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times" onclick="reject_image('{{$uid}}','noted_identity_photo')"></i></a>
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
                                <img style="width: 100%; display: block;" src="{{ isset($get_data_document->self_photo) ? 'http://172.31.143.11/'.$get_data_document->self_photo : '/images/no_photo.jpeg' }}" alt="image">
                                <div class="mask no-caption">
                                    <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p><strong>Foto Diri</strong>
                                </p>
                                <p>{{$get_data_document->noted_self_photo ?? '-'}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-55">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{ isset($get_data_document->npwp_photo) ? 'http://172.31.143.11/'.$get_data_document->npwp_photo : '/images/no_photo.jpeg' }}" alt="image">
                                <div class="mask no-caption">
                                    <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
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
                                <img style="width: 100%; display: block;" src="{{ isset($get_data_document->business_build_photo) ? 'http://172.31.143.11/'.$get_data_document->business_build_photo : '/images/no_photo.jpeg' }}" alt="image">
                                <div class="mask no-caption">
                                    <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
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
                                <img style="width: 100%; display: block;" src="{{ isset($get_data_document->siup_photo) ? 'http://172.31.143.11/'.$get_data_document->siup_photo : '/images/no_photo.jpeg' }}" alt="image">
                                <div class="mask no-caption">
                                    <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
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
                                <img style="width: 100%; display: block;" src="{{ isset($get_data_document->business_activity_photo) ? 'http://172.31.143.11/'.$get_data_document->business_activity_photo : '/images/no_photo.jpeg' }}" alt="image">
                                <div class="mask no-caption">
                                    <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
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
                                <img style="width: 100%; display: block;" src="{{ isset($get_data_document->npwp_business_photo) ? 'http://172.31.143.11/'.$get_data_document->npwp_business_photo : '/images/no_photo.jpeg' }}" alt="image">
                                <div class="mask no-caption">
                                    <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
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
{{--<div class="item form-group">--}}
{{--    <div class="col-md-6 col-sm-6 offset-md-3">--}}
{{--        <button class="btn btn-danger" type="button" id="btn_reject"><i class="fa fa-close"></i> Tolak</button>--}}
{{--        <button type="button" class="btn btn-primary btnNext">Lanjut Dokumen <i class="fa fa-arrow-right"></i></button>--}}
{{--    </div>--}}
{{--</div>--}}