<?php 

include("controllers/db_controller.php");

$sql = "INSERT INTO users (phone) VALUES ('$phone')";
mysqli_query($conn, $sql);

?>

<form method="post" action="pin.php">

	<p>
		<input type="text" name="phone" placeholder="Phone">
	</p>

	<input type="submit" name="register">