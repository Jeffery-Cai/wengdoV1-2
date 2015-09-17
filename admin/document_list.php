<?php
/**
	 * wengdo后台所有留言
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
	require "../include/inic.php";

if($_POST)
{
	delMore("del","wd_document","document_id","./document_list.php");
}
 $data=selectDb("SELECT * FROM `wd_document`");

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
				<a href=""><i class="icon-th-list"></i>单页管理</a>
				<a href="article.php" class="current"><i class="icon-th-list"></i> 所有单页</a>
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
											<th>标题</th>
											<!-- <th>单页菜单</th> -->
											<th>操作</th>
										</tr>
									</thead>
									<tbody role="alert" aria-live="polite" aria-relevant="all">
										<?php foreach ($data as $value) {?>
										<tr>
											<td><div class="checker" id="uniform-undefined"><span>
												<input type="checkbox" style="opacity: 0;" name="del[]" value="<?php echo $value["document_id"] ?>"></span></div></td>
											<td><?php echo $value["document_id"] ?></td>
											<td><?php echo $value["document_title"] ?></td>
											<td><a href="document_list_edit.php?id=<?php echo $value["document_id"] ?>" class="tip-top" data-original-title="编辑"><i class="icon-pencil"></i></a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>	
						<div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix"><div class="dataTables_filter" id="DataTables_Table_0_filter"></div><div class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers" id="DataTables_Table_0_paginate"><a tabindex="0" class="first ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default ui-state-disabled" id="DataTables_Table_0_first">First</a><a tabindex="0" class="previous fg-button ui-button ui-state-default ui-state-disabled" id="DataTables_Table_0_previous">Previous</a><span><a tabindex="0" class="fg-button ui-button ui-state-default ui-state-disabled">1</a><a tabindex="0" class="fg-button ui-button ui-state-default">2</a><a tabindex="0" class="fg-button ui-button ui-state-default">3</a><a tabindex="0" class="fg-button ui-button ui-state-default">4</a><a tabindex="0" class="fg-button ui-button ui-state-default">5</a></span><a tabindex="0" class="next fg-button ui-button ui-state-default" id="DataTables_Table_0_next">Next</a><a tabindex="0" class="last ui-corner-tr ui-corner-br fg-button ui-button ui-state-default" id="DataTables_Table_0_last">Last</a></div></div>				
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