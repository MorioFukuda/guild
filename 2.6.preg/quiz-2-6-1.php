<?php

function my_preg_match($pattern, $subject){

	$result = strpos($subject, $pattern);

	if($result === FALSE){
		return 0;
	}else{
		return 1;
	}

}

echo my_preg_match('def', 'abcdefghijk');
// -> 1
echo my_preg_match('123', 'abcdefghijk');
// -> 0
