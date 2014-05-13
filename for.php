<?php

echo ("Please enter a start number ");

$min = (int)fgets(STDIN);

echo ("Please enter a second number ");

$two = (int)fgets(STDIN);

echo ("Please enter an incrementer! ");
$inc = (int)fgets(STDIN);

$index = $min;

for ($index; $index < $two; $index += $inc) {
	echo ("$index\n");
}

//Refactor to allow user to choose increment. (count by 1, 2, 10, ...)

echo "\$index has a value of {$index}\n";


/*echo "While:\n";
While ($min <= $b) {
	echo " numbers from start to finish is {$min}\n";
}

echo "For:\n";

$b = second

echo "pick two number between 1 and 100\n";
for ($a = 1;$a < 100; $a += 2) {
	echo "$a\n";
}

echo "\$argv";
print_r($argv);
*/





/*


Default increment to 1 if no input.

Make sure you are only allowing users to pass in numbers. Give an error message is both passed arguments are not numeric. See php.net/is_numeric.
*/
