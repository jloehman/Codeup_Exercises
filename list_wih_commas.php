<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($string, $do_sort = false) 
{
//assign variable
		$array = explode(', ', $string);
		if($do_sort){
		sort($array);
}
$last_item = array_pop($array);

$array[] = "and $last_item";

$string = implode(', ', $array);

return $string;
  // Your solution goes here!
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark ' . PHP_EOL;

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";
// string
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// array
//dilemtor is something that separtes
$physicists_array = explode(', ', $physicists_string);

$last_item = array_pop($physicists_array);

$last_item = "and $last_item";

array_push($physicists_array, $last_item);

$famous_fake_physicists = implode(', ', $physicists_array);

echo "$famous_fake_physicists " . PHP_EOL;


// print_r($physicists_string);

