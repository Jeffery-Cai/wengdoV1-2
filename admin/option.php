<?php
	/**
	 * wengdo后台网站设置
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";

	// 查询sql语句
	$sql="SELECT * FROM `wd_option`";
	$res=mysql_query($sql);

	$data=array();
	if(mysql_num_rows($res)>0)
	{
		$rows=mysql_fetch_assoc($res);
		$data=$rows;
	}

// 表单接收
	if($_POST)
	{
		$keyName=$_POST["keyName"];
		$Description=$_POST["Description"];
		$contact=htmlspecialchars($_POST["contact"]);
		$copyright=$_POST["copyright"];
		$address=htmlspecialchars($_POST["address"]);
	// 修改sql语句
		$sql1="UPDATE `wd_option` SET 
		`option_key`='{$keyName}',
		`option_description`='{$Description}',
		`contact`='{$contact}',
		`copyright`='{$copyright}',
		`option_address`='{$address}'";
			mysql_query($sql1);
			if(mysql_affected_rows()>0)
			{
				success("更新成功","./option.php");
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
				<h1>网站设置</h1>
			</div>
			<div id="breadcrumb">
				<!-- <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> -->
       		 <a href="index.php"><i class="icon-home"></i> 首页</a>
				<a href="option.php" class="current"><i class="icon-th-list"></i> 网站设置</a>
			</div>

			<div class="container-fluid">
			<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>网站设置</h5>
							</div>
							<div class="widget-content">
									<form method="post" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">网站关键字</label>
										<div class="controls">
											<textarea name="keyName"><?php echo $data["option_key"] ?></textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">网站描述</label>
										<div class="controls">
											<textarea name="Description"><?php echo $data["option_description"] ?></textarea>
										</div>
									</div>
										<div class="control-group">
										<label class="control-label">公司地址</label>
										<div class="controls">
											<textarea name="address"><?php echo $data["option_address"] ?></textarea>
										</div>
									</div>
										<div class="control-group">
										<label class="control-label">联系方式</label>
										<div class="controls">
											<textarea name="contact"><?php echo $data["contact"] ?></textarea>
										</div>
									</div>
										<div class="control-group">
										<label class="control-label">版权信息</label>
										<div class="controls">
											<textarea name="copyright"><?php echo $data["copyright"] ?></textarea>
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