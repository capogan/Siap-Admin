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
                                <li role="presentation" class=""><a href="#tab_content2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                                </li>

                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tab_content1" aria-labelledby="profile-tab">
                                   @include('pages.borrower.info.profile')
                                </div>

                                <div role="tabpanel" class="tab-pane fade " id="tab_content1" aria-labelledby="home-tab">

                                    <!-- start recent activity -->
                                    <ul class="messages">
                                        <li>
                                            <img src="/images/img.jpg" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                                <h3 class="date text-info">24</h3>
                                                <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                                <h4 class="heading">Desmond Davison</h4>
                                                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                <br />
                                                <p class="url">
                                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                    <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="/images/img.jpg" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                                <h3 class="date text-error">21</h3>
                                                <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                                <h4 class="heading">Brian Michaels</h4>
                                                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                <br />
                                                <p class="url">
                                                    <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                    <a href="#" data-original-title="">Download</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="/images/img.jpg" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                                <h3 class="date text-info">24</h3>
                                                <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                                <h4 class="heading">Desmond Davison</h4>
                                                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                <br />
                                                <p class="url">
                                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                    <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="/images/img.jpg" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                                <h3 class="date text-error">21</h3>
                                                <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                                <h4 class="heading">Brian Michaels</h4>
                                                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                <br />
                                                <p class="url">
                                                    <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                    <a href="#" data-original-title="">Download</a>
                                                </p>
                                            </div>
                                        </li>

                                    </ul>
                                    <!-- end recent activity -->

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                    <!-- start user projects -->
                                    <table class="data table table-striped no-margin">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Project Name</th>
                                            <th>Client Company</th>
                                            <th class="hidden-phone">Hours Spent</th>
                                            <th>Contribution</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>New Company Takeover Review</td>
                                            <td>Deveint Inc</td>
                                            <td class="hidden-phone">18</td>
                                            <td class="vertical-align-mid">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>New Partner Contracts Consultanci</td>
                                            <td>Deveint Inc</td>
                                            <td class="hidden-phone">13</td>
                                            <td class="vertical-align-mid">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Partners and Inverstors report</td>
                                            <td>Deveint Inc</td>
                                            <td class="hidden-phone">30</td>
                                            <td class="vertical-align-mid">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>New Company Takeover Review</td>
                                            <td>Deveint Inc</td>
                                            <td class="hidden-phone">28</td>
                                            <td class="vertical-align-mid">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- end user projects -->

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
