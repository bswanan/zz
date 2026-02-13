<?php
$title = "密码修改";
include './head.php';
?>
<!-- 内容标题 -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <h4 class="page-title">密码修改</h4>
    </div>
  </div>
</div>     
<!-- 内容标题 --> 

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">

				<form action="submit.php" method="post">
					<input value="pwd" name="step" style="display: none;"/>
					<div class="form-group row mb-3">
						<label for="user" class="col-3 col-form-label">用户名</label>
						<div class="col-9">
							<input type="text" class="form-control" name="user" id="user" placeholder="不修改请留空">
						</div>
					</div>
					<div class="form-group row mb-3">
						<label for="oldpwd" class="col-3 col-form-label">旧密码</label>
						<div class="col-9">
							<input type="text" class="form-control" name="oldpwd" id="oldpwd" placeholder="请输入旧密码...">
						</div>
					</div>
					<div class="form-group row mb-3">
						<label for="newpwd" class="col-3 col-form-label">新密码</label>
						<div class="col-9">
							<input type="password" class="form-control" name="newpwd" id="newpwd" placeholder="请输入新密码...">
						</div>
					</div>
					<div class="form-group row mb-3">
						<label for="repwd" class="col-3 col-form-label">重复密码</label>
						<div class="col-9">
							<input type="password" class="form-control" name="repwd" id="repwd" placeholder="请确认输入新密码...">
						</div>
					</div>
					<div class="form-group mb-0 justify-content-end row">
						<div class="col-9">
							<button type="submit" class="btn btn-info  ">修 改</button>
						</div>
					</div>
				</form>

			</div> <!-- end card-body -->
		</div> <!-- end card-->
	</div> <!-- end col -->
</div>