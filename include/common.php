<?php
//先安全检测！
# 定义常量
error_reporting(0);
define('ROOT', dirname(__FILE__).'/');
date_default_timezone_set("PRC");
$date = date("Y-m-d H:i:s");
if($safe!=0) include_once(ROOT."safe.php");
session_start();

# 创建数据库连接
include_once(ROOT."config.php");
include_once(ROOT."db.class.php");
$DB=new DB($host,$user,$pwd,$dbname,$port);

# 引入函数库
include_once ROOT."function.php";

# 遍历数据库基本信息
$conf = $DB->get_row("select * from config where id = 1");
if(!$conf['qburl']) die('您还未配置后台查询API');