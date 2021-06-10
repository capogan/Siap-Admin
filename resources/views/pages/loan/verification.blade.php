@extends('layouts.main')
@section('content')
    <!-- page content -->

    <div class="">
        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Verifikasi data peminjam</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <ul class="nav nav-tabs justify-content-end bar_tabs" id="myTab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="alpha-tab" data-toggle="tab" href="#alpha1" role="tab" aria-controls="alpha" aria-selected="false">Kredit Skoring</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link disabled" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="false">Dokumen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">EKYC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" id="bussiness-tab" data-toggle="tab" href="#bussines1" role="tab" aria-controls="bussiness" aria-selected="false">Usaha</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" id="emergency_contact-tab" data-toggle="tab" href="#emergency_contact1" role="tab" aria-controls="emergency_contact" aria-selected="false">Kontak Darurat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">History Peminjaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" id="crm-tab" data-toggle="tab" href="#crm" role="tab" aria-controls="crm" aria-selected="false">Verifikasi Telepon</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="alpha1" role="tabpanel" aria-labelledby="alpha-tab">
                            @include('pages.include.credit_scoring')
                        </div>
                        <div class="tab-pane fade" id="home1" role="tabpanel" aria-labelledby="home-tab">
                            @include('pages.include.document')
                        </div>
                        <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                            @include('pages.include.ekyc')
                        </div>
                        <div class="tab-pane fade" id="bussines1" role="tabpanel" aria-labelledby="bussiness-tab">
                            @include('pages.include.bussiness')
                        </div>
                        <div class="tab-pane fade" id="emergency_contact1" role="tabpanel" aria-labelledby="emergency_contact-tab">
                            @include('pages.include.emergency')
                        </div>
                        <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                            @include('pages.include.history')
                        </div>
                        <div class="tab-pane fade" id="crm" role="tabpanel" aria-labelledby="crm-tab">
                            @include('pages.include.crm')
                        </div>

                    </div>

            </div>
        </div>


        <div id="modal_reject_reason" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="reject_form">
                        <input type="hidden" name="id_loan" id="id_loan" value="{{$id_loan}}">
                        <input type="hidden" name="id_status" id="id_status">
                        <div class="modal-body">
                            <p>Berikan Alasan penolakan</p>
                            <textarea class="form-control" name="desc_reject" id="desc_reject" style="resize: none" rows="10"></textarea>
                            <div class="alert-dismissible result-message" role="alert"></div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="modal_add_crm_description" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog  modal-lg ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Tambah deskripsi</h4>

                    </div>
                    <form id="add_crm_description_form" name="contact" role="form">
                        <input type="hidden" name="id_loan" id="id_loan" value="{{$id_loan}}">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Status Telepon</label>
                                <select class="form-control" name="phone_status" id="phone_status">
                                    <option value="">--Pilih salah satu--</option>
                                    <option value="1">Tidak Aktif</option>
                                    <option value="2">Tidak ditempat</option>
                                    <option value="3">Nomor Salah</option>
                                    <option value="4">Tidak ditempat</option>
                                    <option value="5">Tersambung</option>
                                    <option value="6">Pemohon meminta reschedule telepon</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message">Description</label>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>

                        </div>
                        <div class="x_content bs-example-popovers">
                            <div id="alert-message" class="alert" role="alert">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <input type="submit" class="btn btn-success" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

            <div id="modal_approve_with_reason" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form id="loan_approve_form">
                            <input type="hidden" name="id_loan" id="id_loan" value="{{$id_loan}}">
                            <input type="hidden" name="id_status" id="id_status">
                            <div class="modal-body">
                                <h3 style="color: red">NILAI PINJAMAN DIBAWAH NILAI LIMIT.</h3> <br>
                                <p>Apakah anda yakin ingin tetap melanjutkan proses? Jika iya. berikan penjelasannya!</p>
                                <textarea class="form-control" name="desc_approve" id="desc_approve" style="resize: none" rows="10"></textarea>
                                <div class="alert-dismissible result-message" role="alert"></div>
                            </div>

                            <div class="modal-footer">
{{--                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>--}}
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </div>
    </div>

@section('js')
    <script>
        $("#history_table").DataTable();
    </script>
    <script src="{{ asset('/js/verification.js') }}"></script>
    <script src="{{ asset('vendors/echarts/dist/echarts.min.js')}}"></script>
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, { type: 'bar', data: { labels: [], datasets: [] } });
        //drawchart(a,b,c,d,e,f);
    </script>
@endsection
@endsection
