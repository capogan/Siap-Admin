@extends('layouts.main')
@section('content')

    <div class="row" style="display: block;">
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Pengingat Penagihan Pembayaran ke {{$stages}}</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="result-message"></div>
                    <form id="collect_remember_form" data-parsley-validate class="form-horizontal form-label-left">
                        <input type="hidden" name="id_loan" id="id_loan" value="{{$loan->id_loan}}">
                        <input type="hidden" name="type" id="type" value="{{ $type }}">
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tujuan Nomor Telepon <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="phone_number"  id="phone_number">
                                    <option value="">--Pilih salah satu--</option>
                                    <option value="{{$loan->phone_number}}">Nomor Handphone</option>
                                    <option value="{{$loan->whatsapp_number}}">Nomor Whatsapp</option>
                                    <option value="{{$loan->business_phone_number}}">Nomor Kantor</option>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Status Panggilan <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="phone_status"  id="phone_status">
                                    <option value="">--Pilih salah satu--</option>
                                    <option value="1">Tidak Aktif</option>
                                    <option value="2">Tidak ditempat</option>
                                    <option value="3">Nomor Salah</option>
                                    <option value="4">Tidak ditempat</option>
                                    <option value="5">Tersambung</option>
                                    <option value="6">Pemohon meminta reschedule telepon</option>
                                </select>
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Janji Bayar <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="promise_payment_date" name="promise_payment_date" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text"  type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Keterangan
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea name="description" id="description" class="form-control" style="resize: none"></textarea>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success" data-text="Simpan">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <div class="x_panel">
                <div class="x_content">

                    <table class="table table-striped" id="table_description_crm">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Tindakan</th>
                            <th>Nomor Telepon</th>
                            <th>Status</th>
                            <th>Janji Bayar</th>
                            <th>Keterangan</th>
                            <th>Rekaman</th>
                            <th>Nama Agent</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($crm as $key => $val)
                                <tr>
                                <td class="number">{{$loop->iteration}}</td>
                                <td class="number">{{$val->created_at}}</td>
                                <td class="number">{{$val->destination_number}}</td>
                                <td>{{Utils::convert_status_phone($val->call_status)}}</td>
                                <td class="number">{{$val->promise_to_pay}}</td>
                                <td class="number">{{$val->description}}</td>
                                @if($val->call_status == '5')
                                <td><button type="button" class="btn btn-success"><i class="fa fa-headphones"></i></button></td>
                                @else
                                <td>-</td>
                                @endif
                                <td class="number">{{$val->updated_by}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>

            <div class="x_panel">
                <div class="x_content">

                    <ul class="nav nav-tabs justify-content-end bar_tabs" id="myTab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="false"><i class="fa fa-archive"></i> Data Pinjaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-user"></i> Data Pribadi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bussiness-tab" data-toggle="tab" href="#bussines1" role="tab" aria-controls="bussiness" aria-selected="false"><i class="fa fa-suitcase"></i> Data Usaha</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false"><i class="fa fa-money"></i> Kode Pembayaran</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home-tab">
                            @include('pages.collect.tab.invoice')
                        </div>
                        <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                            @include('pages.collect.tab.data_info')
                        </div>
                        <div class="tab-pane fade" id="bussines1" role="tabpanel" aria-labelledby="bussiness-tab">
                            @include('pages.collect.tab.data_business')
                        </div>

                        <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                            @include('pages.collect.tab.payment')
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@section('js')
    <script src="{{ asset('/js/collect.js') }}"></script>
@endsection
@endsection