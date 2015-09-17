<?php
	/**
	 * wengdo后台添加用户
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";


// 接收url参数
      $id=isset($_GET["id"])?(int)$_GET["id"]:0;
	$id_data=editTable("SELECT * FROM wd_register WHERE register_id={$id}");

// 表单接收
	if($_POST)
	{
		$username=$_POST["username"];
		$password=$_POST["password"];
		$email=$_POST["email"];
		$description=$_POST["description"];
		$gender=$_POST["gender"];
		$add_time=strtotime($_POST["add_time"]);

		updateTable("UPDATE `wd_register` SET `register_name`='{$username}',`register_password`='{$password}',`register_email`='{$email}',`register_gender`='{$gender}',`register_per_products`='{$description}',`register_add_time`='{$add_time}' WHERE register_id={$id}","./user_gl.php");
	}

?>	

<!doctype html>
<html lang="zh-ch">
	<!-- container-fluid -->
	<head>
		<title>文豆-后台管理</title>
		<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="; charset=utf-8" />
		<link rel="stylesheet" href="bootstrap.min.css" />
		<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="../css/unicorn.main.css" />
		<link rel="stylesheet" href="../css/uniform.css" />
		<link rel="stylesheet" href="../css/unicorn.grey.css" class="skin-color" />
  </head>
	<body>
    <!-- 包含头部 -->
		<?php require "../include/admin_header.php" ?>
		 
    <!-- 中间内容 -->
		<div id="content">
			<div id="content-header">
				<h1>用户管理</h1>
			</div>
			<div id="breadcrumb">
				<!-- <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> -->
       		 <a href="index.php"><i class="icon-home"></i> 首页</a>
				<a href="article.php"><i class="icon-th-list"></i> 用户管理</a>
				<a href="article.php" class="current"><i class="icon-th-list"></i> 添加用户</a>
			</div>

			<div class="container-fluid">
			<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>添加用户</h5>
							</div>
							<div class="widget-content nopadding">
								<form method="post" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">用户名称</label>
										<div class="controls">
											<input type="text" name="username" value="<?php echo $id_data['register_name'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">用户密码</label>
										<div class="controls">
											<input type="text" name="password" value="<?php echo $id_data['register_password'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">电子邮件</label>
										<div class="controls">
											<input type="text" name="email" value="<?php echo $id_data['register_password'] ?>">
										</div>
									</div>
								  <!--	<div class="control-group">
					          <label class="control-label">性别</label>
					         <div class="controls ">
						              <input type="radio" value="1" checked="checked" name="gender">男
						              <input type="radio" value="0" name="gender">女
						          </div>
						        </div> -->
										<div class="control-group">
										<label class="control-label">用户介绍</label>
										<div class="controls">
											<textarea name="description"><?php echo $id_data['register_per_products'] ?></textarea>
										</div>
									</div>
								<div class="control-group">
										<label class="control-label">添加时间</label>
										<div class="controls">
											<input type="date" name="add_time" value="<?php echo $id_data['register_add_time'] ?>">
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">添加</button>
									</div>
								</form>
							</div>
						</div>
    </div>
        	<script src="../js/jquery.min.js"></script>
            <script src="../js/jquery.ui.custom.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/jquery.uniform.js"></script>
            <script src="../js/unicorn.js"></script>
	</body>
  </html>