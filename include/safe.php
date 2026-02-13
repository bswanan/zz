<?php
//这个记录ip地区和ua等等是我写的，针对本源码安全强度已经调到最高了
function customError($errno, $errstr, $errfile, $errline)
{
echo "<b>发生错误:</b> [$errno],错误在行 $errline 文件 $errfile<br />";
die();
}
set_error_handler("customError",E_ERROR);
$getfilter="'|(and|or)\\b.+?(>|<|=|in|like)|\\/\\*.+?\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT|UPDATE.+?SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE).+?FROM|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";
$postfilter="\\b(and|or)\\b.{1,6}?(=|>|<|\\bin\\b|\\blike\\b)|\\/\\*.+?\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT|UPDATE.+?SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE).+?FROM|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";
$cookiefilter="\\b(and|or)\\b.{1,6}?(=|>|<|\\bin\\b|\\blike\\b)|\\/\\*.+?\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT|UPDATE.+?SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE).+?FROM|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";
function StopAttack($StrFiltKey,$StrFiltValue,$ArrFiltReq){  

if(is_array($StrFiltValue))
{
    $StrFiltValue=implode($StrFiltValue);
}  
if (preg_match("/".$ArrFiltReq."/Uixs",$StrFiltValue)==1){
$json = file_get_contents("http://api.map.baidu.com/location/ip?ak=AMXeiw9ngfLYaN1MHLLMo0GL6IDiarUK&coor=bd09ll&ip=". $_SERVER['HTTP_X_FORWARDED_FOR']);

$redata = json_decode($json, true);
$address = $redata["address"];
$x = $redata["content"]["point"]["x"];
$y = $redata["content"]["point"]["y"];

$http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
$url = $http_type.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] ;

slog('<br><br>操作IP: '.$_SERVER['HTTP_X_FORWARDED_FOR'].'<br>地址：'.$address.'<br>X坐标：'.$x.'<br>Y坐标：'.$y.'<br>'.$_SERVER['HTTP_USER_AGENT'].'<br>操作时间: '.strftime('%Y-%m-%d %H:%M:%S').'<br>操作页面:'.$_SERVER['PHP_SELF'].'<br>提交方式: '.$_SERVER['REQUEST_METHOD'].'<br>提交参数: '.$StrFiltKey.'<br>提交数据: '.$StrFiltValue.'<br>访问的地址：'.$url.'<br>来源地址（为空就是手动输入）：'.$_SERVER['HTTP_REFERER'].'<br>当前请求的Accept头部的内容：'.$_SERVER['HTTP_ACCEPT'].'<br>');
        exit("<b><h1>请注意！您正在进行非法操作！您的访问信息已经被记录！</h1></b>");
}      
}  
//$ArrPGC=array_merge($_GET,$_POST,$_COOKIE);
foreach($_GET as $key=>$value){
    StopAttack($key,$value,$getfilter);
}
foreach($_POST as $key=>$value){
    StopAttack($key,$value,$postfilter);
}
foreach($_COOKIE as $key=>$value){
    StopAttack($key,$value,$cookiefilter);
}
if (file_exists('update.php')) {
    echo "请重命名文件update.php，防止黑客利用<br/>";
    die();
}
function slog($logs)
{
  $toppath=$_SERVER["DOCUMENT_ROOT"]."/waflog.htm";
  $Ts=fopen($toppath,"a+");
  fputs($Ts,$logs."\r\n");
  fclose($Ts);
}
?>