<?php
include 'include/common.php';
tj(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width">
        <title><?php echo $conf['title']; ?>丨<?php echo $conf['title2']; ?></title>
		<meta name="keywords" content="<?php echo $conf['webkey']; ?>">
		<meta name="description" content="<?php echo $conf['webdes']; ?>">
		<meta itemprop="name" content="<?php echo $conf['title']; ?>丨<?php echo $conf['webdes']; ?>">  
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $conf['url']; ?>/favicon.ico">

        <!-- App css -->
        <!-- build:css -->
		<meta name=”referrer” content=”no-referrer” />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
        <script src="//lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
        <script src="//www.layuicdn.com/layer-v3.1.1/layer.js"></script>
        <link rel="stylesheet" href="//lib.baomitu.com/layer/3.1.1/theme/default/layer.css?v=3.1.1" id="layuicss-layer">
        <script type="text/javascript" src="assets/javascript/sweetalert-dev.js"></script>
        <?php echo $conf['header']; ?>
 
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
								<img class="rounded-circle shadow" src="//q1.qlogo.cn/g?b=qq&nk=<?php echo $conf['zzqq']; ?>&s=5" height="140" alt="">
                        </span>
                        <span class="logo-sm">
                            <img class="rounded-circle shadow" src="//q1.qlogo.cn/g?b=qq&nk=<?php echo $conf['zzqq']; ?>&s=1" height="40" alt="">
                        </span>
                    </a>

                    <!--- 导航 -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">导航</li>

                        <li class="side-nav-item">
                            <a href="./" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span class="badge badge-success float-right">公告</span>
                                <span> 首页 </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="./" class="side-nav-link">
                                <i class="dripicons-list"></i>
                                <span> 功能列表 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="qb.php">Q绑查询</a>
                                </li>
                                <li>
                                    <a href="fc.php">手机反查Q</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo $conf["url"]; ?>/jiabai">QQ号白名单</a>
                                </li>
                               
                                                               <li style="display:none">
                                    <a href="/"></a>
                                </li>
                                <li style="display:none">
                                    <a href="<?php echo $conf["url"]; ?>/cont.php"></a>
                                </li>
                                <li style="display:none">
                                    <a href="/"></a>
                                </li>
                            </ul>
                  
                   
                    <!-- End Sidebar -->

                    <div class="clearfix">

</div>

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
                               <a href="/" class="nav-link right-bar-toggle mr-0">
                             <?php echo $conf["title"]; ?>                                  
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