<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>viho - Premium Admin Template</title>
    <!-- Google font-->
   @include('header')
   <link rel="stylesheet" href="{{asset('css/inter.css')}}">
   <script src="js/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset ('/img/devicon.png') }}" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                <div class="bookmark-box"><i data-feather="star"></i></div>
                <div class="bookmark-dropdown onhover-show-div">
                  <div class="form-group mb-0">
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                      <input class="form-control" type="text" placeholder="Search for bookmark...">
                    </div>
                  </div>
                  <ul class="m-t-5">
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="message-square"></i>Chat<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Feather Icon<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Widgets<span class="pull-right"><i data-feather="star">   </i></span></li>
                  </ul>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                  </li>
                  <li class="noti-primary">
                    <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                      <div class="media-body">
                        <p>Delivery processing </p><span>10 minutes ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-secondary">
                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                      <div class="media-body">
                        <p>Order Complete</p><span>1 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-success">
                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                      <div class="media-body">
                        <p>Tickets Generated</p><span>3 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-danger">
                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                      <div class="media-body">
                        <p>Delivery Complete</p><span>6 hour ago</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/4.jpg" alt="">
                      <div class="media-body"><span>Ain Chavez</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">32 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/1.jpg" alt="">
                      <div class="media-body"><span>Erica Hughes</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/2.jpg" alt="">
                      <div class="media-body"><span>Kori Thomas</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">1 hr ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All     </a></li>
                </ul>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="{{ route('logout') }}"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
         @include('sidebar')
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Course</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
 
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts                    -->
          <div class="container-fluid">
            <div class="row">
            <form action="invoice" method="GET" class="sty">
{{csrf_field()}}

<div class="container register-form">

<div class="form">
                <div class="note">
                  
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="row-md-6">
                            <div class="form-group">
                            <br>
                             <span>Choose Lead: </span>
                             &nbsp &nbsp   &nbsp 
                            
                              <select style="width: 200px" name="lead" class="productcategory" id="prod_cat_id">
                           
                              	<option value="0" disabled="true" selected="true">Select a lead</option>
  	<!-- @foreach($prod as $cat)
  		<option value="{{$cat->lead}}">{{$cat->lead}}</option>
  	@endforeach -->
	                             <option value="internship" name="lead">internship</option>
	                            <option value="service" name="lead">service</option>
	                             <option value="course" name="lead">course</option>
                               </select>                           
                            
 
  
                              <span>Choose Lead Course: </span>
                              &nbsp &nbsp   &nbsp 
                             
                               <select style="width: 200px" class="productname" name="lead_course">

  	                          <option value="0" disabled="true" selected="true" name="lead_course">Course Name</option>
                               </select>
                               <br>
                               
                             
                               <span>Choose Name: </span>
                               &nbsp &nbsp
                            
                              <select style="width: 200px" class="prod_price" name="lead_name">

                            	<option value="0" disabled="true" selected="true" name="lead_name" >Name</option>
                               </select>
                             
                               <span>Choose Marketer Name: </span>
                              <select style="width: 200px" class="prod_market" name="marketer_name">

                            	<option value="0" disabled="true" selected="true" name="marketer_name">Marketer Name</option>
                               </select>
                               <br>
                             
                               <span> Course   Duration: </span>
                               
                               <select style="width: 200px" class="duration" name="duration">

  	                          <option value="0" disabled="true" selected="true" name="duration">Course Duration</option>
                               </select>
                             
                               <span>Choose Course Price: </span>
                               &nbsp &nbsp &nbsp 
                        
                               <select style="width: 200px" class="price" name="price">

  	                          <option value="0" disabled="true" selected="true" name="price">Course Price</option>
                               </select>
                               <br>
                             
                               &nbsp
                               <span>Choose Session: </span>
                               <select style="width: 200px" class="session" name="session" >
  	                          <option  name="session">Fall</option>
                              <option   name="session">Spring</option>
                               </select>

                               
                               
                               &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp 
                               
                               
                               
                        <select style="width: 200px" class="p2" name="p2" hidden>

                       <option value="0" disabled="true" selected="true" name="p2">Fees Staus</option>
                        </select>
                        <br>

                     
                   
                        <select style="width: 200px" class="p3" name="p3" hidden>

                       <option value="0" disabled="true" selected="true" name="p3">Fees Staus</option>
 
                        </select>
                       
                    
                        <span>Choose What You Want: </span>
                        <select style="width: 200px"  name="action">
                        <option value="" hidden>Select Option</option>
                        <option name="action" id="lead_convert" value="lead_convert">Lead Convert</option> 
                        <option name="action" id="save_marketer" value="save_marketer">Submit Marketer</option> 
                        <option name="action" id="1stmonth" value="1stmonth">1st Month Invoice</option>     
                        <option name="action" id="2ndmonth" value="2ndmonth">2st Month Invoice</option>     
                        <option name="action" id="3rdmonth" value="3rdmonth">3rd Month Invoice</option>  
                        <option name="action" id="marketer_inv" value="marketer_inv">Marketer Invoice</option>   
                        <option name="action" id="course1" value="course1pdf">Course 1st Month Invoice</option>   
                        <option name="action" id="course2" value="course2pdf">Course 2nd Month Invoice</option>   
                        <option name="action" id="course3" value="course3pdf">Course 3rd Month Invoice</option>   

                       </select>
                     
                        <br>

                        <button type="Submit" class="btn btn-primary"id="b1" style="margin-left:300px; margin-top:30px;" >Click </button>



               


          
                       
                        <!-- <button type="Submit" class="btn btn-primary  float-right" name="action" id="b1" value="save">Submit</button>
                        <button type="Submit" class="btn btn-primary  float-right" name="action" id="b1" value="save_marketer">Submit Marketer </button> -->
 
                      
            

                                             

                       
                       
                        <!-- <button type="Submit" class="btn btn-primary  float-right" name="action" id="b1" value="1stmonth">1st Month Invoice</button>
                        <button type="Submit" class="btn btn-primary  float-right" name="action" id="b1" value="2ndmonth">2nd Month Invoice</button>
                        <button type="Submit" class="btn btn-primary  float-right" name="action" id="b1" value="3rdmonth">3rd Month Invoice</button>
                        <button type="Submit" class="btn btn-primary  float-right" name="action" id="b1" value="course1month">Course 1st Month Invoice</button>
                        <button type="Submit" class="btn btn-primary  float-right" name="action" id="b1" value="course2month">Course 2nd Month Invoice</button>
                        <button type="Submit" class="btn btn-primary  float-right" name="action" id="b1" value="course3month">Course 3rd Month Invoice</button>
                       <button type="Submit" class="btn btn-primary  float-right" name="action" id="b1" value="marketer_inv">Marketer Invoice</button> -->
                      
                      
                      
                      </form>

                               
                            
                             
                               

</body>
<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('change','.productcategory',function(){
			// console.log("hmm its change");

			var cat_id=$(this).val();
		//	console.log(cat_id);
			var div=$(this).parent();

			var op=" ";

			$.ajax({
				type:'get',
				url:'{!!URL::to('findProductName')!!}',
				data:{'lead':cat_id},
				success:function(data){
					//console.log('success');

					//console.log(data);

					//console.log(data.length);
					op+='<option value="0" selected disabled>Chose Course</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].lead_course+'">'+data[i].lead_course+'</option>';
				   }

				   div.find('.productname').html(" ");
				   div.find('.productname').append(op);
				},
				error:function(){

				}
			});
		});

		$(document).on('change','.productname',function () {
			var prod_id=$(this).val();

			var a=$(this).parent();
			// console.log(prod_id);
			var op="";
      console.log('hello');
      $z=$(".productcategory").val();
     
      console.log('hello');
			$.ajax({
				type:'get',
				url:'{!!URL::to('findPrice')!!}',
				data:{'lead_course':prod_id,'lead':$z},
				dataType:'json',//return data will be json
				success:function(p){
					// console.log(p.name);
				
          console.log(p.name);
          op+='<option value="0" selected disabled>Choose Name</option>';
					for(var i=0;i<p.length;i++){
					op+='<option value="'+p[i].name+'">'+p[i].name+'</option>';
				   }

					// op+='<option value="0" selected disabled>Name</option>';
					// op+='<option value="'+p.name+'">'+p.name+'</option>';

					a.find('.prod_price').html(" ");
					a.find('.prod_price').append(op);
        



				},
				error:function(){

				}
			});


		});
//hello

    $(document).on('change','.prod_price',function () {
			var prod_id=$(this).val();

			var a=$(this).parent();
			// console.log(prod_id);
			var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('findMarket')!!}',
				data:{'lead_course':prod_id},
				dataType:'json',//return data will be json
				success:function(p){
					// console.log("name");
					// console.log(p.marketer_name);
					// console.log(typeof(p.name))

					// here price is coloumn name in products table data.coln name

					// a.find('.prod_price').val(p.name);

					op+='<option value="0" selected disabled>Name</option>';
					op+='<option value="'+p.marketer_name+'">'+p.marketer_name+'</option>';

					a.find('.prod_market').html(" ");
					a.find('.prod_market').append(op);


				},
				error:function(){

				}
			});


		});


    // $(document).on('change','.productname',function () {
		// 	var prod_id=$(this).val();

		// 	var a=$(this).parent();
		// 	//  console.log(prod_id);
		// 	var op="";
		// 	$.ajax({
		// 		type:'get',
		// 		url:'{!!URL::to('findDuration')!!}',
		// 		data:{'lead_course':prod_id},
		// 		dataType:'json',//return data will be json
		// 		success:function(p){
		// 			// console.log("name");
		// 			// console.log(p.duration);
		// 			// console.log(typeof(p.name))

		// 			// here price is coloumn name in products table data.coln name

		// 			// a.find('.prod_price').val(p.name);

		// 			op+='<option value="0" selected disabled>Choose Month</option>';
		// 			op+='<option value="'+p.duration+'">'+p.duration+'</option>';

		// 			a.find('.duration').html(" ");
		// 			a.find('.duration').append(op);


		// 		},
		// 		error:function(){

		// 		}
		// 	});


		// });
   
    $(document).on('change','.productcategory',function () {
      var j=$(this).parent();   
      var a=$(this).val();
      $(document).on('change','.productname',function () { 
     
  
      // var b=$('.lead_course').val();
      var b= $(this).val();
      console.log(a);
        console.log(b);
      var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('findDuration')!!}',
				data:{'a':a,'b':b},
				dataType:'json',//return data will be json
				success:function(p){
					 console.log("name");
					console.log(p.duration);			
					
					op+='<option value="'+p.duration+'">'+p.duration+'</option>';
           $( ".duration" ).append(op);
        //   a.find('.price').html(" ");
		 		// a.find('.price').append(op);
				},
				error:function(){

				}
			});

    
     
          });
    });











    

    // $(document).on('change','.productname',function () {
		// 	var prod_id=$(this).val();

		// 	var a=$(this).parent();
		// 	//  console.log(prod_id);
		// 	var op="";
		// 	$.ajax({
		// 		type:'get',
		// 		url:'{!!URL::to('findAmount')!!}',
		// 		data:{'lead_course':prod_id},
		// 		dataType:'json',//return data will be json
		// 		success:function(p){
    //       console.log("price");
    //       console.log(p);
		// 			// console.log("name");
		// 			// console.log(p.course_price);
		// 			// console.log(typeof(p.name))

		// 			// here price is coloumn name in products table data.coln name

		// 			// a.find('.prod_price').val(p.name);

		// 			op+='<option value="0" selected disabled> Course Price</option>';
		// 			op+='<option value="'+p.price+'">'+p.price+'</option>';

		// 			a.find('.price').html(" ");
		// 		a.find('.price').append(op);


		// 		},
		// 		error:function(){

		// 		}
		// 	});
    // });

    $(document).on('change','.productcategory',function () {
      var j=$(this).parent();   
      var a=$(this).val();
      $(document).on('change','.productname',function () { 
     
  
      // var b=$('.lead_course').val();
      var b= $(this).val();
      console.log(a);
        console.log(b);
      var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('findAmount')!!}',
				data:{'a':a,'b':b},
				dataType:'json',//return data will be json
				success:function(p){
					 console.log("name");
					console.log(p.price);			
					
					op+='<option value="'+p.price+'">'+p.price+'</option>';
           $( ".price" ).append(op);
        //   a.find('.price').html(" ");
		 		// a.find('.price').append(op);
				},
				error:function(){

				}
			});

    
     
          });
    });














   
    $(document).on('change','.productname',function () {
			var prod_id=$(this).val();

			var a=$(this).parent();
			// console.log(prod_id);
			var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('session')!!}',
				data:{'lead_course':prod_id},
				dataType:'json',//return data will be json
				success:function(p){
          console.log("sessio");
          console.log(p.session);
					// console.log("name");
					// console.log(p.m1);
					// console.log(typeof(p.name))

					// here price is coloumn name in products table data.coln name

					// a.find('.prod_price').val(p.name);

					op+='<option value="0" selected disabled> Choose Session</option>';
					op+='<option value="'+p.session+'">'+p.session+'</option>';

					a.find('.p1').html(" ");
					a.find('.p1').append(op);


				},
				error:function(){

				}
			});
    });


    $(document).on('change','.productname',function () {
			var prod_id=$(this).val();

			var a=$(this).parent();
			// console.log(prod_id);
			var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('p2')!!}',
				data:{'lead_course':prod_id},
				dataType:'json',//return data will be json
				success:function(p){
					// console.log("name");
					// console.log(p.m1);
					// console.log(typeof(p.name))

					// here price is coloumn name in products table data.coln name

					// a.find('.prod_price').val(p.name);

					op+='<option value="0" selected disabled> Fee Status</option>';
					op+='<option value="'+p.m2+'">'+p.m2+'</option>';

					a.find('.p2').html(" ");
					a.find('.p2').append(op);


				},
				error:function(){

				}
			});
    });


   

    $(document).on('change','.productname',function () {
			var prod_id=$(this).val();

			var a=$(this).parent();
			// console.log(prod_id);
			var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('p3')!!}',
				data:{'lead_course':prod_id},
				dataType:'json',//return data will be json
				success:function(p){
					// console.log("name");
					// console.log(p.m3);
					 //console.log(typeof(p.n))

					// here price is coloumn name in products table data.coln name

					// a.find('.prod_price').val(p.name);

					op+='<option value="0" selected disabled> Fee Status</option>';
					op+='<option value="'+p.m3+'">'+p.m3+'</option>';

					a.find('.p3').html(" ");
					a.find('.p3').append(op);


				},
				error:function(){

				}
			});
    });



    

   




	});
</script>
            
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        
      </div>
    </div>
    <!-- latest jquery-->
  @include('script')
  </body>
</html>