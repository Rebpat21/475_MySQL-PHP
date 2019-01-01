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

?>

   <div id="page">
   <br /><br />
   <h2>Under Construction</h2>
   	<br /><p>&laquo:<a href='admin.php'>Back to Manage Content</a>

   	</div>

<?php new_footer($mysqli); ?>