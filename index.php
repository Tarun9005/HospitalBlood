<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Internshala</title>
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
</head>

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
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
        
          <li class="nav-item">
            <?php session_start();
          if(isset($_SESSION['pronoun'])){
          echo '<a class="nav-link waves-effect" href="bloodinfo.php">Add Blood Info</a>';
        }
        ?>
          </li>
          <li class="nav-item">
           <?php
          if(isset($_SESSION['pronoun'])){
          echo '<a class="nav-link waves-effect" href="requestpage.php">View Requests</a>';
        }
        ?>
          </li>
          
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
          <a class="nav-link waves-effect">
           
            <?php
            if(isset($_SESSION['noun'])){ 
              echo '<span><b>Hi,&nbsp;&nbsp;</span></b>';
            echo $_SESSION['noun'];


            }
            elseif(isset($_SESSION['pronoun'])){ 
              echo '<span><b>Hi,&nbsp;&nbsp;</span></b>';
              echo $_SESSION['pronoun'];
            }
            ?> 

            &nbsp;&nbsp;
            
          </a>
        </li>
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
          <?php 
          
          if(isset($_SESSION['noun'])){ 
            echo '<a class="nav-link waves-effect" href="./logout.php">Logout</a>';
            
            
          }
           
           elseif(isset($_SESSION['pronoun'])){ 
           
        echo '<a class="nav-link waves-effect" href="./logout.php">Logout</a>';

      }

       else 
        echo '<a class="nav-link waves-effect" href="./loginsignup.php">Signup/Login</a>';
    ?>

</li>

          
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('img/blood1.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Need Blood?</strong>
              </h1>

              <p>
                <strong>Sign up as a recevier to request for blood from different blood groups.</strong>
              </p>

              <p class="mb-4 d-none d-md-block">

                <strong>If you are a valid receiver then you can request for blood from different hospitals.</strong>
              </p>

              
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/blood2.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">

                <strong>Tired of other sites?</strong>
              </h1>

              <p>
                <strong>One portal to request for blood from different hospitals.</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>One portal where a valid Hospital can add a blood and a valid receiver can request for blood.</strong>
              </p>

          
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/blood3.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Donate Blood?</strong>
              </h1>

              <p>
                <strong>Donate blood and save life of others.</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>You can donate your blood which can be used by others when required. You may even get rewarded for donating!</strong>
              </p>

              
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container">
      <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-12 mb-4 mt-4">

            <p class="font-weight-bold mt-5 ml-2" style="font-size: 40px;">Available <b style="color:red;">Blood Samples!</b></p>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-12 mb-4 mt-4" style="text-align: justify;">

            <!-- Main heading -->
            <table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Available Blood Type:</th>
      <th scope="col">Hospital Name:</th>
      <th scope="col">Request Sample</th>
     
    </tr>
  </thead>

   <?php

      $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'hospitalblood');

       $displayquery=" select*from blood ";
          $querydisplay=mysqli_query($con,$displayquery);

          while ($result=mysqli_fetch_array($querydisplay) ) {

            $dummy=$result['hospital_id'];

           $que = "SELECT * FROM hospitals WHERE id='$dummy'";

           $resul = mysqli_query($con,$que);


           while($row=mysqli_fetch_array($resul,MYSQLI_ASSOC))
{

  $hospitalname=$row['adminhospital'];


              # code...
            ?>
  <tbody>
    <tr>

        <?php  if(isset($_SESSION['noun']))
        {

          ?>
           <th scope="row" class="mt-3">
            <form method="POST" action="./request.php">
          <select name="bloodtype">
 
  <option value="<?php echo $result['bloodtype']; ?>" selected><?php echo $result['bloodtype']; ?></option>
</select>
    </th>
      <td class="mt-4">
        <select name="hospitalname">
          <option value="<?php echo $hospitalname ?>" selected><?php echo $hospitalname ?></option></select></td>
      <td><button class="btn btn-danger btn-md">Request Sample</button></td>
    </form>

     
    </tr>
    <?php 
  }
     ?>


     

     <?php if(!isset($_SESSION['noun']))
     {
      ?>
   <tr>
      <th scope="row" class="mt-3"> <select name="fodname">
 
  <option value="<?php echo $result['bloodtype']; ?>" selected><?php echo $result['bloodtype']; ?></option>
</select></th>
      <td class="mt-4"><select name="fodname">
          <option value="<?php echo $hospitalname ?>" selected><?php echo $hospitalname ?></option></td></td>
      <td><a href="./loginsignup.php"><button class="btn btn-danger btn-md" >Request Sample</button></a></td>
     
    </tr>
    <?php
  }
  ?>
  </tbody>
  <?php 
}
}
?>
</table>




            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

     

     

      

      

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
