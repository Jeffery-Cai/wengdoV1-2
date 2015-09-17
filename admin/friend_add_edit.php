<?php
	/**
	 * wengdo后台编辑友链
	 * author: Jeffery
	 * create time: 2015-09-09
	 */
	require "../include/inic.php";
	
   // 接收url参数
      $id=isset($_GET["id"])?(int)$_GET["id"]:0;
	$id_data=editTable("SELECT * FROM wd_friend_links WHERE friend_links_id={$id}");
// 表单接收
	if($_POST)
	{
		$friendName=$_POST["friendName"];
		$friendDescription=$_POST["friendDescription"];
		$friendLink=$_POST["friendLink"];
			updateTable("UPDATE `wd_friend_links` SET 
		`friend_title`='{$friendName}',
		`friend_description`='{$friendDescription}',
		`friend_links`='{$friendLink}' WHERE friend_links_id={$id}","./friend_links.php");

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
				<a href="friend_links.php"><i class="icon-th-list"></i> 友链管理</a>
				<a href="friend_add_edit.php" class="current"><i class="icon-th-list"></i> 添加友链</a>
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
											<input type="text" name="friendName" value="<?php echo $id_data['friend_title'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">友链链接</label>
										<div class="controls">
											<input type="text" name="friendLink" value="<?php echo $id_data['friend_links'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">友链描述</label>
										<div class="controls">
											<textarea name="friendDescription"><?php echo $id_data['friend_description'] ?></textarea>
										</div>
									</div>
								<!-- <div class="control-group">
										<label class="control-label">选择分类</label>
										<div class="controls">
										<select name="friendCate" id="">
											<?php foreach ($data as $value) { ?>
											<option value="<?php echo $value["friend_cate_id"] ?>"><?php echo $value["friend_cate_name"].'分类' ?></option>
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