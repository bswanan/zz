<?php
include 'include/common.php';
header('content-type:application/json');
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:GET,POST");

function cha($qq)
{
	global $conf;
	global $DB;
    if ($qq == '') return ['code' => 201, 'msg' => '手机号不能为空'];

    if (!is_numeric($qq)) return ['code' => 203, 'msg' => '手机不规范，查询两行泪！'];
    
    if ($DB->get_row("SELECT *  FROM `bmd` WHERE `qq` = '{$qq}'")) return ['code' => 202, 'msg' => '白名单QQ。禁止查询'];

    $data = 
json_decode(file_get_contents($conf["fcurl"].$qq),true);

    if ($data["data"]['mobile'] == '') return ['code' => 202, 'mobile' => $qq, 'msg' => '库中并没有这个记录！'];
    else{
    tj(2);
        return [
            'code' => 200,
            'msg' => 'ok',
            'data' => [
                'qq' => $data["data"]['qq'],
                'mobile' => $data["data"]['mobile']
            ],
            'tips'=>"站长QQ3274207001"
        ];
        //可以放你自己的公告
        }
}
$mod = isset($_GET['mod']) ? $_GET['mod'] : "cha";
$qq = $_GET['mobile'];
switch ($mod) {
    case 'cha':
        $json = cha($qq);
        tj(1);
        break;
    case 'jiabai':
        $json =  ['code' => 203, '加入白名单入口错误，反查入口不支持添加白名单'];
        break;
    default:
        $json = ['code' => 202, 'msg' => '非法请求！'];
        break;
        }
echo json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

?>