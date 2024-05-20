<x-layout.main>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Outstanding</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Data Outstanding
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                data-toggle="dropdown">
                                Filter
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Request</a>
                                </li>
                                <li><a href="#">History</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if (auth()->user()->level == '2')
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('app.outstanding.request.form') }}"
                                    class="btn btn-primary btn-sm">Create Request</a>
                            </div>
                        </div>
                        <hr>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered data-table-outstanding-request">
                            <thead>
                                <tr>
                                    <th>No Ticket</th>
                                    <th>Code & Name Company</th>
                                    <th>Description</th>
                                    <th>Applicant</th>
                                    <th>Vendor Code</th>
                                    <th>Status Request</th>
                                    <th>Status Approval</th>
                                    <th width="100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(function() {
                var table = $('.data-table-outstanding-request').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('app.outstanding.request') }}",
                    columns: [{
                            data: 'form_ticket',
                            name: 'form_ticket'
                        },
                        {
                            data: 'code_name',
                            name: 'code_name'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'created_name',
                            name: 'created_name'
                        },
                        {
                            data: 'code',
                            name: 'code'
                        },
                        {
                            data: 'request_status',
                            name: 'request_status'
                        },
                        {
                            data: 'approval_status',
                            name: 'approval_status'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false,
                            render: function(data, type, full, meta) {
                                return '<button class="btn btn-primary detail-btn" data-id="' + full
                                    .id + '">Detail</button>';
                            }
                        },
                    ]
                });
            });

            $('.data-table-outstanding-request').on('click', '.detail-btn', function(e) {
                var url = "{{ url('app/outstanding/request/form') }}/" + $(this).data('id') + "/detail";
                window.location.href = url;
            });
        </script>
    @endpush
</x-layout.main>
