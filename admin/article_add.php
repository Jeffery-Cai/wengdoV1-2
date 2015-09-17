<?php
	/**
	 * wengdo后台添加文章
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";

// 表单接收
	if($_POST)
	{
		$articleName=$_POST["articleName"];
		$articleLink=$_POST["articleLink"];
		$articleAuthor=$_POST["articleAuthor"];
		$articleCate=$_POST["articleCate"];

	// 添加sql语句
		$sql1="INSERT INTO `wd_article`(
			`article_title`, 
			`article_author`,
			 `article_time`, 
			 `article_cate_id`,
			  `article_links`) VALUES (
			  '{$articleName}',
			  '{$articleAuthor}',
			  '213123213',
			  '{$articleCate}',
			  '{$articleLink}')";
			mysql_query($sql1);
			if(mysql_affected_rows()>0)
			{
				success("更新成功",$_SERVER["PHP_SELF"]);
			}else{
				error("更新失败");
			}

	}

// 查询wd_article分类
	$sql="SELECT * FROM `wd_article_cate`";
	$res=mysql_query($sql);

	$data=array();
	if(mysql_num_rows($res)>0)
	{
		while($rows=mysql_fetch_assoc($res))
		{
			$data[]=$rows;
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
											<input type="text" name="articleName">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">文章链接</label>
										<div class="controls">
											<input type="text" name="articleLink">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">文章作者</label>
										<div class="controls">
											<input type="text" name="articleAuthor">
										</div>
									</div>
									<!-- <div class="control-group">
										<label class="control-label">文章内容</label>
										<div class="controls">
											<textarea name="articleContent"></textarea>
										</div>
									</div> -->
								<div class="control-group">
										<label class="control-label">选择分类</label>
										<div class="controls">
										<select name="articleCate" id="">
											<?php foreach ($data as $value) { ?>
											<option value="<?php echo $value["article_cate_id"] ?>"><?php echo $value["article_cate_name"].'分类' ?></option>
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
            <script src="../js/unicorn.js"></script>
	</body>
  </html>