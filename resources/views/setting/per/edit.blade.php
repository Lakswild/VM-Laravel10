<x-layout.main>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Per</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                Ubah data Per
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form-group">
                                    <label>Per</label>
                                    <input class="form-control">
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('per.index') }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                <div class="form-group">
                                                <label>With </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox">FPKP
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox">Pakta Integritas
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox">NPWP
                                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.main>
