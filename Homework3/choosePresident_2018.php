<?php require_once("included_functions.php") ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<?php new_header("Pick Your President"); ?>

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

		?>

    <form method="POST" action="listPresident_2018.php">
      <div class="row">
        <label for="left-label" class="left inline">

          <h2>Pick Your President</h2>
          Choose your President:<select name="ID">
            <option></option>
            <option value="thirtyfour">34<sup>th</sup> President</option>
            <option value="thirtyfive">35<sup>th</sup> President</option>
            <option value="thirtysix">36<sup>th</sup> President</option>
            <option value="thirtyseven">37<sup>th</sup> President</option>
            <option value="thirtyeight">38<sup>th</sup> President</option>
            <option value="thirtynine">39<sup>th</sup> President</option>
            <option value="fourty">40<sup>th</sup> President</option>
            <option value="fourtyone">41<sup>th</sup> President</option>
            <option value="fourtytwo">42<sup>th</sup> President</option>
            <option value="fourtythree">43<sup>th</sup> President</option>
            <option value="fourtyfour">44<sup>th</sup> President</option>
            <option value="fourtyfive">45<sup>th</sup> President</option>
          </select>
          <p /><hr>&nbsp;&nbsp;&nbsp;<b>OR</b>&nbsp;&nbsp;&nbsp; fill in zero or more values bellow</hr> <p />


          <p>First Name:<input type="text" name="fname">

          <p>Last Name:<input type="text" name="lanme">

          <p>First Lady:<input type="text" name="firstLady">

          <p>State:<input type="text" name="state">

          <p>Party:<input type="text" name="party">


          <p>Term Number:<select name="Term Number:">
            <option></option>
            <?php
              foreach ($presidents as $onePresident) {
                echo "<option
                value='".${$onePresident}['term']."'>".${$onePresident}['term']."</option>";
              }

             ?>
           </select>

          <p>Starting Year of Presidency: (YYYY)<select name="Starting Year of Presidency: (YYYY)">
            <option></option>
            <?php
              foreach ($presidents as $onePresident) {
                echo "<option
                value='".${$onePresident}['start'].'</option>"';
              }

             ?>
           </select>

          <p>Ending Year of Presidency: (YYYY)<select name="Ending Year of Presidency: (YYYY)">
            <option></option>
            <?php
              foreach ($presidents as $onePresident) {
                echo "<option
                value='".${$onePresident}['end'].'</option>"';
              }

             ?>
           </select>

          <input type="submit" name="submit" class="button tiny round" value="Find a President" />
        </label>
      </div>
    </form>

    <?php new_footer("Patrick Freel"); ?>
