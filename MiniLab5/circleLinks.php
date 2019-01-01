<!-- Patrick Freel -->
<html lang="en">
  <head>
    <title>Circle Links</title>
  </head>
  <body>
    <?php
    echo "<h2>Circle Links</h2>";

    echo "<a href='circleArea.php?r=5&name=Area of Circle'>CLICK HERE to Calculate the Area of a Circle</a><br />";
    echo "<a href='circlePerim.php?r=5&name=Area of Circle'>CLICK HERE to Calculate the Perimeter of a Circle</a><br />";
    echo "<a href='circleArea&Perim.php?r=5&name=".urlencode('Area & Perimeter of Circle')."'>CLICK HERE to Calculate the Area & Perimeter of a Circle</a><br />";

     ?>
  </body>
</html>
