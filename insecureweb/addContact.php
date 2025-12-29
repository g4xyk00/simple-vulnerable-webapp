<?php 
	include 'includes/header.php';
?>

<h2>Add Contact</h2>
<form action="" method="post">
Username: <input type="text" name="username" /><br/>
Email: <input type="text" name="email" /><br/>
<input type="submit" />
</form>

<?php

include 'config/database.php';

if(isset($_POST["username"]) && isset($_POST["email"])){
	$username = $_POST["username"];
	$email = $_POST["email"];
	
	$sql = "INSERT INTO contact (name, email) VALUES ('$username', '$email')";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	
	$conn->close();
}

?>