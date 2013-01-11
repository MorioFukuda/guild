<?php

$numList = array();
$arraySize = 1000000;

for($i=0; $i<$arraySize; $i++){
	$numList[] = mt_rand(0, 100000);
}

function quickSort(&$numList, $left, $right){

	$pivot = $numList[$left];

	$i = $left;
	$j = $right;

	while(true){
	
		while($numList[$i] < $pivot){
			$i++;
		}
	
		while($numList[$j] > $pivot){
			$j--;
		}

		if($i >= $j){
			break;
		}

		$tmp = $numList[$i];
		$numList[$i] = $numList[$j];
		$numList[$j] = $tmp;

		$i++;
		$j--;

	}	

	if($left < $i-1){
		quickSort($numList, $left, $i-1);
	}

	if($right > $j+1){
		quickSort($numList, $j+1, $right);
	}

}
/*
for($i=0; $i<$arraySize; $i++){
	echo $numList[$i] . " ";
}
echo "\n";
*/

quickSort($numList, 0, $arraySize-1);

for($i=0; $i<$arraySize; $i++){
	echo $numList[$i] . " ";
}

?>
