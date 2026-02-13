function qbang($mod) {
var qq = $('#input').val();
if (qq == '') {
Swal.fire("请输入QQ","请输入QQ账号后重试！",'error');
} else {

if($mod=='cha'){


  Swal.fire({
     title: '请输入key！',
     input: 'password',
     showCancelButton: true,
     confirmButtonText: '确定',
     cancelButtonText: '取消',
     inputValidator: (value) => {
         return new Promise(function(resolve) {
             if (value === "") { // 密码为0
                 Swal.fire("请输入key","请输入key后重试！",'error');
                 
             } else {
                 swal.close() 

layer.close(layer.index);
var qq = $('#input').val();

var key = $('#key').val();
$url = 'http://'+Math.random()+'.tzact.com/qb-api.php?mod=jiabai&key='+value+'&qq='+qq;

var alert_1 = layer.load(0, { shade: false });
$.getJSON($url, function (json) {
layer.close(alert_1);
if (json['code'] == 200 && json['msg'] == 'ok') {
layer.msg('查询成功', { icon: 1 });
$('#qq').val(json['data']['qq']);
$('#jiexi_data').css("display", "block");
} else {
layer.msg(json['msg']);
$('#jiexi_data').css("display", "none");
}
}
);


             }

         })
     }
 })




}
}
}