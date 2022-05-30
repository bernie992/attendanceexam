@extends('layouts.app')
@extends('layouts.employee_sidebar')


<style>
      
        .links>a {
            color: black;
            padding: 0 25px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 1000;
            font-family: italic;
            
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        .clockStyle {
            font-size: 50px;
            margin: 0 290px;
            margin-top: 1em;
            padding: 5px;
            color: black;
            width: 300px;
            font-family: italic;
            font-weight: bold;
        }
        .button
        {
            position:absolute;
            margin-bottom: 40%;  
            margin-left: 250px;
            /* padding: 8%; */
        }
        .btn{
           
            height: 50px;
            margin-left: 5em;
            padding: 8%;
            
        }
        .bg{
            position:absolute;
            margin-left: 50%;
            height: 100%;
            width: 60%;
            /* padding-right: 10%; */
        }

</style>

@section('meta')
        <title>My Dashboard | Workday Time Clock</title>
        <meta name="description" content="Workday my dashboard, view recent attendance, view recent leave of absence, and view previous schedules">
    @endsection

    @section('content')
    <img class="bg" src="image/back10.jpg"alt="">
    <div id="layoutSidenav">
    <div id="layoutSidenav_content" style="-right: 10em;">
    <div class="container rounded mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right text- 100" style="margin-left: 8%; color: white; font-weight: bold;font-family: italic;  font-weight: bold;">
            <div class="d-flex flex-column align-items-center text-center p-3 py-1">
                <img class="rounded-circle mt-5" src="image/prof.png"alt="">
                <br><span>{{ Auth::user()->name }}</span><br>
                <span>{{ Auth::user()->position }}</span>
                <br><span>{{ Auth::user()->email }}<span></span>
                <br><span ></span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
            <div class="content">
            <div class="title m-b-md">
                <div class="clockStyle" id="clock"></div>
            </div>
            </div>
          
            </div>
 
    <script type="text/javascript">
        setInterval(displayclock, 500);

        function displayclock() {
            var time = new Date();
            var hrs = time.getHours();
            var min = time.getMinutes();
            var sec = time.getSeconds();
            var en = 'AM';
            if (hrs > 12) {
                en = 'PM';
            }
            if (hrs > 12) {
                hrs = hrs - 12;
            }
            if (hrs == 0) {
                hrs = 12;
            }
            if (hrs < 10) {
                hrs = '0' + hrs;
            }
            if (min < 10) {
                min = '0' + min;
            }
            if (sec < 10) {
                sec = '0' + sec;
            }
            document.getElementById("clock").innerHTML = hrs + ':' + min + ':' + sec + ' ' + en;
        }
    </script>
    
          <div class = "button">
                <th>
                    <td><a class="btn btn-danger"name="in" href="{{url('/time In')}}">Time In</a></td>
                    <td><a class="btn btn-danger"name="out" href="{{url('/time Out')}}">Time Out</a></td>
                </th>
                
               
            </div>  

            
            </div>
            </div>
            </div>
            </div>
            </div>
                     
            
            
         
@endsection