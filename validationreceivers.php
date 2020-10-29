<?php

session_start();

$con=mysqli_connect('localhost','root');
//if(!$con){
//	echo "connection unsucess";
//}


mysqli_select_db($con,'hospitalblood');

$name=$_POST['username'];
$passwor=$_POST['password'];
//$pass = hash('sha512', $passwor);
$pass = password_hash($passwor, PASSWORD_DEFAULT);

// var_dump($name, $pass);
// die();

$q="select * from receivers where username='$name' ";
$resultt=mysqli_query($con, $q);
while($row=mysqli_fetch_array($resultt,MYSQLI_ASSOC))
{

	//$dumm=$row['password'];
if (password_verify($passwor, $row['password'])) {



//$result=mysqli_query($con, $q);
//var_dump($result);
//die();
$num=mysqli_num_rows($resultt);


	$_SESSION['noun']=$name;
	header('location:index.php');
}
else{
	echo "Invalid credentials";
}
}
?>