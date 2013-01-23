<?php

$maxValue = 100;

$primeList = array();

for($i=0; $i<=$maxValue; $i++){
	$primeList[$i] = $i;
}

//$maxValueの平方根以下の素数を取得する。

$filterList = array();

for($i=2, $root=sqrt($maxValue); $i<$root; $i++){
	$divisor = 2;
	$primeFlag = true;

	while($divisor < $i){
		if($i%$divisor==0){
			$primeFlag = false;
		}
		$divisor++;
	}

	if($primeFlag){
		$filterList[] = $i;
	}
}

$filter = 0;
for($i=0, $limit=count($filterList); $i < $limit; $i++){
	$filter = $filterList[$i];
	while($filter <= $maxValue - $filterList[$i]){
		$filter += $filterList[$i];
		if($primeList[$filter] != 0){
			$primeList[$filter] = 0;
		}
	}
}

for($i=2; $i<$maxValue; $i++){
	if($primeList[$i] != 0){
		echo "$i ";
	}
}

?>
