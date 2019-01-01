<?php
require_once("final_functions.php");
require_once("session.php");

new_header();
$mysqli = db_connection();
if (($output = message()) !== null) {
	echo $output;
}
/*****************  UNCOMMENT ONCE CODE IS COMPLETE *************************

if (!isset($_SESSION["username"]) || !isset($_SESSION["admin"])) {
	$_SESSION["message"] = "Admin Log In Required";
	redirect_to("index2018.php");
}

****************************************************************************/
	echo "<h2>Maggie Z's Magazines</h2>";
	echo "<h3>Current Magazine Subscriptions</h3>";



/////////////////////////////////////////////////////////////////////////////////////////////////////////
//  IMPLEMENT 2b. QUERY.  Create query variable and execute query.  Output results within the table
//  USE $query, $result, and $row
	$query= "SELECT lname, fname, address, city, st, zip, title, price, DATEDIFF(endDate, startDate) AS days ";
	$query.= "FROM magazine NATURAL JOIN magazineCustomer NATURAL JOIN subscription ORDER BY lname ASC";

	$result = $mysqli->query($query);
	// $row = $result->fetch_assoc();

				if ($result) {
					echo "<table>";

					echo "<th>Name</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>Title</th><th>Price</th><th>Days Remaining</th>";

					while ($row = $result->fetch_assoc()){
					echo "<tr>";
					echo "<td style='text-align:center'>"." ".$row['fname']." ".$row['lname']."</td>";
  				echo "<td style='text-align:center'>"." ".$row['address']."</td>";
  				echo "<td style='text-align:center'>"." ".$row['city']."</td>";
  				echo "<td style='text-align:center'>"." ".$row['st']."</td>";
  				echo "<td style='text-align:center'>"." ".$row['zip']."</td>";
  				echo "<td style='text-align:center'>"." ".$row['title']."</td>";
  				echo "<td style='text-align:center'>"." ".number_format($row['price'], 2)."</td>";
  				echo "<td style='text-align:center'>"." ".$row['days']."</td>";
					echo "</tr>";
				}


					echo "</table>";
				}
///////////////////////////////////////////////////////////////////////////////////////////

				echo "<p />";
				echo "<center>";
				echo "<a href='notImplemented.php'>Add a subscription</a>&nbsp;|&nbsp;";
				echo "<a href='notImplemented.php'>Add an admin</a>&nbsp;|&nbsp;";
				echo "<a href='logout.php'>logout</a>";
				echo "</center>";
				echo "<br /><br />";
				echo "<hr />";
				echo "<h3>Available Magazine Titles</h3>";


///////////////////////////////////////////////////////////////////////////////////////////
//  COMBINE & IMPLEMENT QUERIES 2c. & 2d.  Create query variables and execute both queries.  Output results within the table
//USE $query1, $result1, and $row1
//USE $query2, $result2, and $row2

	$query1= "SELECT category FROM magazine GROUP BY category ORDER BY category ASC";

	$result1 = $mysqli->query($query1);
	// $row1 = $result1->fetch_assoc();


	$query2= "SELECT category, title FROM magazine GROUP BY category ORDER BY category, title ASC";
	// $query2= "SELECT category, title FROM magazine WHERE category= '".$row1["category"]."' GROUP BY category ORDER BY category, title ASC";

	$result2 = $mysqli->query($query2);
	// $row2 = $result2->fetch_assoc();

	//USE $query2, $result2, and $row2


	//USE $query2, $result2, and $row2


		if($result1) {

				if ($result2) {
					while ($row1 = $result1->fetch_assoc()){
					echo "<h4>".$row1["category"]."</h4>";

						echo "<table>";

						while ($row2 = $result2->fetch_assoc()){

							echo "<tr>";

  						echo "<p>".$row2["title"]."</p>";

						echo "</tr>";
					}


					echo "</table>";
					}
				}
		}
///////////////////////////////////////////////////////////////////////////////////////////////

?>


<?php new_footer($mysqli); ?>
