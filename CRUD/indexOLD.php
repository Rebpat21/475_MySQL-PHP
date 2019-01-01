<?php require_once("session.php"); ?>
<?php require_once("included_functions.php"); ?>
<?php $mysqli = db_connection();  ?>

<?php new_header("Who is Who","http://turing.cs.olemiss.edu/~ptfreel/CRUD/"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<h3>Welcome!</h3>

<a href = "readPeople.php">Proceed to CRUD</a>


<?php  new_footer("Who's Who", $mysqli); ?>
