<?php
/**
	 * wengdo后台所有留言
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";

if($_POST)
{
	delMore("del","wd_meg","meg_id","./meg_list.php");
}
$datacount=selectDb("SELECT * FROM wd_meg");

// 总记录数
 $total_record=count($datacount);

// 每页记录数
$per_record=5;

// 总页数（总记录数/每页记录数）

$page_num=ceil($total_record/$per_record);

// 当前页数
  $cur_id=isset($_GET["page"])?(int)$_GET["page"]:1;

  $offset=($cur_id-1)*$per_record;

// 查询
 $data=selectDb("SELECT * FROM wd_meg ORDER BY meg_id DESC LIMIT {$offset},{$per_record}");

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
				<h1>留言管理</h1>
			</div>
			<div id="breadcrumb">
				<!-- <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> -->
       		 <a href="index.php"><i class="icon-home"></i> 首页</a>
				<a href=""><i class="icon-th-list"></i> 留言管理</a>
				<a href="article.php" class="current"><i class="icon-th-list"></i> 所有留言</a>
			</div>

			<div class="container-fluid">
			<form action="" method="post">
			<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<div class="checker" id="uniform-title-checkbox"><span><input type="checkbox" id="title-checkbox" name="title-checkbox" style="opacity: 0;"></span></div>
								</span>
								<h5>全选 <button type="submit" class="btn btn-default btn-mini">删除</button></h5>
							</div>
							<div class="widget-content nopadding">
								<div class="dataTables_wrapper">
								<table class="table table-bordered table-striped with-check">
									<thead>
										<tr>
											<th><i class="icon-resize-vertical"></i></th>
											<th>编号</th>
											<th>留言者</th>
											<th>留言内容</th>
											<th>是否审核</th>
											<th>是否是会员</th>
											<th>添加时间</th>
										</tr>
									</thead>
									<tbody role="alert" aria-live="polite" aria-relevant="all">
										<?php foreach ($data as $value) {?>
										<tr>
											<td><div class="checker" id="uniform-undefined"><span>
												<input type="checkbox" style="opacity: 0;" name="del[]" value="<?php echo $value["meg_id"] ?>"></span></div></td>
											<td><?php echo $value["meg_id"] ?></td>
											<td><?php echo $value["meg_author"] ?></td>
											<td><?php echo $value["meg_content"] ?></td>
											<td><?php echo $value["meg_checked"] ?></td>
											<td><?php echo $value["meg_register_id"] ?></td>
											<td><?php echo $value["meg_time"] ?></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>	
						<div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix">
							<div class="dataTables_filter" id="DataTables_Table_0_filter"></div>
							<div class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers" id="DataTables_Table_0_paginate">
								<?php echo $html=pagetion($page_num); ?>
							</div>
						</div>		
							</div>
						</div>
						</div>
			</form>
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