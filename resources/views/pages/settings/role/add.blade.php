@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambah Wewenang(Role)</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="#">Settings 1</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form id="add_roles_form" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Role<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="ln_solid"></div>

                            <table style="width: 100%;">
                                @foreach($permissions as $index => $val)
                                @if($index%4 == 0)
                                    <tr>
                                @endif
                                        <td><label><input type="checkbox" name="permissions[]" id="permissions" value="{{$val->id}}"  class="flat" /> {{$val->name}}</label></td>

                                @endforeach

                            </table>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6">
                                <button id="btn_submit_roles" type="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@section('js')
    <script src="{{ asset('/js/settings.js') }}"></script>
    <script>
        init_data_table();
    </script>
@endsection
@endsection