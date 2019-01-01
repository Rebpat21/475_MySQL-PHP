<?php require_once("session.php"); ?>
<?php require_once("final_functions.php");
	new_header();
	$mysqli = db_connection();
	if (($output = message()) !== null) {
		echo $output;
	}

	if (isset($_POST["submit"])) {
	  if (isset($_POST["username"]) && $_POST["username"] !== "" && isset($_POST["password"]) && $_POST["password"] !== "") {
	    $username = $_POST["username"];
	    $password = $_POST["password"];
/////////////////////////////////////////////////////////////////////////////////////
//IMPLEMENT FOR TAKE-HOME Part c.
//  Define and execute the query to verify that this username is in the database table login2018
		//USE the variables $query and $result
		$query = "SELECT * FROM login2018 ";
		$query .= "WHERE username = '".$username."' LIMIT 1";



		//Execute query
		$result = $mysqli->query($query);
///////////////////////////////////////////////////////////////////////////////////


	  //Check that the username is found - if so, check password
      if ($result && $result->num_rows > 0) {
			$row = $result->fetch_assoc();

////////////////////////////////////////////////////////////////////////////////////
//IMPLEMENT TAKE-HOME Part c. CON'T.
			//First check whether the password entered matches the hashed password in the database -
			//if-statement using password_check
			if(password_check($password, $row['password'])){
				if($row['permission']){
					// Session admin -> $_Session["admin"];
					$_SESSION["admin"]=$username;
					redirect_to("admin.php");
				} else {
					$_SESSION["username"]=$username;
					redirect_to("subscriber.php");
				}

			}

				//If the passwords match, assign the $_SESSION['username'] variable to $username


					//Re-direct depending on permission.
					// If permission from the database for this user is true,
					// create a Session admin -> $_SESSION["admin"], assigning it $username, and
					// redirect to notImplementedAdmin.php

					// Otherwise permission from the database for this user is false, redirect to notImplementedSubscriber.php




////////////////////////////////////////////////////////////////////////////////////

	/**********************   UNCOMMENT ONCE password_check IS EVALUATED  *****************/
			//This else goes with your if-statement using password_check
			else {
			 $_SESSION["message"] = "Username/Password not found";
			 redirect_to("index2018.php");
			}
	  }
	  else {
		$_SESSION["message"] = "Username/Password not found";
		redirect_to("index2018.php");
	  }
	 }
	}
?>


			<h3>Welcome to Maggie Z's Magazines</h3>
			<label  for='center-label' class='center'>

			<form action="index2018.php" method="post">
			  <p>&nbsp;&nbsp;Username:&nbsp;&nbsp;
				<input type="text" name="username"  />
			  </p>
			  <p>&nbsp;&nbsp;Password:&nbsp;&nbsp;
				<input type="password" name="password" value="" />
			  </p>
			  <input type="submit" name="submit" value="Submit" class="tiny round button" />
			</form>
			</label>

			</div>

	</div>
</div>

<?php new_footer($mysqli); ?>
