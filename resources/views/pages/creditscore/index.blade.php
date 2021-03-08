@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Penentuan Score</h2>
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


                        @foreach($category_score as $key => $val)
                            <div class="ln_solid"></div>
                            <h5>{{strtoupper($val->category_score)}}</h5><hr/>
                            @foreach($val->credit_score as $row)
                            <form id="form_score_{{$row->id}}">

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12  form-group">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Parameter</label>
                                                    <input class="form-control" type="text" id="name_score_{{$row->id}}" name="name_score_{{$row->id}}" required="required" placeholder="" value="{{$row->name_score}}">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Nama Parameter</label>
                                                    <input class="form-control" type="text" id="code_{{$row->id}}" name="code_{{$row->id}}" required="required" placeholder="" value="{{$row->code}}">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Skor</label>
                                                    <input class="form-control" type="text" name="score_{{$row->id}}" id="score_{{$row->id}}" data-validate-minmax="10,100" required="required" placeholder="" value="{{$row->score}}">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="checkbox">
                                                    <label>Status</label>
                                                    <br>
                                                    <label>
                                                        @if($row->status)
                                                            <input type="checkbox" class="flat" name="status_{{$row->id}}" id="status_{{$row->id}}" checked="checked"> Centang Untuk Aktif
                                                        @else
                                                            <input type="checkbox" class="flat" name="status_{{$row->id}}" id="status_{{$row->id}}"> Centang Untuk Aktif
                                                        @endif
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <label>&nbsp;</label>
                                                <br>
                                                <input type="button" class="btn btn-primary" onclick="update('{{$row->id}}')" value="Ubah">
                                            </div>

                                        </div>
                                    </div>
                            </form>
                            @endforeach

                        @endforeach


                </div>
            </div>
        </div>
    </div>
@section('js')
    <script src="{{ asset('/js/credit_score.js') }}"></script>
@endsection

@endsection
