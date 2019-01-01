<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>US Presidents</title>
	</head>
	<body>
		<?php
			$presidents = ["thirtyfour", "thirtyfive", "thirtysix", "thirtyseven", "thirtyeight", "thirtynine", "forty", "fortyone", "fortytwo", "fortythree", "fortyfour", "fortyfive"];

////////////////  Add $thirtyfour and $thirtyfive   //////////////////

			$thirtysix = ["lname" => "Johnson", "fname" => "Lyndon", "mInitial" => " B. ", "firstLady" => "Lady Bird Johnson", "state" => "Texas", "party" => "Democrat", "start" => 1963, "end" => 1969, "term" => "44 & 45"];
			$thirtyseven = ["lname" => "Nixon", "fname" => "Richard", "mInitial" => " M. ", "firstLady" => "Pat Nixon", "state" => "California", "party" => "Republican", "start" => 1969, "end" => 1974, "term" => "46"];
			$thirtyeight = ["lname" => "Ford", "fname" => "Gerald", "mInitial" => " ", "firstLady" => "Betty Ford", "state" => "Michigan", "party" => "Republican", "start" => 1974, "end" => 1977, "term" => "47"];
			$thirtynine = ["lname" => "Carter", "fname" => "Jimmy", "mInitial" => " ", "firstLady" => "Rosalynn Carter", "state" => "Georgia", "party" => "Democrat", "start" => 1977, "end" => 1981, "term" => "48"];
			$forty = ["lname" => "Reagan", "fname" => "Ronald", "mInitial" => " ", "firstLady" => "Nancy Reagan", "state" => "California", "party" => "Republican", "start" => 1981, "end" => 1989, "term" => "49 & 50"];
			$fortyone = ["lname" => "Bush", "fname" => "George", "mInitial" => " H. ", "firstLady" => "Barbara Bush", "state" => "Texas", "party" => "Republican", "start" => 1989, "end" => 1993, "term" => "51"];
			$fortytwo = ["lname" => "Clinton", "fname" => "Bill", "mInitial" => " ", "firstLady" => "Hillary Clinton", "state" => "Arkansas", "party" => "Democrat", "start" => 1993, "end" => 2001, "term" => "52 & 53"];
			$fortythree = ["lname" => "Bush", "fname" => "George", "mInitial" => " W. ", "firstLady" => "Laura Bush", "state" => "Texas", "party" => "Republican", "start" => 2001, "end" => 2009, "term" => "54 & 55"];
			$fortyfour = ["lname" => "Obama", "fname" => "Barack", "mInitial" => " ", "firstLady" => "Michelle Obama", "state" => "Illinois", "party" => "Democrat", "start" => 2009, "end" => 2017, "term" => "56 & 57"];
			$fortyfive = ["lname" => "Trump", "fname" => "Donald", "mInitial" => " J. ", "firstLady" => "Melanija Trump", "state" => "New York", "party" => "Republican", "start" => 2017, "end" => 2018, "term" => "58"];

			//Verify information does output
			//Once verified following two lines should be commented out
			echo "<pre>";
			echo print_r($fortyfour). "<br />";
			echo print_r($fortyfive). "<br />";

////////////   foreach loop to output each presidents' information   ///////////////////
// Patrick Freel
foreach($presidents as $thePres){

  $start = ${$thePres}['Start'];
  $end = ${$thePres}['end'];
  $yearsinOffice = $end - $start;

  echo ${$thePres}['fname']." ".${$thePres}['mInitial']." ".${$thePres}['lname']." \n First Lady: ".${$thePres}['firstLady'].
  "\n State: ".${$thePres}['state']."\n Party: ".${$thePres}['party']."\n Term: ".${$thePres}['term'].
  "\n In Office: ".${$thePres}['start']." to ".${$thePres}['end']."\n Number of Years in Office: $yearsinOffice<br /><hr />";
}

		?>

	</body>

</html>
