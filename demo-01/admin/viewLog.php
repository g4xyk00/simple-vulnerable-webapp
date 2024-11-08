<html>
<body>
<h1>View Webserver Log</h1>
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