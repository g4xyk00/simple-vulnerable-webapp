<?php 
	include 'includes/header.php';
?>

<h2>Search Contact</h2>
<form action="" method="get">
ID: <input type="text" name="id" />
<input type="submit" />
</form>

</for>
<?php
if(isset($_GET["id"])){ 
	$id = $_GET["id"];
	echo "<h3>Details for ID ".$id."</h3>";
	
	include 'config/database.php';
	
	
	//Insecure Method: Concatenate Method
	$sql = "SELECT name, email FROM contact WHERE id='$id'";
	$result = $conn->query($sql);
	
	//Secured Method: Prepared Statement
	/*
	$stmt = $conn->prepare("SELECT name, email FROM contact WHERE id=?");
	$stmt->bind_param("s", $id);
	$stmt->execute();
	$result = $stmt->get_result();
	*/
	
	//Secured Method: Input Validation
	/*
	$id = (is_numeric($id)? $id:'0');
	$sql = "SELECT name, email FROM contact WHERE id='$id'";
	$result = $conn->query($sql);
	*/
	
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
