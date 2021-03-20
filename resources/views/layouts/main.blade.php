@include('layouts.header')
<div class="right_col" role="main" style="min-height: 674px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>{{$title}}</h3>
            </div>


        </div>

        <div class="clearfix"></div>
            @yield('content')
    </div>
</div>
@include('layouts.footer')

