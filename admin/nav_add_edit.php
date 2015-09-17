<?php
	/**
	 * wengdo后台添加导航
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";

	$id=isset($_GET["id"])?(int)$_GET["id"]:0;
	$id_data=editTable("SELECT * FROM wd_nav WHERE nav_id={$id}");
// 表单接收
	if($_POST)
	{
		$navName=$_POST["navName"];
		$navLink=$_POST["navLink"];
		$nav_pid=$_POST["nav_pid"];

	// 修改sql语句
		updateTable("UPDATE `wd_nav` SET 
		`nav_name`='{$navName}',
		`nav_pid`='{$navLink}',
		`nav_links`='{$nav_pid}' WHERE nav_id={$id}","./nav.php");
	}

$navpiddata=selectDb("SELECT * FROM wd_nav WHERE nav_pid=0");


// var_dump($id_data);
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
				<a href="article.php" class="current"><i class="icon-th-list"></i> 编辑导航</a>
			</div>

			<div class="container-fluid">
			<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>编辑导航</h5>
							</div>
							<div class="widget-content nopadding">
								<form method="post" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">导航名称</label>
										<div class="controls">
											<input type="text" name="navName" value="<?php echo $id_data['nav_name'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">导航链接</label>
										<div class="controls">
											<input type="text" name="navLink" value="<?php echo $id_data['nav_links'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">父级导航</label>
										<div class="controls">
                        					<select name="nav_pid">
                        					<?php foreach ($navpiddata as $nav){ ?>
                        						<option value="<?php echo $nav["nav_id"] ?>"><?php echo $nav["nav_name"] ?></option>
                        					<?php } ?>
                        					</select>
										</div>
									</div>
									<!-- <div class="control-group">
										<label class="control-label">导航内容</label>
										<div class="controls">
											<textarea name="articleContent"></textarea>
										</div>
									</div> -->
								<!-- <div class="control-group">
										<label class="control-label">选择分类</label>
										<div class="controls">
										<select name="articleCate" id="">
											<?php foreach ($data as $value) { ?>
											<option value="<?php echo $value["article_cate_id"] ?>"><?php echo $value["article_cate_name"].'分类' ?></option>
											<?php } ?>
										</select>
										</div>
									</div> -->
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