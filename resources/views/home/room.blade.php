<div  class="our_room">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Our Room</h2>
                <p>Lorem Ipsum available, but the majority have suffered </p>
             </div>
          </div>
       </div>



       <div class="row">
        @foreach ($room as $room)
          <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img style="height: 200px;width:350px" src="room/{{$room->image}}" alt="#"/></figure>
                </div>
                <div class="bed_room">
                   <h3>{{$room->room_title}}</h3>
                   <p style="padding: 10px">{{Str::limit($room->description,150)}} </p>
                   <a class="btn btn-primary" href="{{url('room_details',$room->id)}}">Room Details</a>
                </div>
             </div>
          </div>
          @endforeach

          {{-- <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img src="images/room2.jpg" alt="#"/></figure>
                </div>
                <div class="bed_room">
                   <h3>Bed Room</h3>
                   <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img src="images/room3.jpg" alt="#"/></figure>
                </div>
                <div class="bed_room">
                   <h3>Bed Room</h3>
                   <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img src="images/room4.jpg" alt="#"/></figure>
                </div>
                <div class="bed_room">
                   <h3>Bed Room</h3>
                   <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img src="images/room5.jpg" alt="#"/></figure>
                </div>
                <div class="bed_room">
                   <h3>Bed Room</h3>
                   <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img src="images/room6.jpg" alt="#"/></figure>
                </div>
                <div class="bed_room">
                   <h3>Bed Room</h3>
                   <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                </div>
             </div>
          </div> --}}
       </div>
    </div>
 </div>
