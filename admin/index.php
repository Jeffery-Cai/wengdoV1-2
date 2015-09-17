<?php
	require "../include/inic.php";
	$data=selectDb("SELECT case_id FROM wd_case");
	$data1=selectDb("SELECT article_id FROM wd_article");
	$data2=selectDb("SELECT meg_id FROM wd_meg");
	$data3=selectDb("SELECT friend_links_id FROM wd_friend_links");
	$data4=selectDb("SELECT register_id FROM wd_register");
	$case_num=count($data);
	$article_num=count($data1);
	$meg_num=count($data2);
	$friend_num=count($data3);
	$user_num=count($data4);
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
		<link rel="stylesheet" href="../css/unicorn.grey.css" class="skin-color" />
	</head>
	<body>
		<?php require "../include/admin_header.php" ?>
		 
		<div id="content">
			<div id="content-header">
				<h1>首页</h1>
			</div>
			<div id="breadcrumb">
				<!-- <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> -->
				<a href="#" class="current"><i class="icon-home"></i> 首页</a>
			</div>
			<div class="container-fluid">
				<div class="widget-box">
									<div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>统计信息</h5><div class="buttons"><a href="<?php echo $_SERVER["PHP_SELF"] ?>" class="btn btn-mini"><i class="icon-refresh"></i> 更新</a></div></div>
									<div class="widget-content">
										<ul class="stats-plain">
											<li>										
												<h4><?php echo $case_num; ?></h4>
												<span>案例总数</span>
											</li>
											<li>										
												<h4><?php echo $article_num; ?></h4>
												<span>文章总数</span>
											</li>
											<li>										
												<h4><?php echo $friend_num; ?></h4>
												<span>友链总数</span>
											</li>
											<li>										
												<h4><?php echo $meg_num; ?></h4>
												<span>留言总数</span>
											</li>
											<li>										
												<h4><?php echo $user_num; ?></h4>
												<span>用户总数</span>
											</li>
										</ul>
									</div>
						</div>
				<div class="row-fluid">
					<div class="span6">
						<div class="widget-box">
								<div class="widget-title"><span class="icon"><i class="icon-eye-open"></i></span><h5>系统信息</h5></div>
								<div class="widget-content">			
								<p>主机名 : <?php echo $_SERVER["HTTP_HOST"] ?></p>
									<p>操作系统 ：<?php echo PHP_OS ?></p>
									<p>服务器软件 ： <?php echo $_SERVER['SERVER_SOFTWARE'] ?></p>
									<p>数据库平台 ： <?php echo mysql_get_server_info(); ?></p>		
								</div>
					</div>
					</div>
					<div class="span6">
					<div class="widget-box">
								<div class="widget-title"><span class="icon"><i class="icon-eye-open"></i></span><h5>版权信息</h5></div>
								<div class="widget-content">		
									<p>版权所有: 本公司所有</p>
									<p>程序版本:wengdoV1.0 Release</p>
									<p>技术支持:1345199080@qq.com</p>
									<p>备案号: .....</p>
								</div>
					</div>
					</div>

				</div>
			</div>
		
    </div>
            <script src="../js/jquery.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/jquery.ui.custom.js"></script>
            <script src="../js/unicorn.js"></script>
	</body>
	</html>