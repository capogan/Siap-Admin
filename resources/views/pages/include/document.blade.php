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
<button type="button" class="btn btn-primary next-step float-right">Selanjutnya ></button>
<button class="btn btn-danger float-right" type="button" onclick="reject_function('5')"><i class="fa fa-close"></i> Tolak</button>