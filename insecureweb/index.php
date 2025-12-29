<?php

include 'config/database.php';

// Check connection
if ($conn->connect_error) {
   
   $conn = new mysqli($servername, $username, $password);

   // Create database
	$sql = "CREATE DATABASE friend;";
	
	echo "<hr/>";
	
	if ($conn->query($sql) === TRUE) {
	  echo "Database created successfully &#9989;<br/>";
	} else {
		echo "Error creating database: " . $conn->error;
	}
	
	$conn = new mysqli($servername, $username, $password, $database);
	
	// sql to create table
	$sql = "CREATE TABLE `contact` (
				`id` int(6) NOT NULL AUTO_INCREMENT,
				`name` varchar(30) NOT NULL,
				`email` varchar(50) DEFAULT NULL,
				PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

	if ($conn->query($sql) === TRUE) {
		echo "Table contact created successfully &#9989;<br/>";
	} else {
		echo "Error creating table: " . $conn->error;
	}
	
	// sql to create record
	
	$sql = "INSERT INTO `contact` (`name`, `email`) VALUES
			('Thomas', 'thomas@gmail.com'),
			('Ginger', 'ginger@outlook.com');";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully &#9989;<br/>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

   $conn->close();
   
   echo "<hr/>";
   
   echo 'Click <a href="searchContact.php">here</a> to access application ';
   
}else{
	
	echo 'Click <a href="searchContact.php">here</a> to access application';
}

?>