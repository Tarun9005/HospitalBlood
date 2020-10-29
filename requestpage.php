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
  <title>Request Page</title>
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
          
          <li class="nav-item ">
            <a class="nav-link waves-effect" href="./bloodinfo.php"
              ><b>Add Blood Info</b></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link waves-effect" href=""
              ><b>View Requests<span class="sr-only">(current)</span></b></a>
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
            <a class="nav-link waves-effect" href="./logout.php">Logout</a>
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

            <img src="img/blood5.jpg" class="img-fluid z-depth-1-half"
            alt="seedpic">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4 mt-4" style="text-align: justify;">

            <!-- Main heading -->
            <p class="font-weight-bold mt-5 ml-2" style="font-size: 40px;">View the Request of the Receivers!</p>
            <p>See the list of users along with their name and email id and the type of blood they requested from your Hospital.</p>
              <!-- Main heading -->

              <hr>


            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->
        

  <br>

  <!--Grid column-->
          <div class="col-md-12 mb-4 mt-4" style="text-align: justify;">

            <!-- Main heading -->
            <table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Requested Blood Type:</th>
      <th scope="col">Name:</th>
      <th scope="col">Email-Id</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>

        <?php




      $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'hospitalblood');

      $checki=$_SESSION['pronoun'];



     

        
     
      

       $displayquery=" SELECT * FROM request";
          $querydisplay=mysqli_query($con,$displayquery);

          while ($result=mysqli_fetch_array($querydisplay,MYSQLI_ASSOC)) {

            $uid=$result['user_id'];
            $hid=$result['hospital_id'];
            $btype=$result['blood_type'];
            

            $ssql="SELECT * FROM hospitals WHERE adminname='$checki' ";
            $reslt=mysqli_query($con,$ssql);
            while($data=mysqli_fetch_array($reslt,MYSQLI_ASSOC))
            {
              $check=$data['id'];
              //var_dump($hid);
             if (strcmp($check, $hid) == 0)
              {



            $sql = "SELECT * FROM receivers WHERE id='$uid'";
       
$resulty = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($resulty,MYSQLI_ASSOC))
{
        $namee=$row['name'];
        $emaile=$row['email'];


              # code...
            ?>




      <th scope="row" class="mt-3"><?php echo $btype ?></th>
      <td class="mt-4"><b><?php echo $namee; ?><b></td>
      <td class="mt-4"><b><?php echo $emaile; ?><b></td>
     
  </tr>
  <?php }
}
}

            }

?>

  
  </tbody>
</table>




            </div>




      

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
