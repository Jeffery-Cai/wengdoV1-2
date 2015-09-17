<?php
		/**
	 * wengdo后台添加案例
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";

	if($_POST)
	{
		$caseName=$_POST["caseName"];
		$caseLink=$_POST["caseLink"];
		$caseDescription=$_POST["caseDescription"];
		$caseTime=strtotime($_POST["caseTime"]);
		$caseCate=$_POST["caseCate"];
		if($_FILES)
		{
			upload_file("caseFileImg");
			$caseFileImg=$_FILES["caseFileImg"]["name"];
		}

		//插入sql语句
		$sql="INSERT INTO `wd_case`(
			`case_title`,
			 `case_link`,
			  `case_add_time`, 
			  `case_img_url`,
			   `case_description`,
			   `case_cate_id`
			   ) VALUES (
			  '{$caseName}',
			   '{$caseLink}',
			   '{$caseTime}',
			   '{$caseFileImg}',
			   '{$caseDescription}',
			    '{$caseCate}')";

			mysql_query($sql);
			if(mysql_affected_rows()>0)
			{
				success("更新成功",$_SERVER["PHP_SELF"]);
			}else{
				error("更新失败");
			}
	}	

	 $data=selectDb("SELECT * FROM `wd_case` LEFT JOIN `wd_case_cate` ON wd_case.case_cate_id=wd_case_cate.case_cate_id");
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
				<h1>案例管理</h1>
			</div>
			<div id="breadcrumb">
				<!-- <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> -->
       		 <a href="index.php"><i class="icon-home"></i> 首页</a>
				<a href="article.php"><i class="icon-th-list"></i> 案例管理</a>
				<a href="article.php" class="current"><i class="icon-th-list"></i> 添加案例</a>
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
											<input type="text" name="caseName">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">案例链接</label>
										<div class="controls">
											<input type="text" name="caseLink">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">案例描述</label>
										<div class="controls">
											<textarea name="caseDescription"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">选择案例分类</label>
										<div class="controls">	
										<select name="caseCate">
										<?php foreach ($data as $value) { ?>
											<option value="<?php echo $value['case_cate_id'] ?>"><?php echo $value['case_cate_name'].'分类' ?></option>
											<?php } ?>
										</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">添加时间</label>
										<div class="controls">
											<input type="date" name="caseTime">
										</div>
									</div>
									<div class="control-gro	up">
										<label class="control-label">选择图片</label>
										<div class="controls">
											<div class="uploader hover" id="uniform-undefined"><input type="file" size="19" style="opacity: 0;" name="caseFileImg"><span class="filename">没有图片</span><span class="action">选择文件</span></div>
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