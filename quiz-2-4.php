<?php

function checkEmail($mail){
	return preg_match("/^[a-zA-Z0-9\.\-\_]+@[a-zA-Z0-9\.\-\_]+$/", $mail);
}

echo checkEmail("morio@morio-fukuda.com");
// -> true
echo checkEmail("morio0519@morio-fukuda.com");
// -> true
echo checkEmail("morio.fukuda@morio-fukuda.com");
// -> true
echo checkEmail("morio_0519@morio-fukuda.com");
// -> true
echo checkEmail("@morio-fukuda.com");
// -> false
echo checkEmail("morio@");
// -> false
echo checkEmail("@");
// -> false

?>
