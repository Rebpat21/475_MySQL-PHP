<html lang="en">
  <head>
    <title>
      <?php
      $name=$_GET['name'];
      echo $name;
      $r=$_GET['r'];
      echo $r;
      ?>
    </title>
  </head>
  <body>
    <?php
    echo "<h2>Welcome to $name</h2>";

    $permi=2*pi()*$r;
    echo "$name with perimeter $r is $permi<br />";
     ?>
  </body>
</html>
