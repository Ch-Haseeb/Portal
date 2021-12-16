<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lead;
use App\Models\payment;
use App\Models\marketer;
use App\Models\leaddata;
use App\Models\marketer_payment;
use PDF;
use DB;
use File;
use ZipArchive;
use Carbon\Carbon;
use Spatie\MediaLibrary\Support\MediaStream;
$date = Carbon::now();




class AjaxController extends Controller
{
    function invoice(Request $req){
        switch ($req->input('action')) {
        case 'student':
            $course=$req->lead_course;
            $name=$req->lead_name;
            $marketer_name=$req->marketer_name;
            $duration=$req->duration;
            $price=$req->price;
            // $p1=$req->p1;
            // $p2=$req->p2;
            // $p3=$req->p3;
            $marketer_status=$req->marketer_status;
            $phone=lead::select('phone')->where('name',$name)->first();

            $uni=lead::select('uni')->where('name',$name)->first();
            // $=lead::select('uni')->where('name',$name)->first();
            // $uni=lead::select('uni')->where('name',$name)->first();
            // $uni=lead::select('uni')->where('name',$name)->first();

            $lead=lead::select('lead')->where('name',$name)->first();
            $mail=lead::select('phone')->where('name',$name)->first();
            $marketer_phone=marketer::select('phone')->where('name', $marketer_name)->first();
            $marketer_city=marketer::select('city')->where('name', $marketer_name)->first();
            $marketer_comission=marketer::select('percentage')->where('name', $marketer_name)->first();
            $installment= number_format((float)$price/(float)$duration);
            $now = Carbon::now();                         
      
        
            return view('try',["course"=>$course,"name"=>$name,"marketer_name"=>$marketer_name,"duration"=>$duration,"price"=> $price,"phone"=>$phone,"uni"=>$uni,"lead"=>$lead]);  
            break;
        case 'marketer':
            $course=$req->lead_course;
            $name=$req->lead_name;
            $marketer_name=$req->marketer_name;
            $duration=$req->duration;
            $price=$req->price;
            $p1=$req->p1;
            $p2=$req->p2;
            $p3=$req->p3;
            $marketer_status=$req->marketer_status;
            $phone=lead::select('phone')->where('name',$name)->first();
            $uni=lead::select('uni')->where('name',$name)->first();
            $lead=lead::select('lead')->where('name',$name)->first();
            $mail=lead::select('phone')->where('name',$name)->first();
            $marketer_phone=marketer::select('phone')->where('name', $marketer_name)->first();
            $marketer_city=marketer::select('city')->where('name', $marketer_name)->first();
            $marketer_comission=marketer::select('percentage')->where('name', $marketer_name)->first();
            return view('mark_invoice',["marketer_name"=>$marketer_name,"price"=> $price,"name"=>$name,"marketer_phone"=>$marketer_phone,"marketer_city"=>$marketer_city,"marketer_comission"=>$marketer_comission,"course"=>$course,"marketer_status"=>$marketer_status]);
            break;
        case "lead_convert" :        
         
          
            $now = Carbon::now();
            $m= $now->month;
            $y=$now->year;
            $duration=$req->duration;
            // $id=leaddata::max('id');
            // $id=$id+1;            
            for ($i=1; $i<=$duration; $i++) {   
                $leaddata=new leaddata;             
         
            $course=$req->lead_course;
            $name=$req->lead_name;
            $marketer_name=$req->marketer_name;
            $lead=$req->lead;
            $price=$req->price;
            $installment= number_format((float)$price/(float)$duration);
        
    
                $leaddata->course=$course;
                $leaddata->session=$req->session;
                $leaddata->lead=$lead;
                $leaddata->name=$name;
                $leaddata->marketer_name=$marketer_name;
                $leaddata->price=$price;
                $leaddata->duration= $duration;
                $leaddata->installment_amount=$installment;
                $leaddata->fee_month=$m;
                $leaddata->year=$y;
                $leaddata->month=$i;
                $leaddata->status="unpaid";
          
                $m=$m+1;
                if($m>12)
                {
                    $m=1;
                    $y=$y+1;
                }
                else
                {
                    $m=$m;
                    $y=$y;

                }
                  
                $leaddata->save();
           }
         
           return redirect()->back();   
           break;       
    case "1stmonth":
        $course=$req->lead_course;
        $name=$req->lead_name;
      $p = DB::table('leaddatas')->where('course', $course)
      ->where('name','=',$name)
      ->first();
    
          return view('monthinvoice',['p'=>$p]);
      break;
    case "2ndmonth":
        $course=$req->lead_course;
        $name=$req->lead_name;
      $p = DB::table('leaddatas')->where('course', $course)
      ->where('name','=',$name)      
      ->skip(1)->first();
     
        return view('monthinvoice',['p'=>$p]);

      break;
      case "3rdmonth":
        $course=$req->lead_course;
        $name=$req->lead_name;
      $p = DB::table('leaddatas')->where('course', $course)
      ->where('name','=',$name)      
      ->skip(2)->first();
      if (!$p) { 
          return "this course is less";
      }
      else if($p->name==$name){
        return view('monthinvoice',['p'=>$p]);
    }
      break;
      case "course1pdf":
        $lead=$req->lead;
        $lead_course=$req->lead_course;
        $data=leaddata::where('lead','=',$lead)
      ->where('course','=',$lead_course)
      ->where('month','=',1)
      ->get();
     
        return view('pdfcourse',['p'=>$data]);
      break;
      case "course2pdf":
        $lead=$req->lead;
        $lead_course=$req->lead_course;
        $data=leaddata::where('lead','=',$lead)
      ->where('course','=',$lead_course)
      ->where('month','=',2)
      ->get();     
        return view('pdfcourse',['p'=>$data]);
        break;
        case "course3pdf":
          $lead=$req->lead;
          $lead_course=$req->lead_course;
          $data=leaddata::where('lead','=',$lead)
        ->where('course','=',$lead_course)
        ->where('month','=',3)
        ->get();     
          return view('pdfcourse',['p'=>$data]);
          break;

    case "save_marketer":
      return "hello marketer";  
    $marketer_payment=new marketer_payment;
    $marketer_name=$req->marketer_name;
    $course=$req->lead_course;
    $name=$req->lead_name;
    $results = lead::where('name', '=', $name)
    ->where('lead_course', '=', $course)
    ->where('marketer_name', '=', $marketer_name)
    ->first();
    $price=leaddata::where('name', '=', $name)
    ->where('course', '=', $course)
    ->where('marketer_name', '=', $marketer_name)
    ->first();
    $marketer_price=number_format((float)$price->price/(float)100);

    $percentage=marketer::select('percentage')->where('name',$marketer_name)->first();
      $marketer_price=  number_format((float)$marketer_price*(float)$percentage->percentage);

    $marketer_payment->marketer_name=$results->marketer_name;
    $marketer_payment->students_name=$results->name;
    $marketer_payment->students_course=$results->lead_course;
    $marketer_payment->percentage= $percentage->percentage;
    $marketer_payment->course_price=$price->price;
    $marketer_payment->marketer_price=$marketer_price."$";
    $marketer_payment->status="unpaid";
   $marketer_payment->save();
   return redirect()->back();
    break;
    case "marketer_inv":
        $amount=0;
        $marketer_name=$req->marketer_name;
        $p=marketer_payment::where('marketer_name','=',$marketer_name)
        ->where('status','=',"unpaid")
        ->get();
        $payment=marketer_payment::where('marketer_name','=',$marketer_name)
        ->where('status','=',"unpaid")
        ->get();
       $count= $p->count();
        return view("marketerinvoice",['p'=>$p,'count'=>$count,'payment'=>$payment]);
        break;    
        case "course1month":
      
         
            
          $lead=$req->lead;
          $lead_course=$req->lead_course;
          $p=leaddata::where('lead','=',$lead)
        ->where('course','=',$lead_course)
        ->where('month','=',1)
        ->get();
        foreach($p as $p){            
        $month=$p->month;
        $name=$p->name;
         $pdf =  PDF::loadView('pdf', ['p' => $p])->setOptions(['defaultFont' => 'sans-serif']);

         
       
        // $pdf = PDF::loadView('p', compact('exportpdf'))->setOptions(['defaultFont' => 'sans-serif']);
     $pdf=   $pdf->setPaper('A2', 'potrait'); 
     $in=$name.$month.'.pdf';
     $path = public_path('pdf/');
     $pdf->save($path . '/' . $in);
     $files[]=$path . '/' . $in; 
   
      
     
        }   
        // return response()->download(storage_path($path), $in);
        // return response()->download([public_path('E:\Laravel\adminproject\public\pdf'),public_path('$in')]);
        // return response()->json(['files' => $files]);
       
       
        $zip=new ZipArchive;
        $fileName="$month"."zip";
      //  if($zip->open(public_path($))
    //   if ($zip->open(public_path($filename), ZipArchive::CREATE) === TRUE)
    //   {
    //       $files = File::files($path);
 
    //       foreach ($files as $key => $value) {
    //           $relativeNameInZipFile = basename($value);
    //           $zip->addFile($value, $relativeNameInZipFile);
    //       }
           
    //       $zip->close();
    //   }
    if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
    {
        // $files = \File::files(public_path($path));
        $files = File::files($path);                    
        foreach ($files as $key => $value) {
            $file = basename($value);
            $zip->addFile($value, $file);
        }
         
        $zip->close();
    }

    return response()->download(public_path($fileName));
    break;
  

      

  
   
  


      
                  
       }
    }
    public function pdf(Request $request,$id){
        $p = DB::table('leaddatas')->where('id', $id)->first();
        $month=$p->fee_month;
            $pdf =  PDF::loadView('pdf', ['p' => $p])->setOptions(['defaultFont' => 'sans-serif']);
            $pdf->setPaper('A2', 'potrait');

            return $pdf->download("$month",'.pdf');
        

    }
    public function  marketerpdf(Request $request,$marketer_name){

        $p=marketer_payment::where('marketer_name','=',$marketer_name)
        ->where('status','=',"unpaid")
        ->get();
        $payment=marketer_payment::where('marketer_name','=',$marketer_name)
        ->where('status','=',"unpaid")
        ->get();
        
        $count= $p->count();
        $pdf =  PDF::loadView('marketerpdf', ['p' => $p,"count"=>$count,'payment'=> $payment])->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->setPaper('A2', 'potrait');

        return $pdf->download("$marketer_name",'.pdf');
    }
  
    public function   coursepdf(Request $request,$lead,$course,$month){
    
      $p=leaddata::where('lead','=',$lead)
      ->where('course','=',$course)
      ->where('month','=',$month)
      ->get();
      $pdf =  PDF::loadView('monthpdfdownload', ['p' => $p])->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->setPaper('A2', 'potrait');

        return $pdf->download("$course"."$month",'.pdf');
      
   

    }
  
           
    
    
}
