<?php session_start();
if(!isset($_SESSION['pronoun'])){

  echo "You must be logged in as a Hospital";
  exit();

}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Blood Info Page</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
</head>
 <style>
/* width */
::-webkit-scrollbar {
  width: 11px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #cc0000; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #e60000; 
}
</style>
<body>
 <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
        <strong class="red-text">Blood Bank</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link waves-effect" href="./index.php">Home
              
            </a>
          </li>
          
          <li class="nav-item active">
            <a class="nav-link waves-effect" href=""
              ><b>Add Blood Info<span class="sr-only">(current)</span></b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="./requestpage.php"
              ><b>View Requests</b></a>
          </li>
          
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
         
          <li class="nav-item">
            <a href="" class="nav-link waves-effect">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link waves-effect">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
           <li class="nav-item">
           <a class="nav-link waves-effect" href="./logout.php"
              ><b>Log out</b></a>
</li>
          
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  <main style="margin-top: 90px;">
    <div class="container mt-4">
      <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4 mt-4">

            <img src="img/blood2.jpg" class="img-fluid z-depth-1-half"
            alt="seedpic">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4 mt-4" style="text-align: justify;">

            <!-- Main heading -->
            <p class="font-weight-bold mt-5 ml-2" style="font-size: 40px;">Easily add <b style="color:red;">Blood Samples!</b></p>
            <p>While uploading the blood sample make sure that you add only those samples which are available in your hospital. You should not add any blood type which is not available otherwise <strong>strict actions may be taken!.</strong><br>
             Added blood type with your hospital name will be made available on <strong>Home Page.</strong></p>
              <!-- Main heading -->

              <hr>


            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->
          <div class="col-md-12">
           <p class="font-weight-bold mt-5 ml-2" style="font-size: 30px;">Carefully add the available <b style="color:red;">Blood Sample:</b></p>
        </div>

  <br>

  <form action="./upload.php" method="post">
    <!-- enctype wriiten to allow multiple images to be uplaoded -->
    
   
     <label><p class="font-weight-bold mt-3 ml-2" style="font-size: 20px;"><b style="color:red;">Blood Type:</b></p></label>
     <div class="col-md-3">
    <select class="browser-default custom-select" name="bloodtype" required>
    <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>  
</select>
</div>
    <br>
    <br>
     
    

  
   

    <button type="submit" class="btn btn-danger" name="submit" value="submit">ADD</button>
  </form>




      

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn navbar-dark danger-color">

   
    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="" >
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="">
        <i class="fab fa-youtube mr-3"></i>
      </a>

     
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 Copyright:
      <a href="">Blood Bank</a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
