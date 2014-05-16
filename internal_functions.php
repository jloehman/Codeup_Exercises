<?php

$nothing = null;
$something = '';
$array = array(1,2,3);


function check($x)
{
	unset($nothing);
	if (isset($x)) {
		return '$array is set' . PHP_EOL;

}
else
{
 //	unset($nothing[$x]);
	return  '$nothing is empty' . PHP_EOL;
}
}
echo check($nothing);

// Serialize the array $array, and output the results
// function serial($x) {
// 	return serialize($x);
// }

$serial = serialize($array);

echo $serial . PHP_EOL;

// Unserialize the array $array, and output the results

var_dump(unserialize($serial));

print_r(unserialize($serial));

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

