<?php
function expansion($var) {
	if (preg_match("/^[A-Za-z0-9А-Яа-яёЁ]+\.[a-z]+$/", $var)) {
		if(preg_match("/\.[a-z]+/", $var, $matches));
		$result = substr($matches[0], 1);
		return $result;
	} else {
	    echo "Ошибка";
	}
}

function file_name($string){
	if(preg_match("/^[a-z0-9а-я_]+\.[a-z0-9]+$/", $string)){
		if(preg_match("/(\.zip|\.rar|\.7z|\.arc|\.arj|\.jar|\.tar)/", $string)){
			return "Это архив";
		}
		else if(preg_match("/(\.aac|\.adx|\.aiff|\.amr|\.cdda|\.dts|\.flac|\.midi|\.mp2|\.mp3|\.musepack|\.mod|\.ogg|)/", $string)){
			return "Это аудиофайл";
		}
		else if(preg_match("/(\.avi|\.ogg|\.mkv|\.mp4|\.vob)/", $string)){
			return "Это видеофайл";
		}
		else if(preg_match("/(\.psd|\.tiff|\.bmp|\.jpeg|\.gif|\.eps|\.png)/", $string)){
			return "Это картинка";
		}
		else
			return "Формат не опознан";
	}
	return "Пожалуйста введите данные";
}

function tags($string){
   if(preg_match("^<title>(.+)</title>$", $string, $matches)){
	return $matches[1];
	}
	return "Тег title не содержится в данном коде";
}

function href($string){ 
       if(preg_match_all("/^<a(.+)>(.+)<\a>/$", $string, $matches)){
		$str = '';
        for ($i = 0; $i < count($matches[1]); $i++){
             $str .= $matches[1][$i];
             $str .= "<br>";
                }

         if(preg_match_all("/^href=(?:\"|\')+(.+?)(?:\"|\')+$/", $string, $matches2)){
              for($i=0;$i<count($matches[1]);$i++)
             echo $matches2[1][$i]."<br>";
            return;
                      }
                     else{

                  return "В данном html-коде нет ссылок";
            }
        }
}


function Pictures($string){ 
	if(preg_match_all("/^<img(.+)>+$/", $string, $matches)){
		$str = '';
			for ($i = 0; $i < count($matches[1]); $i++){ 
				$str .= $matches[1][$i];
				$str .= "<br>";
			}

    if(preg_match_all("^src=(?:\"|')+(.+?)(?:\"|')+$", $string, $matches2)){
    	    for($i=0;$i<count($matches[1]);$i++)
	         echo $matches2[1][$i]."<br>"; 
		    return;
                   }
                    else{ 

	            return "Пожалуйста введите данные";
		    }
    }
}


function string_strong($str, $text){
	$str="<strong>$str</strong>";
	$str="/$str/";
	if(preg_match($str, $text)){
		echo preg_replace($str, $str, $text);
		}

	return "Строка не найдена";
}

function Smiles($var){
	$res = $var;
	$smile = "/\:\)/";
	$wink = "/\;\)/";
	$sad = "/\:\(/";
	     $res = preg_replace($smile, "<img src='smile.png' alt=':)'>", $res);
	       $res = preg_replace($wink, "<img src='wink.png' alt=';)'>", $res);
	         $res = preg_replace($sad, "<img src='sad.png' alt=':('>", $res);
	if ($res === $var){
		return "Отсутсвуют";
	}
	return $res;
}

function probel($var){
	$var = preg_replace("/(\ ){2,}/", " ", $var);
	return $var;
}
