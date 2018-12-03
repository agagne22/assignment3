<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Current phone number </title>
</head>
<body>
<?php
     	include 'connecttodb.php';
?>
<h1> Here is this customer's current phone number</h1>
<!-- display the customers current phone number and ask for the number they would like to update it to -->
<?php
	session_start();
	$_SESSION['custsave'] = $_POST["custid"];
     	$whichCustomer = $_POST["custid"];
        $queryphone = 'SELECT phonenumber FROM Customer  WHERE customerid = ' .$whichCustomer ;
        $resultphone =mysqli_query($connection,$queryphone);
        if(!$resultphone) {
                die("database query2 failed.");
        }
	while($row=mysqli_fetch_assoc($resultphone)) {
               
		 echo $row["phonenumber"];
		echo '<form action = "addphone.php" method = "post">';
		echo 'please enter the new phone number you would like to assign this customer';
		echo '<br>';
		echo '<br>';
		echo 'New phone number: <input type = "text" name = "addnewnumber">';
		echo '<input type = "submit" value="update the number">';		
		echo '<br>';
		echo '</form>';  		      
	}
	mysqli_free_result($resultphone);
?>
<?php
     	mysqli_close($connection);
?>
</body>
</html>
