<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\TranningController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\DynamicPdfController;
use App\Http\Controllers\emailcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



use App\Models\Internship;
use App\Models\Tranning;
use App\Models\lead;
use App\Models\marketer;
use App\Models\service;
use App\Models\course;
use App\Models\payment;
use App\Models\session;
use Illuminate\Support\Facades\Request;


use App\Http\Controllers\TestController;



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
if(Auth::check())
{
return View::make('login');
}

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/tables', function () {
    return view('tables');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/', function () {
    return view('login');
});

Route::get('/billing', function () {
    return view('billing');
});

Route::get('/tranning', function () {
    return view('tranning');
});
Route::get('internship', function () {
    return view('internship');
});
Route::get('courses', function () {
    return view('courses');
});
Route::get('services', function () {
    return view('services');
});
Route::get('mail', function () {
    return view('mail');
});
Route::get('courseform', function () {
    return view('courseform');
});
Route::post("add",[usercontroller::class,'adddata']);
Route::get("courses",[usercontroller::class,'getdata']);
Route::get("internship",[InternshipController::class,'index']);
Route::get('trannings', [TranningController::class, 'getStudents'])->name('tranning.list');
Route::get('/trannings', function () {
    return view('trannings');
});
Route::post("add",[usercontroller::class,'adddata']);
Route::post("tranning",[usercontroller::class,'tranningdata']);
Route::get("internship",[usercontroller::class,'interndata']);
Route::get('viewintern', function () {
    return view('viewintern');
});
Route::get ( '/internship', function () {
    $data = Internship::all ();
    return view ( 'internship' )->withData ( $data );
});
Route::get ( '/tranning', function () {
    $data = Tranning::all ();
    return view ( 'tranning' )->withData ( $data );
});

Route::post("inter",[usercontroller::class,'internadd']);
Route::get('/leads', function () {
    return view('leads');
});
Route::get('/marketer', function () {
    return view('marketer');
});
Route::get('/pdf', function () {
    return view('pdf');
});
Route::get('/pdfcourse', function () {
    return view('pdfcourse');
});

Route::get('/marketerpdf', function () {
    return view('marketerpdfs');
});


Route::get('/marketerinvoice', function () {
    return view('marketerinvoice');
});
   
Route::get ( '/leads', function () {
    $data = lead::all ();
          
    $intern = internship::all("course_name");
    $service = service::all("course_name");
    $course = course::all("course_name");
    $marketer=marketer::all("name");
    $status = Request::input('course');
    $use = DB::table('leads')->where('lead', 'course')->get();
    $serv = DB::table('leads')->where('lead', 'service')->get();
    $inte = DB::table('leads')->where('lead', 'internship')->get();
   
    
      
    return view('leads',["intern" =>  $intern, "service" =>  $service, "course" =>  $course,"marketer"=>  $marketer,"data"=>$data,"use"=>  $use,"serv"=> $serv,"inte"=>$inte]);
    return view('leaddata',["use"=>  $use,"serv"=> $serv,"inte"=>$inte]);
});


Route::post("lead",[usercontroller::class,'leadadd']);
Route::post("mark",[usercontroller::class,'markadd']);
Route::get ( '/marketer', function () {
    $data =  marketer::all ();
    return view ( 'marketer' )->withData ( $data );
});
Route::get('buyservice', function () {
    return view('buyservice');
});
Route::get('monthinvoice', function () {
    return view('monthinvoice');
});
Route::get('confrim', function () {
    return view('confrim');
});
Route::get('model', function () {
    return view('mark_invoice');
});
Route::get('leadsview', function () {
    return view('leadsview');
});
Route::post("service",[usercontroller::class,'service']);
Route::get('try', function () {
    return view('try');
});
// Route::get("leads",[usercontroller::class,'inter']);
// Route::get("find",[TranningController::class,'find']);
Route::get('leaddata', function () {
    return view('leaddata');
});
Route::get("leaddata",[usercontroller::class,'search']);

Route::get("leadview/{id}",[usercontroller::class,'leadview']);

Route::get("prodview",[TestController::class,'prodfunct']);





Route::get("findProductName",[TestController::class,'findProductName']);
Route::get("findPrice",[TestController::class,'findPrice']);
Route::get("findMarket",[TestController::class,'findMarket']);
Route::get("findDuration",[TestController::class,'findDuration']);
Route::get("findAmount",[TestController::class,'findAmount']);
Route::get("findAmount",[TestController::class,'findAmount']);





Route::get("findcourseprice",[TestController::class,'findcourseprice']);
Route::get("findcourseduration",[TestController::class,'findcourseduration']);
Route::get("p1",[TestController::class,'p1']);
Route::get("p2",[TestController::class,'p2']);
Route::get("p3",[TestController::class,'p3']);
Route::get("p3",[TestController::class,'p3']);
Route::get("invoice",[AjaxController::class,'invoice']);
Route::get("marketer_status",[TestController::class,'marketer_status']);
Route::post("sendemail",[emailcontroller::class,'send']);
Route::get('invoice/{id}',[AjaxController::class,"pdf"]);
Route::get('invoicemark/{marketer_name}',[AjaxController::class,"marketerpdf"]);

Route::get('/view-product/{lead}/{course}/{month}',[AjaxController::class,"coursepdf"])->name('view.product'); ;


Route::get('register',[RegisterController::class,'register']);
Route::post('register',[RegisterController::class,'store'])->name('register');


Route::get('login',[LoginController::class,'login']);
Route::post('login',[LoginController::class,'store'])->name('login');
Route::get('logout',[LoginController::class,'logout'])->name('logout');

Route::get('home', 'LoginController@home')->name('home');


























