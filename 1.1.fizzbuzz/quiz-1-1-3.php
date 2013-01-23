<?php

function showNum($num){

	if($num <= 100){
		if($num%14 == 0){
			echo 'Buzzurl';
		}elseif($num%2 == 0){
			echo 'Buzz';
		}elseif($num%7 == 0){
			echo 'url';
		}else{
			echo $num;
		}

		echo ' ';
		showNum($num+1);

	}

}

showNum(1);
?>
