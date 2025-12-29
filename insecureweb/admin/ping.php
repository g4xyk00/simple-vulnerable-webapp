<?php 
	include '../includes/headerAdmin.php';
?>

<html>
<body>
<h2>Check Connection</h2>
<form action="" method="get">
IP Address: <input type="text" name="ip" />
<input type="submit" />
</form>

<textarea rows="5" cols="180" disabled>
<?php
error_reporting(0);
echo system('ping '.$_GET['ip']);
?>

</textarea>
</body>
</html>