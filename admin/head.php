<?php
include "../include/common.php";
if ($_SESSION['pwd']!=$conf['pwd']) {
//Lan的官方站存在致命性安全BUG，他的后台不仅用的默认admin目录，而且未登录的跳转仅用了echo，导致后面的内容继续输出
	exit("<script>window.location.href='./login.php';</script>");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width">        <title><?php echo $conf['title'];?>丨<?php echo $conf['title2'];?></title>
		<meta name="keywords" content="<?php echo $conf['webkey'];?>">
		<meta name="description" content="<?php echo $conf['webdes'];?>">
		<meta itemprop="name" content="<?php echo $conf['title']?>丨<?php echo $conf['title2']?>">  
        <!-- App favicon -->
        <link rel="shortcut icon" href="../favicon.ico">

        <!-- App css -->
        <!-- build:css -->
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/sweetalert.css">
        <script src="//lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/javascript/sweetalert-dev.js"></script>
        <!-- endbuild -->
      
        <!-- css -->
        <style type="text/css">
        .foot-left{
            float: left;
            font-size: 12px;
            margin-left: 10px;
            margin-top: 6px;
            font-family: "微软雅黑";
            font-weight: bold;
        }
        .foot-right{
            float: right;
            font-size: 14px;
            margin-right: 10px;
            margin-top: 6px;
        }
        </style>
        <!-- css -->
    </head>

    <body>

        <!-- 侧栏 -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO图标 -->
					<a class="logo text-center mb-4 active">
                        <span class="logo-lg">
								<img class="rounded-circle shadow" src="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $conf['zzqq']; ?>&s=5" height="140" alt="">
                        </span>
                        <span class="logo-sm">
                       <img class="rounded-circle shadow" src="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $conf['zzqq']; ?>&s=1" height="40" alt="">
                        </span>
                    </a>

                    <!--- 导航 -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">管理员导航</li>

                        <li class="side-nav-item">
                            <a href="./index.php" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span> 后台首页 </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="" class="side-nav-link">
                                <i class="dripicons-list"></i>
                                <span> 管理 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li style="display:none">
                                    <a href="./index.php">后台首页</a>
                                </li>
                                <li>
                                    <a href="./system.php">系统管理</a>
                                </li>
                                <li>
                                    <a href="./password.php">密码修改</a>
                                </li>
                            </ul>
                        </li>
                      
                        <li class="side-nav-item">
                          <a href="../index.php" class="side-nav-link">
                            <input type="submit" class="btn btn-warning btn-rounded" style="width:100%" value="返回主站">
                          </a>
                        </li> 

    					<li class="side-nav-item">
                            <a href="login.php?logout" class="side-nav-link">
                                <input type="submit" class="btn btn-danger btn-rounded" style="width:100%" value="登出后台">
                            </a>
                          </li> 
                                       
                    </ul>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- 导航 -->

            </div>
            <!-- 侧栏 -->

            <!-- ============================================================== -->
            <!-- 分界线 -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- 顶栏 -->
                    <div class="navbar-custom">
                      
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list">
                                <a href="" class="nav-link right-bar-toggle mr-0">
                                        <!-- ip定位 -->
                                  已保存来访记录
                                  <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>  
                                  <script type="text/javascript">document.write(returnCitySN["cip"]+','+returnCitySN["cname"])</script>    
                                        <!-- ip定位 -->
                                </a>
                            </li>
                        </ul>


                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <!-- 顶栏 -->

                    <!-- Start Content-->
                    <div class="container-fluid">
						<!-- 头部引入页面-->