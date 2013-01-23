<?php

//$maxValueまでの素数の一覧をarrayで返す関数
function primeList($maxValue){

	$numList = array_fill(1, $maxValue, true);

	for($i=2, $limit=sqrt($maxValue); $i<=$limit; $i++){
		//$maxValue以下の合成数は、$maxValueの平方根以下の素数の倍数だから、その倍数をふるいにかける。
		//今は$maxValueの平方根以下の数全てでふるいにかけている。
		for($j=$i*2; $j<=$maxValue; $j+=$i){
			$numList[$j] = false;
		}
	}

	//1は素数の定義上素数ではないから、ここで外しておく。
	$numList[1] = false;

	$primeList = array();

	foreach($numList as $num => $value){
		if($value == true){
			$primeList[] = $num;
		}
	}

	return $primeList;
}

echo implode(', ', primeList(100));

?>
