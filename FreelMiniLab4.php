<!-- Patrick Freel -->
<?php
  $CScourses=array('csci111', 'csci112', 'csci211', 'csci223', 'csci300', 'csci311', 'csci387', 'csci423', 'csci433', 'csci450', 'csci487');
  $csci111 = array('code' => "CSCI 111" ,"title" => "Computer Science I", "semester" => "Fall & Spring");
  $csci112 = array('code' => "CSCI 112" ,"title" => "Computer Science II", "semester" => "Fall & Spring");
  $csci211 = array('code' => "CSCI 211" ,"title" => "Computer Science III", "semester" => "Fall & Spring");
  $csci223 = array('code' => "CSCI 223" ,"title" => "Computer Organization and Assembly Language", "semester" => "Fall & Spring");
  $csci300 = array('code' => "CSCI 300" ,"title" => "Social Responsibility in Computer Science", "semester" => "Fall");
  $csci311 = array('code' => "CSCI 311" ,"title" => "Models of Computation", "semester" => "Fall");
  $csci387 = array('code' => "CSCI 387" ,"title" => "Software Design and Development", "semester" => "Spring");
  $csci423 = array('code' => "CSCI 423" ,"title" => "Introdiction to Operating Systems", "semester" => "Fall");
  $csci433 = array('code' => "CSCI 433" ,"title" => "Algorithm and Data Structure Analysis", "semester" => "Spring");
  $csci450 = array('code' => "CSCI 450" ,"title" => "Organization of Programming Languages", "semester" => "Fall");
  $csci487 = array('code' => "CSCI 487" ,"title" => "Senior Project", "semester" => "Fall & Spring");

  foreach ($CScourses as $oneCourse) {
    echo ${$oneCourse}['code']."<br />". ${$oneCourse}['title']."<br />".${$oneCourse}['semester']."<br /><hr />";

  }

 ?>
