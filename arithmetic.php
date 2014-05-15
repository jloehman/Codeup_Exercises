<?php

function check($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
    return true . PHP_EOL;
  }else{
    return false . PHP_EOL;
    echo "ERROR!\n";

  }
}

function add($a, $b) {
  if (check($a, $b)) {
    return $a + $b . PHP_EOL;
  }
}

echo add(1,2);


function minus($a, $b) {
  if (check($a, $b)) {
    return $a - $b . PHP_EOL;
  }
}

echo minus(3,2);


function multiply($a, $b) {
  if (check($a, $b)) {
    return $a * $b . PHP_EOL;
  }
}

echo multiply(2,2);

function divide($a, $b) {
  if (check($a, $b)) {
    if ($b == 0) {
      echo "ERROR\n";
      return false;
    }
    return $a / $b . PHP_EOL;
  }
}

echo divide(3,0);


function modulus($a, $b) {
  if (check($a, $b))  {
    return $a % $b . PHP_EOL;
  }
}

echo modulus(1,2);


// //example on 'return with function'

// function add($a, $b) {
// 	if (is_numeric($a) && is_numeric($b)){
// 		return $a + $b;
// 	} else {
// 		return "ERROR! \$a and/or \$b was not a number!\n";
// }
// }


// 	$c = 5;
// 	$d = 25;
// 	$e = 4.6;
// 	$f = pi();

// $result = add('15', $e);
// var_dump($result);

// $result2 = add(5,6);
// var_dump($result2);
// echo add($result, $reulst2) . PHP_EOL;














// function divide_else($a, $b) {
// 	if ($b == 0){
// 		return "Cannot divide by 0";
// 	}else{
// 		return $a / $b;
// 	}
// }




// function divide_return






// function error(){
// 	 if (!is_numeric(!$a) || !is_numeric(!$b) {
// 	return "ERROR\n";
// 	}else{
// 		return "FALSE";
// 	}
// }
// function add($a, $b) {
// if (is_numeric($a) && is_numeric($b)) {
// 	return $a + $b;
// // 		echo $a + $b . PHP_EOL;
//  	} else {
//  		return error();
// //     // echo $a + $b . PHP_EOL;
// // }
// // }
// // add(1,"a");
