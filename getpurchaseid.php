<?php
  include "connecttodb.php";
        $query7 = "SELECT * FROM product";
        $result = mysqli_query($connection,$query7);
        if(!$result) {
                die("databases query failed.") ;
        }
	while($row = mysqli_fetch_assoc($result)){
                echo "<option value='";
                echo $row["productid"] ."'>";
                echo $row["productid"];
                echo "</option>";
        }
	mysqli_free_result($result);
?>

