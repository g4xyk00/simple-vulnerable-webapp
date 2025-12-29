<?php 
	include 'includes/header.php';
?>

<h2>Update Note</h2>
<form action="" method="get">
Content: <input type="text" name="content" />
<input type="submit" />
</form>

<!-- To update note.txt -->

<?php

if(isset($_GET["content"])){ 
	$content = $_GET["content"];
	$file = fopen("note.txt", "w");
	fwrite($file, $content);
}

?>