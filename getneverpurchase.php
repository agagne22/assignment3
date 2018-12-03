<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display products never purchased</title>
</head>
<body>
<?php
     	include 'connecttodb.php';
?>
<div class = 'container'>
<table cellpadding ='10'>
<tr>
    	<th> Product ID</th>
	<th> Description </th>
</tr>
<!- display all products no one has bought yet -->
<?php


        $queryquantzero = 'SELECT productid, description FROM Product WHERE Product.productid NOT IN (SELECT DISTINCT productid FROM Purchase)';
        $resultquantzero = mysqli_query($connection,$queryquantzero);
        if(!$resultquantzero){
                die("database query failed.");
        }
	while($row=mysqli_fetch_assoc($resultquantzero)) {
                echo '<tr>';
                echo '<td>' . $row["productid"] . '</td>';
		echo '<td>' . $row["description"] . '</td>';
                echo '</tr>';
        }
	mysqli_free_result($resultquantzero);
        mysqli_close($connection);
?>
</table>
</body>
</html>
