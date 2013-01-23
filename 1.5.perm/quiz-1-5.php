<?php

function f($num){

	$numList = '';

	for($i=0; $i<=$num; $i++){
		$numList .= $i;
	}

	$result = substr_count($numList, '1');

	if($result>0){
		return $result;
	}
}

$counter = 0;
$num = 130000;

while(true){
	if($num == f($num)){
		$counter++;
		echo $num . ':' . f($num) . "\n";
	}

	echo $num . ':' . f($num) . "\n";

	if($counter == 2){
		echo "result: $num";
		break;
	}

	$num++;
}
?>
