<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\Tranning;
use App\Models\Internship;
use App\Models\lead;
use App\Models\marketer;
use App\Models\service;
use App\Models\leaddata;
//use App\DataTables\courseDataTable;
use DataTables;
use DB;
use session;
use Carbon\Carbon;
$date = Carbon::now();



class usercontroller extends Controller
{
    function adddata(Request $req){
        $course=new course;
        $course->course_name=$req->course_name;
        $course->price=$req->course_price;
        $course->duration=$req->duration;
        $course->price=$req->status;
        $course->discount=$req->discount;

        $course->save();      
        return redirect("courses");

    }
    function getdata(Request $req){
        $data= course::all();
        return view("courses",['members'=>$data]);
}
    // public function getdata(courseDataTable $dataTable){
    //       return $dataTable->render('courses');
    // }
    // public function getdata(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = course::latest()->get();
    //         return Datatables::of($data)
    //             ->addIndexColumn()
    //             ->addColumn('action', function($row){
    //                 $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
    //                 return $actionBtn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }
    // }
    function interndata(Request $req){
        $data= Internship::all();
        return view("internship",['members'=>$data]);
}
    function tranningdata(Request $req){
        $course= new Tranning;
        $course->course_name=$req->course_name;
        $course->price=$req->price;
        $course->discount=$req->discount;

        $course->save();      
        return redirect("tranning");

    }
    function internadd(Request $req){
        $course= new Internship;
        $course->course_name=$req->course_name;
        $course->duration=$req->duration;
        $course->price=$req->status;
        $course->enroll_student=$req->enroll_student;
        $course->save();      
        return redirect("tranning");

    }
    function leadadd(Request $req){
        
        $course= new lead;
      
        if($req->lead=="internship"){
           $lead_course=$req->leads_internship;
        }
        else if($req->lead=="service"){
            $lead_course=$req->leads_services; 
        }
        else if($req->lead=="course"){
            $lead_course=$req->leads_courses;
        }
        $course->lead_course=$lead_course;
        $course->name=$req->name;
        $course->gmail=$req->gmail;
        $course->uni=$req->uni;
        $course->gender=$req->gender;
        $course->fee=$req->fee;
        $course->address=$req->address;
        $course->cnic=$req->cnic;
        $course->father_name=$req->father_name;
        $course->degree=$req->degree;
        $course->dob=$req->dob;
        $course->about_devicon=$req->about_devicon;
        $course->mobile=$req->mobile;      
        $course->ref=$req->ref;
        $course->lead=$req->lead;
        $course->marketer_name=$req->marketer_name;
        $course->deal_tell=$req->deal_tell;
        $course->deal_done=$req->deal_done;
        $course->save();      
        // $now = Carbon::now();
        //     $m= $now->month;
        //     $y=$now->year;
        //     $duration=$req->duration;
        //     // $id=leaddata::max('id');
        //     // $id=$id+1;            
        //     for ($i=1; $i<=$duration; $i++) {   
        //         $leaddata=new leaddata;             
         
        //     $course=$lead_course;
        //     $name=$req->name;
        //     $marketer_name=$req->marketer_name;
        //     $lead=$req->lead;
        //     $price=$req->fee;
        //     $installment= number_format((float)$price/(float)$duration);
        
    
        //         $leaddata->course=$course;
        //         $leaddata->lead=$lead;
        //         $leaddata->name=$name;
        //         $leaddata->marketer_name=$marketer_name;
        //         $leaddata->price=$price;
        //         $leaddata->duration= $duration;
        //         $leaddata->installment_amount=$installment;
        //         $leaddata->fee_month=$m;
        //         $leaddata->year=$y;
        //         $leaddata->month=$i;
        //         $leaddata->status="unpaid";
          
        //         $m=$m+1;
        //         if($m>12)
        //         {
        //             $m=1;
        //             $y=$y+1;
        //         }
        //         else
        //         {
        //             $m=$m;
        //             $y=$y;

        //         }
                  
        //         $leaddata->save();
        //    }
         
           return redirect()->back();   
       
         }
    function markadd(Request $req){
        $course= new marketer;
        $course->name=$req->name;
        $course->phone=$req->phone;
        $course->city=$req->city;
        $course->ref=$req->ref;
        $course->percentage=$req->percentage;
        $course->balance=$req->balance;
        $course->save();      
        return redirect("marketer");

    }
    function service(Request $req){
        $course= new service;
        $course->name=$req->name;
        $course->phone=$req->phone;
        $course->gmail=$req->gmail;
        $course->course_name=$req->service_name;
        $course->save();      
        return redirect("confrim");

    }
     function search() {
        $course = DB::table('leads')->where('lead', 'course')->get();
        $service = DB::table('leads')->where('lead', 'service')->get();
        $intern = DB::table('leads')->where('lead', 'internship')->get();
      
        return view('leaddata',["intern" =>  $intern, "service" =>  $service, "course" =>  $course]);
    
    }
    function leadview(Request $req,$id){
        $p = DB::table('leads')->where('id', $id)->first();
        return view('leadsview',['p'=>$p]);

    }
    function session(Request $req){
        $data= session::all();
        return view("ajax",['session'=>$data]);
   
    
}
}

