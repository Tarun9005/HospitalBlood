
<?php session_start();
if(!isset($_SESSION['noun'])){

  echo "You must be logged in as a user";
  exit();

}
?>



<?php

      $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'hospitalblood');

     // if(isset($_POST['submit'])){

       //var_dump("con");

        $uname= $_SESSION['noun'];
        
        $type=$_POST['bloodtype'];
        //var_dump($type);
        $host=$_POST['hospitalname'];
         
         $sql = "SELECT * FROM hospitals WHERE adminhospital='$host'";
       
$result = mysqli_query($con,$sql);
      
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{

  $idd=$row['id'];

 $sqly = "SELECT * FROM receivers WHERE username='$uname'";

$resulty = mysqli_query($con,$sqly);

while($roww=mysqli_fetch_array($resulty,MYSQLI_ASSOC))


{

  $iddy=$roww['id'];
}

$mysql="select * from request where blood_type='$type' and user_id='$iddy' and hospital_id='$idd' ";

  $rest=mysqli_query($con, $mysql);

  $numeric=mysqli_num_rows($rest);
  //var_dump($numi);

  if($numeric>0){
  echo "duplicate data";
  //header ('location: signup.php'); 
}
else{
  $qy="insert into request(blood_type,user_id,hospital_id) values('$type','$iddy','$idd')";
  mysqli_query($con, $qy);
  $_SESSION['success']=$type;
  header ('location: success.php'); 
}
 
  
}

         

        


         
	
    //}
        ?>


