<?php
	require "include/inic.php";
	$data1=selectDb("SELECT * FROM `wd_document` WHERE document_id=3");
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>文豆集团-首页</title>

    <!-- Bootstrap -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/child.css">
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php require "include/header.php" ?>

<div class="guestbook">
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="#">首页</a></li>
		  <li class="active">人才招聘</li>
		</ol>
	<img src="images/1-150309142KY47.jpg" alt="" width="100%">
	<div class="row">
			<div class="col-md-5">
				<h3>联系我们</h3>
				<p>
					 广州：400-889-7654
 					<br> 深圳：0755-66691037
				</p>
				<p><strong>公司地址</strong></p>
				<p>广州番禺分部：广州市番禺区市桥平康路97</p>
				<p>广州增城分部：广州增城区荔城花园东门32号</p>
				<p>广州大学城分部：广州大学城中七路大学时光首层</p>
				<p>广州白云分部：广州市白云区从云路839号利都商务中心B911</p>
				<p>惠州分部：惠州市惠城区江北三新南路3号名流公馆10层05室</p>
				<p>东莞分部：东莞市莞城区汇峰中心E区1002室</p>
				<p>肇庆分部：肇庆市端州区端州五路18号大楼四楼长江教育</p>
				<p>集团广告创意部：广州市荔湾区芳村培真路2号之2鹤展创意园A栋2楼</p>
			</div>

			<?php 
				foreach ($data1 as $value) {
					echo $value["document_content"];
				}
			?>
			<!-- <div class="col-md-7">
				 <h3>加入我们</h3>
				 <div class="row">
					 <div class="col-md-5">
					 	<h4><strong>工作流程</strong></h4>
						<p><strong>采购：</strong>客户需要伸出援助之手，每当你使用一个代理来.</p>
						<p><strong>搜集：</strong>客户需要伸出援助之手，每当你使用一个代理来.</p>
						<p><strong>开发：</strong>客户需要伸出援助之手，每当你使用一个代理来.</p>
						<p><strong>维护	：</strong>客户需要伸出援助之手，每当你使用一个代理来.</p>	
					 </div>
					 <div class="col-md-7">
					 	<img src="images/invite-img.jpg" alt="" style="width:100%">
					 </div>
				</div>
				<div class="row">
					 <div class="col-md-12">
						<h4><strong>申请注意选项</strong></h4>
						<p>基于一个事实，即应用程序必须被正确地写入。如果发现虚假信息，通过甚至在事件发生后予以撤销</p>
						<p>基于一个事实，即应用程序必须被正确地写入。如果发现虚假信息，通过甚至在事件发生后予以撤销</p>
						<p>基于一个事实，即应用程序必须被正确地写入。如果发现虚假信息，通过甚至在事件发生后予以撤销</p>
						<p>基于一个事实，即应用程序必须被正确地写入。如果发现虚假信息，通过甚至在事件发生后予以撤销</p>
						<p>基于一个事实，即应用程序必须被正确地写入。如果发现虚假信息，通过甚至在事件发生后予以撤销</p>
						<button class="btn btn-info" data-toggle="popover" data-placement="left" data-trigger="focus" data-content="申请职位表">下载申请表</button>
					 </div>
				</div>
			</div> -->
	</div>
	</div>
</div>
<?php require "include/footer.php" ?>
<?php require "include/js.php" ?>

  </body>
</html>