<x-layout.main>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Outstanding</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Detail Outstanding
                    <div class="pull-right">
                         <div class="form-group">
                                                <label>Pakta Integritas</label>
                                                <input type="file">
                                            </div>
                        <a href="{{ route('app.outstanding.request') }}" class="btn btn-default btn-xs">Back</a>
                    </div>
                </div>
                <div class="panel-body">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Room Chat
                </div>
                <div class="panel-body">
                               
                <ul class="chat"></ul>
                            </div>
                            <div class="panel-footer">
                                Send
                            </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.main>