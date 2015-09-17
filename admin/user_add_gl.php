<?php
	/**
	 * wengdo后台添加用户
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";

// 表单接收
	if($_POST)
	{
		$username=$_POST["username"];
		$password=$_POST["password"];
		$email=$_POST["email"];
		$description=$_POST["description"];
		$gender=$_POST["gender"];
		$add_time=strtotime($_POST["add_time"]);

	// 添加sql语句
		$sql="INSERT INTO `wd_register`(
			`register_name`,
			 `register_password`,
			  `register_email`, 
			  `register_per_products`, 
			  `register_gender`, 
			  `register_add_time`) VALUES (
			  '{$username}',
			  '{$password}',
			  '{$email}',
			  '{$description}',
			  '{$gender}',
			  '{$add_time}')";
			mysql_query($sql);
			if(mysql_affected_rows()>0)
			{
				success("更新成功","./user_gl.php");
			}else{
				error("更新失败");
			}

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
											<input type="text" name="username">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">用户密码</label>
										<div class="controls">
											<input type="password" name="password">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">电子邮件</label>
										<div class="controls">
											<input type="text" name="email">
										</div>
									</div>
									<div class="control-group">
					          <label class="control-label">性别</label>
					          <div class="controls ">
						              <input type="radio" value="1" checked="checked" name="gender">男
						              <input type="radio" value="0" name="gender">女
						          </div>
						        </div>
										<div class="control-group">
										<label class="control-label">用户介绍</label>
										<div class="controls">
											<textarea name="description"></textarea>
										</div>
									</div>
								<div class="control-group">
										<label class="control-label">添加时间</label>
										<div class="controls">
											<input type="date" name="add_time">
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