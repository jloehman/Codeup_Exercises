<?php



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

