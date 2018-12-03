<?php
  include "connecttodb.php";
     	$query6 = "SELECT customerid FROM Customer";
        $result2 = mysqli_query($connection,$query6);
        if(!$result2) {
                die("databases query failed.") ;
        }
	while($row = mysqli_fetch_assoc($result2)){
                echo "<option value='";
                echo $row["customerid"] ."'>";
                echo $row["customerid"];
                echo "</option>";
        }
	mysqli_free_result($result);
?>
