<?php

function checkZip($zip){
	$zip = preg_replace("/-/", "", $zip);

	if(preg_match("/^[0-9]{7}$/", $zip)){
		return array(mb_substr($zip, 0, 3), mb_substr($zip, 3, 4));
	}else{
		return "郵便番号が正しく有りません。";
	}
}

function checkDateString($date){
	$date = preg_replace("/[-\/]/", "", $date);

	if(!preg_match("/^[0-9]{8}$/", $date)){
		return "日付が正しくありません。";
	}

	$year = mb_substr($date, 0, 4);
	$month = mb_substr($date, 4, 2);
	$day = mb_substr($date, 6, 2);

	if( (1 <= (int)$day && (int)$day <= 31) || (1 <= (int)$month && (int)$month <= 12)){
		return array($year, $month, $day);
	}else{
		return "日付が正しくありません。";
	}
}

function checkPass($password){

	if(!preg_match("/^[!-~]*$/", $password) || preg_match("/<|&{/", $password)){
		return "使用できない文字が使われています。";
	}
	if(8 > strlen($password) || strlen($password) > 32){
		return "パスワードは8字以上、32字以内で作成してください。";
	}

	if(preg_match("/([!-\/]|[:-@]|[[-`]|[{-~])/", $password) && preg_match("/[a-zA-Z]/", $password) && preg_match("/[0-9]/", $password)){
		return $password;
	}else{
		return "パスワードは英字、数字、記号をすべて組み合わせてください";
	}

}


var_dump(checkZip("123-4567"));
var_dump(checkZip("1234567"));
var_dump(checkZip("123-5678"));
var_dump(checkZip("123-456x"));
var_dump(checkZip("123-41567"));

echo "------------\n";

var_dump(checkDateString("20411224"));
var_dump(checkDateString("20410204"));
var_dump(checkDateString("2041-12-24"));
var_dump(checkDateString("2041122a"));
var_dump(checkDateString("2041-a2-24"));

echo "------------\n";

var_dump(checkPass("qwerty1234"));
var_dump(checkPass("qy24+"));
var_dump(checkPass("qw24+あ+"));
var_dump(checkPass("qwerty1234++"));
var_dump(checkPass("qwertyqwertyqwerty1234512345++++++++++"));
?>
