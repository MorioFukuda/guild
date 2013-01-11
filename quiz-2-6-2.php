<?php

function my_preg_match_all($pattern, $subject){

	$offset = 0;
	$subjectLength = strlen($subject);
	$patternLength = strlen($pattern);

	$result = 0;

	while($offset < $subjectLength){
		if(strpos($subject, $pattern, $offset) === FALSE){
			break;
		}else{
			$result++;
			$offset = strpos($subject, $pattern, $offset) + $patternLength;
		}
	}

	return $result;
}

var_dump(my_preg_match_all('ABC', 'ABCdefgABCdefgABCdefgABCdefg'));
var_dump(my_preg_match_all('ABC', 'ABCdefgABCdefgABCdefgABCdefgAB'));
var_dump(my_preg_match_all('123', 'ABCdefgABCdefgABCdefgABCdefg'));

?>
