<?php

$a=[
	[
	'a'=>'Mani',
	'b'=>'Kandan'
	],
	[
	'c'=>'Kutty',
	'd'=>'test'
	]
];


$b=json_encode($a);

$c=json_decode($b,true);

foreach ($c as $key => $value) {
	$d[]=array_values($value);
}

print_r($d);



foreach ($c as $key => $value) {
	print_r($value);
	exit();
}

/*
print_r($c);
*/

?>