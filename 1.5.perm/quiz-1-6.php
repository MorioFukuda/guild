<?php

function patternList($digit){
	
	$list = array();
	
	$start = pow(10, $digit-1);
	$num = $start;
	
	$pattern = '';
	for($i=$digit; 1<=$i; $i--){
		$pattern .= $i;
	}
	$limit = (int)$pattern;	
	$pattern ='/[' . $pattern . ']{' . $digit .'}/';

	while($num <= $limit){

		if(preg_match($pattern, $num)){
			$list[] = str_split($num);

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
	$dividedString[] = str_split($string);
	
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

echo implode(" ", permutation("hoge-1"));
?>
