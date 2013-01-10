<?php

$counter = 0;
$answer = 0;
$limit = 10;

for($i=1; $counter <= $limit; $i++){

	$primeFlag = true;
	$num = 2;

	while($i > $num){
		if($i%$num == 0){
			$primeFlag = false;
			break;
		}
		$num++;
	}

	if($primeFlag){
		$counter++;
		if($counter == $limit){
			$answer = $i;
		}
	}

}

echo $answer;
