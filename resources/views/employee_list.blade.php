@extends('layouts.app')
@extends('layouts.admin_sidebar')

@section('content')
<div id="layoutSidenav" style="background-color: orange;">
<div id="layoutSidenav_content">
        <main>
                
            <div class="container-fluid px-4">
            <h4 class="mt-4">Data Record</h4>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#regModal"  style="margin-left:85.5%; margin-bottom:1em;">
                <i class="fa fa-plus"></i> | Add Employee </button>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Employee List
                    </div>
                    <div class="card-body">
                        
                    <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $users)
                                    <tr>
                                      <td>{{$users->name}}</td>
                                      <td>{{$users->position}}</td>
                                      <td>{{$users->email}}</td>
                                      <td>{{$users->role == '0' ? 'Admin':'User' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
<!-- modal -->

<!-- footer -->
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
    @include('modal_form')
@endsection