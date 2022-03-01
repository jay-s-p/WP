<!-- 16 Write a program to do Array Operations PHP.  -->
<?php
    // --> Numeric Array
	$arr = array(79, 54, 28);
	// print array using foreach loop
	foreach($arr as $x)
		echo $x . " ";

	echo "<br>";
	// print array using for loop
	for($i = 0; $i < count($arr);$i++ )
		echo $arr[$i] . " ";
	
        
	echo "<br><br>";
    // --> Associative Array
    $arr = array("name"=> "Jay", "roll_no"=> "54");
    echo "Your name is " . $arr['name'] . " and your roll no is " . $arr['roll_no'];    


	echo "<br><br>";
    // --> Multi Dimensional Array
    $arr = array(
        "name" => array("Jay", "Maulik", "Devendra"),
        "roll_no" => array(79, 108, 52)
    );
    for ($i = 0; $i < 3; $i++)
        echo $arr['name'][$i] . "'s roll no is " . $arr['roll_no'][$i] . "<br>";
?>

<!-- 
O/P :-
79 54 28
79 54 28

Your name is Jay and your roll no is 54

Jay's roll no is 79
Maulik's roll no is 108
Devendra's roll no is 52
-->