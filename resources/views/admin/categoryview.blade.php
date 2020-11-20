<!DOCTYPE html>
<html lang="en">

<head>
 
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  
 
</head>

<body>
  <div class="container">
   
     <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>
    
      <a href="{{route('all.category')}}" class="btn btn-primary" > All category</a>    
        </p>
     <div>
       <ul>

        
           

            <img src="{{URL::to($cat->image)}}"style="height: 110px; width: 120px;">
             <li>Category name:{{$cat->name}}</li>
             <li>Category age:{{$cat->age}}</li>

             <li>Category phone:{{$cat->phone}}</li>
             <li>Category gender:{{$cat->gender}}</li>
            <li>Category dateofbirth:{{$cat->dateofbirth}}</li>
            <li>Category religion:{{$cat->religion}}</li>
             <li>Category email:{{$cat->email}}</li>
             <li>Category occupation:{{$cat->occupation}}</li>
             <li>Category country:{{$cat->country}}</li>
             <li>Category bloodgroup:{{$cat->bloodgroup}}</li>
             <li>Category hight:{{$cat->hight}}</li>
              <li>Category address:{{$cat->address}}</li>

             <li>category Created at:{{$cat->created_at}}</li>
          </ul>
     </div>
          
      

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

