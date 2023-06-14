<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\patient;
use App\Models\user;
use App\Models\medication;
use App\Notifications\sendEmailNotification;
use Notification;
use DB;
use Hash;


class AdminController extends Controller
{

   


/* -------------------------------------------------------------------------------------  */
                                /* DOCTOR FUNCTIONS */
/* -------------------------------------------------------------------------------------  */    

    public function add(){
        if(Auth::id()){
            return view('admin.add_doctors');
        }else{
            return redirect('home');
            
        }
    }

    public function upload(request $request){

      

        $doctor=new doctor;
        $image=$request->file('image');
        $imagename=time().'.'.$image->getClientOriginalExtension();
        //$destinationPath = base_path('doctorimage');
        $image->move('doctorimage', $imagename);
        $doctor->image=$imagename;
        
        $doctor->id=$this->generateId();
        $doctor->name=$request->firstname . $request->lastname ;
        $doctor->phone=$request->phone;
        $doctor->email=$request->email;
        $doctor->gender=$request->gender;
        $doctor->speciality=$request->speciality;
        $doctor->age=$request->age;
        $doctor->save();


        $user=new user;
        $user->id=$this->generateId();
        $user->name=$request->firstname . $request->lastname ;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->usertype='2';
        $user->save();

     
        /* return redirect()->back()->with('message', 'Doctor added successfly'); */
        $doctors=doctor::all();
        return view('admin.viewDoctors', compact('doctors'));
    }

    public function generateId(){
        $user=user::all();
        $i=1;
        foreach($user as $item){
            if($item->id=$i){
                $i++;
            }
        }
        return $i;

    }

    public function viewDoctors(){
        $doctors=doctor::all();
        return view('admin.viewDoctors', compact('doctors'));
    }
   
    public function updateDoctor($id){
        $doctor=doctor::find($id);
        return view('admin.updateDoctor', compact('doctor'));
    }
    
    public function updateDoc(request $request, $id){
        $doctor=doctor::find($id);

        $image=$request->file('image');
        $imagename=time().'.'.$image->getClientOriginalExtension();
        //$destinationPath = base_path('doctorimage');
        $image->move('doctorimage', $imagename);
        $doctor->image=$imagename;
        
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->email=$request->email;
        $doctor->gender=$request->gender;
        $doctor->speciality=$request->speciality;
        $doctor->age=$request->age;
        $doctor->save();
     
        return redirect()->back()->with('message', 'Doctor updated successfly');
    }

    public function softDeletes($id){
        $doctor=doctor::find($id)->delete();
        return redirect()->back();
    }
   
   
/* -------------------------------------------------------------------------------------  */
                                /*  APPOINTMENT FUNCTIONS */
/* -------------------------------------------------------------------------------------  */   
   
    public function viewAppointments(){
        $appointments=appointment::all();
        return view('admin.viewAppointments', compact('appointments'));
    }

    public function approveAppointment($id){
        $appointment=appointment::find($id);
        $appointment->statut='approved';
        $appointment->save();
        return redirect()->back();
    }

    public function cancelAppointment($id){
        $appointment=appointment::find($id);
        $appointment->statut='canceld';
        $appointment->save();
        return redirect()->back();
    }

    public function setAppointment(){
        $patient=patient::all();
        $doctor=doctor::all();
        return view('admin.setAppointment', compact('patient'), compact('doctor'));
    }

    public function uploadAppointment(request $request){
        $appointments=appointment::all();
        $appointment=new appointment;

        $appointment->name=$request->patientName;
        $appointment->email=$request->patientEmail;
        $appointment->date=$request->date;
        $appointment->docname=$request->doctorName;
        $appointment->number=$request->patinetPhone;
        $appointment->message=$request->message;
        $appointment->docid=DB::table('doctors')->where('name', $request->doctorName)->value('id');; 
        $appointment->statut="in progress";

        $appointment->save();
     
        return view('admin.viewAppointments', compact('appointments'));
    }

    public function deleteAppointment($id){
        $appointment=appointment::find($id)->delete();
        return redirect()->back()->with('message', 'appointment deleted successfly');
    }

    public function Email($id){
        $appointment=appointment::find($id);
        return view('admin.email', compact('appointment'));
    }
    
    public function sendEmail(request $request, $id){
        $appointment=appointment::find($id);
        $details=[
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actionText' => $request->actionText,
            'actionURL' => $request->actionURL,
            'endPart' => $request->endPart 
        ];

        Notification::send($appointment, new sendEmailNotification($details));
        return redirect()->back()->with('message', 'Email sent successfly');
    }



/* -------------------------------------------------------------------------------------  */
                                /* PATIENT FUNCTIONS */
/* -------------------------------------------------------------------------------------  */


    public function addPatient(){
        return view('admin.addPatient');
    }

    public function uploadPatient(request $request){
        $patient=new patient;
        
        $patient->name=$request->firstname . $request->lastname;
        $patient->age=$request->age;
        $patient->phone=$request->phone;
        $patient->email=$request->email;
        $patient->gender=$request->gender;
        $patient->adress=$request->adress;
        
        $patient->save();
        $patients=patient::all();
     
        /* return redirect()->back()->with('message', 'patient added successfly'); */
        return view('admin.viewPatients', compact('patients'))->with('message', 'patient added successfly');
    }

    public function viewPatients(){
        $patients=patient::all();
        return view('admin.viewPatients', compact('patients'));
    }

    public function updatePatient($id){
        $patient=patient::find($id);
        return view('admin.updatePatient', compact('patient'));
    }
    
    public function updatePat(request $request, $id){
        $patient=patient::find($id);
        
        $patient->name=$request->name;
        $patient->age=$request->age;
        $patient->phone=$request->phone;
        $patient->email=$request->email;
        $patient->gender=$request->gender;
        $patient->adress=$request->adress;
        $patient->save();
     
        return redirect()->back()->with('message', 'patient updated successfly');
    }

    public function patientsoftDeletes($id){
        $patient=patient::find($id)->delete();
        return redirect()->back();
    }





/* -------------------------------------------------------------------------------------  */
                                /* MEDICATION FUNCTIONS */
/* -------------------------------------------------------------------------------------  */    

    public function viewMedications(){
        $medications=medication::all();
        return view('admin.viewMedications', compact('medications'));
    }

    public function updateMedication($id){
        $medication=medication::find($id);
        return view('admin.updateMedication', compact('medication'));
    }

    public function updateMed(request $request, $id){
        $medication=medication::find($id)->first();
        
        $medication->name=$request->name;
        $medication->speciality=$request->speciality;

        $medication->save();
     
        return redirect()->back()->with('message', 'medication updated successfly');
    }

    public function deleteMedication($id){
        $medication=medication::find($id)->delete();
        return redirect()->back();
    }

    public function addMedication(){
        return view('admin.addMedication');
    }

    public function uploadMedication(request $request){
        $medication=new medication;
        
        $medication->name=$request->name;
        $medication->speciality=$request->speciality;
        
        $medication->save();
     
        return redirect()->back()->with('message', 'medication added successfly');
    }


}
