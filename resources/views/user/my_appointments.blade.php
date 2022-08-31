<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Albass Health Care</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +234 813 575 6270</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> alimoh22062000@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Albass</span>-Health Care</a>

        <form action="#">
          <div class="input-group input-navbar">
            <!-- <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div> -->
            <!-- <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1"> -->
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/aboutus')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/ourdoctors')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/news')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/contactus')}}">Contact</a>
            </li>



@if(Route::has('login'))
@auth


            <li class="nav-item">
              <a style="background-color:green; color:white; border-radius:20px" class="nav-link" href="{{url('myappointments')}}">My Appointments</a>
            </li>

<x-app-layout>

</x-app-layout>
   

@else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

@endauth
@endif



 
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
@endif 

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
 
      <!-- <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#" class="btn btn-primary">Let's Consult</a>
      </div> -->




      <div class="container">

      <div class="table-responsive">

      <div class="container" align="" style="text-align:; margin-top:35px">
<h1 style="color:white; text-align:center; font-style:italic; font-family:broadway; font-size:32px; margin-top:40px; background-color:green; padding:15px; margin-bottom:52px">MY APPOINTMENTS</h1>
           
  <table style="margin-top:30px" class="table table-dark table-hover table-striped">
    <thead>
      <tr>
            <th>Doctor Name</th>
            <th>Date</th>
            <th>Message</th>
            <th>Status</th>
            <th>Action</th>
      </tr>
    </thead>
    <tbody>


    @foreach($appoint as $appoint)

      <tr>
        <td>{{$appoint->doctor}}</td>
        <td>{{$appoint->date}}</td>
        <td>{{$appoint->message}}</td>
        <td>{{$appoint->status}}</td>
        <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this appointment?')" href="{{url('cancel_appointment', $appoint->id)}}">Cancel</a></td>
      </tr>

      @endforeach



   
    </tbody>
  </table>
</div>
</div>


<!-- Albass Geo-Consult LTD was established in XXXX to provide 
professional land surveying services to ensure consistent, productive, effective and accurate timely survey.
Albass is a certified Private Company registered under the Companies and Allied Matters Act 2020.
Albass Geo-Consult LTD is a licensed survey Organization
specializing in land survey, engineering survey, as well as construction survey. 
After the establishment, Albass Geo-Consult has developed rapidly growing clients and sound reputation 
in the industry which has resulted to be one of the top surveying firms to have high volume 
approved survey submittals in the province.

We have a professional and dedicated team of Surveyors, Draftsmen,
Survey Technicians and Office staffs that have various knowledges and experiences in the industry, mapping and Surveying at large.
Our expertise allows us to cater from small to large scale land survey services.

Some of the objectives of the company are as follows:

* To carry on the business of Surveying, Measuring, Demarcating and Mapping of landed properties as well as any other related businesses.
* To engage in Land Survey in every ramification including planning and mapping of houses, road networks and other related services.
* To carry on the business of consultancy, management of landed properties and related businesses.
* To engage in consultancy work on Geographical Information System(GIS) and to provide other services related to it.
* To carry on general contracts, general merchandise, to buy, sell and deal in properties, commodities and materials of all kinds.
* To purchase or otherwise acquire lands, houses, offices, buildings and premises for the purpose of all the Comapny's objects, trade or business. -->





    </div>
  </div>


 

      <!-- <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p> -->
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>