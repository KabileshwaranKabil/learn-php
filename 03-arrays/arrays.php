<?php
	/*
	Arrays
		a collection of values stored under a single variable.
	
	Types of Arrays
		Indexed Arrays : values are stored with numeric indices starting from 0
		Associative Arrays : values are stored with custom keys
		Multidimensional Arrays : Arrays inside arrays
		
	Array Functions
		count($array) : Number of elements
		array_push($array,$value) : Add at the end
		array_pop($array) : Remove last element
		array_shift($array) : Remove first element
		array_unshift($array,$value) : Add at the beginning
		in_array($value, $array) : Checks if value exists
		sort($array) / rsort($array) : Sort ascending/descending
		array_keys($array) / array_values($array) : Get keys or values
	*/

	$names=["Manomohan","Jayalaxmi","Kabileshwaran","Dhanush"]
	// for each loop
	foreach($names as $name){
		echo $name."<br>";
	}
	
	
?>