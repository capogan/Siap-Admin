<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    @role('superadmin')
    <div class="menu_section">
        <h3>General</h3>

        <ul class="nav side-menu">
            <li><a href="/"><i class="fa fa-home"></i> Beranda </a></li>

            <li class="{{ request()->is('loan/*') ||  request()->is('borrower/*') ||  request()->is('credit/*') ? "active" : "" }}"><a><i class="fa fa-users"></i> Peminjam <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="/loan">Permintaan Pinjaman</a></li>
                    <li><a href="/borrower">Borrower</a></li>
                    <li><a href="/credit/score">Kredit Score</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-users"></i> Pemberi Pinjaman <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="/lender">Lender</a></li>
                </ul>
            </li>
        </ul>

    </div>

    <div class="menu_section">
        <h3>Master Data</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-map-marker"></i> Lokasi <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="e_commerce.html">Propinsi</a></li>
                    <li><a href="projects.html">Kota</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-windows"></i> Ekstra <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="page_500.html">Pekerjaan</a></li>
                    <li><a href="plain_page.html">Pendidikan</a></li>
                    <li><a href="login.html">Status Badan Usaha</a></li>
                    <li><a href="pricing_tables.html">Status Tempat Tinggal</a></li>
                    <li><a href="pricing_tables.html">Jenis Bidang Usaha</a></li>
                    <li><a href="pricing_tables.html">Hubungan Kontrak Darurat</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-wrench"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="/setting/users">Pengguna</a>
                    <li><a>Website<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#level2_1">Banner</a></li>
                            <li><a href="page_403.html">Faq</a></li>
                            <li><a href="page_404.html">Term of Condition</a></li>
                            <li><a href="page_404.html">Tentang kami</a></li>
                            <li><a href="page_404.html">Acara</a></li>
                            </li>
                        </ul>
                    </li>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    @endrole
    <div class="menu_section">

        <ul class="nav side-menu">
            <li><a><i class="fa fa-cloud-upload"></i> PCG <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="/pcg/">Unggah Data Shortfall</a></li>
                </ul>
            </li>
        </ul>
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
                        <img src="{{asset('images/img.jpg')}}" alt="">{{Auth::user()->name ?? ''}}
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
