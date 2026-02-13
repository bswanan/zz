<?php
$title = "后台首页";
include './head.php';
?>
<!-- 内容标题 --> 


<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <h4 class="page-title">后台首页</h4>
    </div>
  </div>
</div>
		<!-- Personal-Information -->
		<div class="card">
			<div class="card-body">
				<h4 class="header-title mt-0">系统详情卡</h4>
				<p class="text-muted font-13">
					从泽宇大大t2模板改进
				</p>

				<hr>

				<div class="text-left">

					<p class="text-muted"><strong>PHP版本 :</strong> <span class="ml-2"><?php echo(phpversion()); ?></span></p>

					<p class="text-muted"><strong>运行OS :</strong> <span class="ml-2"><?php echo(PHP_OS); ?></span></p>

					<p class="text-muted"><strong>系统版本 :</strong>
						<span class="ml-2"> 张浩V1.0 </span>
					</p>

<p class="text-muted"><strong>更新时间 :</strong> <span class="ml-2">2021/01/28</span></p>

<p class="text-muted"><strong>联系泽宇客服：</strong>
						<span class="ml-2"> <a target="_blank" href="http://kefu.zeyudada.cn">点击跳转客服地址</a> </span>
					</p>

				</div>
			</div>
		</div>
		<!-- Personal-Information -->
	</div> <!-- end col-->

	<div class="col-md-8">	
		<!-- End Chart-->

		<div class="row">
			<div class="col-sm-4">
				<div class="card tilebox-one">
					<div class="card-body">
						<i class="mdi mdi-heart-box float-right text-muted"></i>
						<h6 class="text-muted text-uppercase mt-0">接口查询总数</h6>
						<h2 class="m-b-20"><?php echo $cntcont;?>次</h2>
					</div> <!-- end card-body-->
				</div> <!--end card-->
			</div><!-- end col -->

			<div class="col-sm-4">
				<div class="card tilebox-one">
					<div class="card-body">
						<i class="mdi mdi-tooltip-text float-right text-muted"></i>
						<h6 class="text-muted text-uppercase mt-0">本小时查询数</h6>
						<h2 class="m-b-20"><?php echo $cntspk;?>次</h2>
					</div> <!-- end card-body-->
				</div> <!--end card-->
			</div><!-- end col -->

			<div class="col-sm-4">
				<div class="card tilebox-one">
					<div class="card-body">
						<i class="mdi mdi-thumb-up float-right text-muted"></i>
						<h6 class="text-muted text-uppercase mt-0">成功总数</h6>
						<h2 class="m-b-20"><?php echo $rowzan[0];?>个</h2>
					</div> <!-- end card-body-->
				</div> <!--end card-->
			</div><!-- end col -->

		</div>
		<!-- end row -->
		 <!-- end row-->
	</div>
	<!-- end col -->
</div>
