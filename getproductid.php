<?php
  include "connecttodb.php";
        $query7 = "SELECT * FROM Product";
        $result8 = mysqli_query($connection,$query7);
        if(!$result8) {
                die("databases query failed.") ;
        }
	while($row = mysqli_fetch_assoc($result8)){
                echo "<option value='";
                echo $row["productid"] ."'>";
                echo $row["productid"];
                echo "</option>";
        }
	mysqli_free_result($result8);
?>
