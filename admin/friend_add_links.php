<?php
		/**
	 * wengdo后台添加友链
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";

	if($_POST)
	{
		$friendName=$_POST["friendName"];
		$friendLink=$_POST["friendLink"];
		$friendDescription=$_POST["friendDescription"];
		$friendTime=strtotime($_POST["friendTime"]);
		//插入sql语句
		$sql="INSERT INTO `wd_friend_links`(
			`friend_title`,
			 `friend_links`,
			  `friend_add_time`, 
			   `friend_description`
			   ) VALUES (
			  '{$friendName}',
			   '{$friendLink}',
			   '{$friendTime}',
			   '{$friendDescription}')";

			mysql_query($sql);
			if(mysql_affected_rows()>0)
			{
				success("更新成功",$_SERVER["PHP_SELF"]);
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
				<h1>友链管理</h1>
			</div>
			<div id="breadcrumb">
				<!-- <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> -->
       		 <a href="index.php"><i class="icon-home"></i> 首页</a>
				<a href="article.php"><i class="icon-th-list"></i> 友链管理</a>
				<a href="article.php" class="current"><i class="icon-th-list"></i> 添加友链</a>
			</div>

			<div class="container-fluid">
			<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>添加友链</h5>
							</div>
							<div class="widget-content nopadding">
								<form method="post" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">友链名称</label>
										<div class="controls">
											<input type="text" name="friendName">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">友链链接</label>
										<div class="controls">
											<input type="text" name="friendLink">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">友链描述</label>
										<div class="controls">
											<textarea name="friendDescription"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">添加时间</label>
										<div class="controls">
											<input type="date" name="friendTime">
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
            <script src="../js/select2.min.js"></script>
            <script src="../js/jquery.dataTables.min.js"></script>
            <script src="../js/unicorn.js"></script>
            <script src="../js/unicorn.tables.js"></script>
	</body>
  </html>