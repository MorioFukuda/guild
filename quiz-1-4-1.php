<?php

$numList = array();
$arraySize = 100;

for($i=0; $i<$arraySize; $i++){
	$numList[] = mt_rand(0, 1000);
}

for($i=0; $i<$arraySize; $i++){

	for($j=0; $j<$arraySize-$i-1; $j++){
		if($numList[$j] > $numList[$j+1]){
			$tmp = $numList[$j+1];
			$numList[$j+1] = $numList[$j];
			$numList[$j] = $tmp;
		}
	}
	
}

for($i=0; $i<$arraySize; $i++){
	echo $numList[$i] . ", ";
}

