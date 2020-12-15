

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
  


<div class="text-center">
  
    <!--header-->
    <div class="text-center">
      <h1>ADD NEW MEMBER</h1>
    </div>
    <!--//header-->
    <!--main-->
  <div class="text-center">
    <form action="{{url('Create/Post')}}"  method="post" enctype="multipart/from-data">
      @csrf
        <div class="w3_modal_body_grid">

            <span class="text-center">Name:</span>
    <input type="text"  name="name" placeholder="Your Name" required=""/>
          
          <div class="clear"> </div>
        </div>
        <div class="w3_modal_body_grid w3_modal_body_grid1">
          <span class="text-center">AGE:</span>
          <input type="text"  name="age" placeholder="Your Age" required=""/>
          <div class="clear"> </div>
        </div>
        <div class="w3_modal_body_grid w3_modal_body_grid1">
          <span class="text-center">Phone</span>
          <input type="text" name="phone" placeholder="Your Phone Number" required=""/>
          <div class="clear"> </div>

          

        </div>
        <div class="w3_modal_body_grid w3_modal_body_grid1">
          <span class="text-center">GENDER</span>
          <input type="text" name="gender" placeholder="MALE or FEMALE" required=""/>
          <div class="clear"> </div>
        </div>

        <div class="w3_modal_body_grid w3_modal_body_grid1">
          <span class="text-center">Date Of Birth:</span>
          <input class="date"  name="dateofbirth"   type="text" value="mm/dd/yyyy" placeholder="mm/dd/yyyy"/>
       <div class="clear"> </div>
        </div>

        
        <div class="w3_modal_body_grid">
          <span class="text-center">religion:</span>
        
          <input type="text"name="religion" placeholder="Religion" required=""/>
          
          <div class="clear"> </div>
        </div>
        <div class="w3_modal_body_grid">
          <span class="text-center">Email:</span>
          <input type="email" name="email" placeholder="Your E-mail" required=""/>
          <div class="clear"> </div>
        </div>
        <div class="w3_modal_body_grid w3_modal_body_grid1">
          <span class="text-center">Occupation:</span>
        <input type="text" name="occupation" placeholder="Your Occupation " required=""/>
          <div class="clear"> </div>
        </div>

        <div class="w3_modal_body_grid w3_modal_body_grid1">
          <span class="text-center">Country:</span>
        <input type="text"  name="country" placeholder="your Country " required=""/>
          <div class="clear"> </div>
        </div>
        <div class="w3_modal_body_grid w3_modal_body_grid1">
          <span class="text-center">Blood Group:</span>
        <input type="text" name="bloodgroup" placeholder="Your Blood Group " required=""/>
          <div class="clear"> </div>
        </div>
        <div class="w3_modal_body_grid w3_modal_body_grid1">
          <span class="text-center">HIGHT:</span>
        <input type="text" name="hight" placeholder="Your Hight " required=""/>
          <div class="clear"> </div>
        </div>
        <div class="w3_modal_body_grid w3_modal_body_grid1">
          <span class="text-center">Address:</span>
        <input type="text" name="address" placeholder="Your Address" required=""/>
          <div class="clear"> </div>
        </div>
        <div class="w3_modal_body_grid w3_modal_body_grid1">
        <span class="text-center">YourPhoto:</span>
      <input type="file"  name="image" placeholder="YOUR PHOTO" />

      <div class="clear"> </div>
        </div>
      


      
        <button type="submit" class="btn btn-primary" > SUBMIT</button> 
        <div class="clear"></div>
      </form>
    </div>
    </body>
    </html>
