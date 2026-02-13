<?php
$title = "张浩i手机查询泄露QQ";
include 'head.php';
?>
 <div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<h4 class="page-title">张浩i手机查询泄露QQ</h4>
			</div>
		</div>
	</div>  
	
	 <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
<!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <span class="logo-lg">
                                        <img class="rounded-circle shadow" src="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $conf['zzqq']; ?>&s=5" height="140" alt="">
                                        <!--logo-->
                                </span>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">张浩i手机查询泄露QQ</h4>
                                      
                                </div>
                                <br>
                                
                                  <label for="mobile">Phone Number</label>
                                        <input class="form-control" type="text" id="mobile" placeholder="请输入需要查询的Phone Number...">
                                    
<br>

                                    
                                 
                                  
                                    <div class="form-group mb-0 text-center">
  
<input class="btn btn-primary" type="button" id="btn1" value="查询" onclick="qbang('cha')"/>
               
                                    </div>
<br>

 <div class="form-group mb-3" style="font-weight: bold;display: none;"id="jiexi_data">
                                     <hr> 
                                        <label for="emailaddress">查询结果</label>
                                        <input class="form-control" type="text" id="qq" placeholder="获取中…">
                                    </div>
                              </div>
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


<script>
//这个js是泽宇自己写的，现学的sweetalert，原网站上引用的是一个伪装成装修的加密js
function qbang() {
swal({
html: true,
title: "确定查询吗？",
text: "本功能用于查询您的手机号泄露于哪个QQ号<br><br>确认查询吗？？",
type: "warning",
showCancelButton: true,
cancelButtonText: "取消",
confirmButtonColor: "#DD6B55",
confirmButtonText: "确认查询",
closeOnConfirm: true
}, function() {

layer.close(layer.index);
var qq = $('#mobile').val();
$url = 'bq-api.php?mobile='+qq;


var alert_1 = layer.load(0, { shade: [0.5,'#eee'] });
$.getJSON($url, function (json) {
layer.close(alert_1);
console.log(json);
if (json['code'] == 200 && json['msg'] == 'ok') {
swal("查询成功！", "请勿将本站数据用于违法用途！", "success")
$('#qq').val(json['data']['qq']);
$('#jiexi_data').css("display", "block");
} else {
swal("查询失败", json['msg'], "info")
$('#jiexi_data').css("display", "none");
}
}
);


})
};
</script>

<?php include("foot.php"); ?>