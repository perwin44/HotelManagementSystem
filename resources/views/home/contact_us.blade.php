<!DOCTYPE html>
<html lang="en">
   <head>

    @include('home.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->

         @include('home.header')

      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->

      

      <!-- end banner -->
      <!-- about -->



      <!-- end about -->
      <!-- our_room -->



      <!-- end our_room -->
      <!-- gallery -->



      <!-- end gallery -->
      <!-- blog -->



      <!-- end blog -->
      <!--  contact -->

      @include('home.contact')

      <!-- end contact -->
      <!--  footer -->

      @include('home.footer')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


      <script type="text/javascript">

$(window).scroll(function() {
  sessionStorage.scrolltop = $(this).scrolltop();
});

$(document).ready(function(){
   if(sessionStorage.scrolltop != "undefined"){
      $(window).scrolltop(sessionStorage.scrolltop);
   }
});

    </script>

   </body>
</html>
