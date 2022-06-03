<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Time;
use App\Models\View;
use App\Models\TimeOut;
use App\Models\ExamTitle;
use App\Models\ExamList;
use App\Models\Link;
use App\Models\Applicant;
use Carbon\Carbon;
use DB;


class UserController extends Controller
{
   
    public function viewrecord()
    {
        $user = User::all();
        return view('employee_list', compact('user'));
    }

    public function view_title()
    {
        $examtitle = ExamTitle::all();
        return view('exam', compact('examtitle'));
    }

   
    // Time In Data

    public function time_in(Request $request)
    {       
        $time=new Time();

        $test = Carbon::now('Asia/Manila')->format('h:i:s');
        $time->timeIn_am =$request->in=$test;
        $time->user_id = Auth::user()->id;
        $time->save();

        return redirect()->back();   
    }

    // Time Out Data
    public function time_out(Request $request)
    {
        // $times=new Time();

        // $test1 = Carbon::now('Asia/Manila')->format('h:i:s');

        // $times = Auth::user()->id;
        // $checktime = Time::where('user_id', $times)->first();
        // $checktime->timeOut=$request->out=$test1;
        // $checktime->save();
        


        $time=new TimeOut();

        $test = Carbon::now('Asia/Manila')->format('h:i:s');
        $time->timeOut =$request->out=$test;
        $time->user_id = Auth::user()->id;
        $time->save();

        return redirect()->back();
    }
    // Add Employee
    public function addemployee(Request $request)
    {
        $users=new user;

        $users->name=$request->name;
        $users->position=$request->position;
        $users->email=$request->email;
        $users->password=bcrypt($request->password);

        $users->role='1';
        $users->save();

        return redirect()->back();
    }
    public function view_question()
    {
        $exam_title = ExamList::all();
        return view('view_question', compact('exam_title'));
    }
    public function create_exam(Request $request){
        
        $exam = new ExamTitle;

        $exam->name=$request->exname;

        $exam->save();

        return redirect()->back();
    }

    public function create_question(Request $request){
        
       
        $question =new ExamList();
    
        $question->question=$request->question_title;
        $question->a=$request->option_title_1;
        $question->b=$request->option_title_2;
        $question->c=$request->option_title_3;
        $question->d=$request->option_title_4;
        $question->e=$request->option_title_5;

        $question->save();
       
        return redirect()->back();
    }

    public function attendance()
    {
        return view('attendance');
    }

    public function exam()
    {
        $examtitle = ExamTitle::all();
    
        return view('exam', compact('examtitle'));
    }
    
    public function employee_dash()
    {
        $applicant = Applicant::all();

        return view('hr.dashboard', compact('applicant'));
    }  

    public function examier()
    {
        $search = ExamTitle::all();
        $app = Applicant::all();
        $link = Link::all();
      
        return view('hr.examier', compact('search','app','link'));
    } 

    public function createlink(Request $request)
    {
    

        $link = new Link();

        $link -> examtitle = $request -> titlequest;
        $link -> applicant = $request -> userap;

        $link -> save();
       
        return redirect()->back();
    } 

    public function landing()
    {
        return view('landingpage');
    }

    public function application(Request $request)
    {
        $app = new Applicant();

        $app -> fullname = $request->fullname;
        $app -> age = $request->age;
        $app -> address = $request->address;
        $app -> number = $request->contact;
        $app -> email = $request->email;

        $app -> save();

        return redirect()->back();
    }
}
