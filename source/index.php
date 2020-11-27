<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Index</title>

</head>

<body>
	<?php
        $connection = new mysqli("mysql", "root", "admin123");
        if($connection->connect_errno)
            echo $conn->connect_error;
        else {
            $results = $connection->query('SHOW DATABASES;');
            while ($row = $results -> fetch_assoc())
            {
                echo $row['Database'];
                echo '<br />';
            }
        }
?>
</body>
</html>
