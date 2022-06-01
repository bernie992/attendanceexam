@extends('layouts.app')
@extends('layouts.admin_sidebar')

    @section('content')
    <div id="layoutSidenav" style="background-color: orange;">
    <div id="layoutSidenav_content">
     <div class="main d-flex nowrap">
        <div class="container col-md-4">
            <center><h6>CARD HEADER</h6></center>
            <div class="card">
                <div class="card-body">Content</div>
            </div>
        </div>
        <div class="container col-md-4">
        <center><h6>CARD HEADER</h6></center>
            <div class="card">
                <div class="card-body">Contents</div>
            </div>
        </div>
    </div>
    <footer class="py-4 mt-auto" style="background-color: orange;">
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
@endsection