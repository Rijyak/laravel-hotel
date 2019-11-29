<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hotel Reservation System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
          <meta name="viewport" content="width=device-width, initial-scale=1"> 
  </head>
  <body>
    <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
          <span class="login100-form-title-1">
            Sign In
          </span>
        </div>
         <form action="/loginme" method="post" class="login100-form validate-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                <span class="label-input100">Username</span>
                  <input type="text" name="username" placeholder="enter your name"><br>
                <span class="focus-input100"></span>
              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                <span class="label-input100">password</span>
                  <input type="password" name="password" placeholder="enter your password"><br>
                <span class="focus-input100"></span>
              </div>
           
           <div class="text-center container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="login" value="login">
              Login
            </button>
          </div>
          
     <!--        <input type="submit" name="login" value="login"> -->
        </form>
<!-- 
       

          <div class="text-center container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>z
        </form> -->
      </div>
    </div>
  </div>
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
  </body>
</html>


