<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lead;
use DB;
use App\Models\payment;
use App\Models\leaddata;
use App\Models\session;



class TestController extends Controller
{
    //
    public function prodfunct(){

		// $prod=lead::select('*')->where('lead','=','Service')->get();//get data from table
        $prod = lead::all();
		return view('ajax',compact('prod'));//sent data to view
        // return "Hello I'm here";
        // console.log($prod);
	}

    public function findProductName(Request $request){

		
	    //if our chosen id and products table prod_cat_id col match the get first 100 data 

        //$request->id here is the id of our chosen option id
        $data=lead::select('lead_course')->where('lead',$request->lead)->distinct()->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
        // console.log($data);
        // return "Hello";
	}
    public function findPrice(Request $request){
	
		// it will get price if its id match with product id
	//	$p=lead::select('name')->where('lead_course',$request->lead_course)->take(100)->get(); 
    $p=lead::select('name')->where('lead_course','=',$request->lead_course)
        ->where('lead','=',$request->lead)
        ->get();       
    
      
    	return response()->json($p);
        // return $p;
	}
    public function findMarket(Request $request){
	
		// it will get price if its id match with product id
		$p=lead::select('marketer_name')->where('name',$request->lead_course)->first();
		
    	return response()->json($p);
         return $p;
	}                                                         
    public function findDuration(Request $request){
      //   $p=DB::table('leads')
      //   ->join('courses','leads.lead_course','courses.course_name')
      //   ->select('courses.duration')
      //  -> where('lead_course',$request->lead_course)
      //  ->first();
      // return response()->json($p);
      //return $p;
      $table=$request->a;
      $table=$table.'s';
      $p=DB::table($table)-> where('course_name',$request->b)->first();
      // $p=$table::select('price')->where('course_name',$request->b)->first(); 
   
      return response()->json($p);

    }
    public function findAmount(Request $request){
      //   $p=DB::table('leads')
      //   ->join('courses','leads.lead_course','courses.course_name')
      //   ->select('courses.price')
      //  -> where('lead_course',$request->lead_course)
      //  ->first();
      //  return response()->json($p);
      // //return $p;
      $table=$request->a;
      $table=$table.'s';
      $p=DB::table($table)-> where('course_name',$request->b)->first();
      // $p=$table::select('price')->where('course_name',$request->b)->first(); 
   
      return response()->json($p);

    }
    public function p1(Request $request){
        $p=DB::table('leads')
        ->join('payments','leads.lead_course','payments.enroll_course')
        ->select('payments.m1')
       -> where('lead_course',$request->lead_course)
       ->first();
       return response()->json($p);
      //return $p;

    }
    public function p2(Request $request){
        $p=DB::table('leads')
        ->join('payments','leads.lead_course','payments.enroll_course')
        ->select('payments.m2')
       -> where('lead_course',$request->lead_course)
       ->first();
       return response()->json($p);
      //return $p;

    }
    public function p3(Request $request){
        $p=DB::table('leads')
        ->join('payments','leads.lead_course','payments.enroll_course')
        ->select('payments.m3')
       -> where('lead_course',$request->lead_course)
       ->first();
       return response()->json($p);
      //return $p;

    }
    public function marketer_status(Request $request){
      $p=DB::table('leads')
      ->join('payments','leads.lead_course','payments.enroll_course')
      ->select('payments.marketer_status')
     -> where('lead_course',$request->lead_course)
     ->first();
     return response()->json($p);
  

  }
  public function month(){
    $p=DB::table('leads')
    ->join('leaddata','leads.lead_course','leaddata.course')
    ->select('leaddata.marketer_status')
   -> where('lead_course',$request->lead_course)
   ->first();
   return response()->json($p);

  }
  public function findcourseprice(Request $request){
    $table=$request->a;
    $table=$table.'s';
    $p=DB::table($table)-> where('course_name',$request->b)->first();
    // $p=$table::select('price')->where('course_name',$request->b)->first(); 
 
    return response()->json($p);

  }
  public function findcourseduration(Request $request){
    $table=$request->a;
    $table=$table.'s';
    $p=DB::table($table)-> where('course_name',$request->b)->first();
    // $p=$table::select('price')->where('course_name',$request->b)->first(); 
 
    return response()->json($p);
  }
  function session(Request $req){
    $p= session::all();
    return response()->json($p);

   
}




}
