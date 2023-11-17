<x-layout.main>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Lokasi</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Lokasi
                </div>
                <a href="{{ route('lokasi.add') }}" class="btn btn-xs btn-primary" style="margin-left: 1.25rem; margin-top: 1.25rem;">Add</a>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="tableLevel">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Lokasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>1</td>
                                    <td>Lokasi</td>
                                    <td class="center">
                                        <a href="{{ route('lokasi.edit') }}"class="btn btn-xs btn-warning">Edit</a>
                                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr class="even gradeC">
                                    <td>2</td>
                                    <td>Nama</td>
                                    <td class="center">
                                        <button type="submit" class="btn btn-xs btn-warning">Edit</button>
                                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr class="even gradeC">
                                    <td>3</td>
                                    <td>Email</td>
                                    <td class="center">
                                        <button type="submit" class="btn btn-xs btn-warning">Edit</button>
                                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr class="even gradeC">
                                    <td>4</td>
                                    <td>Index</td>
                                    <td class="center">
                                        <button type="submit" class="btn btn-xs btn-warning">Edit</button>
                                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            $(document).ready(function() {
                $('#tableLevel').DataTable({
                    responsive: true
                });
            });
        </script>
    @endpush

</x-layout.main>
