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
   <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
    <script>
        $(document).ready(function() {
          $('select').on('change', function() {
           var result=$(this).val();
           if(result=="internship"){
           $('#internship').removeAttr('hidden');
           }
           else if(result=="course"){
           $('#course').removeAttr('hidden');
           }
           else if(result=="service"){
           $('#service').removeAttr('hidden');
           }
                
                });
                $("#prospects_form").submit(function(e) {
    e.preventDefault();
});
                $('#btn2, #btn3,#btn4').click(function () {
              if (this.id == 'btn2') {
                $('#coursefind').removeAttr('hidden');
            }
          else if (this.id == 'btn3') {
            $('#internshipfind').removeAttr('hidden');
   }
   else if (this.id == 'btn4') {
    $('#servicefind').removeAttr('hidden');
   }
});

          
        });
    </script>

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
                  <h3>Leads</h3>
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
            <div class="container register-form">
  <form action="lead" method="POST">
  @csrf
            <div class="form">
                <div class="note">
                  
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              
                                <input type="text" class="form-control" placeholder="Enter Your Name" value="" id="name" name="name"  tabindex="1" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Gmail" id="gmail" name="gmail"  tabindex="3" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your CNIC NO " value="" id="cnic" name="cnic"   tabindex="2" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Father/Guardian Name" id="father_name" name="father_name"   tabindex="4" required/>
                            </div>
                           
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Phone No " value="" id="mobile" name="mobile"   tabindex="5" required/>
                            </div>
                            <div class="form-group">
                            <select name="gender" id="gender" class="form-control"  tabindex="7" required>
                        <option value="" hidden>Select Gender</option>
                        <option value="Male" name="gender" id="gender">Male</option>
                         <option value="Female" name="gender" id="gender">Female</option>
      </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Degree" id="degree" name="degree"  tabindex="6" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Address" id="address" name="address"  tabindex="8" required/>
                            </div>
                        </div>






                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Uni Name" id="uni" name="uni"  tabindex="9" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Refrence Name" id="ref" name="ref"  tabindex="11" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Deal Done" id="deal_done" name="deal_done"  tabindex="10" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Any Deal" id="deal_tell" name="deal_tell"  tabindex="12" required/>
                            </div>                          
                               </div>
                              


                               <div class="col-md-6">
                            <div class="form-group">
                            <select name="about_devicon" id="about_devicon" class="form-control"  tabindex="13" required>
                        <option value="" hidden>What did you hear about devicon</option>
                        <option value="Word Of Mouth" name="about_devicon" id="about_devicon">Word Of Mouth</option>
                         <option value="Friends" name="about_devicon" id="about_devicon">Friends</option>
                         <option value="Website" name="about_devicon" id="about_devicon">Website</option>
                         <option value="Facebook Page" name="about_devicon" id="about_devicon">Facebook Page</option>
                         <option value="Other" name="about_devicon" id="about_devicon">Other</option>
                        
      </select>
                            </div>
                            <div id="fee" class="form-group">
                                <select  class="price" name="fee" id="price"  tabindex="15" required>
                                <option value="" hidden>Choose Price</option>


                         
                        </select>

                            </div>
                        </div>







                              
                        <div class="col-md-6">
                        <div class="form-group">
                          
                        <select class="leead" name="lead" id="lead" class="form-control"  tabindex="14" required>
                        <option value="" hidden>Select Option</option>
                        <option value="internship" name="lead" id="lead">Internship</option>
                         <option value="service" name="lead" id="lead">Service</option>
                         <option value="course" name="lead" id="lead">Course</option>

                        </select>
                        <select class="lead_course"  name="leads_internship" class="form-control"  value="internship" id="internship" hidden>
                        <option value="" hidden>Select Course</option>
                        @foreach($intern as $try1)
                        <option >{{$try1->course_name}}</option>
                        @endforeach
                                            
                        </select>
                       
                        <select  class="lead_course"  name="leads_services"  class="form-control"  value="service" id="service" hidden>
                        <option value="" hidden>Select Course</option>
                        @foreach($service as $try2)
                        <option   >{{$try2->course_name}}</option>
                        @endforeach
                                            
                        </select>
                        
                        <select  class="lead_course" name="leads_courses" class="form-control" value="course" id="course" hidden>
                       <option value="" hidden>Select Course</option>
                        @foreach($course as $try3)
                        <option >{{$try3->course_name}}</option>
                        @endforeach
                                            
                        </select>
                        


                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <select  class="duration" name="duration" id="duration"  tabindex="16" required>
                                <option value="" hidden>Choose Course Duration</option>


                         
                        </select>


      </div>
      </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <input type="date" class="form-control" placeholder="Enter Your DOB" id="dob" name="dob"  tabindex="17" required/>
                            </div>
      </div>
                        <div class="col-md-6">
                               <div class="form-group">
                               <select name="marketer_name" id="marketer_name" class="form-control"  tabindex="18" required >
                        <option value="" hidden>Select Marketer Name </option>
                        @foreach($marketer as $try)
                        <option name="marketer_name" id="marketer_name" value="{{$try->name}}">{{$try->name}}</option>
                        @endforeach
                        <option value="NA" name="marketer_name" id="marketer_name">NA</option>
                        </select>
                       
                               </div>
                               </div>

                    </div>               



                  

                    <button type="Submit" class="btnSubmit" id="bt1">Submit</button>
                </div>
            </div>
</form>
        </div>
     <form action="leads" method="GET" role="search" id="prospects_form" onsubmit="return false;">
       {{csrf_field()}}
        <input type="submit" class="btn btn-primary" id="btn2" name="course" value="Lead Course">
        <input type="submit" class="btn btn-primary" id="btn3" name="internship" value="Lead Internship">
        <input type="submit" class="btn btn-primary" id="btn4" name="service" value="Lead Service">
     
        </form>
  
     
      <section>
      <div class="close1">
      <table class="table" id="coursefind" hidden >
    <thead>
    <th class="text-center" >ID</th>
            <th class="text-center" > NAME</th>
            <th class="text-center">GMAIL</th>
            <th class="text-center" >UNI</th>
            <th class="text-center">REF</th>
            <th class="text-center">Lead</th>
            <th class="text-center">Marketer</th>
            <th class="text-center">DEAL TELL</th>
            <th class="text-center">DEAL DONE</th>
        </tr>
    </thead>
    <tbody>
    @foreach($use as $item)
    <tr class="item{{$item->id}}">
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->gmail}}</td>
    <td>{{$item->uni}}</td>
    <td>{{$item->ref}}</td>
    <td>{{$item->lead}}
    {{$item->lead_course}}
    </td>
    <td>{{$item->marketer_name}}</td>
    <td>{{$item->deal_tell}}</td>
    <td>{{$item->deal_done}}</td>
    </tr>
@endforeach
    </tbody>
      </table>
    
      </div>
      </section>


      <section>
      <div class="close1">
      <table class="table" id="internshipfind" hidden >
    <thead>
    <th class="text-center" >ID</th>
            <th class="text-center" > NAME</th>
            <th class="text-center">GMAIL</th>
            <th class="text-center" >UNI</th>
            <th class="text-center">REF</th>
            <th class="text-center">Lead</th>
            <th class="text-center">Marketer</th>
            <th class="text-center">DEAL TELL</th>
            <th class="text-center">DEAL DONE</th>
        </tr>
    </thead>
    <tbody>
    @foreach($inte as $item)
    <tr class="item{{$item->id}}">
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->gmail}}</td>
    <td>{{$item->uni}}</td>
    <td>{{$item->ref}}</td>
    <td>{{$item->lead}}
    {{$item->lead_course}}
    </td>
    <td>{{$item->marketer_name}}</td>
    <td>{{$item->deal_tell}}</td>
    <td>{{$item->deal_done}}</td>
    </tr>
@endforeach
    </tbody>
      </table>
    
      </div>
      </section>


      <section>
      <div class="close1">
      <table class="table" id="servicefind" hidden >
    <thead>
            <th class="text-center" >ID</th>
            <th class="text-center" > NAME</th>
            <th class="text-center">GMAIL</th>
            <th class="text-center" >UNI</th>
            <th class="text-center">REF</th>
            <th class="text-center">Lead</th>
            <th class="text-center">Marketer</th>
            <th class="text-center">DEAL TELL</th>
            <th class="text-center">DEAL DONE</th>
        </tr>
    </thead>
    <tbody>
    @foreach($serv as $item)
    <tr class="item{{$item->id}}">
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->gmail}}</td>
    <td>{{$item->uni}}</td>
    <td>{{$item->ref}}</td>
    <td>{{$item->lead}}
    {{$item->lead_course}}
    </td>
    <td>{{$item->marketer_name}}</td>
    <td>{{$item->deal_tell}}</td>
    <td>{{$item->deal_done}}</td>
    </tr>
@endforeach
    </tbody>
      </table>
    
      </div>
      </section>

      


  
<script type="text/javascript">
	$(document).ready(function(){
    $(document).on('change','.leead',function () {
      var j=$(this).parent();   
      var a=$(this).val();
      $(document).on('change','.lead_course',function () { 
     
  
      // var b=$('.lead_course').val();
      var b= $(this).val();
      console.log(a);
        console.log(b);
      var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('findcourseprice')!!}',
				data:{'a':a,'b':b},
				dataType:'json',//return data will be json
				success:function(p){
					 console.log("name");
					console.log(p.price);			
					op+='<option value="0" >Choose Price</option>';
					op+='<option value="'+p.price+'">'+p.price+'</option>';
          $( ".price" ).append(op);
				},
				error:function(){

				}
			});

    
     
          });
    });



    $(document).on('change','.leead',function () {
      var j=$(this).parent();   
      var a=$(this).val();
      $(document).on('change','.lead_course',function () { 
     
  
      // var b=$('.lead_course').val();
      var b= $(this).val();
      console.log(a);
        console.log(b);
      var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('findcourseduration')!!}',
				data:{'a':a,'b':b},
				dataType:'json',//return data will be json
				success:function(p){
					 console.log("name");
					console.log(p.duration);			
					op+='<option value="0" >Choose Duration</option>';
					op+='<option value="'+p.duration+'">'+p.duration+'</option>';
          $( ".duration" ).append(op);
				},
				error:function(){

				}
			});

    
     
          });
    });











  });
  </script>
      </div>
    </div>
    <div>
      <br>


    <div>
    <!-- latest jquery-->
      <!-- datatable start-->
      <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  
                  <div class="card-body">
                    <div class="dt-ext table-responsive">
                      <table class="display" id="responsive">
                      
    <thead>
            <th >ID</th>
            <th  > NAME</th>
            <th >CNIC</th>
           
            <th >Lead</th>
            <th >Price</th>
            <th>Ref</th>
            <th >ACTION</th>

        </tr>
    </thead>
    <tbody >
    @foreach($data as $item)
    <tr class="item{{$item->id}}">
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->cnic}}</td>
    
    <td>{{$item->lead}}
    {{$item->lead_course}}
    </td>
    <td>{{$item->fee}}</td>
    <td>{{$item->ref}}</td>   
    <td><a class="btn btn-primary" href="{{url('leadview',$item->id)}}">View</a></td>
    </tr>
@endforeach
    </tbody>
   
</table>
                    
                    </div>
                  </div>
                </div>
              </div>
           


        <!-- datatable end-->



  @include('script')


    <!-- Plugins JS start-->
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/jszip.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
  </body>
</html>