<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\doctor;
use Barryvdh\DomPDF\Facade\Pdf;

class PrintController extends Controller
{
      public function downloadPDF()
      {
            $patient = patient::all();
            $doctor = doctor::all();
        $pdf = PDF::loadView('print.certificat', compact('patient'), compact('doctor'));
        return $pdf->download('certificat.pdf');
      }

      
}
