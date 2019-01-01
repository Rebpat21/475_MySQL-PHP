<?php
  $addOn="again";
  $addOn2='and again';
  $addOn3='and again'
  echo "First Attempt: Hello World $addOn $addOn2 <br />";
  echo "Second Attempt: Hello World $addOn $addOn2{$addOn3}";
  echo "Thrid Attempt: "."{$addOn}"."{$addOn2}"."{$addOn3}<br /><hr />";

 ?>

<?php

  define("DaysInYear", 365);
  define("DaysInLeapYear", 366, true);

  echo DaysInYear."<br /><hr />";
  echo daysinyear."<br /><hr />";
  echo daysinleapyear."<br /><hr />";


  define ("DaysInYear", 235);
  echo DaysInYear."<br /><hr />";
 ?>
