<?php
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://www.baidu.com");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($curl);
	curl_close($curl);
	echo str_replace("百度", "屌丝", $output);
?>