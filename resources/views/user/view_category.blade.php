<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Profile :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('profile/css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="{{asset('profile/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="{{asset('profile/css/font-awesome.css')}}" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner navbar-inner_1">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
         <ul>
        <li class="green">
          <a href="#" class="icon-home"></a>
          <ul>
            <li><a href="login.html">Login</a></li>
              <li><a href="register.html">Register</a></li>
              <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="active">
                 @csrf
                </form>

              </li>
          </ul>
        </li>
         </ul>
             </nav>
           </div>
           <a class="brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
           <div class="pull-right">
            <nav class="navbar nav_bottom" role="navigation">
 
     <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header nav_2">
          <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
       </div> 
       <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav nav_1">
                <li><a href="/user">Home</a></li>
                <li><a href="{{route('profile')}}">Members view profile</a></li>
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matches<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="matches.html">New Matches</a></li>
                    <li><a href="viewed-profile.html">Who Viewed my Profile</a></li>
                    <li><a href="viewed-not_contacted.html">Viewed & not Contacted</a></li>
                    <li><a href="members.html">Premium Members</a></li>
                    <li><a href="shortlisted.html">Shortlisted Profile</a></li>
                  </ul>
                </li>
          <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="search.html">Regular Search</a></li>
                    <li><a href="profile.html">Recently Viewed Profiles</a></li>
                    <li><a href="search-id.html">Search By Profile ID</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="shortcodes.html">Shortcodes</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="inbox.html">Inbox</a></li>
                    <li><a href="inbox.html">New</a></li>
                    <li><a href="inbox.html">Accepted</a></li>
                    <li><a href="sent.html">Sent</a></li>
                    <li><a href="upgrade.html">Upgrade</a></li>
                  </ul>
                </li>
                <li class="last"><a href="{{route('user.Contact')}}">Contacts</a></li>
            </ul>
         </div><!-- /.navbar-collapse -->
        </nav>
       </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
      <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Profile</li>
      </ul>
   </div>
  <div class="col-md-9 profile_left1">
    <h1>Recently Viewed Profile</h1>
    <div class="profile_top"><a href="view_profile.html">
      <h2>254879</h2>
      
      <div class="col-sm-3">
        <ul class="login_details1">
       <li>Last Login : 5 days ago</li>
       <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
      </ul>
      </div>
      <div class="col-sm-6">
         @foreach ($category as $row)
        <table class="table_working_hours">
            <tbody>
             
        <div class="col-sm-3 profile_left-top">
       <td> <img src="{{URL::to($row->image)}}" class="img-responsive" alt=""/></td>
        </div>
         <tr class="opened">
            <td class="day_label1">SL :</td>
            <td>{{$row->id}}</td>
          </tr>
        <tr class="opened">
            <td class="day_label1">Name :</td>
            <td>{{$row->name}}</td>
          </tr>
            <tr class="opened_1">
            <td class="day_label1">Age / Height :</td>
            <td>{{$row->age}}/ {{$row->hight}}</td>
           
          </tr>
            <tr class="opened">
            <td class="day_label1">Date Of Birth :</td>
            <td>{{$row->dateofbirth}}</td>
          </tr>
            <tr class="opened">
            <td class="day_label1">Religion :</td>
            <td>{{$row->religion}}</td>
          </tr>
            <tr class="opened">
            <td class="day_label1">Email :</td>
            <td>{{$row->email}}</td>
            </tr>
            <tr class="closed">
            <td class="day_label1">Country :</td>
            <td>{{$row->country}}</td>
          </tr>
          </tr>
            <tr class="opened">
            <td class="day_label1">Location :</td>
            <td>{{$row->address}}</td>
          </tr>
            <tr class="closed">
            <td class="day_label1">Profile Created by :</td>
            <td class="day_value closed"><span>Self</span></td>
          </tr>
            <tr class="closed">
            <td class="day_label1">Occuopation :</td>
            <td>{{$row->occupation}}</td>
          </tr>
       
     
          </tbody>


       </table>

        <div class="buttons">
         <div class="vertical">Send Mail</div>
         <div class="vertical">Shortlisted</div>
         <div class="vertical"><a href="https://www.paypal.com/us/signin">Chat Bride or Groom</div></a>

       </div>
        @endforeach

      </div>

       
     
<div class="col-md-3 match_right">
  <div class="profile_search1">
   <form action="/search" method="get" >
      <input type="search" class="m_1" name="search" size="30"  placeholder="Enter Profile ID :">
      <button type="submit" class="btn btn-primary">Search</button>
     </form>
   </div>
   <section class="slider">
   <h3>Happy Marriage</h3>
   <div class="flexslider">
    <ul class="slides">
      <li>
      <img src="{{URL::to('profile/images/s2.jpg')}}" alt=""/>
      <h4>Lorem & Ipsum</h4>{{URL::to('profile/
      <p>It ')}}is a long established fact that a reader will be distracted by the readable</p>
      </li>
      <li>
      <img src="{{URL::to('profile/images/s1.jpg')}}" alt=""/>
      <h4>Lorem & Ipsum</h4>
      <p>It is a long established fact that a reader will be distracted by the readable</p>
      </li>
      <li>
      <img src="{{URL::to('profile/images/s3.jpg')}}" alt=""/>
      <h4>Lorem & Ipsum</h4>
      <p>It is a long established fact that a reader will be distracted by the readable</p>
      </li>
      </ul>
    </div>
   </section>
   <div class="view_profile view_profile2">
          <h3>View Similar Profiles</h3>
          <ul class="profile_item">
            <a href="#">
             <li class="profile_item-img">
                <img src="{{URL::to('profile/images/p5.jpg')}}" class="img-responsive" alt=""/>
             </li>
             <li class="profile_item-desc">
                <h4>2458741</h4>
                <p>29 Yrs, 5Ft 5in Christian</p>
                <h5>View Full Profile</h5>
             </li>
             <div class="clearfix"> </div>
            </a>
           </ul>
           <ul class="profile_item">
            <a href="#">
             <li class="profile_item-img">
                <img src="{{URL::to('profile/images/p6.jpg')}}" class="img-responsive" alt=""/>
             </li>
             <li class="profile_item-desc">
                <h4>2458741</h4>
                <p>29 Yrs, 5Ft 5in Christian</p>
                <h5>View Full Profile</h5>
             </li>
             <div class="clearfix"> </div>
            </a>
           </ul>
           <ul class="profile_item">
            <a href="#">
             <li class="profile_item-img">
                <img src="{{URL::to('profile/images/p7.jpg')}}" class="img-responsive" alt=""/>
             </li>
             <li class="profile_item-desc">
                <h4>2458741</h4>
                <p>29 Yrs, 5Ft 5in Christian</p>
                <h5>View Full Profile</h5>
             </li>
             <div class="clearfix"> </div>
            </a>
           </ul>
           <ul class="profile_item">
            <a href="#">
             <li class="profile_item-img">
                <img src="{{URL::to('profile/images/p8.jpg')}}" class="img-responsive" alt=""/>
             </li>
             <li class="profile_item-desc">
                <h4>2458741</h4>
                <p>29 Yrs, 5Ft 5in Christian</p>
                <h5>View Full Profile</h5>
             </li>
             <div class="clearfix"> </div>
            </a>
           </ul>
       </div>
     </div>
     <div class="clearfix"> </div>
  </div>
</div>

<div class="footer">
      <div class="container">
        <div class="col-md-4 col_2">
          <h4>About Us</h4>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
        </div>
        <div class="col-md-2 col_2">
          <h4>Help & Support</h4>
          <ul class="footer_links">
            <li><a href="#">24x7 Live help</a></li>
            <li><a href="contact.html">Contact us</a></li>
            <li><a href="#">Feedback</a></li>
            <li><a href="faq.html">FAQs</a></li>
          </ul>
        </div>
        <div class="col-md-2 col_2">
          <h4>Quick Links</h4>
          <ul class="footer_links">
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms and Conditions</a></li>
            <li><a href="services.html">Services</a></li>
          </ul>
        </div>
        <div class="col-md-2 col_2">
          <h4>Social</h4>
          <ul class="footer_social">
          <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
          <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
          <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
          <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
        <div class="copy">
          <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
          </div>
      </div>
</div>
<!-- FlexSlider -->
<link href="{{asset('profile/css/flexslider.css')}}" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
  $(function(){
    SyntaxHighlighter.all();
  });
  $(window).load(function(){
    $('.flexslider').flexslider({
    animation: "slide",
    start: function(slider){
      $('body').removeClass('loading');
    }
    });
  });
  </script>
<!-- FlexSlider -->
</body>
</html> 