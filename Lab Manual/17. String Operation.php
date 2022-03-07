<!-- 17 Write a program to do String Operations PHP.  -->
<?php
	
	$str1 = "Hello world";
	$str2 = "world";

	echo "str1 = " . $str1 . "<br>";
	echo "str2 = " . $str2 . "<br>";
	echo "String length str1 : " . strlen($str1) . "<br>";
	echo "strstr(str1, str2) : " . strstr($str1, $str2) . "<br>";
	echo "strpos(str1, str2) : " . strpos($str1, $str2) . "<br>";
	echo "trim(' H   E   L    L   O ') : '" . trim(' H   E   L    L   O ') . "'<br>";
	echo "strtoupper(str1) : " . strtoupper($str1) . "<br>";
	echo "strrev(str1) : " . strrev($str1) . "<br>";

?>
<!-- 
O/P :-
str1 = Hello world
str2 = world
String length str1 : 11
strstr(str1, str2) : world
strpos(str1, str2) : 6
trim(' H E L L O ') : 'H E L L O'
strtoupper(str1) : HELLO WORLD
strrev(str1) : dlrow olleH
 -->