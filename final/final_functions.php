<?php
	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}

	function db_connection() {
//////////////////////////////////////////////////////////////////////
		//IMPLEMENT FOR TAKE-HOME Part b.
		//Add require once to include your DB.php file that contains your username
		// and password for your database
		//UNCOMMENT ONCE Complete

		require_once("/home/ptfreel/DBfreel.php");

////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
// 1. Create a database connection
		//mysqli connect expects host, username, password, database name
		//NOTE:  If your constants are different UPDATE
		$mysqli = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);
///////////////////////////////////////////////////////////////////////

		// Test if connection succeeded
		if($mysqli->connect_errno) {
			die("Could not connect to server!<br />");
		}
		else {
			echo "Successful connection";
		}
		return $mysqli;
	}

	function new_header() {
		echo "<html lang='en'>";
		echo "<head>";
		echo "	<title>$name</title>";
		//		<!-- Link to Foundation -->";
		echo "	<link rel='stylesheet' href='css_final2018/normalize.css'>";
		echo "	<link rel='stylesheet' href='css_final2018/foundation.css'>";

		echo "	<script src='js/vendor/modernizr.js'></script>";
		echo "</head>";
		echo "<body>";
		echo "  <div class='contain-to-grid sticky'>";
		echo "  <nav class='top-bar' data-topbar data-options='sticky_on: large'>";
		echo "  <ul class='title-area'>";
		echo "  <li class='name'>";
//////////////////////////////////////////////////////////////////////////////////////////////////
		//IMPLEMENT FOR TAKE-HOME Part b. con't
		//  Complete the <h1> tag below by adding <your home directory>/final/ (e.g., mine would read /~kdavidso/final/ )
		//UNCOMMENT ONCE COMPLETE

 	    echo "  <h1 align='left'><a href='/~ptfreel/final/index2018.php'>Maggie Z's Magazines</a></h1>";

/////////////////////////////////////////////////////////////////////////////////////////////////
		echo "  </li>";
		echo "  </ul>";
		echo "  </nav>";
		echo "  </div>";
		echo "<div class='row'>";
		echo "<label for='left-label' class='left inline'>";
	}

	function print_alert($name="") {
		echo "<br />";
		echo "<div class='row'>";
		echo "<div data-alert class='alert-box info round'>".$name;
		echo "</div>";
		echo "</div>";

	}

	function new_footer($mysqli){
		echo "<br /><br /><br />";
///////////////////////////////////////////////////////////////////////////////////////////////////
		//IMPLEMENT FOR TAKE-HOME Part b. con't
		// Complete the <h4> tag by adding Webmaster <your name> after the date (e.g., mine would ready Webmaster Kristi Davidson)
		// UNCOMMENT ONCE COMPLETE

	    echo "<h4><div class='text-center'><small>Copyright ".date("M Y").", Webmaster: Patrick Freel </small></div></h4>";

//////////////////////////////////////////////////////////////////////////////////////////////////
		echo "</label>";
		echo "</div>";
		echo "</body>";
		echo "</html>";

		//Close database connection
		$mysqli->close();
	}
	function password_encrypt($password) {
	  $hash_format = "$2y$10$";   // Use Blowfish with a "cost" of 10
	  $salt_length = 22; 					// Blowfish salts should be 22-characters or more
	  $salt = generate_salt($salt_length);
	  $format_and_salt = $hash_format . $salt;
	  $hash = crypt($password, $format_and_salt);
	  return $hash;
	}

	function generate_salt($length) {
	  // MD5 returns 32 characters
	  $unique_random_string = md5(uniqid(mt_rand(), true));

	  // Valid characters for a salt are [a-zA-Z0-9./]
	  $base64_string = base64_encode($unique_random_string);

	  // Replace '+' with '.' from the base64 encoding
	  $modified_base64_string = str_replace('+', '.', $base64_string);

	  // Truncate string to the correct length
	  $salt = substr($modified_base64_string, 0, $length);

		return $salt;
	}

	function password_check($password, $existing_hash) {
	  // existing hash contains format and salt at start
	  $hash = crypt($password, $existing_hash);
	  if ($hash === $existing_hash) {
	    return true;
	  }
	  else {
	    return false;
	  }
	}

?>
