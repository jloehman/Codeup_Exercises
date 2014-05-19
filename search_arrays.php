<?php


// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//$result = array_has_value('Tina', $names);
//var_dump($result);

function array_has_value($needle, $haystack)
{

	if (array_search($needle, $haystack) === false)
	{
return false;
	}
	else 
	{
return true;
	}
	// echo $names[$haystack];
	// return array_search($needle, $haystack);
}



// var_dump(array_has_value('Tina', $names));
// var_dump($array_common_count($names, $compare));


function array_common_count($array1, $array2)
{
	$count = 0;

	foreach ($array1 as $value)
	{
		if(array_has_value($value, $array2))
		{
			$count++;
	}
		
}
	return $count;
}

var_dump(array_common_count($names, $compare));




//if ($names == '') {
    //echo $compare[$names];}

// print_r($names);

// $fruits = array('lemon', 'orange', 'banana', 'apple');

// sort($fruits);

// foreach ($fruits as $key => $val) {
// 	echo "$key = $val\n";
