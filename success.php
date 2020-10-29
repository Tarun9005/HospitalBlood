
<?php 
session_start();
 if(isset($_SESSION['success'])){








	




	echo '<p>Your request has been succesfully placed. This request will go to the concerned Hospital.</p>';
	echo '<br>';
	echo '<a href="./index.php"><button type="submit">Return to Home</button></a>';

}
?>