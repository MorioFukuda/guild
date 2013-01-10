<?php
for($i=1;$i<=100;$i++){
	echo $i%14==0?'Buzzurl ':($i%2==0?'Buzz ':($i%7==0?'url ':"$i "));
}
