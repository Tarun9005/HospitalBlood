<?php session_start();
if(!isset($_SESSION['pronoun'])){

  echo "You must be logged in as a user";
  exit();

}
?>
<?php 
$con=mysqli_connect('localhost','root');


      
         mysqli_select_db($con,'hospitalblood');

         
        
           $li= $_SESSION['pronoun'];

        $bloodtype=$_POST['bloodtype'];


        $statement = "SELECT * FROM hospitals WHERE adminname='$li' ";
       
$selection = mysqli_query($con,$statement);
//$count = mysqli_num_rows($result);




      
while($data=mysqli_fetch_array($selection,MYSQLI_ASSOC))
{

  $firstentry=$data['id'];


  $quering="SELECT * FROM blood WHERE bloodtype='$bloodtype' AND hospital_id='$firstentry' ";

  $output=mysqli_query($con, $quering);

  $answer=mysqli_num_rows($output);
  //var_dump($numi);
  if($answer>0){
    echo "Already exists";
  }

  else{
    $filling="insert into blood(bloodtype ,hospital_id) values('$bloodtype','$firstentry')";
  mysqli_query($con, $filling);
  $_SESSION['succeeded']=$bloodtype;
  header ('location: index.php'); 
  }

}





?>



  
  



 


       



      