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



	

</style>
<body>
<a id="btn"class="btn btn-primary" href="{{url('invoice',$p->id)}}" >Download PDF</a>
<div id="inline">
  <div id="first">

	<h2 id="p1">Devicon</h2>
	<p id="p1">Address: Opposite KFC Near Bank of Punjab, RYK</p>
	<p id="p1">Phone: 03030336939</p>
	<table class="center">
  <tr>
    <td width="100px">VN:</td>
    <td width="110px">10</td>
    <td width="110px">Reg No</td>	
    <td width="110px">COSC8111218</td>
  </tr>
  <tr>
    <td >Name:</td>
    <td ><?php echo $p->name ?></td>
    <td >Duration:</td>
    <td ><?php echo $p->duration; ?> Month</td>

  </tr>
   <tr>
    <td >Class:</td>
    <td><?php echo $p->course ?></td>
    <td>Section:</td>
    <td>Morning</td>
  </tr>
  <tr>
    <td >For Month:</td>
    <td><?php echo $p->fee_month ?></td>
    <td >Year</td> 
    <td><?php echo $p->year ?></td>
  </tr>
    <tr>
    <td colspan="2">Description</td>
    <td>Detail</td>
    <td>Amount</td> 
  </tr>
   <tr>
    <td colspan="2">TUITION FEE</td>
    <td></td>
    <td><?php echo $p->installment_amount; ?>$</td> 
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
    <td><?php echo $p->installment_amount; ?>$</td>
  </tr>
  <tr>
   <td colspan="3">TOTAL COURSE FEE</td>
    <td><?php echo $p->price; ?></td>
  </tr>
  <tr>
   <td colspan="3">NOW REMANNING ANNUAL DUES</td>
    <td>0</td>
  </tr>
  

</table>
<p>Developed By Devicon (Muhammad Awais +92030336939)</p>

</div>
<div id="second">
<h2 id="p1">Devicon</h2>
	<p id="p1">Address: Opposite KFC Near Bank of Punjab, RYK</p>
	<p id="p1">Phone: 03030336939</p>
	<table class="center">
  <tr>
    <td width="100px">VN:</td>
    <td width="110px">10</td>
    <td width="110px">Reg No</td>	
    <td width="110px">COSC8111218</td>
  </tr>
  <tr>
    <td >Name:</td>
    <td ><?php echo $p->name ?></td>
    <td >Duration:</td>
    <td ><?php echo $p->duration; ?> Month</td>

  </tr>
   <tr>
    <td >Class:</td>
    <td><?php echo $p->course ?></td>
    <td>Section:</td>
    <td>Morning</td>
  </tr>
  <tr>
    <td >For Month:</td>
    <td><?php echo $p->fee_month ?></td>
    <td >Year</td> 
    <td><?php echo $p->year ?></td>
  </tr>
    <tr>
    <td colspan="2">Description</td>
    <td>Detail</td>
    <td>Amount</td> 
  </tr>
   <tr>
    <td colspan="2">TUITION FEE</td>
    <td></td>
    <td><?php echo $p->installment_amount; ?>$</td> 
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
    <td><?php echo $p->installment_amount; ?>$</td>
  </tr>
  <tr>
  <td colspan="3">TOTAL COURSE FEE</td>
    <td><?php echo $p->price; ?></td>
  </tr>
  <tr>
   <td colspan="3">NOW REMANNING ANNUAL DUES</td>
    <td>0</td>
  </tr>
  

</table>
<p>Developed By Devicon (Muhammad Awais +92030336939)</p>
<h2>PAID     2021-09-14</h2>
</div>
</div>
</body>
</html>