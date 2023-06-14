<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\patient;
use App\Models\Appointment;
use App\Models\medication;
use DB;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $doctor=doctor::All();
                return view('user.home', compact('doctor'));
            }else{
                if(Auth::user()->usertype=='2'){
                    $doctor=doctor::All();
                    $patient=patient::All();
                    $patcount=$patient->count();
                    $doccount=$doctor->count();
                    $appcount=appointment::All()->count();
                    $medcount=medication::All()->count();
                    return view('doctor.home', compact('patient','doctor','patcount','doccount','appcount','medcount'));
                }else{
                    $doctor=doctor::All();
                    $patient=patient::All();
                    $patcount=$patient->count();
                    $doccount=$doctor->count();
                    $appcount=appointment::All()->count();
                    $medcount=medication::All()->count();
                    return view('admin.home', compact('patient','doctor','patcount','doccount','appcount','medcount'));
                }
            }
        }else{
            return redirect()->back();
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('home');
        }else{
            $doctor=doctor::All();
            return view('user.home', compact('doctor'));
        }
    }

    

    public function makeAppointment(request $request){
        if(Auth::id()){
            $appointment=new appointment;
            $appointment->name=Auth::user()->name;
            $appointment->email=$request->email;
            $appointment->date=$request->date;
            $appointment->docname=$request->docname;
            $appointment->docid=DB::table('doctors')->where('name', $request->docname)->value('id');; 
            $appointment->number=$request->number;
            $appointment->message=$request->message;
            $appointment->statut="in progress";
            $appointment->userid=Auth::user()->id;
    
            $appointment->save();
            return redirect()->back()->with('message', 'APPOINTMENT REQUEST SENT SUCCESSFULL, WE WILL CONTACT YOU SOON');
           
        }else{
            return redirect()->back()->with('error', 'U HAVE TO LOG IN FIRST TO TAKE AN APPOINTMENT');
        }
    }

    public function MyAppointments(){
        $user_id=Auth::user()->id;
        $appointments=appointment::where('userid', $user_id)->get();
        return view('user.myAppointments', compact('appointments'));
    }

    public function cancelAppointment($id){
        $appoint=appointment::find($id);
        $appoint->delete();
        return redirect()->back();
    }
}
