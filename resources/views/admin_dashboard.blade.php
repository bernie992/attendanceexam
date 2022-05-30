@extends('layouts.app')
@extends('layouts.admin_sidebar')

@section('meta')
        <title>My Dashboard | Workday Time Clock</title>
        <meta name="description" content="Workday my dashboard, view recent attendance, view recent leave of absence, and view previous schedules">
    @endsection

    @section('content')
    <div id="layoutSidenav" style="background-color: orange;">
    <div id="layoutSidenav_content">
    
        <div class="container-fluid">
            <main>
                    <div class="container-fluid px-4">
                        <div class="row" style="margin-top: 2em;">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </main>   
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ui icon clock outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"><span class="uppercase">{{ __("Attendance (Current Month)") }}</span></span>
                        <div class="progress-group">
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                            </div>
                            <div class="stats_d">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>{{ __("Late Arrivals") }}</td>
                                            <td><span class="bolder">@isset($la) {{ $la }} @endisset</span></td>
                                        </tr>
                                        <tr>
                                            <td>{{ __("Early Departures") }}</td>
                                            <td><span class="bolder">@isset($ed) {{ $ed }} @endisset</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ui icon user circle"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">{{ __("Present Schedule") }}</span>
                        <div class="progress-group">
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-aqua" style="width: 100%"></div>
                            </div>
                            <div class="stats_d">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>{{ __("Time") }}</td>
                                            <td>
                                                <span class="bolder">
                                                    @isset($cs)
                                                        @php
                                                        if ($cs->intime != null && $cs->outime != null) {
                                                            if ($tf == 1) {
                                                                echo e(date("h:i A", strtotime($cs->intime)));
                                                                echo e(" - ");
                                                                echo e(date("h:i A", strtotime($cs->outime)));
                                                            } else {
                                                                echo e(date("H:i", strtotime($cs->intime)));
                                                                echo e(" - ");
                                                                echo e(date("H:i", strtotime($cs->outime)));
                                                            }
                                                        }
                                                        @endphp
                                                    @endisset
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ __("Rest Days") }}</td>
                                            <td><span class="bolder">@isset($cs->restday) {{ $cs->restday }} @endisset</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="info-box">
                    <span class="info-box-icon bg-orange"><i class="ui icon home"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text uppercase">{{ __("Leaves of Absence") }}</span>
                        <div class="progress-group">
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-orange" style="width: 100%"></div>
                            </div>
                            <div class="stats_d">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>{{ __("Approved") }} </td>
                                            <td><span class="bolder">@isset($al){{ $al }}@endisset</span></td>
                                        </tr>
                                        <tr>
                                            <td>{{ __("Pending") }} </td>
                                            <td><span class="bolder">@isset($pl){{ $pl }}@endisset</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ __("Recent Attendances") }}</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped nobordertop">
                        <thead>
                            <tr>
                                <th class="text-left">{{ __("Date") }}</th>
                                <th class="text-left">{{ __("Time") }}</th>
                                <th class="text-left">{{ __("Description") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($a)
                            @foreach($a as $v)

                            @if($v->timein != '' && $v->timeout == '')
                            <tr>
                                <td>
                                    @php echo e(date('M d, Y', strtotime($v->date))); @endphp
                                </td>
                                <td>
                                    @php
                                        if($tf == 1) {
                                            echo e(date("h:i:s A", strtotime($v->timein)));
                                        } else {
                                            echo e(date("H:i:s", strtotime($v->timein)));
                                        }
                                    @endphp
                                </td>
                                <td>Time-In</td>
                            </tr>
                            @endif
                            
                            @if($v->timein != '' && $v->timeout != '')
                            <tr>
                                <td>
                                    @php echo e(date('M d, Y', strtotime($v->date))); @endphp
                                </td>
                                <td>
                                    @php
                                        if($tf == 1) {
                                            echo e(date("h:i:s A", strtotime($v->timeout)));
                                        } else {
                                            echo e(date("H:i:s", strtotime($v->timeout)));
                                        }
                                    @endphp
                                </td>
                                <td>Time-Out</td>
                            </tr>
                            @endif

                            @if($v->timein != '' && $v->timeout != '')
                            <tr>
                                <td>
                                    @php echo e(date('M d, Y', strtotime($v->date))); @endphp
                                </td>
                                <td>
                                    @php
                                        if($tf == 1) {
                                            echo e(date("h:i:s A", strtotime($v->timein)));
                                        } else {
                                            echo e(date("H:i:s", strtotime($v->timein)));
                                        }
                                    @endphp
                                </td>
                                <td>Time-In</td>
                            </tr>
                            @endif

                            @endforeach
                            @endisset
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ __("Previous Schedules") }}</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                    <table class="table table-striped nobordertop">
                        <thead>
                            <tr>
                                <th class="text-left">{{ __("Time") }}</th>
                                <th class="text-left">{{ __("From Date / Until") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($ps)
                            @foreach($ps as $s)
                            <tr>
                                <td>
                                    @php
                                        if ($s->intime != null && $s->outime != null) {
                                            if ($tf == 1) {
                                                echo e(date("h:i A", strtotime($s->intime)));
                                                echo e(" - ");
                                                echo e(date("h:i A", strtotime($s->outime)));
                                            } else {
                                                echo e(date("H:i", strtotime($s->intime)));
                                                echo e(" - ");
                                                echo e(date("H:i", strtotime($s->outime)));
                                            }
                                        }
                                    @endphp
                                </td>
                                <td>
                                    @php 
                                        echo e(date('M d',strtotime($s->datefrom)).' - '.date('M d, Y',strtotime($s->dateto)));
                                    @endphp
                                </td>
                            </tr>
                            @endforeach
                            @endisset
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ __("Recent Leaves of Absence") }}</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                    <table class="table table-striped nobordertop">
                        <thead>
                            <tr>
                                <th class="text-left">{{ __("Description") }}</th>
                                <th class="text-left">{{ __("Date") }}</th>
                            </tr>
                        </thead>
                            <tbody>
                                @isset($ald)
                                @foreach($ald as $l)
                                <tr>
                                    <td>{{ $l->type }}</td>
                                    <td>
                                        @php
                                            $fd = date('M', strtotime($l->leavefrom));
                                            $td = date('M', strtotime($l->leaveto));

                                            if($fd == $td){
                                                $var = date('M d', strtotime($l->leavefrom)) .' - '. date('d, Y', strtotime($l->leaveto));
                                            } else {
                                                $var = date('M d', strtotime($l->leavefrom)) .' - '. date('M d, Y', strtotime($l->leaveto));
                                            }
                                        @endphp
                                        {{ $var }}
                                    </td>
                                </tr>
                                @endforeach
                                @endisset
                            </tbody>
                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
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