<?php
	$data = "username=yangyun4814@gmail.com&password=yang995224814&remember=1";
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://www.imooc.com/user/login");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);	//执行之后不直接打印出来

	//Cookie
	date_default_timezone_get('PRC');
	curl_setopt($curl, CURLOPT_COOKIESESSION, 1);
	curl_setopt($curl, CURLOPT_COOKIEFILE, "cookiefile");
	curl_setopt($curl, CURLOPT_COOKIEJAR, "cookiefile");
	curl_setopt($curl, CURLOPT_COOKIE, session_name() . '=' . session_id());
	curl_setopt($curl, CURLOPT_HEADER, 0);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);	//页面跳转

	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array("application/x-www-form-urlencoded;charset=utf-8","Content-length: ".strlen($data)));
	curl_exec($curl);

	curl_setopt($curl, CURLOPT_URL, "http://www.imooc.com/space/index");
	curl_setopt($curl, CURLOPT_POST, 0);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type:text/xml"));
	$rtn = curl_exec($curl);
	curl_close($curl);
	echo $rtn;
?>