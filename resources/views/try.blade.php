<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js">
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Invoice</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
        /* #date{
            float:right;
            padding:10px;
            color: white;
        } */
    </style>
</head>
<body>
<button id="generatePDF">generate PDF</button>



<?php
//$installment=(is_numeric($price/$duration));
$installment= number_format((float)$price/(float)$duration);
//$inst=" "+$installment+"$";

//$total=explode(" ",$p1);
// if($duration==2){
//     $str = preg_replace('/[^0-9.]+/', '', $p1);
//     $str1 = preg_replace('/[^0-9.]+/', '', $p2);
//     $to=$str+$str1;
// }
// else if($duration==3){
//     $str = preg_replace('/[^0-9.]+/', '', $p1);
//     $str1 = preg_replace('/[^0-9.]+/', '', $p2);
//     $str2 = preg_replace('/[^0-9.]+/', '', $p3);
//     $total=$str+$str1;
//      $to=$total+$str2;
// }

// $str4 = preg_replace('/[^0-9.]+/', '', $price);
// $remaning=$str4-$to;
// if($remaning==0){
//     $pay=" Payment Paid";
// }
// else{
//     $pay=" Payment Unpending";
// }
use Carbon\Carbon;
$date = Carbon::now();
?>
     
     <div id="invoice">
    <div class="container">
        <div class="brand-section">
     
        
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Student  Invoice</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">Admin</p>
                        <p class="text-white">Devicon Software House</p>
                        <p class="text-white">RYK</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                
                <div class="col-6">
                    <p class="sub-heading"> Name: <?php echo $name;?> </p>
                    <p class="sub-heading">Gmail: <?php echo $phone->phone;?> </p>
                    <p class="sub-heading">Lead: <?php echo $lead->lead;?>   </p>
                 
                    <p class="sub-heading">University:<?php echo $uni->uni;?>   </p>
                </div>
                <div class="col-4">
                    <p class="sub-heading"> Marketer Name: <?php echo $marketer_name;?> </p>
                    
                   
                </div>
                &nbsp &nbsp  &nbsp &nbsp      &nbsp &nbsp  &nbsp &nbsp      &nbsp &nbsp  &nbsp &nbsp      &nbsp &nbsp  &nbsp &nbsp
                <div class="col-2">
                <p class="sub-heading"> Date: <?php echo $date->toDateString();?> </p>
                   
                </div>
                
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Course Detail</h3>
            <br>
            <table class="table-bordered" id="cell">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class>Price</th>
                        <th class>Duartion Month</th>
                        <th class>Ist Month</th>
                        <th class>Second Month </th>
                        <th class>Third Month</th>
                        <th class>Grand Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $course;?></td>
                        <td><?php echo $price;?></td>
                        <td> <?php echo $duration;?></td>
                        <td> <?php ?></td>
                        <td> <?php ?></td>
                        <td> <?php ?></td>
                        <td><?php echo $price;?></td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-right">Remaning Amount</td>
                        <td> <?php ?>$<td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-right">Payment Staus</td>
                        <td><?php ?></td>
                    </tr>
                   
                </tbody>
                </div>
            </table>
            <div id="editor"></div>
            <br>
            
        </div>

             
    </div>      


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script src="jspdf.min.js"></script>
<script src="jspdf.plugin.autotable.min.js"></script>

</body>
</html>
<script>
  var doc = new jsPDF({
         orientation: '1', // landscape
        unit: 'pt',
        format: [612, 792] // points, pixels won't work properly
        // orientation: 'p', 
        // unit: 'in', 
        // format: [612, 792]
  
  });
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
   
    }
};
pdfConf = {
      pagesplit: false,
      background: '#fff'
    };

 

$('#generatePDF').click(function () {
    
     
    doc.fromHTML($('#invoice').html(), 15, 15, {
        'width':  180,
     
        'elementHandlers': specialElementHandlers
    });
    
    doc.save('invoice_file.pdf');
});
   
</script>














