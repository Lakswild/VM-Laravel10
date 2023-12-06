<x-layout.main>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Form  Registrasi</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data form
                </div>
                <!-- /.panel-heading -->
                <button type="button" class="btn btn-xs btn-primary" style="margin-left: 1.25rem; margin-top: 1.25rem;" 
                data-toggle="modal" data-target="#myModal">Add</button>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="tableLevel">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Account Group</th>
                                    <th>Nama Vendor</th>                     
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>1</td>
                                    <td>Z010</td>
                                    <td>CV Kita</td>
                                    <td class="center">
                                        <a href="/form/edit"class="btn btn-xs btn-warning">Edit</a>
                                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                        <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal2">Lampiran</button>
                                    </td>
                                </tr>
                                <tr class="even gradeC">
                                    <td>2</td>
                                    <td>Z020</td>
                                    <td>PT Mencari</td>
                                    <td class="center">
                                        <button type="submit" class="btn btn-xs btn-warning">Edit</button>
                                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                        <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal2">Lampiran</button>
                                    </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-form.add></x-form.add>
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
