<!-- 14 Write a PHP program to find maximum of three numbers.  -->
// Find Max
<?php

$a = 28;
$b = 79;
$c = 54;

if ( $a > $b && $a > $c ) 
	echo "a is max";
elseif ( $b > $a && $b > $c ) 
	echo "b is max";
else
	echo "c is max";

?>
<!--
O/P :-
b is max
-->