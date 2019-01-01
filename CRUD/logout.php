<?php require_once("session.php");
	verify_login();
?>
<?php
	require_once("included_functions.php");
	new_header("Who's Who Login", "");
	$mysqli = db_connection();

if(!isset($_SESSION["admin_id"])) {
	$_SESSION["message"] = "You must login in first!";
	redirect_to("index.php");
}
if (($output = message()) !== null) {
	echo $output;
}
/////////////////////////////////////////////////////////////////////////////////////////
// Step 10.  Kill the session by setting the username and admin_id to null

$_SESSION["username"] = NULL;
$_SESSION["admin_id"] = NULL;

////////////////////////////////////////////////////////////////////////////////////////


 redirect_to("index.php");
 new_footer("Who's Who", $mysqli); ?>
