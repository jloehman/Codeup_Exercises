<?php

/*$data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);
foreach ($data as $datum) {
    if (is_numeric($datum)) {
        echo "{$datum} is a number\n";
    } else if (is_string($datum)) {
        echo "{$datum} is a string\n";
    }
}


*/

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $things) {
	if (is_array($things)) {
		print_r ($things);
	}	else if (is_float($things)) {
		echo "{$things} is a float\n";
	}	else if (is_array($things)) {
		echo "{$things} is a array\n";
	}	else if (is_null($things)) {
		echo "{$things} is a null\n";
	}	else if (is_string($things)) {
		echo "{$things} is a string\n";
	}
}


