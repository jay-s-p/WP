<!--
19. Write a PHP program to store current date-time in a COOKIE
and display the ‘Last visited on' date-time on the web page
upon reopening of the same page.
-->
<?php
	if(isset($_COOKIE["dateAndTime"])) {
		echo "Last visited on " . $_COOKIE["dateAndTime"];
	}
	setcookie("dateAndTime", date("Y-m-d h:i:sa") , time() + (86400 * 30), "/");
?>