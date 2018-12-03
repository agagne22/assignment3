<?php
	$query = "SELECT * FROM Customer ORDER BY lastname";
	$result = mysqli_query($connection,$query);
	if(!$result) {
		die("databases query failed.") ;
	}
	echo "Please select the customer:" . "<br>";
	while ($row = mysqli_fetch_assoc($result)) {
    		echo '<input type = "radio" name = "customers" value="';
		echo $row["customerid"];

    		echo '">' .  $row["lastname"] . ", " . $row["firstname"] . ", " . $row["customerid"] . ", " . $row["city"] . ", " . $row["phonenumber"] . ", " . $row["agentid"] . "<br>" ;

	}
	mysqli_free_result($result);
?>

