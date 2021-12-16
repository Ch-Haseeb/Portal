<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Student Data</title>
</head>
<style>
    body{
        margin:0;
        padding:0;
        margin-left:30px;
        font-size: 15px;
   
       
     
    }
    .responsive{ 
     
      display: block;
  margin-left: auto;
  margin-right: auto;
  width: 28%;
    }
    .hea{
     
        text-align:center;
    }
    #terms{
      text-decoration: underline;
    }
    #he1{
      margin-top:10px;
    }
  
    .f2{
      margin-left:500px;
    }
  
  

      

    
</style>
<body>
    <div>
     <div class="img">
    <img src= "{{asset ('/img/devicon.png') }}"class="responsive" >
     </div>    
     <div class="hea">
     <h3 id="he1">Registration Form</h3>
</div>
<div class="table">
<table class="table table-borderless"  style="width: 900px;  margin-left:20px;">

  <tbody>
    <tr  height="10px">
      <td>Name:</td>
      <td><b>{{$p->name}}</b></td>   
      <td>Date of Birth:</td>
      <td><b>{{$p->dob}}</b></td>
    </tr>
    <tr  height="10px">
    <td>CNIC:</td>
      <td><b>{{$p->cnic}}</b></td>
      <td>Gender:</td>
      <td><b>{{$p->gender}}<b></td>
    </tr>
    <tr  height="10px">
    <td>Father/Guardian Name:</td>
      <td><b>{{$p->father_name}}</b></td>
      <td>Mobile No:</td>
      <td><b>{{$p->mobile}}</b></td>  
    
    </tr>
    <tr  height="10px">
  
  
      <td>Gmail:</td>
      <td><b>{{$p->gmail}}</b></td>
      <td>Lead:</td>
      <td><b>{{$p->lead}}</b></td>  
    <tr  height="10px">
    <td>Course:</td>
      <td><b>{{$p->lead_course}}</b></td>
      <td>Fee:</td>
      <td><b>{{$p->fee}}</b></td>  
    </tr>
    <tr  height="10px">
    <td>Current Address:</td>
    <td><b>{{$p->address}}</b></td>
    </tr>
    <tr>
    
    
    <tr  height="10px"> 
    <td>What Did You Hear About Devicon:</td>
      <td><b>{{$p->about_devicon}}</B=b></td>
    </tr>
  </tbody>
</table>
</div>
<div class="hea">
  <h3 id="terms">Terms & Condition</h3>
</div>
<p>
<ol>
  <li>Fee Paid is Non-Refundable and Non-Transferable in any case</li>
  <li>Fee is payable in advance at the start of course </li>
  <li>Mobile Phones must be switched off during the class students are not allowed tot ake calls during their classes</li>
  <li>In the case of disput <b> Software House</b> the students must contact the information</li>
  <li>If a students bring outsider in case of any dispute </li>
  <li>Devicon will not take responsibility of any physical harm to its student outside the permises </li>
  <li>In the case of disput the desicion od Devicon displinary committe will be considered as final </li>
  <li>Parking of vehicle outside the insitute will be at the risk of owner</li>
  <li>Students are not allowed to sit idle in class or stand in front of insitute</li>
  <li>Vehicles would be properly parked so sa not to hinder on-going traffic</li>
  <li>Student must keep their valuable things and mobile etc with them. Administration will not be responsible in case <br>of any loss or theif</li>
  <li>If student not complete course in duration he/she charge for extra days. If students absent in course duration these<br> days count in duration time</li>
</ol>

</p>
    <div class="footer" style="display:flex;">
      <h5 class="f1">Signature of CEO</h5>
        <h5  class="f2">Signature of Student</h5>
        </div>



    </div>
</body>
</html>