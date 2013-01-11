<?php

function f($num){

	$numList = '';

	for($i=0; $i<=$num; $i++){
		$numList .= $i;
	}

	preg_match_all('/1/', $numList, $matches);

	if(count($matches[0]>0)){
		return count($matches[0]);
	}
}

$counter = 0;
$num = 1;

while(true){
	if($num == f($num)){
		$counter++;
	}

//	echo $num . ':' . f($num) . "\n";

	if($counter == 2){
		echo "result: $num";
		break;
	}

	$num++;
}
?>
