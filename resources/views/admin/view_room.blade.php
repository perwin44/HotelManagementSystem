<!DOCTYPE html>
<html>
  <head>

    @include('admin.css')

    <style type="text/css">
    .table_deg{
        border: 2px solid white;
        width: 80%;
        margin: auto;
        text-align: center;
        margin-top: 40px;
    }
    .th_deg{
        background-color: skyblue;
        padding: 15px;
        color: rgb(71, 61, 61);
    }
    tr{
        border: 3px solid white;
    }
    td{
        padding: 10px;
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


        <table class="table_deg">

            <tr>
                <th class="th_deg">Room Title</th>
                <th class="th_deg">Description</th>
                <th class="th_deg" >Price</th>
                <th class="th_deg">Wifi</th>
                <th class="th_deg">Room Type</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Update</th>
            </tr>

            @foreach ($data as $data)
            <tr>
                <td>{{$data->room_title}}</td>
                <td>{{ Str::limit($data->description,150) }}</td>
                <td>{{$data->price}}$</td>
                <td>{{$data->wifi}}</td>
                <td>{{$data->room_type}}</td>
                <td>
                    <img style="height: 150px;width:100px" src="room/{{$data->image}}">
                </td>
                <td>
                    <a onClick="return confirm('Are you sure to delete this');" class="btn btn-danger" href="{{url('room_delete',$data->id)}}">Delete</a>
                </td>
                <td>
                    <a class="btn btn-warning" href="{{url('room_update',$data->id)}}">Update</a>
                </td>
            </tr>
            @endforeach


        </table>





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
