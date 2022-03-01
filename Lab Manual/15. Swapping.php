<!-- 15 Write a program to enter TWO numbers and print the Swap 
Numbers using PHP.  -->
<?php

	$a = 123;
	$b = 321;

	function swap($x, $y)
	{
		echo $x . " " . $y . "<br>";
		$x = $x + $y;
		$y = $x - $y;
		$x = $x - $y;
		echo $x . " " . $y . "<br>";
	}
	swap($a,$b);

?>
<!-- 
O/P :-
123 321
321 123
-->
