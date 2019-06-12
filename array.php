<?php
$a=[0=>'A',1=>'B',2=>'C',3=>'D',4=>'E',5=>'F',6=>'G'];
$b=['A'=>'-','B'=>'A','C'=>'A','D'=>'-','E'=>'D','F'=>'E','G'=>'D'];

$i=1;
$p='';
foreach ($a as $key => $value) {	
foreach ($b as $key2 => $value2) {
if($value == $value2){
if($i==1){
echo '<b>'.$value.'</b><br>';
$i++;
}
$p .='|-'.$key2.'<br>';
}

}
$q=rtrim($p,'|-');
echo $q;

$test[$value]=$q;


$i=1;
$p='';
}

echo "<pre>";

foreach ($test as $key => $value) {
	if($value){
	$test2[$key]=$value;
	}
}

//print_r($test2);


$test3=array_keys($test2);
$test4=array_values($test2);
print_r($test3);
print_r($test4);

for ($i=0; $i < count($test3) ; $i++) { 
	
	for ($j=$i; $j < count($test4) ; $j++) { 
		
		$check_explode=explode('|-', $test4[$j]);

		foreach ($check_explode as $key => $value) {
			if($value !=''){
				$check_explode2[]=$value;
			}
		}

		

	}

}


print_r($in_element);

?>
