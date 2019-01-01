<?php require_once("session.php"); ?>
<?php require_once("included_functions.php"); ?>
<?php $mysqli = db_connection();  ?>

<?php new_header("Imperial Navy Personnel Database","http://turing.cs.olemiss.edu/~ptfreel/FinalProject/"); ?>


<h3>Hello There!</h3>

<a href = "readPersonnel.php">Proceed to Personnel Logs</a>


<?php  new_footer("The Empire", $mysqli); ?>
