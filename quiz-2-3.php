<?php

function isAvailable($userId){
	return preg_match("/^([0-9|[a-zA-Z]|\-){4,10}$/", $userId);
}

echo isAvailable('morio');
// -> true

echo isAvailable('moriofukuda');
// -> false


echo isAvailable('morio1234');
// -> true


echo isAvailable('morio-1234');
// -> true


echo isAvailable('morio-f');
// ->true
?>
