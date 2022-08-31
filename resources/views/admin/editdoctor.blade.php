


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->





<!-- //hmmmmmmmmmmmmmmmmmmmmmmm -->
    <base href="/public">
<!-- //hmmmmmmmmmmmmmmmmmmmmmmm -->






  @include('admin.css')
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
<h1 style="color:black; text-align:center; font-style:italic; font-family:broadway; font-size:32px; margin-top:40px; background-color:tomato; padding:15px; margin-bottom:52px">EDIT DOCTOR</h1>


@if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
@endif

<form style"width:50%" class="form" action="{{url('updatedoctor', $data->id)}}" method="post" enctype="multipart/form-data">
  @csrf

<div class="form-group">
  <label for="title">Doctor Name</label>
  <input style="color:tomato;" class="form-control" type="text" name="name" value="{{$data->name}}" required>
</div>

<div class="form-group">
<label for="price">Doctor Phone Number</label>
  <input style="color:tomato" class="form-control" type="number" name="phone" value="{{$data->phone}}" required>
</div>

<div class="form-group">
<label for="price">Doctor Specialty</label> <br>
<input style="color:tomato;" class="form-control" type="text" name="specialty" value="{{$data->specialty}}" required>

<div class="form-group">
<label for="price">Doctor Room Number</label>
  <input style="color:tomato" class="form-control" type="number" name="room" value="{{$data->room}}" required>
</div>

<div class="form-group">
<label for="price">Old Image:</label> 
<img height="350" weight="350" src="doctorimage/{{$data->image}}" alt="">
</div>



<div class="form-group">
<label for="price">Change Image:</label> <br>
<input type="file" name="file" id="">
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