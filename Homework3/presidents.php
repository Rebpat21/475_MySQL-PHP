<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>US Presidents</title>
	</head>
	<body>
		<?php
			$presidents = array("thirtyfour", "thirtyfive", "thirtysix", "thirtyseven", "thirtyeight", "thirtynine", "forty", "fortyone", "fortytwo", "fortythree", "fortyfour", "fortyfive");

			$thirtysix = array("lname" => "Johnson", "fname" => "Lyndon", "mInitial" => " B. ", "firstLady" => "Lady Bird Johnson", "state" => "Texas", "party" => "Democrat", "start" => 1963, "end" => 1969, "term" => "44 & 45");
			$thirtyseven = array("lname" => "Nixon", "fname" => "Richard", "mInitial" => " M. ", "firstLady" => "Pat Nixon", "state" => "California", "party" => "Republican", "start" => 1969, "end" => 1974, "term" => "46");
			$thirtyeight = array("lname" => "Ford", "fname" => "Gerald", "mInitial" => " ", "firstLady" => "Betty Ford", "state" => "Michigan", "party" => "Republican", "start" => 1974, "end" => 1977, "term" => "47");
			$thirtynine = array("lname" => "Carter", "fname" => "Jimmy", "mInitial" => " ", "firstLady" => "Rosalynn Carter", "state" => "Georgia", "party" => "Democrat", "start" => 1977, "end" => 1981, "term" => "48");
			$forty = array("lname" => "Reagan", "fname" => "Ronald", "mInitial" => " ", "firstLady" => "Nancy Reagan", "state" => "California", "party" => "Republican", "start" => 1981, "end" => 1989, "term" => "49 & 50");
			$fortyone = array("lname" => "Bush", "fname" => "George", "mInitial" => " H. ", "firstLady" => "Barbara Bush", "state" => "Texas", "party" => "Republican", "start" => 1989, "end" => 1993, "term" => "51");
			$fortytwo = array("lname" => "Clinton", "fname" => "Bill", "mInitial" => " ", "firstLady" => "Hillary Clinton", "state" => "Arkansas", "party" => "Democrat", "start" => 1993, "end" => 2001, "term" => "52 & 53");
			$fortythree = array("lname" => "Bush", "fname" => "George", "mInitial" => " W. ", "firstLady" => "Laura Bush", "state" => "Texas", "party" => "Republican", "start" => 2001, "end" => 2009, "term" => "54 & 55");
			$fortyfour = array("lname" => "Obama", "fname" => "Barack", "mInitial" => " ", "firstLady" => "Michelle Obama", "state" => "Illinois", "party" => "Democrat", "start" => 2009, "end" => 2017, "term" => "56 & 57");
			$fortyfive = array("lname" => "Trump", "fname" => "Donald", "mInitial" => " J. ", "firstLady" => "Melanija Trump", "state" => "New York", "party" => "Republican", "start" => 2017, "end" => 2018, "term" => "58");

			//Verify information does output
			//Once verified following two lines should be commented out
			echo print_r($fortythree). "<br />";
			echo print_r($fortyfour). "<br />";



		?>

	</body>

	</body>
</html>
