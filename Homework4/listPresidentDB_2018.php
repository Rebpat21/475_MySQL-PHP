<?php
	require_once("included_functions.php");
	/////////////   CONNECT TO YOUR DATABASE    ////////////////////
	require_once("/home/ptfreel/DBfreel.php");

	$mysqli = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);
	/*
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

	if(isset($_POST['ID'])&&($_POST['ID']!=="")){
		//$ID=$_POST['ID'];
		$ID=$mysqli -> real_escape_string(trim($_POST['ID']));

		//Define $query
		$query = "SELECT * FROM presidents WHERE number = '$ID'";
		$result = $mysqli -> query($query);

		//query database and assign to $result
			if($result && $result -> num_rows>0){
				echo "<table border = '1'>";
				echo "<tr><th>Name</th><th>First Lady</th><th>State</th><th>Party</th><th>Term(s)</th><th>Starting Year</th><th>Ending Year</th><th>Total Years</th></tr>";

				while($row = $result -> fetch_assoc()){
					printPresident($row);
				}
				echo "</table>";

				$result -> close();
			} else {
				echo "<h2>No results found</h2>";
			}
	} else if(isset($_POST['fname'])&&($_POST['fname']!=="")){
		//$ID=$_POST['ID'];
		$ID=$mysqli -> real_escape_string(trim($_POST['fname']));

		//Define $query
		$query = "SELECT * FROM presidents WHERE fname LIKE '$ID%'";
		$result = $mysqli -> query($query);

		//query database and assign to $result
			if($result && $result -> num_rows>0){
				echo "<table border = '1'>";
				echo "<tr><th>Name</th><th>First Lady</th><th>State</th><th>Party</th><th>Term(s)</th><th>Starting Year</th><th>Ending Year</th><th>Total Years</th></tr>";

				while($row = $result -> fetch_assoc()){
					printPresident($row);
				}
				echo "</table>";

				$result -> close();
			} else {
				echo "<h2>No results found</h2>";
			}
		} else if(isset($_POST['lname'])&&($_POST['lname']!=="")){
			//$ID=$_POST['ID'];
			$ID=$mysqli -> real_escape_string(trim($_POST['lname']));

			//Define $query
			$query = "SELECT * FROM presidents WHERE lname LIKE '$ID%'";
			$result = $mysqli -> query($query);

			//query database and assign to $result
				if($result && $result -> num_rows>0){
					echo "<table border = '1'>";
					echo "<tr><th>Name</th><th>First Lady</th><th>State</th><th>Party</th><th>Term(s)</th><th>Starting Year</th><th>Ending Year</th><th>Total Years</th></tr>";

					while($row = $result -> fetch_assoc()){
						printPresident($row);
					}
					echo "</table>";

					$result -> close();
				} else {
					echo "<h2>No results found</h2>";
				}
			} else if(isset($_POST['firstLady'])&&($_POST['firstLady']!=="")){
				//$ID=$_POST['ID'];
				$ID=$mysqli -> real_escape_string(trim($_POST['firstLady']));

				//Define $query
				$query = "SELECT * FROM presidents WHERE firstLady LIKE '$ID%'";
				$result = $mysqli -> query($query);

				//query database and assign to $result
					if($result && $result -> num_rows>0){
						echo "<table border = '1'>";
						echo "<tr><th>Name</th><th>First Lady</th><th>State</th><th>Party</th><th>Term(s)</th><th>Starting Year</th><th>Ending Year</th><th>Total Years</th></tr>";

						while($row = $result -> fetch_assoc()){
							printPresident($row);
						}
						echo "</table>";

						$result -> close();
					} else {
						echo "<h2>No results found</h2>";
					}
				} else if(isset($_POST['state'])&&($_POST['state']!=="")){
					//$ID=$_POST['ID'];
					$ID=$mysqli -> real_escape_string(trim($_POST['state']));

					//Define $query
					$query = "SELECT * FROM presidents WHERE state LIKE '$ID%'";
					$result = $mysqli -> query($query);

					//query database and assign to $result
						if($result && $result -> num_rows>0){
							echo "<table border = '1'>";
							echo "<tr><th>Name</th><th>First Lady</th><th>State</th><th>Party</th><th>Term(s)</th><th>Starting Year</th><th>Ending Year</th><th>Total Years</th></tr>";

							while($row = $result -> fetch_assoc()){
								printPresident($row);
							}
							echo "</table>";

							$result -> close();
						} else {
							echo "<h2>No results found</h2>";
						}
					} else if(isset($_POST['party'])&&($_POST['party']!=="")){
						//$ID=$_POST['ID'];
						$ID=$mysqli -> real_escape_string(trim($_POST['party']));

						//Define $query
						$query = "SELECT * FROM presidents WHERE party LIKE '$ID%'";
						$result = $mysqli -> query($query);

						//query database and assign to $result
							if($result && $result -> num_rows>0){
								echo "<table border = '1'>";
								echo "<tr><th>Name</th><th>First Lady</th><th>State</th><th>Party</th><th>Term(s)</th><th>Starting Year</th><th>Ending Year</th><th>Total Years</th></tr>";

								while($row = $result -> fetch_assoc()){
									printPresident($row);
								}
								echo "</table>";

								$result -> close();
							} else {
								echo "<h2>No results found</h2>";
							}
						} else if(isset($_POST['term'])&&($_POST['term']!=="")){
							//$ID=$_POST['ID'];
							$ID=$mysqli -> real_escape_string(trim($_POST['term']));

							//Define $query
							$query = "SELECT * FROM presidents WHERE term = '$ID'";
							$result = $mysqli -> query($query);

							//query database and assign to $result
								if($result && $result -> num_rows>0){
									echo "<table border = '1'>";
									echo "<tr><th>Name</th><th>First Lady</th><th>State</th><th>Party</th><th>Term(s)</th><th>Starting Year</th><th>Ending Year</th><th>Total Years</th></tr>";

									while($row = $result -> fetch_assoc()){
										printPresident($row);
									}
									echo "</table>";

									$result -> close();
								} else {
									echo "<h2>No results found</h2>";
								}
							} else if(isset($_POST['start'])&&($_POST['start']!=="")){
								//$ID=$_POST['ID'];
								$ID=$mysqli -> real_escape_string(trim($_POST['start']));

								//Define $query
								$query = "SELECT * FROM presidents WHERE start = '$ID'";
								$result = $mysqli -> query($query);

								//query database and assign to $result
									if($result && $result -> num_rows>0){
										echo "<table border = '1'>";
										echo "<tr><th>Name</th><th>First Lady</th><th>State</th><th>Party</th><th>Term(s)</th><th>Starting Year</th><th>Ending Year</th><th>Total Years</th></tr>";

										while($row = $result -> fetch_assoc()){
											printPresident($row);
										}
										echo "</table>";

										$result -> close();
									} else {
										echo "<h2>No results found</h2>";
									}
								} else if(isset($_POST['end'])&&($_POST['end']!=="")){
									//$ID=$_POST['ID'];
									$ID=$mysqli -> real_escape_string(trim($_POST['end']));

									//Define $query
									$query = "SELECT * FROM presidents WHERE end = '$ID'";
									$result = $mysqli -> query($query);

									//query database and assign to $result
										if($result && $result -> num_rows>0){
											echo "<table border = '1'>";
											echo "<tr><th>Name</th><th>First Lady</th><th>State</th><th>Party</th><th>Term(s)</th><th>Starting Year</th><th>Ending Year</th><th>Total Years</th></tr>";

											while($row = $result -> fetch_assoc()){
												printPresident($row);
											}
											echo "</table>";

											$result -> close();
										} else {
											echo "<h2>No results found</h2>";
										}
									}


	$mysqli -> close();
	?>
</label>;
</div>;

<?php new_footer("Patrick Freel");?>
