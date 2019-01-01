<?php require_once("session.php"); ?>
<?php require_once("final_functions.php"); 

new_header(); 
$mysqli = db_connection();
if (($output = message()) !== null) {
	echo $output;
}

///*****************  Uncomment once code is complete *************************
/*
if (!isset($_SESSION["username"])) {
	$_SESSION["message"] = "You must log in first";
	redirect_to("Location: index2018.php");
}
*/
//****************************************************************************/

?>

   <div id="page">
   <br /><br />
   <h2>Subscriber Page Under Construction</h2>
   	<br /><p>&laquo:<a href='index2018.php'>Back to Main Page</a>

   	</div>

<?php new_footer($mysqli); ?>