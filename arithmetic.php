<?php



function add($a, $b) {
if (is_numeric($a) && is_numeric($b)) {
		echo $a + $b . PHP_EOL;
	} else {
		echo 'ERROR: both $a and $b should be numbers\n';
	}
    // echo $a + $b . PHP_EOL;
}

add(1,3);

function subtract($a, $b) {
    // Add code here
if (is_numeric($a) && is_numeric($b)) {
		echo $a - $b . PHP_EOL;
	} else {
		echo 'ERROR: both $a and $b should be numbers\n';
	}
}

subtract(1,1);

function multiply($a, $b) {
    // Add code here
if (is_numeric($a) && is_numeric($b)) {
		echo $a * $b . PHP_EOL;
	} else {
		echo 'ERROR: both $a and $b should be numbers\n';
	}
}

multiply(1, 22);

function divide($a, $b) {
    // Add code here
if (is_numeric($a) && is_numeric($b)) {
		echo $a / $b . PHP_EOL;
	} else {
		echo 'ERROR: both $a and $b should be numbers\n';
	}
}
divide(1,2);


//Add a function modulus that finds the modulus of 2 numbers.
function modulus($a, $b) {
if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b . PHP_EOL;
	} else {
		echo 'ERROR: both $a and $b should be numbers\n';
	}
}
modulus(1,1);





