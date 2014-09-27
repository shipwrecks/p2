<?php

$words = array (
	'basil',
	'thyme',
	'oregano',
	'tarragon',
	'paprika',
	'miso',
	'lemongrass',
	'pepper',
	'salt',
	'cinnamon',
	'clove',
	'vanilla',
	'nutmeg',
	'anise',
	'cumin',
	'coriander',
	);

$symbols = array (
	'!',
	'@',
	'#',
	'$',
	'&',
	'*',
	);

$numbers = array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

print_r ($words);


if (isset($_GET['count'])) {
    $count = $_GET['count'];
} 

if (isset($_GET['number'])) {
    $number = true;
} else {
    $number = false;
}

if (isset($_GET['symbol'])) {
    $symbol = true;
} else {
    $symbol = false;
}

$selection = array(); //empty array

$max = count($words); //number of elements in original array
if ($count>0 AND $count<8) {
	for ($i = 0; $i < $count; $i++) {
	    $pick = rand(0, $max-1);
	    $word = $words[$pick];
	    echo $pick.' of '.$max; //just for testing
	    echo $word.'<br />';  //just for testing
	    array_push[$selection, $word];
	}
} else {
	echo 'You did not submit a valid number of words.';
}

