@extends('layouts.app')
@extends('layouts.employee_sidebar')

@section('meta')
        <title>My Dashboard | Workday Time Clock</title>
        <meta name="description" content="Workday my dashboard, view recent attendance, view recent leave of absence, and view previous schedules">
    @endsection

    @section('content')
    <div id="layoutSidenav" style="background-color: orange;">
    <div id="layoutSidenav_content">
    
        
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
@endsection