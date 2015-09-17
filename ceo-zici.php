<?php
	require "include/inic.php";
	$data1=selectDb("SELECT * FROM `wd_document` WHERE document_id=2");
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
		  <li class="active">CEO致词</li>
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
				 <h3>CEO致词</h3>
				 <div class="row">
					 <div class="col-md-5">	
					 	<img src="images/ceo-per.jpg" alt="" style="width:100%">
					 </div>
					 <div class="col-md-7">
					 	<h4>客户，你好！</h4>
					 	<p style="font-size:16px;">我们公司是一家领先的技术和诀窍的行业领导者 该公司的一名代表.

	从过去几年的努力和错误,我们企业通过客人们一起成长。相关行业的竞争越来越激化的 情况下,首先想到顾客,xx技术为基础,推出xx服务商用化,并成功通信行业的视线。

	我们的企业领先的技术和经验,目前业界首位具有代表性的公司。“从过去几年的努力和 错误,我们企业通过客人们一起成长。相关行业的竞争越来越激化的情况下,首先想到顾 客,xx技术为基础,推出xx服务商用化,并成功通信行业的视线。.

	今后我们企业进一步适当的21世纪成长为世界级企业顾客我报答大家的努力。

	web(株)代表理事</p>
					 	<img src="images/ceo-sign.jpg" alt="">
					 <br><br>
					<p> 公司名 浅田真央株式会社网站</p>
					<p>	> 住址 首尔市加纳区洞123蔓延</p>
					<p>	> 电话号码 01- 234-5678 (FAX : 01 234-5679)</p>
					<p>	> 董事长 洪吉童代表</p>
					<p>	> 设立日 1998年2月15日</p>
					<p>	> 资金 2亿韩元</p>
					<p>	> 职员数 150人</p>
					<p>	> 官方网站 http://www.asaweb.com</p>
					<p>	> 联系我们</p>
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