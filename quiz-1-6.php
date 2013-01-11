<?php

function patternList($digit){
	
	$list = array();
	
	$limit = pow(10, $digit);
	$start = pow(10, $digit-1);
	$num = $start;
	
	$pattern = '/[';
	for($i=1; $i<=$digit; $i++){
		$pattern .= $i;
	}
	$pattern .= ']{' . $digit .'}/';

	while($num < $limit){

		if(preg_match($pattern, $num)){
			$list[] = preg_split('//u', $num, -1, PREG_SPLIT_NO_EMPTY);
		}
		$num++;
	}

	for($i=0, $j=count($list); $i<$j; $i++){
		$list[$i] = array_unique($list[$i]);
		if(count($list[$i]) != $digit){
			unset($list[$i]);
		}
	} 

	return $list;
}

function permutation($string){

	$result = array();
	$dividedString[] = preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);
	
	$patternList = patternList(count($dividedString[0]));

	foreach($patternList as $pattern){
		$string = '';
		foreach($pattern as $pos){
			$string .= $dividedString[0][$pos-1];
		}
		$result[] = $string;
	}
	return $result;
}

echo implode(" ", permutation("123"));
echo "\n";
echo implode(" ", permutation("hoge"));
?>
