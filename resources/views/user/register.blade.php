<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Perfect Match Register Form Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Perfect Match Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->   
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<!-- navbar  -->


<link rel="stylesheet" href="{{asset('register/css/style.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="{{asset('register/css/jquery-ui.css')}}" />
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=GFS+Neohellenic:400,400i,700,700i&amp;subset=greek" rel="stylesheet">
<!-- //web-fonts -->
  <title>Wedding Planner Wedding Category Flat Bootstrap Responsive website Template | Gallery :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Wedding Planner Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{asset('fontend/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('fontend/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
	<!-- font-awesome icons -->
    <link href="{{asset('fontend/css/fontawesome-all.min.css')}}" rel="stylesheet">
	<!-- //Custom Theme files -->
   <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100i,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
	<!-- //online-fonts -->


</head>



<body>  

<div class="inner-banner">
        
        <header>    
    <nav class="mnu navbar-light">
            <div class="logo" id="logo">
                <h1><a href="index.html">MARRIAGE MEDIA</a></h1>
            </div>
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop">
                    <ul class="menu">
                         <li><a href="/user">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="active">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                              <li><a href="services.html">Services</a>
                              </li>
                               
                                <li>
                                    <a href="{{route('user.gallery')}}">Gallery</a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                   </nav>
                   </header>



	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>Perfect Match Register Form</h1>
		</div>
		<!--//header-->
		<!--main-->
	<div class="agileits-register">
		<form action="{{route('store.post')}}" method="post" enctype="multipart/form-data">
			@csrf
				<div class="w3_modal_body_grid">

            <span>Name:</span>
			<input type="text" name="name" placeholder="Your Name" required=""/>
					
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>AGE:</span>
					<input type="text" name="age" placeholder="Your Age" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Phone Number</span>
					<input type="text" name="phone" placeholder="Your Phone Number" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>GENDER</span>
					<input type="text" name="gender" placeholder="MALE or FEMALE" required=""/>
					<div class="clear"> </div>
				</div>

				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Date Of Birth:</span>
					<input class="date"  name="dateofbirth"   type="text" value="mm/dd/yyyy" placeholder="mm/dd/yyyy"/>
					<div class="clear"> </div>
				</div>

				
				<div class="w3_modal_body_grid">
					<span>religion:</span>
					<input type="text" name="religion" placeholder="Your Name" required=""/>
					
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid">
					<span>Email:</span>
					<input type="email" name="email" placeholder="Your E-mail" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Occupation:</span>
				<input type="text" name="occupation" placeholder="Your Occupation " required=""/>
					<div class="clear"> </div>
				</div>

				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Country:</span>
				<input type="text" name="country" placeholder="your Country " required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Blood Group:</span>
				<input type="text" name="bloodgroup" placeholder="Your Blood Group " required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>HIGHT:</span>
				<input type="text" name="hight" placeholder="Your Hight " required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Address:</span>
				<input type="text" name="address" placeholder="Your Address" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>YourPhoto:</span>
				<input type="file" name="image" placeholder="YOUR PHOTO" required=""/>
					<div class="clear"> </div>
				</div>


				<div class="w3-agree">
					<input type="checkbox" id="c1" name="cc">
					<label class="agileits-agree">I agree to the <a href="#">Terms and Conditions</a></label>
					<div class="clear"> </div>
				</div>
				<input type="submit" value="Register Here" />
				<div class="clear"></div>
			</form>
		</div>
		<div class="banner-left">
			<img src="{{URL::to('register/images/1.png')}}" alt=""> 
		</div>
		
	<div class="clear"></div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<h2>&copy; 2017 Perfect Match Register Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></h2>
		</div>
		<!--//footer-->
	</div>
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
    
  </script>
	
<!-- TOSTER -->
<script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>  
</body>

</html>