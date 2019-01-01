<?php require_once("session.php");?>
<?php
	require_once("included_functions.php");
	new_header("Personnel Data", "");
	$mysqli = db_connection();
	if (($output = message()) !== null) {
		echo $output;
	}

	echo "<h3>Add New Personnel Profile</h3>";
	echo "<div class='row'>";
	echo "<label for='left-label' class='left inline'>";

	if (isset($_POST["submit"])) {
		if( (isset($_POST["FName"]) && $_POST["FName"] !== "") && (isset($_POST["LName"]) && $_POST["LName"] !== "") &&(isset($_POST["sRank"]) && $_POST["sRank"] !== "") &&(isset($_POST["Stationed"]) && $_POST["Stationed"] !== "") ) {
			$query = "INSERT INTO People ";
			$query .= "(FName, LName, sRank, Stationed) ";
			$query .= "VALUES (";
			$query .= "'".$_POST["FName"]."', ";
			$query .= "'".$_POST["LName"]."', ";
			$query .= "'".$_POST["sRank"]."', ";
			$query .= "'".$_POST["Stationed"]."') ";
			$result = $mysqli -> query($query);


			if($result) {

			$_SESSION["message"] = $_POST["FName"]." ".$_POST["LName"]." has been added";
				header("Location: readPersonnel.php");
				exit;

			}
			else {

			$_SESSION["message"] = "Error! Could not change ".$_POST["FName"]." ".$_POST["LName"];
			}
		}
		else {
			$_SESSION["message"] = "Unable to add person. Fill in all information!";
			header("Location: addPersonnel.php");
			exit;
		}
	}
	else {
						echo '<form action = "addPersonnel.php" method = "post">';
						echo '<p>First Name:<input type="text" name="FName">';
						echo '<p>Last Name:<input type="text" name="LName">';
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

						echo '<input type="submit" name="submit" class="button tiny round" value="Add Personnel" />';
						echo '</form>';
	}
	echo "</label>";
	echo "</div>";
	echo "<br /><p>&laquo:<a href='readPersonnel.php'>Back to Main Page</a>";
?>


<?php new_footer("The Empire", $mysqli); ?>
