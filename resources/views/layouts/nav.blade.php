<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
        <ul class="nav side-menu">
            @can('Beranda')
            <li><a href="/"><i class="fa fa-home"></i> Beranda </a></li>
            @endcan
            @canany(['Permintaan Pinjaman', 'Kredit Score','Verifikasi Akhir'])
            <li class="{{ request()->is('loan/*') ||    request()->is('credit/*') ||  request()->is('verification/*') ? "active" : "" }}"><a><i class="fa fa-users"></i> Peminjam <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    @can('Permintaan Pinjaman')
                    <li><a href="/loan">Permintaan Pinjaman</a></li>
                    @endcan
                    @can('Kredit Score')
                    <li><a href="/credit/score">Kredit Score</a></li>
                    @endcan
                    @can('Verifikasi Akhir')
                    <li><a href="/verification/final">Verifikasi Akhir</a></li>
                    @endcan
                </ul>
            </li>
            @endcan
{{--            @canany(['Permintaan Pendanaan', 'Permintaan Pendanaan Individual'])--}}
{{--            <li class="{{ request()->is('funding/verification/*') ? "active" : ""  }}"><a><i class="fa fa-users"></i> Pendanaan <span class="fa fa-chevron-down"></span></a>--}}
{{--                <ul class="nav child_menu">--}}
{{--                    @can('Permintaan Pendanaan')--}}
{{--                    <li><a href="/funding">Permintaan Pendanaan</a></li>--}}
{{--                    @endcan--}}
{{--                    @can('Permintaan Pendanaan Individual')--}}
{{--                    <li><a href="/funding/individu">Permintaan Pendanaan Individual</a></li>--}}
{{--                    @endcan--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            @endcan--}}
            @canany(['Permintaan Pendanaan', 'Permintaan Pendanaan Individual'])
             <li class="{{ request()->is('verification/data/lender/*') ? "active" : ""  }}"><a href="/verification/data/lender/"><i class="fa fa-users"></i> Lender </a></li>
            @endcan
            @canany(['Pengingat Penagihan', 'Tagihan Jatuh Tempo','Tagihan Keterlambatan'])
            <li class="{{ request()->is('collect/*') ? "active" : "" }}"><a><i class="fa fa-desktop"></i> Penagihan <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    @can('Pengingat Penagihan')
                    <li><a href="/collect/reminder">Pengingat penagihan</a></li>
                    @endcan
                    @can('Tagihan Jatuh Tempo')
                    <li><a href="/collect/due">Tagihan jatuh tempo</a></li>
                    @endcan
                    @can('Tagihan Keterlambatan')
                    <li><a href="/collect/late">Tagihan Keterlambatan</a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            @canany(['Penagihan Kredit Macet'])
            <li class=""><a href="/collect/credit/bad"><i class="fa fa-bar-chart-o"></i> Penagihan kredit macet</a>
            @endcan
            @canany(['Borrower','Lender'])
            <li class="{{ request()->is('borrower/*') ||  request()->is('lender/*')  ? "active" : "" }}"><a><i class="fa fa-child"></i> Customer Services <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    @can('Borrower')
                    <li><a href="/borrower">Borrower</a></li>
                    @endcan
                    @can('Lender')
                    <li><a href="/lender">Lender</a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            </li>
        </ul>

    </div>

    <div class="menu_section">

        <ul class="nav side-menu">
            @canany(['Pengguna','Wewenang'])
            <li class="{{ request()->is('setting/*')  ? "active" : "" }}"><a><i class="fa fa-wrench"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    @can('Pengguna')
                    <li><a href="/setting/users">Pengguna</a>
                    @endcan
                    @can('Wewenang')
                    <li><a href="/setting/role">Wewenang (Role)</a>
                    @endcan
                    </li>
                </ul>
            </li>
            @endcan

        </ul>

    </div>

    <div class="menu_section">
        @can('pcg')
        <ul class="nav side-menu">
            <li class="{{ request()->is('pcg/*')  ? "active" : "" }}"><a><i class="fa fa-shopping-cart"></i> PCG <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="/pcg/need/shortfall">Shortfall</a></li>
                    <li><a href="/pcg/approve">Permintaan Pengiriman</a></li>
                </ul>
            </li>
        </ul>
       @endcan
    </div>

</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->
</div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('images/user.png')}}" alt="">{{Auth::user()->name ?? ''}}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="javascript:;"> Akun</a>
                        <a class="dropdown-item"  href="javascript:;">
                            <span>Pengaturan</span>
                        </a>
                        <a class="dropdown-item"  href="javascript:;">Dokumentasi</a>
                        <a class="dropdown-item"  href="/logout"><i class="fa fa-sign-out pull-right"></i> Keluar</a>
                    </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                        <li class="nav-item">
                            <a class="dropdown-item">
                                <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                                <span>
                          <span>{{Auth::user()->name ?? ''}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <div class="text-center">
                                <a class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
