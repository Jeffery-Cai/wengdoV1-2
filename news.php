<?php
	/**
 * wengdo新闻页面
 * @author: Jeffery
 * create time: 2015-09-06
 */
	require "include/inic.php";

// 查询sql语句  （分类找文章）article_cate_id=2 是新闻

	$noticeData=selectDb("SELECT * FROM `wd_article_cate` LEFT JOIN `wd_article` ON wd_article_cate.article_cate_id=wd_article.article_cate_id WHERE wd_article_cate.article_cate_id=2 ORDER BY article_id DESC");

	mysql_close($conn);

	// 新闻编号
	$i=1;
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
		  <li><a href="#">关于我们</a></li>
		  <li class="active">公司新闻</li>
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
			<div class="col-md-7">
				<h3>公司新闻</h3>
					<table class="table table-hover">
					   <thead>
					      <tr>
					         <th>编号</th>
					         <th>标题</th>
					         <th>作者</th>
					         <th>发布时间</th>
					         <th>点击数</th>
					      </tr>
					   </thead>
					   <tbody>
					   	<?php 

					   	if(is_array($noticeData))
					   	{		
					   		foreach ($noticeData as $key => $value) {
					   	?>
					      <tr>
					         <td><?php echo $i; ?></td>
					         <td><?php echo '<a href="'.$value["article_links"].'">'.$value["article_title"].'</a>'; ?></td>
					         <td><?php echo $value["article_author"] ?></td>
					         <td><?php echo date("Y/m/d",$value["article_time"]) ?></td>
					         <td><?php echo $value["article_click"] ?></td>
					      </tr>
							<?php $i++;}} ?>
					   </tbody>
					</table>
				<ul class="pagination">
				  <li><a href="#">&laquo;</a></li>
				  <li class="active"><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>

			</div>
	</div>
	</div>
</div>

<?php require "include/footer.php" ?>
<?php require "include/js.php" ?>
  </body>
	</html> 