<!DOCTYPE html>
<html lang="en">

<head>
 <title> View Member Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  
 
</head>

<body>
  <div class="container">
    
  
  <div class="card" style="width:300px">
  <img class="card-img-top" src="{{URL::to($cat->image)}}" alt="Card image">
  <div class="card-body ">
              
       <li> <p class="font-weight-bold"  >  Name:</p>   {{$cat->name}}</li><br>

               <li><p class="font-weight-bold"  > Age:</p>{{$cat->age}}</li> <br>

             <li><p class="font-weight-bold"  > Phone:</p>{{$cat->phone}}</li> <br>
             <li><p class="font-weight-bold"  > Gender:</p>{{$cat->gender}}</li> <br>
            <li><p class="font-weight-bold"  > Dateofbirth:</p>{{$cat->dateofbirth}}</li> <br>
            <li><p class="font-weight-bold"  > Religion:</p>{{$cat->religion}}</li> <br>
             <li><p class="font-weight-bold"  > Email:</p>{{$cat->email}}</li> <br>
             <li><p class="font-weight-bold"  > Occupation:</p>{{$cat->occupation}}</li> <br>
             <li><p class="font-weight-bold"  > Country:</p>{{$cat->country}}</li> <br>
             <li><p class="font-weight-bold"  > Bloodgroup:</p>{{$cat->bloodgroup}}</li> <br>
             <li><p class="font-weight-bold"  > Hight:</p>{{$cat->hight}}</li> <br>
              <li><p class="font-weight-bold"  > Address:</p>{{$cat->address}}</li> <br>

             <li> <p class="font-weight-bold"  >Category Created at:</p>{{$cat->created_at}}</li> <br>
    <h4 class="card-title"></h4>
    <p class="card-text"></p>
    <a href="{{route('all.category')}}" class="btn btn-primary">See Profile</a>
  </div>
</div>
  </div>
   
     




 <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  







</body>
</html>

