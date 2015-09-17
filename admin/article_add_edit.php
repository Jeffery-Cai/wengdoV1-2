<?php
	/**
	 * wengdo后台添加文章
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";

	$id=isset($_GET["id"])?(int)$_GET["id"]:0;
	$id_data=editTable("SELECT * FROM wd_article WHERE article_id={$id}");
// 表单接收
	if($_POST)
	{
		$articleName=$_POST["articleName"];
		$articleLink=$_POST["articleLink"];
		$articleAuthor=$_POST["articleAuthor"];

	// 修改sql语句
		updateTable("UPDATE `wd_article` SET 
		`article_title`='{$articleName}',
		`article_author`='{$articleAuthor}',
		`article_links`='{$articleLink}' WHERE article_id={$id}","./article.php");
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
								<h5>添加文章</h5>
							</div>
							<div class="widget-content nopadding">
								<form method="post" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">文章名称</label>
										<div class="controls">
											<input type="text" name="articleName" value="<?php echo $id_data['article_title'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">文章链接</label>
										<div class="controls">
											<input type="text" name="articleLink" value="<?php echo $id_data['article_links'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">文章作者</label>
										<div class="controls">
											<input type="text" name="articleAuthor" value="<?php echo $id_data['article_author'] ?>">
										</div>
									</div>
									<!-- <div class="control-group">
										<label class="control-label">文章内容</label>
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