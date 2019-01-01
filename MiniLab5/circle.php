<?php

header("Location:circleLinks.php");
exit;
function area($r = 1){
	return pi()* $r * $r;
}

//**********************************************************//
//       	Write the function for perimeter
//**********************************************************//


function both($r){
//**********************************************************//
//       	Modify function such that $r is global.
//       	Remove $r from the parameter list in the function header
//**********************************************************//
	return array(area($r), perimeter($r));
}


//**********************************************************//
//         	Write a function point that has 2 parameters passed to it: $x and $y
//	Set default values for both x and y to 0
//	Use globals for $h, $k, and $r
//	Evaluate if (x-h)2 + (y-k)2 = r2  - in PHP use pow(a, b)
//		For example, pow($x, 2) determines x2,
//	If true, return on the circle. Otherwise, return not on the circle
//**********************************************************//

?>
