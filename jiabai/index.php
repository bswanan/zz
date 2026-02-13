<?php
include '../include/common.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="lan">
  <title>Q绑白名单添加 - <?php echo $conf['title']; ?></title>
  <meta name="keywords" content="Q绑白名单添加">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/nucleo.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/nutssss.css">
  <link rel="stylesheet" type="text/css" href="css/lan.css">
  <link rel="stylesheet" href="css/fortawesome.css" type="text/css">
  <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="css/opao.min.css" type="text/css">
  <script src="js.js"></script>
  <?php echo $conf['header']; ?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <script src="//lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//lib.baomitu.com/layer/3.1.1/layer.js"></script>
  <link rel="stylesheet" href="http://lib.baomitu.com/layer/3.1.1/theme/default/layer.css?v=3.1.1" id="layuicss-layer">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">


</head>

<body style="min-height: 100vh;">

    <div class="header bg-info pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">QQ绑白名单</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  
                  <li class="breadcrumb-item active" aria-current="page">Q绑白名单添加</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card-wrapper">
            <!-- Custom form validation -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">输入账号即可添加</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
<form class="needs-validation" >
                  <div class="form-row">
                    <div class="col-md-12 mb-3"><label class="form-control-label">QQ账号：</label><input id="input" type="text" class="form-control" value="" placeholder="输入QQ账号"></div>
                  </div>
                 

<input class="btn btn-info form-control" type="button" id="btn1" value="查询" onclick="qbang('cha')"/>

                  <hr>
                <div class="form-row">
                    <div class="col-md-12 mb-3 "style="font-weight: bold;display: none;"id="jiexi_data" ><label class="form-control-label">密保手机:</label><input id="qq" type="text" class="form-control" value=""></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 主页结束 -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
     <p class="card-text"><?php echo $conf['webgg']; ?></p>
              </li>
            </ul>
          </div>
        </div>
        
      </footer>
    </div>

  <div style="left: -1000px; overflow: scroll; position: absolute; top: -1000px; border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;">
    <div style="border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;"></div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 





	<script>
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
$url = '../qb-api.php?mod=jiabai&key='+value+'&qq='+qq;

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
</script>
  
</body>

</html>
