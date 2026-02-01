<?php
	// Operators
	# Arithmetic Operators
	# Assignment Operators
	# Comparison Operators
	# Logical Operators
	# Increment/ Decrement Operators
	
	$num1=10;
	$num2=21;
	
	# Arithmetic Operators
	$add=$num1+$num2; # Addition
	$subtract=$num2-$num1; # Subtraction
	$multiply=$num1*$num2; # Multiplication
	$divide=$num2/$num1; # Division
	$modulus=$num2%$num1; # Remainder/Modulus
	$power=$num2**3; # Power
	
	echo "<h1>Arithmetic Operators.</h1><br>";
	echo "$num1 + $num2 => $add.<br>";
	echo "$num1 - $num2 => $subtract.<br>";
	echo "$num1 x $num2 => $multiply.<br>";
	echo "$num2 / $num1 => $divide.<br>";
	echo "$num2 % $num1 => $modulus.<br>";
	echo "$num2 ^ 3 => $power.<br>";
	
	# Assignment Operators
	// = += -= *= /= %= 
	echo "<h1>Assignment Operators.</h1><br>";
	$a=10; 
	echo "a = $a.<br>";
	$a+=10; // $a=20
	echo "a = $a.<br>";
	$a-=10; // $a=10
	echo "a = $a.<br>";
	$a*=10; // $a=100
	echo "a = $a.<br>";
	$a/=10; // $a=10
	echo "a = $a.<br>";
	$a%=3; // $a=1
	echo "a = $a.<br>";
	
	# Comparison Operators
	// == === != !== < > <= >=
	echo "<h1>Comparison Operators.</h1><br>";
	$x=10;
	echo "x = $x<br>";
	echo "x == '10' :->".($x=='10')."<br>";
	echo "x === 10 :->".($x===10)."<br>";
	echo "x != 10 :->".($x!=10)."<br>";
	echo "x !== 10 :->".($x!==10)."<br>";
	echo "x < 10 :->".($x<10)."<br>";
	echo "x > 10 :->".($x>10)."<br>";
	echo "x <= 10 :->".($x<=10)."<br>";
	echo "x >= 10 :->".($x>=10)."<br>";
	
	# Logical Operators
	// && || !
	echo "<h1>Logical Operators.</h1><br>";
	$result=($x==10)&&($x===10);
	echo $result;
	
	# Increment/ Decrement Operators
	// ++ --
?>