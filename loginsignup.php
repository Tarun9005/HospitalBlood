<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Blood Bank | Login/Signup</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
</head>
<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
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

  

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn mt-5">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="./img/blood.jpg" class="img-fluid mt-5" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            

            <p class="lead font-weight-bold mt-5" style="font-family: cursive;font-size: 40px;">Welcome to <b style="color:red;">Blood Bank!</b></p>

            <p class="mt-5">You can sign up or login as a <b>Receiver</b> or if you are a <b>Hospital</b> then also you can login or sign up by clicking the buttons below.</p>

            <form class="d-flex justify-content-left" action="./signup.php">
              <!-- Default input -->
              
              <button class="btn btn-danger btn-md my-0 p mt-3" type="submit">SignUp/Login As Receiver
              </button>
            </form>
              <form class="d-flex justify-content-left" action="./signuphospital.php">
              <button class="btn btn-danger btn-md my-0 p mt-3" type="submit">SignUp/Login As Hospital
              </button>
            </form>

            

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

     
     

 

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
