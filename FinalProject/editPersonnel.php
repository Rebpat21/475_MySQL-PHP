<?php require_once("session.php"); ?>
<?php
	require_once("included_functions.php");
	new_header("Edit Personnel Record", "FinalProject/editPersonnel.php");
	$mysqli = db_connection();
	if (($output = message()) !== null) {
		echo $output;
	}
	if (isset($_POST["submit"])) {
		$ID = $_GET["id"];

		$query = "UPDATE People ";
		$query .= "SET FName = '".$_POST['FName']."'";
		$query .= ", LName = '".$_POST['LName']."'";
		$query .= ", sRank = '".$_POST['sRank']."'";
		$query .= ", Stationed = '".$_POST['Stationed']."'";
		$query .= " WHERE idPeople =".$ID;


		$result = $mysqli->query($query);

		if($result) {
			$_SESSION["message"] = $_POST["FName"]." ".$_POST["LName"]." has been changed";
		}
		else {
			$_SESSION["message"] = "Error! Could not change ".$_POST["FName"]." ".$_POST["LName"];
		}

		header("Location: readPersonnel.php");
		exit;
	}
	else {

		if(isset($_GET["id"]) && $_GET["id"]!==""){
			$ID = $_GET["id"];
			$query = "SELECT * ";
			$query .= "FROM People NATURAL JOIN SRank NATURAL JOIN Planets ";
			$query .= "WHERE idPeople =".$ID;
			// echo $query;
		}


		$result = $mysqli->query($query);

		if ($result && $result->num_rows > 0)  {
			$row = $result->fetch_assoc();
			echo "<div class='row'>";
			echo "<label for='left-label' class='left inline'>";

			echo "<h3>".$row["FName"]." ".$row["LNname"]."'s Personnel Record</h3>";

			echo "<p><form action='editPersonnel.php?id={$ID}' method='post'>";
			echo '<p>First Name:<input type="text" name="FName" value="'.$row["FName"].'">';
			echo '<p>Last Name:<input type="text" name="LName" value="'.$row["LName"].'">';
			echo "Rank: <select name='sRank'>";
			echo "<option></option>";

					$query = "SELECT * FROM SRank";

					$result=$mysqli -> query($query);
					if($result&&$result -> num_rows>=1){
						while($row=$result -> fetch_assoc()){
							echo "<option value ='".$row['idSRank']."'>".$row['SRankName']."</option>";
						}
					} else {
						echo "<h2>No query results</h2>";
					}
			echo "</select>";

			echo "Stationed: <select name='Stationed'>";
			echo "<option></option>";

					$query = "SELECT idPlanet, PlanetName FROM Planets";

					$result=$mysqli -> query($query);
					if($result&&$result -> num_rows>=1){
						while($row=$result -> fetch_assoc()){
							echo "<option value ='".$row['idPlanet']."'>".$row['PlanetName']."</option>";
						}
					} else {
						echo "<h2>No query results</h2>";
					}
			echo "</select>";

			echo '<input type="submit" name="submit" class="button tiny round" value="Update Personnel" />';
			echo '</form>';


			echo "<br /><p>&laquo:<a href='readPersonnel.php'>Back to Main Page</a>";
			echo "</label>";
			echo "</div>";

		}
		else {
			$_SESSION["message"] = "Person could not be found!";
			header("Location: readPersonnel.php");
			exit;
		}
	}

?>
<?php  new_footer("The Empire", $mysqli); ?>
