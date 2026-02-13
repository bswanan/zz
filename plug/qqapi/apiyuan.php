<?php 
// 通过QQ号即可获取用户信息
 
// 获取QQ头像接口
// http://q1.qlogo.cn/g?b=qq&nk=QQ号&s=100&t=1547904810
 
// 获取QQ昵称接口
// http://r.qzone.qq.com/fcg-bin/cg ... =1518561325&uins=QQ号
 
header('Content-Type: text/html;charset=utf-8');
    $QQ=$_GET["qq"];
    if($QQ!=''){
        $urlPre='http://r.qzone.qq.com/fcg-bin/cgi_get_portrait.fcg?g_tk=1518561325&uins=';
        $data=file_get_contents($urlPre.$QQ);
        $data=iconv("GB2312","UTF-8",$data);
        $pattern = '/portraitCallBack\((.*)\)/is';
        preg_match($pattern,$data,$result);
        $result=$result[1];
        $nickname = json_decode($result, true)["$QQ"][6];
        echo "QQ昵称：".$nickname;
        echo "<br/><br/>";
        $headimg = "http://q1.qlogo.cn/g?b=qq&nk=$QQ&s=100&t=1547904810";
        echo "QQ头像：";
        echo "<br/><br/>";
        echo "<img src=\"$headimg\">";
        echo "<br/><br/>";
        $email = $QQ."@qq.com";
        echo "QQ邮箱：".$email;
        echo "<br/><br/>";
        echo "JSON数据：";
        echo "[{\"nickname\":\"$nickname\",\"touxiang\":\"$headimg\",\"email\":\"$email\"}]";
    }else{
        echo "请输入qq号！";
    }
?>