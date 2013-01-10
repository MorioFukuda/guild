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

for($i=1; $i<=100; $i++){
	echo "$i ";
	echo is_prime($i)?"is prime number.\n":"is not prime number. \n";
}
?>
