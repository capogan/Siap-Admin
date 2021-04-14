@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Info Pengguna</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Current avatar -->
                                <img class="img-responsive avatar-view" style="width: 100%; display: block;" src="{{ isset($user->self_photo) ? 'http://172.31.143.11/'.$user->self_photo : '/images/no_photo.jpeg' }}" alt="Avatar" title="Change the avatar">
                            </div>
                        </div>
                        <h3>{{$user->name}}</h3>

                        <ul class="list-unstyled user_data">
                            <li><i class="fa fa-map-marker user-profile-icon"></i> {{$user->address}}</li>
                            <li><i class="fa fa-briefcase user-profile-icon"></i> Terdaftar tanggal : {{Utils::date_in_indonesia($user->created_at->todatestring())}}</li>
                            <li><a href="/borrower/edit/{{$user->uid}}"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Ubah Profile</button></a></li>
                        </ul>
                        <br />


                    </div>
                    <div class="col-md-9 col-sm-9 ">

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" role="tab" id="profile-tab1" data-toggle="tab" aria-expanded="false">Profile</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Permintaan Pinjaman</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">History Pembayaran</a>
                                </li>

                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tab_content1" aria-labelledby="profile-tab">
                                   @include('pages.borrower.info.profile')
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                    @include('pages.borrower.info.loan')
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                    @include('pages.borrower.info.installment')
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
