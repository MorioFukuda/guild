<?php

function is_prime($num){

	$divisor = 2;

	while($divisor < $num){
		if($num%$divisor==0){
			return false;
		}
		$divisor++;
	}

	return true;

}

for($i=2; $i<=100; $i++){
	if(is_prime($i)){
		echo $i . ' ';
	}
}
?>
