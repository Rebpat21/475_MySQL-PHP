<?php
	require_once("final_functions.php");
	require_once("session.php");

	new_header();
	$mysqli = db_connection();
	if (($output = message()) !== null) {
		echo $output;
	}
/*****************  UNCOMMENT ONCE CODE IS COMPLETE *************************

if (!isset($_SESSION["username"])) {
	$_SESSION["message"] = "You must log in first";
	redirect_to("index2018.php");
}

****************************************************************************/

	echo "<h3>Your Subscription Information</h3>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////
//  IMPLEMENT QUERY 2a.   Output results within the table
//  USE $query, $result, and $row
	$query=	"SELECT lname, fname, address, city, st, zip, title, price, DATEDIFF(endDate, startDate) AS days";
	$query.= " FROM magazine NATURAL JOIN magazineCustomer NATURAL JOIN subscription WHERE username = '".$_SESSION["username"]."'";

	$result = $mysqli->query($query);
	// $row = $result->fetch_assoc();


	if ($result && $result->num_rows > 0) {
			echo "<table>";
			// echo "<th>Name</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>Title</th><th>Price</th><th>Days Remaining</th>";
			while ($row = $result->fetch_assoc()){
			// echo "<table>";
			// echo "<tr>";
			echo "<tr><td><th style='text-align:center'>"." ".$row['fname']." ".$row['lname']."</th></td></tr>";
  		echo "<tr><td><th style='text-align:center'>"." ".$row['address']."</th></td></tr>";
  		echo "<tr><td><th style='text-align:center'>"." ".$row['city']."</th></td></tr>";
  		echo "<tr><td><th style='text-align:center'>"." ".$row['st']."</th></td></tr>";
  		echo "<tr><td><th style='text-align:center'>"." ".$row['zip']."</th></td></tr>";
  		echo "<tr><td><th style='text-align:center'>"." ".$row['title']."</th></td></tr>";
  		echo "<tr><td><th style='text-align:center'>"." ".$row['price']."</th></td></tr>";
  		echo "<tr><td><th style='text-align:center'>"." ".$row['days']."</th></td></tr>";
			// echo "</tr>";
			}
			echo "</table>";
	}
////////////////////////////////////////////////////////////////////////////


	else {
		echo "<h2>No Subscriptions Found!</h2>";
	}
?>

<p />
<a href='logout.php'>logout</a>
<?php new_footer($mysqli); ?>
