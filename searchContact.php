<h1>Search Contact</h1>
<form action="" method="get">
ID: <input type="text" name="id" />
<input type="submit" />
</form>

</for>
<?php
if(isset($_GET["id"])){ 
	$id = $_GET["id"];
	echo "<h3>Details for ID ".$id."</h3>";
	
	$servername = "localhost";
	$sqlusername = "root";
	$sqlpassword = "";
	$dbname = "friend";
	$conn = new mysqli($servername, $sqlusername, $sqlpassword, $dbname);
		
	$sql = "SELECT name, email FROM contact WHERE id='$id'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "Name: " . $row["name"]. 
				 "<br/> Email: " . $row["email"]. 
				 "<br>";
		}
	}
	
	$conn->close();
}

?>
<hr/>
<a href="addContact.php">Add Contact</a>| <a href="updateNote.php">Update Note</a><br/>
