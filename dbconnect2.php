<?php
session_start();

$con=mysqli_connect('localhost','root');
//if(!$con){
	//echo "connection unsuccess";

//}
$adminname = $_POST['adminname'];
 $adminemail = $_POST['adminemail'];
 $adminhospital = $_POST['adminhospital'];
	$adminpass = $_POST['adminpassword'];

	$adminpassword = password_hash($adminpass, PASSWORD_DEFAULT);
	

	mysqli_select_db($con,'hospitalblood');


	$q="select * from hospitals where adminname='$adminname' or adminemail='$adminemail' ";



	$resultr=mysqli_query($con, $q);

  
  if(mysqli_num_rows($resultr)>0){
	echo "duplicate data";
	//header ('location: signuphospital.php'); 
}
else{
	$qy="insert into hospitals(adminname ,adminemail,adminhospital, adminpassword) values('$adminname','$adminemail','$adminhospital','$adminpassword')";
	mysqli_query($con, $qy);
	$_SESSION['pronoun']=$adminname;
	
	
	 $_SESSION['htlname']=$adminname;
	header ('location: index.php'); 
}
?>
	
	

