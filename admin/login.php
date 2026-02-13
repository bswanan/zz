<?php
include("../include/common.php");
$title='管理登录';
if($_POST["user"]){
$user = $_POST["user"];
$pwd = $_POST["pwd"];
if($conf['admin'] == $user && $conf['pwd'] == md5($pwd.$conf['salt'])){
   $_SESSION["pwd"] = md5($pwd.$conf['salt']);
  exit("<script type='text/javascript'>alert('登录成功');window.location.href='./index.php'</script>");
}else{
  exit("<script type='text/javascript'>alert('账号或密码错误');window.location.href='./login.php'</script>");
}
}

if(isset($_GET["logout"])){
$_SESSION["pwd"] = null;
session_destroy();
@session_start();
exit("<script type='text/javascript'>alert('退出登录成功');window.location.href='./login.php'</script>");
}
if($_SESSION["pwd"]){
exit("<script type='text/javascript'>alert('您已登录');window.location.href='./index.php'</script>");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>登录丨<?php echo $conf['title']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="泽宇社工系统" name="description" />
        <meta content="zeyudada" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../favicon.ico">

        <!-- App css -->
        <!-- build:css -->
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- endbuild -->

    </head>

    <body class="authentication-bg">
      
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <span class="logo-lg">
                                        <img class="rounded-circle shadow" src="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $conf['zzqq']; ?>&s=5" height="140" alt="">
                                </span>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">登录管理后台</h4>
                                      <!-- ip定位 -->
                                      <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>  
                                      <!-- ip定位 -->
                                    <p class="text-muted mb-4">已保存来访记录<script type="text/javascript">document.write(returnCitySN["cip"]+','+returnCitySN["cname"])</script> </p>
                                </div>

                                <form method="post" action="login.php">

                                    <div class="form-group mb-3">
                                        <label for="user">账号</label>
                                        <input class="form-control" type="text" name="user" placeholder="请输入管理员账号...">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="pwd">密码</label>
                                        <input class="form-control" type="password" name="pwd" placeholder="请输入管理员密码..." >
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">长期登录</label>
                                        </div>
                                    </div>
                                 
                                  <div>
                                    <!-- 极验 -->
                                    <div id="embed-captcha" class="form-group mb-3"></div>
                                    <p id="wait" class="show">正在加载验证码......</p>
                                    <p id="notice" class="hide">请先完成验证</p>
                                    <br>
                                  </div>
                                  
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" id="embed-submit" type="submit"> 登 录 </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
        <footer class="footer footer-alt">
            版权所有 © <?php echo $conf['footer']; ?></footer>

        <!-- App js -->
     	<style>
  .show {
    display: block;
  }
  .hide {
    display: none;
  }
  #notice {
    color: red;
  }
</style>
<script src="http://apps.bdimg.com/libs/jquery/1.9.1/jquery.js"></script>

        <!-- App js -->
     	<?php include '../plug/geetest/geetest_admin.php'; ?> <!-- 极验引入 -->
        <script src="../assets/javascript/app.min.js"></script>
    </body>
</html>
