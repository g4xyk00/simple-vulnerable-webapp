<h1>Add Contact</h1>
<form action="" method="post">
Username: <input type="text" name="username" /><br/>
Email: <input type="text" name="email" /><br/>
<input type="submit" />
</form>

<?php

if(isset($_POST["username"]) && isset($_POST["email"])){
	$username = $_POST["username"];
	$email = $_POST["email"];
	
	$servername = "localhost";
	$sqlusername = "root";
	$sqlpassword = "";
	$dbname = "friend";
	$conn = new mysqli($servername, $sqlusername, $sqlpassword, $dbname);
	
	$sql = "INSERT INTO contact (name, email) VALUES ('$username', '$email')";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	
	$conn->close();
}
?>
<hr/>
<a href="searchContact.php">Search Contact</a> | <a href="updateNote.php">Update Note</a><br/>
