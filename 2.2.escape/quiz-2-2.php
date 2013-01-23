<?php

function h($string){

	$string = mb_convert_encoding($string, 'UTF-8');

	$pattern = array(
		"/&/u",
		"/\"/u",
		"/\'/u",
		"/</u",
		"/>/u",
	);
	
	$replacement = array(
		"&amp;",
		"&quot;",
		"&#039;",
		"&lt;",
		"&gt;",
	);

	return preg_replace($pattern, $replacement, $string);
}

echo h("<img src=\"hoge&xxx.png\" alt='test' />");

?>
