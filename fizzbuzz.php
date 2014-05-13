git<?php

echo " Lets Start !\n";


for ($a = 1; $a <= 100; $a++) {
    if (($a %3 == 0) && ( $a %5 == 0)){
    	echo "FizzBuzz\n";
 	} elseif ($a %3 == 0){
 		echo "Fizz\n";
 	} elseif ($a %5 == 0){
 		echo "Buzz\n";
 	} else {
 		echo $a . PHP_EOL;
 	} 
 }

/*define ('MIN', 1);
define ('MAX', 100);
define ('multi_3', 'Fizz')
define ('multi_5', 'Buzz')
define ('multi_15', 'FizzBuzz')

$MIN = 1;
$MAX = 100
$fizz % 3;
$buzz % 5;


