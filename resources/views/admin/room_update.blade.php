<!DOCTYPE html>
<html>
  <head>
    <base href="/public">

    @include('admin.css')

    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
        .div_deg{
            padding-top: 30px;
        }
        .div_center{
            text-align: center;
            padding-top: 10px;
        }

        </style>

  </head>
  <body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->

      @include('admin.sidebar')

      <!-- Sidebar Navigation end-->
      <div class="page-content">


        <div class="div_center">

            <h1 style="font-size: 30px;font-weight:bold">Update Room</h1>

            <form action="{{url('edit_room',$data->id)}}" method="Post" enctype="multipart/form-data">
                @csrf

                <div class="div_deg">
                    <label>Room Title</label>
                    <input type="text" name="title" value="{{$data->room_title}}">
                </div>

                <div class="div_deg">
                    <label>Description</label>
                    <textarea name="description">{{$data->description}}</textarea>
                </div>

                <div class="div_deg">
                    <label>Price</label>
                    <input type="number" name="price" value="{{$data->price}}">
                </div>

                <div class="div_deg">
                    <label>Room Type</label>
                    <select name="type">

                        <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>

                        <option value="regular">Regular</option>
                        <option value="premium">Premium</option>
                        <option value="deluxe">Deluxe</option>
                    </select>
                </div>

                <div class="div_deg" >
                    <label>Free Wifi</label>
                    <select name="wifi">

                        <option selected value="{{$data->wifi}}">{{$data->wifi}}</option>

                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="div_deg" >
                    <label>Current Image</label>
                    <img style="width: 100px;height:150px" src="/room/{{$data->image}}">
                </div>

                <div class="div_deg">
                    <label>Update Image</label>
                    <input type="file" name="image">
                </div>

                <div class="div_deg" >
                    <input class="btn btn-primary" type="submit" value="Update Room">
                </div>

            </form>

        </div>




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
