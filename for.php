<?php

echo ("Please enter a start number ");

$min = trim(fgets(STDIN));

if (!is_numeric($min)) {
	fwrite(STDERR, "Must input numeric value \n");
	exit(1);
}

echo ("Please enter a second number ");

$two = trim(fgets(STDIN));

if (!is_numeric($two)) {
	fwrite(STDERR, "Must input numeric value\n");
	exit(1);
}

echo ("Please enter an incrementer! ");
$inc = trim(fgets(STDIN));

if ($inc == "\n") {
	$inc = 1;
}

$index = $min;

for ($index; $index <= $two; $index += $inc) {
	echo ("$index\n");
} 


//Refactor to allow user to choose increment. (count by 1, 2, 10, ...)

echo "\$index has a value of {$index}\n";


//Make sure you are only allowing users to pass in numbers. Give an error message is both passed arguments are not numeric. See php.net/is_numeric.
