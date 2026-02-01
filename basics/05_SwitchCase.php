<?php
	$day="monday";
	switch($day){
		case "Monday":
			echo "1st day of week.";
			break;
		case "Tuesday":
			echo "2nd day of week.";
			break;
		case "Wednesday":
			echo "3rd day of week.";
			break;
		case "Thursday":
			echo "4th day of week.";
			break;
		case "Friday":
			echo "5th day of week.";
			break;
		case "Saturday":
			echo "6th day of week.";
			break;
		case "Sunday":
			echo "last day of week.";
			break;
		default:
			echo "Sorry week should be Camelcase.";
	}
?>