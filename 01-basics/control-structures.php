<?php
	$hour=date("H"); // gets current hour (0-23)
	if($hour<12){
		echo "Good Morning!";
	}
	else if($hour < 18){
		echo "Good Afternoon!";
	}
	else{
		echo "Good Evening!";
	}
?>