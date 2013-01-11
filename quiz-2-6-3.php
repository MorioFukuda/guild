<?php
// str_replaceを利用して、preg_replaceを作るのは、正規表現エンジンを作るのと同じような感じがしたので、
// str_replaceを利用しないで、str_replace的な処理をするものを書くことにした。

function my_str_replace($pattern, $replacement, $subject){

	$result = '';
	$offset = 0;

	$patternLength = strlen($pattern);
	$subjectLength = strlen($subject);

	while($offset < $subjectLength){
		if(strpos($subject, $pattern, $offset) === FALSE){
			break;
		}else{

			//$offset には現在の探索開始地点が入っている。
			//切り出したいのは、$offsetの場所から次のパターンが見つかる場所までの文字。
			//substrで切り出すには切り出すスタートの場所と、切り出す長さが必要。
			//切り出す長さは、次のパターンが見つかった場所に$patternLengthを足したものと$offsetの差。
			//次のパターンが見つからない場合は、$subjectLengthに$patternLengthを足したものと$offsetの差。

			$trimLength = 0;

			if(strpos($subject, $pattern, $offset) === FALSE){
				$trimLength = $subjectLength - $offset;
			}else{
				$trimLength = strpos($subject, $pattern, $offset) - $offset; 
			}

			$result .= substr($subject, $offset, $trimLength) . $replacement;

			$offset = strpos($subject, $pattern, $offset) + $patternLength;
		}
	}

	if(strlen($result) != 0){
		return $result;
	}else{
		echo 'hoge';
		return $subject;
	}
}

echo my_str_replace('ABC', '***', 'ABCdefgABCdefgABCdefgABCdefg');

?>
