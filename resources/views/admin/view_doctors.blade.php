

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
     
 <div class="container" align="" style="margin-top:35px">

 <h1 style="color:black; text-align:center; font-style:italic; font-family:broadway; font-size:32px; margin-top:40px; background-color:tomato; padding:15px; margin-bottom:52px">ALL DOCTORS</h1>

 @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
@endif
       <div class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <th style="color:tomato">Doctor Name</th>
                    <th style="color:tomato">Phone</th>
                    <th style="color:tomato;">Specialty</th>
                    <th style="color:tomato">Room</th>
                    <th style="color:tomato">Doctor's Image</th>
                    <th colspan="" style="color:tomato">Edit</th>
                    <th colspan="" style="color:tomato">Delete</th>
                </tr>

                @foreach($data as $doctor)

                <tr>
                    <td style="color:white">{{$doctor->name}}</td>
                    <td style="color:white">{{$doctor->phone}}</td>
                    <td style="color:white">{{$doctor->specialty}}</td>
                    <td style="color:white">{{$doctor->room}}</td>
                    <td><img style="height:200%" height="100" width="1000" src="doctorimage/{{$doctor->image}}" alt=""></td>
                    <td style="background-color:"><a class="btn btn-success" href="{{url('editdoctor', $doctor->id)}}">Edit</a></td>
                    <td style="background-color:"><a onclick="return confirm('Confirm delete?')" class="btn btn-danger" href="{{url('deletedoctor', $doctor->id)}}">Delete</a></td>

            </tr>

                @endforeach
            </table>
        </div>

</div>


</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>