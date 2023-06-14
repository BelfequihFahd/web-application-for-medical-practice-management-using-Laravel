<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\doctor;
use App\Models\appointment;
use App\Models\medication;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DateTime;
use DB;


class DoctorController extends Controller
{

    public function prnpriview()
      {
            $patient = patient::all();
            $doctor = doctor::all();
            return view('print.certificat', compact('patient'), compact('doctor'));
      }

      public function makeCertificat(request $request)
      {
            $patient=$request->patientName;
            $doctor=Auth::user()->name;
            $dateofbirth=$request->dateofbirth;
            $beginningDate=$request->beginningDate;
            $EndingDate=$request->EndingDate;
            $healthCondition=$request->healthCondition;

            /* to calculate the diffrence between two date */ 
            $datetime1 = new DateTime($beginningDate);
            $datetime2 = new DateTime($EndingDate);
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');

            $days=$days ;
            return view('print.viewcertificat', compact('patient', 'doctor', 'dateofbirth', 'beginningDate', 'EndingDate', 'healthCondition', 'days'));
      }

      
      public function Certificates()
      {
        return view('doctor.certificates');
      } 

      
      public function viewAppointments()
      {
            $doctorid=auth::id();
            $appointments = appointment::where('docid', $doctorid)->get();
            /* $appointments = DB::table('appointments')->where('docid', $doctorid)->first(); */
            return view('doctor.viewAppointments', compact('appointments', 'doctorid'));
      }   


      
      public function SportiveCertificate()
      {
            $patient = patient::all();
            $doctor = doctor::all();
            return view('doctor.certificate_sportive', compact('patient'), compact('doctor'));
      }

      public function makeSportiveCertificate(request $request)
      {
            $patient=$request->patientName;
            $doctor=Auth::user()->name;
            $dateofbirth=$request->dateofbirth;
            $Birthplace=$request->Birthplace;
            $expireDate=$request->expireDate;
            $adress=$request->adress ;

            return view('doctor.viewCertificateSportive', compact('patient', 'adress' , 'doctor', 'dateofbirth', 'Birthplace', 'expireDate'));
      }
      
      
      public function ConsultationCertficat()
      {
            $patient = patient::all();
            $doctor = doctor::all();
            return view('doctor.ConsultationCertficat', compact('patient'), compact('doctor'));
      }

      
      public function makeConsultationCertificate(request $request)
      {
            $patient=$request->patientName;
            $doctor=Auth::user()->name;
            $dateofbirth=$request->dateofbirth;
            $Birthplace=$request->Birthplace;
            $expireDate=$request->expireDate;
            $adress=$request->adress ;

            return view('doctor.viewCertificateConsultaion', compact('patient', 'adress' , 'doctor', 'dateofbirth', 'Birthplace', 'expireDate'));
      }
      

      
      public function Arrangment()
      {
        $patient = patient::all();
        $medications = medication::all();
        return view('doctor.arrangment', compact('patient'), compact('medications'));
      }   


      public function makePrescription(request $request)
      {
            $patient=$request->patientName;
            $doctor=Auth::user()->name;
            $CIN=$request->CIN;
            $medications=$request->medications;
            $usage = explode(PHP_EOL, $request->usage);
            $observation=$request->observation;
            $birthdate=$request->birthdate ;
            $PatAge=$request->PatAge ;

            
            return view('doctor.viewPrescription', compact('patient','PatAge','birthdate','medications','observation', 'usage' , 'doctor', 'CIN'));
      }



      public function referralLetter()
      {
        $patient = patient::all();
        return view('doctor.referralLetter', compact('patient'));
      }   

      
      public function MakereferralLetter(request $request)
      {
            $patient=$request->patientName;
            $doctor=Auth::user()->name;
            $dateofbirth=$request->dateofbirth;
            $surgery=$request->surgery;
            $Surgeons=$request->Surgeons;
            $medications=$request->medications ;
            $yearscare=$request->yearscare ;
            $subject=$request->subject ;
            

            return view('doctor.viewReferralLetter', compact('patient','subject','yearscare', 'surgery' , 'doctor', 'dateofbirth', 'Surgeons', 'medications'));
      }

      
      public function medicaleChecksUp()
      {
        $patient = patient::all();
        $doctor = doctor::all();
        return view('doctor.medicaleChecksUp', compact('patient'), compact('doctor'));
      }   
}
