<x-layout.main>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Outstanding</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <i class="fa fa-database fa-fw"></i> Detail Outstanding
                    <div class="pull-right">
                        <a href="{{ route('app.outstanding.request') }}" class="btn btn-default btn-xs">Back</a>
                    </div>
                </div>
                <div class="modal-body">
                    <b><i class="left"> Detail Dokumen Pendukung</i></b>
                </div>
                <div class="modal-body">
                    <table class="table table-sm table-hover">
                        <tbody>
                            <tr class="odd gradeX">
                                <td>No Ticket</td>
                                <td>:</td>
                                <td>Win 95+</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>No Ticket</td>
                                <td>:</td>
                                <td>Win 95+</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>No Ticket</td>
                                <td>:</td>
                                <td>Win 95+</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>No Ticket</td>
                                <td>:</td>
                                <td>Win 95+</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>No Ticket</td>
                                <td>:</td>
                                <td>Win 95+</td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>No Ticket</td>
                                <td>:</td>
                                <td>Win 95+</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- <div class="form-group">
                        <label>File Akta</label>
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label>File Pakta Integritas</label>
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label>File FPKP</label>
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label>File Company Profile</label>
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label>File Rekening Bank</label>
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label>File Pernyataan tidak Terafiliasi</label>
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label>File SPPKP</label>
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label>File NPWP</label>
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label>File KTP</label>
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label>File NIB</label>
                        <input type="file">
                    </div> --}}

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <i class="fa fa-comment fa-fw"></i> Room Chat
                </div>
                <div class="panel-body">

                    <ul class="chat"></ul>
                </div>
                <div class="panel-footer">
                    <input type="text" class="form-control input-sm" placeholder="type your input..." disable>
                    <button type="submit" class="btn btn-warning btn-sm" disabled>
                        Send</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout.main>
