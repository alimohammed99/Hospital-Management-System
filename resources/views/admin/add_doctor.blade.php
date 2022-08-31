


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  @include('admin.css')

  <style>
    label{
        color:green;
        font-size:80px;
    }
  </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">WELCOME</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">ADMIN</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
        <!-- partial -->
       





        <div class="container-fluid page-body-wrapper">


<div class="container" align="" style="text-align:; margin-top:35px">
<h1 style="color:black; text-align:center; font-style:italic; font-family:broadway; font-size:32px; margin-top:40px; background-color:tomato; padding:15px; margin-bottom:52px">ADD DOCTOR</h1>


@if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
@endif

<form style"width:50%" class="form" action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
  @csrf

<div class="form-group">
  <label for="title">Doctor Name</label>
  <input style="color:tomato;" class="form-control" type="text" name="name" placeholder="Write Doctor's name" required>
</div>

<div class="form-group">
<label for="price">Doctor Phone Number</label>
  <input style="color:tomato" class="form-control" type="number" name="phone" placeholder="Doctor's phone number" required>
</div>

<div class="form-group">
<label for="price">Doctor Specialty</label> <br>
    <select style="background-color:white" class="form-control" name="specialty" id="" required>
        <option style="color:white">--Select--</option>
        <option style="background-color:tomato; color:white; border-top:7px solid green;" value="nose">Nose</option>
        <option style="background-color:tomato; color:white" value="eyes">Eyes</option>
        <option style="background-color:tomato; color:white" value="heart">Heart</option>
        <option style="background-color:tomato; color:white" value="skin">Skin</option>
        <option style="background-color:tomato; color:white" value="bones">Bones</option>
        <option style="background-color:tomato; color:white" value="pediatrics">Pediatrics</option>
        <option style="background-color:tomato; color:white" value="obstetrics">Obstetrics</option>
    </select>
</div>

<div class="form-group">
<label for="price">Doctor Room Number</label>
  <input style="color:tomato" class="form-control" type="number" name="room" placeholder="Doctor's room number" required>
</div>

<div class="form-group">
<label for="price">Doctor Image</label> 
  <input class="form-control" type="file" name="file" required>
</div>


<div class="form-group">
  <input style="background-color:" type="submit" class="btn btn-success" value="Submit">
</div>


</form>












</div>









    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>