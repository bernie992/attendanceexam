@extends('layouts.app')
@extends('layouts.employee_sidebar')



    @section('content')
    <div id="layoutSidenav" style="background-color: orange;">
    <div id="layoutSidenav_content">
    <main>
                
                <div class="container-fluid px-4">
                <h4 class="mt-4">Data Record</h4>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Applicant List
                        </div>
                        <div class="card-body">
                            
                        <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>					
                                        <th>Full Name</th>									
                                        <th>Age</th>	
                                        <th>Address</th>
                                        <th>Contact Number</th>	
                                        <th>Email</th>	
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                @foreach($applicant as $applicantlist)
                                        <tr>
                                          <td>{{$applicantlist->id}}</td>
                                          <td>{{$applicantlist->fullname}}</td>
                                          <td>{{$applicantlist->age}}</td>
                                          <td>{{$applicantlist->address}}</td>
                                          <td>{{$applicantlist->number}}</td>
                                          <td>{{$applicantlist->email}}</td>
                                         
                                        </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
    

</div>
</div>
@endsection