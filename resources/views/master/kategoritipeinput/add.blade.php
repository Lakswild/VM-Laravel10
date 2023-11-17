<x-layout.main>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Kategori Tipe Input</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah data kategori tipe input
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form-group">
                                    <label>Kategori Tipe Input</label>
                                    <input class="form-control">
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('kategoritipeinput.index') }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.main>
