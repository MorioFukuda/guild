<?php

$numList = array();

for($i=1; $i<=100; $i++){
	$numList[$i] = $i;
}

for($i=2; $i<=100; $i+=2){
	$numList[$i] = 'Buzz';
}

for($i=7; $i<=100; $i+=7){
	$numList[$i] = 'url';
}

for($i=14; $i<=100; $i+=14){
	$numList[$i] = 'Buzzurl';
}

for($i=1; $i<=100; $i++){
	echo $numList[$i] . ' ';
}
?>
