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

$symbols = array ('!','@','#','$','&','*');

$numbers = array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

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

//new array for creating the password, starts empty
$selection = array();

if ($number == true) {
	$randNum = array_rand($numbers);
	$addNum = $numbers[$randNum];
	array_push($selection, $addNum);
}  

if ($symbol == true) {
	$randSym = array_rand($symbols);
	$addSym = $symbols [$randSym];
	array_push($selection, $addSym);
} 

//the result if no number of words is picked, if it's zero, past max, or alpha
$error = 'Please submit a valid number of words.';

$max = count($words);
if ($count>0 AND $count<8) {
	for ($i = 0; $i < $count; $i++) {
	    $pick = rand(0, $max-1);
	    $word = $words[$pick];
	    array_push($selection, $word);
	} $password = implode (" ", $selection);

}  else {
	$password = $error;
}

