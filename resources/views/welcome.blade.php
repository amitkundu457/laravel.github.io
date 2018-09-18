<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>


      <!-- Latest compiled and minified CSS -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

<!-- Latest compiled and minified JavaScript -->
<style media="screen">
  .nav{

  }
</style>
    </head>
    <body>
 <div id="app">
<button type="button" class="btn col"></button>

      <!-- Nav tabs -->
    <ul class="nav nav-tabs|pills " id="navId" style="">


        <li class="nav-item">
            <router-link class="nav-link " to='/'>Home</router-link>
        </li>
        <li class="nav-item">
            <router-link class="nav-link " to='/About'>About</router-link>
        </li>
        <li class="nav-item">
            <router-link class="nav-link " to='/contact'>contact</router-link>
        </li>
    </ul>
    <br><br><br>
   <router-view></router-view>

 </div>
 <script src='{{asset("./js/app.js")}}'></script>
    </body>
</html>
