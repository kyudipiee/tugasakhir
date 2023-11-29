@extends('layout.admin')

@section('content')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mt-3 mb-4 text-gray-800">Tables</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="/tambahstudents" class="btn btn-success mb-3">tambah</a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>

                                            <th scope="col">Name</th>
                                            <th scope="col">NISN</th>
                                            <th scope="col">Place of Birth</th>
                                            <th scope="col">Date of Birth</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Subdistricts</th>
                                            <th scope="col">Province</th>
                                            <th scope="col">ZIP</th>

                                            <th scope="col">dibuat</th>
                                            <th scope="col">aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">No</th>

                                            <th scope="col">Name</th>
                                            <th scope="col">NISN</th>
                                            <th scope="col">Place of Birth</th>
                                            <th scope="col">Date of Birth</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Subdistricts</th>
                                            <th scope="col">Province</th>
                                            <th scope="col">ZIP</th>

                                            <th scope="col">dibuat</th>
                                            <th scope="col">aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody class="table-group-divider">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Photo</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>Photo</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>
                                                <button type="button"  class="btn btn-warning">EDIT</button>

                                                <button type="button"  class="btn btn-danger">DELETE</button>
                                            </td>

                                        </tr>



                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->


@endsection
