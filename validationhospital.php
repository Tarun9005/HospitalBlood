<?php

session_start();

$conn=mysqli_connect('localhost','root');
//if(!$conn){
//	echo "connection unsucess";
//}


mysqli_select_db($conn,'hospitalblood');

$usern=$_POST['uname'];
$hostep=$_POST['hospitalpass'];

$hotelp = password_hash($hostep, PASSWORD_DEFAULT);


// var_dump($name, $pass);
// die();

$quer="select * from hospitals where adminname='$usern' ";
$resultt=mysqli_query($conn, $quer);
while($row=mysqli_fetch_array($resultt,MYSQLI_ASSOC))
{
	$dumm=$row['adminpassword'];
	//$count=strcmp($dumm,$hotelp);
	//var_dump($count);
if (password_verify($hostep, $row['adminpassword'])) {



//var_dump($result);
//die();
$numr=mysqli_num_rows($resultt);
//var_dump($numr);
//if($numr==1){
	
	 	
	 	// $_SESSION['htlname']=$usern;
	$_SESSION['pronoun']=$usern;
	header('location:index.php');

//}
//}
//else{
//	echo "Invalid credentials";
//}
//else{
//	var_dump("xxx");
//}
}
else{
	echo "Invalid credentials";
}
}
?>