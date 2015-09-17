<?php
		/**
	 * wengdo后台添加导航
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";

	if($_POST)
	{
		$navName=$_POST["navName"];
		$navLink=$_POST["navLink"];
		$nav_pid=$_POST["nav_pid"];

		//插入sql语句
		$sql="INSERT INTO `wd_nav`(`nav_name`, `nav_pid`, `nav_links`) VALUES ('{$navName}','{$navLink}','{$nav_pid}')";

			mysql_query($sql);
			if(mysql_affected_rows()>0)
			{
				success("更新成功","./nav.php");
			}else{
				error("更新失败");
			}
	}	

	// 顶级导航
	$piddata=selectDb("SELECT * FROM wd_nav WHERE nav_pid=0");
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
				<h1>导航管理</h1>
			</div>
			<div id="breadcrumb">
				<!-- <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> -->
       		 <a href="index.php"><i class="icon-home"></i> 首页</a>
				<a href="article.php"><i class="icon-th-list"></i> 导航管理</a>
				<a href="article.php" class="current"><i class="icon-th-list"></i> 添加导航</a>
			</div>

			<div class="container-fluid">
			<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>添加导航</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
									<div class="control-group">
										<label class="control-label">导航名称</label>
										<div class="controls">
											<input type="text" name="navName">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">导航链接</label>
										<div class="controls">
											<input type="text" name="navLink">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">父级导航</label>
										<div class="controls">
                        					<select name="nav_pid">
                        					<?php foreach ($piddata as $nav){ ?>
                        						<option value="<?php echo $nav["nav_id"] ?>"><?php echo $nav["nav_name"] ?></option>
                        					<?php } ?>
                        					</select>
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
            <script src="../js/jquery.dataTables.min.js"></script>
            <script src="../js/unicorn.js"></script>
            <script src="../js/unicorn.tables.js"></script>
	</body>
  </html>