<?php

for($i=1; $i<=100; $i++){
	if($i % 14 == 0){
		echo 'Buzzurl';
	}else if($i % 2 == 0){
		echo 'Buzz';
	}else if($i % 7 == 0){
		echo 'url';
	}else{
		echo $i;
	}
	echo ' ';
}

?>
