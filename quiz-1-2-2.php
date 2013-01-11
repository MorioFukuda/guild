<?php

$counter =0; 
$answer = 0;
$limit = 100;

for($i=2; $counter <= $limit; $i++){

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
