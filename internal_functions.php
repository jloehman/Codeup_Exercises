<?php

$nothing = null;
$something = '';
$array = array(1,2,3);

// $serial = array (serialize($array));


function check($x)
{
	if (isset($x)) {
		return '$nothin is set' . PHP_EOL;

}
else
{
	return  '$nothing is empty' . PHP_EOL;
}
}
echo check($nothing);

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results



// Unserialize the array $array, and output the results