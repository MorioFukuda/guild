<?php

function is_prime($num){

$divisor = 2;
$primeFlag = true;

while($divisor < $num){
	if($num%$divisor==0){
		$primeFlag = false;
	}
	$divisor++;
}

return $primeFlag;

}

for($i=2; $i<=100; $i++){
	if(is_prime($i)){
		echo $i . ' ';
	}
}
?>
