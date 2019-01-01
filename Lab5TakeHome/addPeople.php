<?php require_once("session.php"); ?>
<?php 
	require_once("included_functions.php");
	new_header("Here is Who's who!", ""); 
	$mysqli = db_connection();
	if (($output = message()) !== null) {
		echo $output;
	}
	
	echo "<h3>Add to Who''s who!</h3>";
	echo "<div class='row'>";
	echo "<label for='left-label' class='left inline'>";

	if (isset($_POST["submit"])) {
		if( (isset($_POST["FirstName"]) && $_POST["FirstName"] !== "") && (isset($_POST["LastName"]) && $_POST["LastName"] !== "") &&(isset($_POST["Birthdate"]) && $_POST["Birthdate"] !== "") &&(isset($_POST["BirthCity"]) && $_POST["BirthCity"] !== "") &&(isset($_POST["BirthState"]) && $_POST["BirthState"] !== "") &&(isset($_POST["Region"]) && $_POST["Region"] !== "") ) {


//////////////////////////////////////////////////////////////////////////////////////////////////
			//STEP 2.
				//Create query to insert information that has been posted



					
				// Execute query

//////////////////////////////////////////////////////////////////////////////////////////////////


			if($result) {

			$_SESSION["message"] = $_POST["FirstName"]." ".$_POST["LastName"]." has been added";
				header("Location: readPeople.php");
				exit;

			}
			else {

			$_SESSION["message"] = "Error! Could not change ".$_POST["FirstName"]." ".$_POST["LastName"];
			}
		}
		else {
			$_SESSION["message"] = "Unable to add person. Fill in all information!";
			header("Location: addPeople.php");
			exit;
		}
	}
	else {
//////////////////////////////////////////////////////////////////////////////////////////////////
					// STEP 1.
					// Part a.  Create a form that will post to this page: addPeople.php
					//          Also include a submit button
					// Part b.  Include <input> tags for each of the attributes in person:
					//                  First Name, Last Name, Birthdate, Birth City, Birth State, Region

					
					
//////////////////////////////////////////////////////////////////////////////////////////////////
				
	}
	echo "</label>";
	echo "</div>";
	echo "<br /><p>&laquo:<a href='readPeople.php'>Back to Main Page</a>";
?>


<?php new_footer("Who's Who", $mysqli); ?>