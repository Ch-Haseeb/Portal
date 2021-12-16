<!DOCTYPE html>
<html>
<head>
	<title>Monthly Invoice</title>
  <link rel="stylesheet" href="{{ ltrim(public_path('css/pdf.css'), '/') }}" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
    font-weight: bold;
	}
	 /* h2,p,table{
		text-align: center;
		font-weight: bold;
	} */
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
/* .center {
  margin-left: auto;
  margin-right: auto;
}  */
#btn{
    float:right;
    margin-top:40px;
    margin-right:10px;
}
#first{
  margin:25px;
}
#second{
  margin:25px;
  margin-right:25px;
}
#inline{
  display:flex;
}
.set{
  text-align:center;
}

</style>

<body>
<a id="btn"class="btn btn-primary" href="{{url('invoicemark',$p[0]->marketer_name)}}" >Download PDF</a>

 <div id="inline">
  <div id="first">
  
  <span class="set">

	<h2 id="p1">Devicon</h2>
	<p id="p1">Address: Opposite KFC Near Bank of Punjab, RYK</p>
	<p id="p1">Phone: 03030336939</p>
  <span>
  
	<table class="center">
  <tr>
    <td width="100px">VN:</td>
    <td width="110px">10</td>
    <td width="110px">Marketer Name</td>	
    <td width="110px">{{$p[0]->marketer_name }}</td>	   
  </tr>
  <tr>
    <td colspan="2">Maketer Students </td>
    <td colspan="2">{{$count}}</td>
  </tr>
   <tr>
    <td >Students Name</td>
    <td>Course Price</td>
    <td>Percentage</td>
    <td>Marketer Pice</td>
  </tr>
  @foreach($p as $item)
  <tr>
    <td>{{$item->students_name}}</td>
    <td>{{$item->course_price}}</td> 
    <td>{{$item->percentage}}</td>
    <td>{{$item->marketer_price}}</td>
    </tr>
@endforeach
    <tr>
    <td colspan="2">Description</td>
    <td>Detail</td>
    <td>Amount</td> 
  </tr>
   <tr>
    <td colspan="2">Total Amount</td>
    <td></td>
   <?php
    $amount=0;
     foreach($p as $p){
  $amount=number_format((float)$p->marketer_price+(float)$amount);
}

   ?>
    <td> {{$amount}}$</td> 
  
  </tr>
   <tr>
    <td colspan="2">LATE FEE</td>
    <td></td>
    <td></td> 
  </tr>
   <tr>
    <td colspan="2">ANNUAL DUES PAY</td>
    <td></td>
    <td>0</td> 
  </tr>
   <tr>
    <td colspan="2">REMANING FEE</td>
    <td></td>
    <td>0</td> 
  </tr>
    <tr>
    <td colspan="3">TOTAL FEE</td>
    <td>{{$amount}}$</td>
  </tr>
  <tr>
   <td colspan="3">Status</td>
    <td>Unpaid</td>
  </tr> 

</table>
<span class="set">
<p>Developed By Devicon (Muhammad Awais +92030336939)</p>
<h2>PAID     2021-09-14</h2>
<span>
</div>
<div id="second">
  <span class="set"> 
<h2 id="p1">Devicon</h2>
	<p id="p1">Address: Opposite KFC Near Bank of Punjab, RYK</p>
	<p id="p1">Phone: 03030336939</p>
</span>
	<table class="center">
  <tr>
    <td width="100px">VN:</td>
    <td width="110px">10</td>
    <td width="110px">Marketer Name</td>	
    <td width="110px">{{$payment[0]->marketer_name }}</td>	   
  </tr>
  <tr>
    <td colspan="2">Maketer Students </td>
    <td colspan="2">{{$count}}</td>
  </tr>
   <tr>
    <td >Students Name</td>
    <td>Course Price</td>
    <td>Percentage</td>
    <td>Marketer Pice</td>
  </tr>
  @foreach($payment as $item)
  <tr>
    <td>{{$item->students_name}}</td>
    <td>{{$item->course_price}}</td> 
    <td>{{$item->percentage}}</td>
    <td>{{$item->marketer_price}}</td>
    </tr>
@endforeach
    <tr>
    <td colspan="2">Description</td>
    <td>Detail</td>
    <td>Amount</td> 
  </tr>
   <tr>
    <td colspan="2">Total Amount</td>
    <td></td>
   <?php
    $amount1=0;
     foreach($payment as $payment){
  $amount1=number_format((float)$payment->marketer_price+(float)$amount1);
}

   ?>
    <td> {{$amount1}}$</td> 
  
  </tr>
   <tr>
    <td colspan="2">LATE FEE</td>
    <td></td>
    <td></td> 
  </tr>
   <tr>
    <td colspan="2">ANNUAL DUES PAY</td>
    <td></td>
    <td>0</td> 
  </tr>
   <tr>
    <td colspan="2">REMANING FEE</td>
    <td></td>
    <td>0</td> 
  </tr>
    <tr>
    <td colspan="3">TOTAL FEE</td>
    <td>{{$amount1}}$</td>
  </tr>
  <tr>
   <td colspan="3">Status</td>
    <td>Unpaid</td>
  </tr> 

</table>
<span class="set">
<p>Developed By Devicon (Muhammad Awais +92030336939)</p>
<h2>PAID     2021-09-14</h2>
</span>
<div>
<div>

</body>
</html>