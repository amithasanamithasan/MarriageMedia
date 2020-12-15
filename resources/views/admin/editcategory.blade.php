<!DOCTYPE html>
<html lang="en">
<head>


	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<!-- navbar  -->


<link rel="stylesheet" href="{{asset('register/css/style.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="{{asset('register/css/jquery-ui.css')}}" />
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=GFS+Neohellenic:400,400i,700,700i&amp;subset=greek" rel="stylesheet">
    <title>Wedding Planner Wedding Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>
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

     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">




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
	


<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>Perfect Match Register Form</h1>
		</div>
		<!--//header-->
		<!--main-->
	<div class="agileits-register">
		<form action="../../update/category/{{$category->id}}" enctype="multipart/from-data" method="post">
			@csrf
				<div class="w3_modal_body_grid">

            <span>Name:</span>
		<input type="text" value="{{$category->name}}" name="name" placeholder="Your Name" required=""/>
					
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>AGE:</span>
					<input type="text" value="{{$category->age}}" name="age" placeholder="Your Age" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Phone Number</span>
					<input type="text" value="{{$category->phone}}"name="phone" placeholder="Your Phone Number" required=""/>
					<div class="clear"> </div>

					

				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>GENDER</span>
					<input type="text"value="{{$category->gender}}" name="gender" placeholder="MALE or FEMALE" required=""/>
					<div class="clear"> </div>
				</div>

				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Date Of Birth:</span>
					<input class="date"value="{{$category->dateofbirth}}"  name="dateofbirth"   type="text" value="mm/dd/yyyy" placeholder="mm/dd/yyyy"/>
					<div class="clear"> </div>
				</div>

				
				<div class="w3_modal_body_grid">
					<span>religion:</span>
				
					<input type="text"value="{{$category->religion}}" name="religion" placeholder="Religion" required=""/>
					
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid">
					<span>Email:</span>
					<input type="email" value="{{$category->email}}"name="email" placeholder="Your E-mail" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Occupation:</span>
				<input type="text"value="{{$category->occupation}}" name="occupation" placeholder="Your Occupation " required=""/>
					<div class="clear"> </div>
				</div>

				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Country:</span>
				<input type="text"value="{{$category->country}}" name="country" placeholder="your Country " required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Blood Group:</span>
				<input type="text"value="{{$category->bloodgroup}}" name="bloodgroup" placeholder="Your Blood Group " required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>HIGHT:</span>
				<input type="text" value="{{$category->hight}}"name="hight" placeholder="Your Hight " required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Address:</span>
				<input type="text"value="{{$category->address}}" name="address" placeholder="Your Address" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
				<span>YourPhoto:</span>
			<input type="file" value="{{$category->image}}" name="image" placeholder="YOUR PHOTO" />

			<div class="clear"> </div>
				</div>
				<div>
					<input type="hidden" name="oldphoto" value="{{ $category->image }}">
				</div>


			
				<button type="submit" class="btn btn-primary" > UPDATE</button> 
				<div class="clear"></div>
			</form>
		</div>
		</body>
		</html>
			
		