<?php 
	require_once("session.php"); 
	require_once("included_functions.php");
	new_header("Here is Who's Who!"); 
	$mysqli = db_connection();
	if (($output = message()) !== null) {
		echo $output;
	}

	
	//****************  Add Query
	//  Query people to select PersonID, FirstName, and LastName, sorting in ascending order by LastName




	//  Execute query
				
				
/********************    Uncomment Once Code Completed  **************************  
	if ($result && $result->num_rows > 0) {
		echo "<div class='row'>";
		echo "<center>";
		echo "<h2>Here is Who's Who</h2>";
		echo "<table>";
		echo "<tr><th>Name</th><th></th><th></th></tr>";
		while ($row = $result->fetch_assoc())  {
			echo "<tr>";
			//Output FirstName and LastName

	




			//Create an Edit and Delete link
			//Edit should direct to editPeople.php, sending PersonID in URL
			//Delete should direct to deletePeople.php, sending PersonID in URL - include onclick to confirm delete


			
			echo "</tr>";
		}
		echo "</table>";
		echo "<br /><br /><a href='addPeople.php'>Add a person</a>";
		echo "</center>";
		echo "</div>";
	}
/************       Uncomment Once Code Completed For This Section  ********************/
?>

<?php  new_footer("Who's Who", $mysqli); ?>