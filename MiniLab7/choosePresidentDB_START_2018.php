<?php   require_once("included_functions.php");  
	/////////////   CONNECT TO YOUR DATABASE    ////////////////////
	//require_once("/home/webID/DB.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">


<?php 	new_header("Pick Your President");	?>
<div class="row">
<label for="left-label" class="left inline">

<h2>Pick Your President</h2>
		 
<form method="POST" action="listPresidentDB_2018.php">
Choose your president: <select name="ID">
<option></option>
<?php
		/////////// Do this query in MySQL first. But notice president #10
		//appears twice because John Tyler switched parties
		//$query = "SELECT number FROM presidents";

		
		
		
		
?>
</select>

<p/><hr>&nbsp;&nbsp;&nbsp;<b>OR</b>&nbsp;&nbsp;&nbsp; fill in zero or more values below <hr/><p/>

</form>
</label>
</div>
<?php new_footer("Mickey Mouse");  ?>
