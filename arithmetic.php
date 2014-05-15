<?php

function error(){
	echo "Error Message\n";
}

function add($a, $b) {
if (is_numeric($a) && is_numeric($b)) {
		echo $a + $b . PHP_EOL;
	} else {
		error();
    // echo $a + $b . PHP_EOL;
}
}
add(1,"a");

function subtract($a, $b) {
    // Add code here
if (is_numeric($a) && is_numeric($b)) {
		echo $a - $b . PHP_EOL;
	} else {
		error();
	}
}
subtract(1,"a");

function multiply($a, $b) {
    // Add code here
if (is_numeric($a) && is_numeric($b)) {
		echo $a * $b . PHP_EOL;
	} else {
error();
}
}
multiply(1, 22);

function divide($a, $b) {
    // Add code here
if (is_numeric($a) && is_numeric($b)) {
		if ($b == 0) {
			error();
		} else {
			echo $a / $b;
		}
		} else {				
			error();
		}
		echo PHP_EOL;
}
divide(0,2);


//Add a function modulus that finds the modulus of 2 numbers.
function modulus($a, $b) {
if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b . PHP_EOL;
	} else {
error();	
}
}
modulus(1,1);
