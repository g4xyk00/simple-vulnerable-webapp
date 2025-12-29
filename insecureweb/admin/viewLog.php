<?php 
	include '../includes/headerAdmin.php';
?>

<h2>View Webserver Log</h2>
<a href="viewLog.php?dir=../../../apache/logs/access.log">apache log</a>
<br/>
<textarea rows="5" cols="180" disabled>
<?php
if(isset($_GET["dir"])){ 
	$dir = $_GET["dir"];	
	include $dir;
}
?>

</textarea>
</body>
</html>