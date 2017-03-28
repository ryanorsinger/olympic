<?php 

// Sort an array without using any built-in PHP sort functions

$letters = ['t', 'a', 'z', 'c', 'x'];

$alphabet = range('z', 'a');

foreach($alphabet as $letter) {
	$number = array_search($letter, $array);
	if(is_numeric($number)) {
		$newArray[] = $letter;
	}
}

var_dump($alphabet);
