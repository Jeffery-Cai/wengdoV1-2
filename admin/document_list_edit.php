<?php
	/**
	 * wengdo后台添加单页
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";

	
   // 接收url参数
	$id=isset($_GET["id"])?(int)$_GET["id"]:0;
	$id_data=editTable("SELECT * FROM wd_document WHERE document_id={$id}");
// 表单接收
	if($_POST)
	{
		$documentName=$_POST["documentName"];
		$documentContent=$_POST["documentContent"];

	// 插入sql语句
		$sql1="UPDATE `wd_document` SET 
		`document_title`='{$documentName}',
		`document_content`='{$documentContent}' WHERE document_id={$id}";
		mysql_query($sql1);
		if(mysql_affected_rows()>0)
		{
			success("更新成功",'./document_list.php');
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
				<h1>单页管理</h1>
			</div>
			<div id="breadcrumb">
				<!-- <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> -->
				<a href="index.php"><i class="icon-home"></i> 首页</a>
				<a href="document.php"><i class="icon-th-list"></i> 单页管理</a>
				<a href="document.php" class="current"><i class="icon-th-list"></i> 修改单页</a>
			</div>

			<div class="container-fluid">
				<div class="widget-box">
					<div class="widget-title">
						<span class="icon">
							<i class="icon-align-justify"></i>									
						</span>
						<h5>添加单页</h5>
					</div>
					<div class="widget-content nopadding">
						<form method="post" class="form-horizontal">
							<div class="control-group">
								<label class="control-label">单页名称</label>
								<div class="controls">
									<input type="text" name="documentName" value="<?php echo $id_data['document_title'] ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">单页内容</label>
								<div class="controls">
									<textarea name="documentContent"><?php echo $id_data['document_content'] ?></textarea>
								</div>
							</div>
								<!-- <div class="control-group">
										<label class="control-label">选择分类</label>
										<div class="controls">
										<select name="documentCate" id="">
											<?php foreach ($data as $value) { ?>
											<option value="<?php echo $value["document_cate_id"] ?>"><?php echo $value["document_cate_name"].'分类' ?></option>
											<?php } ?>
										</select>
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">修改</button>
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