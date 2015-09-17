<?php
		/**
	 * wengdo后台添加广告
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";
 // 接收url参数
      $id=isset($_GET["id"])?(int)$_GET["id"]:0;
      
   // 查询从url过来的参数
         $sql="SELECT * FROM `wd_ad` WHERE ad_id={$id}";
         $res=mysql_query($sql);
         $id_data=array();
         if(mysql_num_rows($res)>0)
         {  
           $id_data=mysql_fetch_assoc($res);
         }

	if($_POST)
	{
		$adName=$_POST["adName"];
		$adLink=$_POST["adLink"];
		$adDescription=$_POST["adDescription"];
		$adTime=strtotime($_POST["adTime"]);
		if($_FILES)
		{
			upload_file("adFileImg","./adImg/");
			$adFileImg=$_FILES["adFileImg"]["name"];
		}
			updateTable("UPDATE `wd_ad` SET 
		`ad_title`='{$adName}',
		`ad_links`='{$adLink}',
		`ad_description`='{$adDescription}',
		`ad_add_time`='{$adTime}',
		`ad_img_url`='{$adFileImg}' WHERE ad_id={$id}","./ad_list.php");
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
				<h1>广告管理</h1>
			</div>
			<div id="breadcrumb">
				<!-- <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> -->
       		 <a href="index.php"><i class="icon-home"></i> 首页</a>
				<a href="ad.php"><i class="icon-th-list"></i> 广告管理</a>
				<a href="ad.php" class="current"><i class="icon-th-list"></i> 添加广告</a>
			</div>

			<div class="container-fluid">
			<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>添加广告</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
									<div class="control-group">
										<label class="control-label">广告名称</label>
										<div class="controls">
											<input type="text" name="adName" value="<?php echo $id_data['ad_title'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">广告链接</label>
										<div class="controls">
											<input type="text" name="adLink" value="<?php echo $id_data['ad_links'] ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">广告描述</label>
										<div class="controls">
											<textarea name="adDescription"><?php echo $id_data['ad_description'] ?>"</textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">添加时间</label>
										<div class="controls">
											<input type="date" name="adTime" value="<?php echo date("Y-m-d",$id_data['ad_add_time']) ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">选择图片</label>
										<div class="controls">
											<div class="uploader hover" id="uniform-undefined"><input type="file" size="19" style="opacity: 0;" name="adFileImg" value="<?php echo $id_data['ad_img_url'] ?>"><span class="filename">没有图片</span><span class="action">选择文件</span></div>
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