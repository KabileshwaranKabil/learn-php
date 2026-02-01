<?php
	# While Loop
	echo "<h1> Printing 1-10 Using While Loops.</h1><br>";
	$i=1;
	while($i<=10){
		echo "$i<br>";
		$i++;
	}
	
	# Do While Loop
	echo "<h1> Printing 10 - 1 Using Do While Loops.</h1><br>";
	$j=10;
	do{
		echo "$j<br>";
		$j--;
	}while($j>=1);
	
	# For Loop
	echo "<h1> Printing 1-100 Using For Loops.</h1><br>";
	for($k=1;$k<=100;$k++){
		if($k%10==0){
			echo "$k<br>";
		}else{
			echo "$k \t";
		}
	}
	
	# Break & Continue
	echo "<h1> Break and Continue.</h1><br>";
	for($o=1;$o<=10;$o++){
		if($o==7) break; // stops at 7
		if($o==5) continue; // skips 5
		echo "$o <br>";
	}
	
	# Nested Loops
	echo "<h1> Printing Square Using nested for loop.</h1><br>";
	for($row=1;$row<=6;$row++){
		for($col=1;$col<=6;$col++){
			echo " * ";
		}
		echo "<br>";
	}
	
	echo "<h1> Printing Star Using nested for loop.</h1><br>";
	for($row=1;$row<=6;$row++){
		for($col=1;$col<=$row;$col++){
			echo " * ";
		}
		echo "<br>";
	}
	
	echo "<h1> Printing Star Pattern02 Using nested for loop.</h1><br>";
	for($row=6;$row>=1;$row--){
		for($col=1;$col<=$row;$col++){
			echo " * ";
		}
		echo "<br>";
	}
	
	echo "<h1> Printing Star Pattern03 Using nested for loop.</h1><br>";
	for($row=1;$row<=6;$row++){
		for($col=1;$col<=6-$row;$col++){
			echo "     ";
		}
		for($col1=1;$col1<=$row;$col1++){
			echo " * ";
		}
		echo "<br>";
	}
?>