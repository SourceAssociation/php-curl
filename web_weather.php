<?php
	$data = "theCityName=北京";
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://www.webxml.com.cn/WebServices/WeatherWebService.asmx/getWeatherbyCityName");
	curl_setopt($curl, CURLOPT_HEADER, 0);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array("application/x-www-form-urlencoded;charset=utf-8","Content-length: ".strlen($data)));
	$rtn = curl_exec($curl);
	if (!curl_errno($curl)) {
		echo $rtn;
	}else{
		echo "Curl error: " .curl_error($curl);
	}
	curl_close($curl);
?>