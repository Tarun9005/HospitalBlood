
<?php session_start();
if(isset($_SESSION['pronoun'])){

  echo "You are already logged in";
  exit();

}
?>
<?php 
if(isset($_SESSION['noun'])){

  echo "You are already logged in";
  exit();

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank | Signup</title>

<!-- Stylesheets -->
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
    <div class="content">

        <div class="loginForm">
            <h1 class="formtitle">Sign Up for Hospitals</h1>
            <form action="./dbconnect2.php" method="POST">
                <div class="inputtype">
                    <input class="inputData" type="text" placeholder="Userame" name="adminname" required>
                </div>
                <div class="inputtype">
                    <input class="inputData" type="email" placeholder="Email" name="adminemail" required>
                </div>
                <div class="inputtype">
                    <input class="inputData" type="text" placeholder="Hospital Name" name="adminhospital" required>
                </div>
                
                <div class="inputtype">
                    <input class="inputData" type="password" placeholder="Password" name="adminpassword" required>
                </div>
                
                <h6 class= "signupText"><a href="./loginhospital.php">Already a Hospital? Login</a></h6>
                
                <button type="submit" class="social" style="background-color: red;">Signup</button>
                
            </form>
        </div>

    </div>
</body>
</html>