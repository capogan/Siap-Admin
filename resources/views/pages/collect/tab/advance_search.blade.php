<!-- start accordion -->
<div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
    <div class="panel">
        <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
            <h4 class="panel-title"><i class="fa fa-search"></i> Pencarian Lanjutan</h4>
        </a>
        <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <form id="advance_search_form">
                    <div class="well" style="overflow: auto">
                        <div class="col-md-6">
                            No Invoice
                            <fieldset>
                                <div class="control-group ">
                                    <div class="controls">
                                        <div class="input-prepend input-group">
                                            <input type="text" style="width: 200px" name="no_invoice" id="no_invoice" class="form-control"/>
                                            {{--                                        <select class="form-control" name="no_invoice" id="no_invoice"></select>--}}
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>
                        <div class="col-md-6">
                            Nama Peminjam
                            <fieldset>
                                <div class="control-group">
                                    <div class="controls">
                                        <div class="input-prepend input-group">
                                            <select class="form-control" name="borrower_name" id="borrower_name">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-warning">Reset</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
<!-- end of accordion -->