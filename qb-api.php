<?php
include 'include/common.php';
header('content-type:application/json');
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:GET,POST");

function jiabai($qq, $k)
{
	global $DB;
//加白KEY，可以修改，请妥善保管
    $key = 'jiabai1597';
    if ($key != $k) return ['code' => 201, 'msg' => 'key错误'];
    if ($qq == '') return ['code' => 202, 'msg' => 'QQ不能为空'];
    if (!is_numeric($qq)) return ['code' => 203, 'msg' => 'QQ不规范，查询两行泪！'];
    
    
    if ($DB->get_row("SELECT *  FROM `bmd` WHERE `qq` = '{$qq}'")['qq'] != '') {
        return ['code' => 200, 'msg' => 'QQ：' . $qq . '已在白名单,无需加白'];
    }

    if ($DB->query("INSERT INTO `bmd` (`qq`) VALUES ('{$qq}')")) {
        return ['code' => 200, 'msg' => 'QQ：' . $qq . '成功加入白名单！'];
    } else {
        return ['code' => 200, 'msg'=>'加入白名单失败，系统异常？？'];
    }
}

function cha($qq)
{
	global $DB;
	global $conf;
    if (!is_numeric($qq)) return ['code' => 203, 'msg' => 'QQ不规范，查询两行泪！'];

    if ($qq == '') return ['code' => 201, 'msg' => 'QQ不能为空'];

    if ($DB->get_row("SELECT *  FROM `bmd` WHERE `qq` = '{$qq}'")) return ['code' => 202, 'msg' => '你在查你妈呢'];

    $data = 
json_decode(file_get_contents($conf["qburl"].$qq),true);

    if ($data["data"]["mobile"] == '') return ['code' => 202, 'qq' => $qq, 'msg' => '库中并没有这个记录！'];
    else{
    tj(2);
        return [
            'code' => 200,
            'msg' => 'ok',
            'data' => [
                'qq' => $data["data"]['username'],
                'mobile' => $data["data"]['mobile']
            ],
            'tips'=>"站长QQ3274207001"
        ];
        //可以换成你自己的公告
        }
}
$mod = $_GET['mod'];
$qq = $_GET['qq'];
switch ($mod) {
    case 'cha':
        $json = cha($qq);
        tj(1);
        break;
    case 'jiabai':
        $json = jiabai($qq, $_GET['key']);
        break;
    default:
        $json = ['code' => 202, 'msg' => '非法请求！'];
        break;
        }
echo json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

?>