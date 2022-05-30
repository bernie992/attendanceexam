@extends('layouts.app')
@extends('layouts.admin_sidebar')

@section('content')
<div id="layoutSidenav" style="background-color: orange;">
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4">Attendance Report</h4>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                
                                Attendance Report
                            </div>
                            <div class="card-body">
                                
                            <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>tiger@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-info">View</button> 
                                            <button type="button" class="btn btn-info">Edit</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
</div>
</div>

    <script src="js/datatables.js"></script>
@endsection