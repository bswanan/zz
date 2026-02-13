<?php
	$QQ=$row['qq'];
	
	header('Content-Type: text/html;charset=utf-8');
		$urlPre='http://r.qzone.qq.com/fcg-bin/cgi_get_portrait.fcg?g_tk=1518561325&uins=';
		$data=file_get_contents($urlPre.$QQ);
		$data=iconv("GB2312","UTF-8",$data);
		$pattern = '/portraitCallBack\((.*)\)/is';
		preg_match($pattern,$data,$result);
		$result=$result[1];
		$nickname = json_decode($result, true)["$QQ"][6];
		$headimg = "http://q1.qlogo.cn/g?b=qq&nk=$QQ&s=100&t=1547904810";
		$email = $QQ."@qq.com";
		//echo "[{\"nickname\":\"$nickname\",\"touxiang\":\"$headimg\",\"email\":\"$email\"}]";
		
    echo $nickname;
?>