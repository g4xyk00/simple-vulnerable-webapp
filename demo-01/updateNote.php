<h1>Update Note</h1>
<form action="" method="get">
Content: <input type="text" name="content" />
<input type="submit" />
</form>

<?php

if(isset($_GET["content"])){ 
	$content = $_GET["content"];
	$file = fopen("note.txt", "w");
	fwrite($file, $content);
}

?>
<hr/>
<a href="addContact.php">Add Contact</a> | <a href="searchContact.php">Search Contact</a><br/>