<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@redirect')->name('home')->middleware('auth', 'verified');

/*  ========================================================== ADMIN INTERFACE ========================================================== */

/* ----------------------------------  DOCTOR ROUTES ----------------------------------  */

Route::get('/view_Doctors', 'AdminController@viewDoctors')->name('admin.viewDoctors');
Route::get('/add_doctors', 'AdminController@add')->name('admin.adddoctors');
Route::post('/upload_doctors', 'AdminController@upload')->name('admin.upload');
Route::post('/update_Doc/{id}', 'AdminController@updateDoc')->name('admin.updateDoc');
Route::get('/update_Doctor/{id}', 'AdminController@updateDoctor')->name('admin.updateDoctor');
Route::get('/softDeletes/{id}', 'AdminController@softDeletes')->name('admin.doctor.softdeletes');

/* -------------------------------------------------------------------------------------  */


/* ----------------------------------  PATIENT ROUTES ----------------------------------  */

Route::get('/view_Patients', 'AdminController@viewPatients')->name('admin.viewPatients');
Route::get('/add_patient', 'AdminController@addPatient')->name('admin.addPatient');
Route::post('/upload_patient', 'AdminController@uploadPatient')->name('admin.uploadPatient');
Route::post('/update_Pat/{id}', 'AdminController@updatePat')->name('admin.updatePat');
Route::get('/update_Patient/{id}', 'AdminController@updatePatient')->name('admin.updatePatient');
Route::get('/patient/softDeletes/{id}', 'AdminController@patientsoftDeletes')->name('admin.patient.softdeletes');

/* ------------------------------------------------------------------------------------- */


/* ----------------------------------  MEDICATION ROUTES ----------------------------------  */

Route::get('/view_Medications', 'AdminController@viewMedications')->name('admin.viewMedications');
Route::get('/add_Medication', 'AdminController@addMedication')->name('admin.addMedication');
Route::post('/upload_Medication', 'AdminController@uploadMedication')->name('admin.uploadMedication');
Route::get('/update_Medication/{id}', 'AdminController@updateMedication')->name('admin.updateMedication');
Route::post('/update_Med/{id}', 'AdminController@updateMed')->name('admin.updateMed');
Route::get('/delete_Medication/{id}', 'AdminController@deleteMedication')->name('admin.deleteMedication');

/* ------------------------------------------------------------------------------------- */


/* ----------------------------------ADMIN APPOINTMENT ROUTES ----------------------------------  */


Route::get('/view_Appointments', 'AdminController@viewAppointments')->name('admin.viewAppointments');
Route::get('/approve_Appointment/{id}', 'AdminController@approveAppointment')->name('admin.approveAppointment');
Route::get('/cancel_Appointment/{id}', 'AdminController@cancelAppointment')->name('admin.cancelAppointment');
Route::get('/set_Appointment', 'AdminController@setAppointment')->name('admin.setAppointment');
Route::post('/upload_Appointment', 'AdminController@uploadAppointment')->name('admin.uploadAppointment');
Route::get('/deleteAppointment/{id}', 'AdminController@deleteAppointment')->name('admin.deleteAppointment');
Route::get('/Email/{id}', 'AdminController@Email')->name('admin.Email');
Route::post('/Send_Email/{id}', 'AdminController@sendEmail')->name('admin.sendEmail');
/* ------------------------------------------------------------------------------------- */



/*  ========================================================== USER INTERFACE ========================================================== */


/* ----------------------------------CLIENT APPOINTMENT ROUTES ----------------------------------  */

Route::post('/make_appointment', 'HomeController@makeAppointment')->name('user.makeAppointment');
Route::get('/My_appointments', 'HomeController@MyAppointments')->name('user.myAppointments');
Route::get('/cancel_App/{id}', 'HomeController@cancelAppointment')->name('user.cancelApp');

/* ------------------------------------------------------------------------------------- */

Route::get('/blog_details', function () {
    return view('user.blog-details');
})->name('user.blog_details');





/*  ========================================================== DOCTOR INTERFACE ========================================================== */


/* ----------------------------------PRINT ROUTES ----------------------------------  */

Route::get('/prnpriview','DoctorController@prnpriview')->name('doctor.Certficat');
Route::post('/certificat','DoctorController@makeCertificat')->name('doctor.viewCertficat');

/* ------------------------------------------------------------------------------------- */



Route::get('/doc_view_Appointments','DoctorController@viewAppointments')->name('doctor.viewAppointments');
Route::get('/Arrangment','DoctorController@Arrangment')->name('doctor.Arrangment');
Route::post('/make_Prescription','DoctorController@makePrescription')->name('doctor.makePrescription');
Route::get('/referral_Letter','DoctorController@referralLetter')->name('doctor.referralLetter');
Route::post('/Make_referral_Letter','DoctorController@MakereferralLetter')->name('doctor.makereferralLetter');
Route::get('/medicale_Checks-up','DoctorController@medicaleChecksUp')->name('doctor.medicaleChecks-up');
Route::get('/Certificates','DoctorController@Certificates')->name('doctor.Certificates');
Route::get('/Sportive_Certificate','DoctorController@SportiveCertificate')->name('doctor.SportiveCertificate');
Route::post('/view_Sportive_Certificate','DoctorController@makeSportiveCertificate')->name('doctor.makeSportiveCertificate');
Route::get('/Consultation_Certificate','DoctorController@ConsultationCertficat')->name('doctor.ConsultationCertficat');
Route::post('/view_Consultation_Certificate','DoctorController@makeConsultationCertificate')->name('doctor.makeConsultationCertificate');






Route::get('/aboutus', function () {
    return view('user.aboutus');
})->name('aboutus');



/* 
 Route::get('/doctor', function () {
    return view('doctor.home');
})->name('doctor.dashboard'); */ 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
