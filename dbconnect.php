<?php
session_start();

$con=mysqli_connect('localhost','root');
//if(!$con){
	//echo "connection unsuccess";

//}

$Name = $_POST['name'];
 $Email = $_POST['email'];
 $Username = $_POST['username'];
	$Bloodgroup = $_POST['bloodgroup'];
	$Plain = $_POST['password'];
	//$Password = hash('sha512', $Plain);
	$Password = password_hash($Plain, PASSWORD_DEFAULT);

	mysqli_select_db($con,'hospitalblood');


	$q="select * from receivers where username='$Username' or email='$Email' ";

	$resulti=mysqli_query($con, $q);

  $numi=mysqli_num_rows($resulti);
  //var_dump($numi);

  if($numi>0){
	echo "duplicate data";
	//header ('location: signup.php'); 
}
else{
	$qy="insert into receivers(name ,email,username,bloodgroup, password) values('$Name','$Email','$Username','$Bloodgroup','$Password')";
	mysqli_query($con, $qy);
	$_SESSION['noun']=$Username;
	header ('location: index.php'); 
}

?>
	
	

