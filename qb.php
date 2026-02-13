<?php
$title = "张浩iQ绑泄露查询";
include 'head.php';
?>
 <div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<h4 class="page-title">张浩iQ绑泄露查询</h4>
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
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">张浩iQ绑泄露查询</h4>
                                      
                                </div>
                                <br>
                                
                                  <label for="mobile">QQNumber</label>
                                        <input class="form-control" type="text" id="input" placeholder="输入QQNumber">
                                    
<br>
                                  
                                    <div class="form-group mb-0 text-center">
  
<input class="btn btn-primary" type="button" id="btn1" value="查询" onclick="qbang()"/>
               
                                    </div>
<br>

 <div class="form-group mb-3" style="font-weight: bold;display: none;" id="jiexi_data">
                                     <hr> 
                                        <label for="emailaddress">密保手机</label>
                                        <input class="form-control" type="text" id="mobile" placeholder="获取中…">
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
text: "仅供查询自己的QQ号码<br>如果不是请立即退出本页面！<br>否则发生的一切后果站长不负责<br><br>确认查询吗？？",
type: "warning",
showCancelButton: true,
cancelButtonText: "取消",
confirmButtonColor: "#DD6B55",
confirmButtonText: "确认查询",
closeOnConfirm: true
}, function() {

layer.close(layer.index);
var qq = $('#input').val();
$url = 'qb-api.php?mod=cha&qq='+qq;


var alert_1 = layer.load(0, { shade: [0.5,'#eee'] });
$.getJSON($url, function (json) {
layer.close(alert_1);
console.log(json);
if (json['code'] == 200 && json['msg'] == 'ok') {
swal("查询成功！", "请勿将本站数据用于违法用途！", "success")
$('#mobile').val(json['data']['mobile']);
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