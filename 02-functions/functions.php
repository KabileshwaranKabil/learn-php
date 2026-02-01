<?php
	/*
	Functions
		block of code to perform specific task.
		define it once and reuse it anywhere.
	*/
	
	// Function Defining
	function hello(){
		echo "Hello World!";
	}
	
	
	// function do not execute automatically unless called.
	hello(); // function call.


	# Function with parameters
	// we can have multiple parameters separated by commas.
	function greet($name){
		echo "Hi, $name.<br>";
	}
	
	greet("Kabilesh");
	
	function add($a,$b){
		return $a + $b; // after return, function stops execution.
	}
	
	echo "Addition: ".add(10,20);
	
	
	# Default parameter values
	
	function greetUser($name="Guest"){
		echo "Hello, $name<br>";
	}
?>
