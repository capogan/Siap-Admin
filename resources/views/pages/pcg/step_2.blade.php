@extends('layouts.main')
@section('content')

    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Shortfall</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">


                <ul class="nav nav-tabs justify-content-end bar_tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">Detail Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Shortfall</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">Detail Score</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                        <section class="content invoice">
                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-md-12">
                                    <form id="shortfall_form">
                                        <input type="hidden" value="{{ $id_loan }}" name="id_loan" id="id_loan">
                                        @foreach($months as $key => $mo)
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Data {{$key + 1}} <span class="required">*</span>
                                                </label>
                                                <div class="col-md-3 col-sm-6 ">
                                                    <select name="month{{$key + 1}}" id="month{{$key + 1}}" class="form-control">
                                                        <option value=""></option>
                                                        @foreach($months as $month)
                                                            <option value="{{$month}}" {{ isset($keys_sf[$key]) ? $keys_sf[$key] == $month ? 'selected' : '' : ''}}>{{$month}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3 col-sm-6 ">
                                                    <input type="text" name="amount_{{$key + 1}}" id="amount_{{$key + 1}}" class="form-control" value="{{isset($keys_sf[$key]) ?  'Rp'.number_format($get_shortfall[$keys_sf[$key]] ,0,',',',') : ''}}">
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <button type="submit" id="btn_submit_shortfall" class="btn btn-success"><i class="fa fa-calculator"></i> Update Kredit Scoring</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>
                </div>

            </div>
        </div>
        <a href="step-1"><button class="btn btn-bd-download pull-left"><i class="fa fa-arrow-left"></i> Kembali</button></a>
        <a href="step-3"><button class="btn btn-primary pull-right"><i class="fa fa-arrow-right"></i> Lanjut</button></a>
    </div>


@section('js')
    <script src="{{ asset('/js/pcg.js') }}"></script>
    <script>
        $('input').on('change click keyup input paste',(function (event) {
            $(this).val(function (index, value) {
                return 'Rp' + value.replace(/(?!\.)\D/g, "").replace(/(?<=\..*)\./g, "").replace(/(?<=\.\d\d).*/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            });
        }));

    </script>
@endsection

@endsection