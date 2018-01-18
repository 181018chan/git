<?php
	header("Content-Type: text/html; charset=UTF-8");
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://m.app.melon.com/cds/main/mobile4web/main_chart.htm");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 5.0; Nexus 5 Build/WHALE) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Whale/1.0.38.9 Mobile Safari/537.36");
	$output = curl_exec($ch);
	curl_close($ch);
	$data = str_replace(array("\r\n","\r","\n"), "", $output);
	$data = str_replace("\t", "", $data);
	$data = str_replace('<span class="sprite limit19 hide">19금</span>', "", $data);
	$re = '/<p class="title ellipsis">(.*?)<\/p><!-- max line 1 --><span class="name ellipsis">(.*?)<\/span>/';
	preg_match_all($re, $data, $matches, PREG_SET_ORDER, 0);
	for ($x = 0; $x < 50; $x++) {
		echo '<li class="meloncharts--item">' .
		'<a class="meloncharts--primary-item">' .
		'<span class="meloncharts--counters">' . ($x + 1) . '. </span>' .
'<span class="meloncharts--music-info" title="' . $matches[$x][1] . ' - ' . $matches[$x][2] . '">' . $matches[$x][1] . ' - ' . $matches[$x][2] . '</span>' .
		'</a>' .
		'<div class="meloncharts--secondary-item">' .
		'<a class="meloncharts--play" title="재생"></a>' .
		'<a class="meloncharts--download" title="다운로드"></a>' .
		'<a class="meloncharts--add" title="추가"></a>' .
		'</div>' .
		'</li>';
	}
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://m.app.melon.com/cds/main/mobile4web/main_chartPaging.htm?startIndex=51&pageSize=50&rowsCnt=50");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 5.0; Nexus 5 Build/WHALE) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Whale/1.0.38.9 Mobile Safari/537.36");
	$output = curl_exec($ch);
	curl_close($ch);
	$data = str_replace(array("\r\n","\r","\n"), "", $output);
	$data = str_replace("\t", "", $data);
	$data = str_replace('<span class="sprite limit19 hide">19금</span>', "", $data);
	$re = '/<p class="title ellipsis">(.*?)<\/p><!-- max line 1 --><span class="name ellipsis">(.*?)<\/span>/';
	preg_match_all($re, $data, $matches, PREG_SET_ORDER, 0);
	for ($x = 0; $x < 50; $x++) {
		echo '<li class="meloncharts--item">' .
		'<a class="meloncharts--primary-item">' .
		'<span class="meloncharts--counters">' . ($x + 51) . '. </span>' .
'<span class="meloncharts--music-info" title="' . $matches[$x][1] . ' - ' . $matches[$x][2] . '">' . $matches[$x][1] . ' - ' . $matches[$x][2] . '</span>' .
		'</a>' .
		'<div class="meloncharts--secondary-item">' .
		'<a class="meloncharts--play" title="재생"></a>' .
		'<a class="meloncharts--download" title="다운로드"></a>' .
		'<a class="meloncharts--add" title="추가"></a>' .
		'</div>' .
		'</li>';
	}
?>