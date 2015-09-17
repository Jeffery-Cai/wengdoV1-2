<?php
		/**
	 * wengdo后台添加案例
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";


   // 接收url参数
      $id=isset($_GET["id"])?(int)$_GET["id"]:0;
	$id_data=editTable("SELECT * FROM wd_case WHERE case_id={$id}");

	if($_POST)
	{
		$caseName=$_POST["caseName"];
		$caseLink=$_POST["caseLink"];
		$caseDescription=$_POST["caseDescription"];
		$caseTime=strtotime($_POST["caseTime"]);
		if($_FILES)
		{
			upload_file("caseFileImg");
			$caseFileImg=$_FILES["caseFileImg"]["name"];
		}

		//插入sql语句
		updateTable("UPDATE `wd_case` SET 
		`case_title`='{$caseName}',
		`case_link`='{$caseLink}',
		`case_add_time`='{$caseTime}',
		`case_img_url`='{$caseFileImg}',
		`case_description`='{$caseDescription}' WHERE case_id={$id}","./products.php");
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
				<h1>文章管理</h1>
			</div>
			<div id="breadcrumb">
				<!-- <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> -->
       		 <a href="index.php"><i class="icon-home"></i> 首页</a>
				<a href="article.php"><i class="icon-th-list"></i> 文章管理</a>
				<a href="article.php" class="current"><i class="icon-th-list"></i> 添加文章</a>
			</div>

			<div class="container-fluid">
			<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>添加案例</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
									<div class="control-group">
										<label class="control-label">案例名称</label>
										<div class="controls">
											<input type="text" name="caseName" value="<?php echo $id_data['case_title'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">案例链接</label>
										<div class="controls">
											<input type="text" name="caseLink" value="<?php echo $id_data['case_link'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">案例描述</label>
										<div class="controls">
											<textarea name="caseDescription"><?php echo $id_data['case_description'] ?></textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">添加时间</label>
										<div class="controls">
											<input type="date" name="caseTime" value="<?php echo date("Y-m-d",$id_data['case_add_time']) ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">选择图片</label>
										<div class="controls">
											<div class="uploader hover" id="uniform-undefined"><input type="file" size="19" style="opacity: 0;" name="caseFileImg" value="<?php echo $id_data['case_img_url']?>"><span class="filename">没有图片</span><span class="action">选择文件</span></div>
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