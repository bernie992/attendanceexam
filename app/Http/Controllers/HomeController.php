<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Applicant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role=Auth::user()->role;

        if($role=='0')
        {
            
            return view('admin_dashboard');
        }
        else{
            $applicant = Applicant::all();
            return view('hr.dashboard', compact('applicant'));
        }
    }

    public function admin_dash()
    {
        return view('admin_dashboard');
    }
    
    public function employee_lists()
    {
        return view('employee_list');
    }
    

}
