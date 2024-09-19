<!DOCTYPE html>
<html>
  <head>

    @include('admin.css')

  </head>
  <body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->

      @include('admin.sidebar')

      <!-- Sidebar Navigation end-->
      <div class="page-content">


        <center>

        <h1 style="font-size: 40px;font-weight:bolder;color:white">Gallery</h1>

        <div class="row">
        @foreach ($gallery as $gallery)

        <div class="col-md-4">
        <img style="height: 200px;width:300px" src="/gallery/{{$gallery->image}}">

        <a style="margin:20px" class="btn btn-danger" href="{{url('delete_gallery',$gallery->id)}}">Delete Image</a>
        </div>

        @endforeach
        </div>

        <form action="{{url('upload_gallery')}}" method="Post" enctype="multipart/form-data">
            @csrf

            <div style="padding: 30px">
                <label style="color: white;font-weight:bold">Upload Image</label>
                <input type="file" name="image" required>

                <input class="btn btn-primary" type="submit" value="Add Image">
            </div>

        </form>

    </center>





        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
               <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin/js/charts-home.js"></script>
    <script src="admin/js/front.js"></script>
  </body>
</html>
