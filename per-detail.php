<?php
require "include/inic.php";

if(!isset($_COOKIE["is_login"])==1){
		die('<script type="text/javascript">alert("你未登陆,即将为你跳转到登陆界面");location.href="login.php";</script>');
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
<div class="login-content">
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="#">首页</a></li>
		  <li class="active">个人资料</li>
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
				<h3>详细资料</h3>
				<div class="col-md-3">
					<h3></h3>
					<img src="images/user-photo.jpg" alt="">
					<p>我的头像</p>
				</div>
				<div class="col-md-9">
					<form class="form form-horizontal" method="post">
					    <div class="control-group">
					          <!-- Text input-->
					          <label class="control-label" for="username">姓名</label>
					          <div class="controls">
					            <input type="text" class="form-control" placeholder="请输入你的姓名" id="username">
					          </div>
					        </div>
					    <div class="control-group">
					          <!-- Text input-->
					          <label class="control-label" for="Email1">电子邮件</label>
					          <div class="controls">
					       	  <input type="email" class="form-control" id="Email1" placeholder="请输入电子邮件">
					          </div>
					        </div>
					    <div class="control-group">
					          <!-- Text input-->
					          <label class="control-label" for="conpany-name">公司名称</label>
					          <div class="controls">
					       	  <input type="text" class="form-control" id="conpany-name" placeholder="请输入公司名称">
					          </div>
					        </div>
					    <div class="control-group">
					          <!-- Text input-->
					          <label class="control-label" for="invite">职业</label>
					          <div class="controls">
					       	  <input type="text" class="form-control" id="invite" placeholder="请输入职业">
					          </div>
					        </div>
					        <br>
							<button type="submit" class="btn btn-info">更改	</button>
					  </form>
				</div>
			</div>
	</div>
	</div>
</div>

<?php require "include/footer.php" ?>
<?php require "include/js.php" ?>

  </body>
</html>