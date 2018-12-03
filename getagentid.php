<?php
  include "connecttodb.php";
        $queryagent = "SELECT agentid FROM Agent";
        $resultagent = mysqli_query($connection,$queryagent);
        if(!$resultagent) {
                die("databases query failed.") ;
        }
	while($row = mysqli_fetch_assoc($resultagent)){
                echo "<option value='";
                echo $row["agentid"] ."'>";
                echo $row["agentid"];
                echo "</option>";
        }
	mysqli_free_result($resultagent);
?>

