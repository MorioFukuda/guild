<?php

function my_explode($delimiter, $string){

	$result = array();

	$offset = 0;

	$delimiterLength = strlen($delimiter);
	$stringLength = strlen($string);

	while($offset < $stringLength){
		if(strpos($string, $delimiter, $offset) === FALSE){
			break;
		}else{

			$trimLength = 0;

			if(strpos($string, $delimiter, $offset) === FALSE){
				$trimLength = $stringLength - $offset;
			}else{
				$trimLength = strpos($string, $delimiter, $offset) - $offset; 
			}

			if($trimLength != 0){
				$result[] = substr($string, $offset, $trimLength);
			}

			$offset = strpos($string, $delimiter, $offset) + $delimiterLength;
		}
	}

	return $result;
}

var_dump( my_explode('ABC', 'ABCdefgABCdefgABCdefgABCdefg') );

?>
