<?php
require_once("included_functions.php");

function printPresInfo($p){
  $years = ($p["end"]-$p["start"]);
  echo"<tr>";
  echo "<td style='text-align:center'>"." ".$p["fname"].$p["mInitial"].$p["lname"]."</td>";
  echo "<td style='text-align:center'>"." ".$p["firstLady"]."</td>";
  echo "<td style='text-align:center'>"." ".$p["state"]."</td>";
  echo "<td style='text-align:center'>"." ".$p["party"]."</td>";
  echo "<td style='text-align:center'>"." ".$p["term"]."</td>";
  echo "<td style='text-align:center'>"." ".$p["start"]."</td>";
  echo "<td style='text-align:center'>"." ".$p["end"]."</td>";
  echo "<td style='text-align:center'>"." ".$years."</td>";
  echo "</tr>";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<?php new_header("Pick Your President"); ?>

		<?php
			$presidents = ["thirtyfour", "thirtyfive", "thirtysix", "thirtyseven", "thirtyeight", "thirtynine", "forty", "fortyone", "fortytwo", "fortythree", "fortyfour", "fortyfive"];
			$thirtyfour = ["lname" => "Eisenhower", "fname" => "Dwight", "mInitial" => " D. ", "firstLady" => "Mamie Eisenhower", "state" => "Texas", "party" => "Republican", "start" => 1949, "end" => 1952, "term" => "41"];
			$thirtyfive = ["lname" => "Kennedy", "fname" => "John", "mInitial" => " F. ", "firstLady" => "Kennedy", "state" => "Massachusetts", "party" => "Democrat", "start" => 1953, "end" => 1960, "term" => "42 & 43"];
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


      ?>

      <?php
      echo "<table border = '1'>";
      echo "<tr><th>Name</th><th>First Lady</th><th>State</th><th>Party</th><th>Term(s)</th><th>Starting Year</th><th>Ending Year</th><th>Total Years</th></tr>";

      if(isset($_POST['ID'])&& $_POST['ID']!==""){
        printPresInfo(${$_POST['ID']});
      }
        else{
            if(isset($_POST['term'])&& $_POST['term'] !==""){
                foreach($presidents as $onePresident){
                  if(array_search($_POST['fname'], ${$onePresident})==TRUE){
                    printPresInfo(${$onePresident});
                  }
                }
              }

      if(isset($_POST['fname'])&& $_POST['fname'] !==""){
        foreach($presidents as $onePresident){
          if(array_search($_POST['fname'], ${$onePresident})==TRUE){
            printPresInfo(${$onePresident});
          }
        }
      }
      if(isset($_POST['lname'])&& $_POST['lname'] !==""){
        foreach($presidents as $onePresident){
          if(array_search($_POST['lname'], ${$onePresident})==TRUE){
            printPresInfo(${$onePresident});
          }
        }
      }
      if(isset($_POST['firstLady'])&& $_POST['firstLady'] !==""){
        foreach($presidents as $onePresident){
          if(array_search($_POST['firstLady'], ${$onePresident})==TRUE){
            printPresInfo(${$onePresident});
          }
        }
      }
      if(isset($_POST['state'])&& $_POST['state'] !==""){
        foreach($presidents as $onePresident){
          if(array_search($_POST['state'], ${$onePresident})==TRUE){
            printPresInfo(${$onePresident});
          }
        }
      }
      if(isset($_POST['party'])&& $_POST['party'] !==""){
        foreach($presidents as $onePresident){
          if(array_search($_POST['party'], ${$onePresident})==TRUE){
            printPresInfo(${$onePresident});
          }
        }
      }
      if(isset($_POST['start'])&& $_POST['start'] !==""){
        foreach($presidents as $onePresident){
          if(array_search($_POST['start'], ${$onePresident})==TRUE){
            printPresInfo(${$onePresident});
          }
        }
      }
      if(isset($_POST['end'])&& $_POST['end'] !==""){
        foreach($presidents as $onePresident){
          if(array_search($_POST['end'], ${$onePresident})==TRUE){
            printPresInfo(${$onePresident});
          }
        }
      }
}
      echo "</table>";

       ?>

    <?php new_footer("Patrick Freel"); ?>
