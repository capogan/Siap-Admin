@include('layouts.header')
<div class="right_col" role="main" style="min-height: 674px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>{{$title}}</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pencarian...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Cari!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
            @yield('content')
    </div>
</div>
@include('layouts.footer')

