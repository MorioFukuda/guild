<?php

for($i=1; $i<=100; $i++){

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
		echo $i . ' ';
	}
}
