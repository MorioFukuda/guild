<?php

$numList = array();
$arraySize = 10000;

for($i=0; $i<$arraySize; $i++){
	$numList[] = mt_rand(0, 1000);
}

$start_m = microtime();
$start = time();

for($i=0; $i<$arraySize; $i++){

	for($j=0; $j<$arraySize-$i-1; $j++){
		if($numList[$j] > $numList[$j+1]){
			$tmp = $numList[$j+1];
			$numList[$j+1] = $numList[$j];
			$numList[$j] = $tmp;
		}
	}
	
}

$end_m = microtime();
$end = time();
$bench = ($end - $start) + ($end_m - $start_m);
var_dump($bench);

/*
for($i=0; $i<$arraySize; $i++){
	echo $numList[$i] . ", ";
}
*/
