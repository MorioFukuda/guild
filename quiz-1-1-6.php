<?php

for($i=1; $i<=100; $i++){
	if($i%2==0){
		echo 'Buzz';
	}
	if($i%7==0){
		echo 'url';
	}
	if($i%2!=0&&$i%7!=0){
		echo $i;
	}
	echo ' ';
}

