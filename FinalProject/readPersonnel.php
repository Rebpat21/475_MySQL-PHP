<?php
	require_once("session.php");
	require_once("included_functions.php");
	new_header("All Personnel");
	$mysqli = db_connection();
	if (($output = message()) !== null) {
		echo $output;
	}


$query = "SELECT * ";
$query .= "FROM People natural join Planets natural join SRank ";
$query .= "WHERE sRank=idSRank AND Stationed=idPlanet";

$result = $mysqli -> query($query);


	if ($result && $result->num_rows > 0) {
		echo "<div class='row'>";
		echo "<center>";
		echo "<h2>Personnel Database</h2>";
		echo "<table>";
		echo "<tr><th>Name</th><th>Rank</th><th>Stationed</th></tr>";
		while ($row = $result->fetch_assoc())  {
			echo "<tr>";
  		echo "<td style='text-align:center'>"." ".$row['FName']." ".$row['LName']."</td>";
  		echo "<td style='text-align:center'>"." ".$row['SRankName']."</td>";
			echo "<td style='text-align:center'>"." ".$row['PlanetName']."</td>";
			echo "<td>&nbsp;<a href = 'editPersonnel.php?id=".urlencode($row["idPeople"])."'>Edit</a>&nbsp;&nbsp;</td>";
			echo "<td>&nbsp;<a href = 'deletePersonnel.php?id=".urlencode($row["idPeople"])." ' onclick='return confirm('Are you sure?');'>Delete</a>&nbsp;&nbsp;</td>";

			echo "</tr>";
		}
		echo "</table>";
		echo "<br /><br /><a href='addPersonnel.php'>Add New Personnel</a>";
		echo "</center>";
		echo "</div>";
	}
?>

<?php  new_footer("The Empire", $mysqli); ?>
