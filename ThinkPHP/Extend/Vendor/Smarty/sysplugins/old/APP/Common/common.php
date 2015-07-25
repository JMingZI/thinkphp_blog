<?php

	function p($array) {
		dump($array, 1, '<pre>', 0);
	}

	function change_substr($str, $length){
		$str1 = $str;
		$str = str_replace("&nbsp;", "",$str1);
		$str = str_replace("&lt;", "<", $str);
		$str = str_replace("&gt;", ">", $str);
		$str = str_replace("&quot;", '"', $str);
		$str = str_replace("&amp;", '&', $str);
		$str = str_replace("&#039;", "'", $str);
		$str = str_replace("\r\n", "<br />", $str);
		$str = str_replace(PHP_EOL, "<br />", $str);
		$str = strip_tags($str);
		$str = mb_substr($str, 0, $length, 'utf-8');
		return $str;
	}

	function days($time){
		if( date('Y', time()) == date('Y', $time) ){
			if( date("m", time()) == date("m", $time) ){
				if( date('d', time()) == date('d', $time) ){
					if( date('H', time()) == date('H', $time) ){
						if( date('i', time()) == date('i', $time) ){
							return date('s', time())-date('s', $time)."秒前";
						}
						else
							return date('i', time())-date('i', $time)."分钟前";
					}
					else
						return date('H', time())-date('H', $time)."小时前";
				}
				else
					return date('d', time())-date('d', $time)."天前";
			}
			else
				return date("m", time())-date("m", $time)."个月前";
		}
		else
			return date('Y', time())-date('Y', $time)."年前";
	}
	
	function change_html_tags($str){
		$str = str_replace("&nbsp;", " ",$str);
		$str = str_replace("&lt;", "<", $str);
		$str = str_replace("&gt;", ">", $str);
		$str = str_replace("&quot;", '"', $str);
		$str = str_replace("&amp;", '&', $str);
		// $str = str_replace("\r\n", "<br />", $str);
		// $str = str_replace(PHP_EOL, "<br />", $str);
		$str = str_replace("&#039;", "'", $str);
		return $str;		
	}

	function tagFont($num,$str){
		if( $num >=24 )
			$size = 24;
		else
			$size = 10 + $num;
		return '<span style="font-size:'.$size.'px;">'.$str.'</span>';
	}
?>