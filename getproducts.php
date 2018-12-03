<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> All products </title>
</head>
<body>
<?php
     	include 'connecttodb.php';
?>
<h1> Here are the products:</h1>
<o1>
<!-- show all products based on order selected by user -->
<?php
     	$whichOrder = $_POST["order"];
        $query = 'SELECT * FROM Product ORDER BY ' .$whichOrder ;
        $result=mysqli_query($connection,$query);
        if(!$result) {
                die("database query2 failed.");
        }
	while($row=mysqli_fetch_assoc($result)) {
                echo '<li>';
                echo $row["description"];
        }
	mysqli_free_result($result);
?>
</o1>
<?php
     	mysqli_close($connection);
?>
</body>
</html>
