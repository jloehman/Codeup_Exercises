
<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('1');

switch($day_of_week) {
    case 1:
    	echo 'monday';
    	break;
        // Output Monday
    case 2:
    	echo 'tuesday';
    	break;
        // Output Tuesday
     case 3:
     	echo 'wednesday';
     	break;
     case 4:
     	echo 'thursday';
     	break;
     case 5:
     	echo 'friday';
     	break;
     case 6:
     	echo 'saturday';
     	break;
     case 7:
     	echo 'sunday';
     	break;
     default:
     	echo 'give me a date';
     	break;
    // etc through day 7
} echo PHP_EOL;










// Set the default timezone
// date_default_timezone_set('America/Chicago');

// // Get Day of Week as number
// // 1 (for Monday) through 7 (for Sunday)
// $day_of_week = date('D');

// echo "value: $day_of_week\n";
// 	switch ($day_of_week) {
// 		case 1:
// 			echo 'monday' . PHP_EOL;
// 			break:
// }





