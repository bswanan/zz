<?php
function getip()
{
        if (isset($_SERVER)) 
        {
                if (isset($_SERVER[HTTP_X_FORWARDED_FOR]) && strcasecmp($_SERVER[HTTP_X_FORWARDED_FOR], "unknown"))//代理
                {
                        $realip = $_SERVER[HTTP_X_FORWARDED_FOR];
                } 
                elseif(isset($_SERVER[HTTP_CLIENT_IP]) && strcasecmp($_SERVER[HTTP_CLIENT_IP], "unknown"))
                {
                        $realip = $_SERVER[HTTP_CLIENT_IP];
                } 
                elseif(isset($_SERVER[REMOTE_ADDR]) && strcasecmp($_SERVER[REMOTE_ADDR], "unknown"))
                {
                        $realip = $_SERVER[REMOTE_ADDR];
                } 
                else
                {
                        $realip = 'unknown';
                }
        } 
        else
        {
                if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
                {
                        $realip = getenv("HTTP_X_FORWARDED_FOR");
                }
                elseif(getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
                {
                        $realip = getenv("HTTP_CLIENT_IP");
                } 
                elseif(getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
                {
                        $realip = getenv("REMOTE_ADDR");
                } 
                else
                {
                        $realip = 'unknown';
                }
        } 
        return $realip;
}


function tj($mod){

if($mod==1){
$cha = file_get_contents("./cha.txt")+1;
@file_put_contents("./cha.txt",$cha,LOCK_EX);
}else if($mod==2){
$success= file_get_contents("./success.txt")+1;
@file_put_contents("./success.txt",$success,LOCK_EX);
}else{
$uv = file_get_contents("./uv.txt")+1;
@file_put_contents("./uv.txt",$uv,LOCK_EX);
}
}