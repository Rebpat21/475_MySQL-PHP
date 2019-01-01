<?php
	require_once("included_functions.php");
	/////////////   CONNECT TO YOUR DATABASE    ////////////////////
	//require_once("/home/webID/DB.php");
	
	/*$mysqli = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);
	
	if ($mysqli->connect_errno) {
		die("Could not connect to server!<br />");
	}
	else {
		echo "Successful Connection";
	}
    */

	function printPresident($row) {
		  $years = ($row["end"]-$row["start"]);
		  echo "<tr>";
		  echo "<td style='text-align:center'>".htmlentities($row["fname"])." ".htmlentities($row["mInitial"]).htmlentities($row["lname"])."</td>";
		  echo "<td style='text-align:center'>".htmlentities($row["firstLady"])."</td>";
		  echo "<td style='text-align:center'>".htmlentities($row["state"])."</td>";
		  echo "<td style='text-align:center'>".htmlentities($row["party"])."</td>";
		  echo "<td style='text-align:center'>".htmlentities($row["term"])."</td>";
		  echo "<td style='text-align:center'>".$row["start"]."</td>";
		  echo "<td style='text-align:center'>".$row["end"]."</td>";
		  echo "<td style='text-align:center'>".$years."</td>";
		  echo "</tr>";
	
	
	}
?>
<!include = "/home/kdavidso/DBinfoDavidson.php">
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<?php new_header("Presidents"); ?>

<div class="row">
<label for="left-label" class="left inline">
<h2>My Presidents</h2>
	<?php
	///////////////////////    QUERY DATABASE & PROCESS RESULTS   ////////////////


	
	
	//$mysqli->close();
	?>
</label>;
</div>;

<?php new_footer("Mickey Mouse");?>


