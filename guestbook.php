<?php
	require "include/inic.php";
	$datacount=selectDb("SELECT * FROM wd_meg");

// 总记录数
$total_record=count($datacount);

// 每页记录数
$per_record=6;

// 总页数（总记录数/每页记录数）

$page_num=ceil($total_record/$per_record);

// 当前页数
$cur_id=isset($_GET["page"])?(int)$_GET["page"]:1;

$offset=($cur_id-1)*$per_record;

// 查询
$guestbookdata=selectDb("SELECT * FROM wd_meg ORDER BY meg_id DESC LIMIT {$offset},{$per_record}");

	if($_POST)
	{

		$username=trim($_POST["username"]);
		$email=trim($_POST["email"]);
		$meg_content=trim($_POST["meg_content"]);
		//插入sql语句
		$sql="INSERT INTO `wd_meg`(
			`meg_author`,
			 `meg_email`,
			   `meg_content`
			   ) VALUES (
			  '{$username}',
			   '{$email}',
			   '{$meg_content}')";
			mysql_query($sql);
			if(mysql_affected_rows()>0)
			{
				success("更新成功",$_SERVER["PHP_SELF"]);
			}else{
				error("更新失败");
			}
	}	
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
		  <li class="active">客户留言</li>
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
			<div class="col-md-7 meg-list">
				<h3>留言列表</h3>
					<ul>
						<?php foreach ($guestbookdata as $value) { ?>
							<li>
								<span> <strong>游客 ：</strong><?php echo $value["meg_author"]." > ".$value["meg_email"] ?></span>
								<p><strong>留言内容 ：</strong><?php echo $value["meg_content"] ?></p>
							</li>
						<?php } ?>
					</ul>
					<nav>
    					<ul class="pager">
							<?php echo $html=pagetionCo($page_num); ?>
						</ul>
    				</nav>
				  <form class="form form-horizontal" method="post">
				    <div class="control-group">
				          <!-- Text input-->
				          <label class="control-label" for="username">姓名</label>
				          <div class="controls">
				            <input type="text" class="form-control" placeholder="请输入你的姓名" name="username">
				            <p class="help-block">请文明用名！</p>
				          </div>
				        </div>
				    <div class="control-group">
				          <!-- Text input-->
				          <label class="control-label" for="Email1">电子邮件</label>
				          <div class="controls">
				       	  <input type="text" class="form-control" name="email" placeholder="Email">
				            <p class="help-block">请输入规范的电子邮件！</p>
				          </div>
				        </div>

				    <div class="control-group">
				          <!-- Textarea -->
				          <label class="control-label">留言内容</label>
				          <div class="controls">
				            <div class="textarea">
				                <textarea name="meg_content" class="form-control" style="resize: none;" rows="5	"> </textarea>
				            </div>
				          </div>
				       </div>
				       <br>
						<button type="submit" class="btn btn-info">留言</button>
				  </form>
			</div>
	</div>
	</div>
</div>
<?php require "include/footer.php" ?>
<?php require "include/js.php" ?>
  </body>
</html>