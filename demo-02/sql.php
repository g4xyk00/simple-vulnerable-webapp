<h1>🔎 Search User</h1>
<form action="" method="get">
ID: <input type="text" name="id" style="width: 700px;"/>
<input type="submit" value="Search" />
</form>

</for>
<?php
include 'db_conn.php';

if(isset($_GET["id"])){ 
	$id = $_GET["id"];
	
	//Insecure Method: Concatenate Method
	$sql = "SELECT user_id, user FROM users WHERE user_id='$id'";
	$result = $conn->query($sql);
	
	//Secured Method: Prepared Statement
	/*
	$stmt = $conn->prepare("SELECT user_id, user FROM users WHERE user_id=?");
	$stmt->bind_param("s", $id);
	$stmt->execute();
	$result = $stmt->get_result();
	*/
	
	//Secured Method: Input Validation
	/*
	$id = (is_numeric($id)? $id:'0');
	$sql = "SELECT user_id, user FROM users WHERE user_id='$id'";
	$result = $conn->query($sql);
	*/
	
	//Output
	
	echo "<h4 style='background-color:powderblue;'>SQL Statement: <code style='color:blue;'>".$sql.";</code></h4>";
	
	echo "<b>🗎 Details for ID <code>".$id."</code></b>";
	echo "<hr/>";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "ID: " . $row["user_id"]. 
				 "<br/> User: " . $row["user"]. 
				 "<br>";
		}
	}
	echo "<hr/>";
	$conn->close();
}

?>