<?php
	require "include/inic.php";
	if($_POST)
	{

		$name=$_POST["name"];
		$email=$_POST["email"];
		$content=$_POST["content"];
		//插入sql语句
		$sql="INSERT INTO `wd_contact`( 
			`contact_name`,
			`contact_email`, 
			`contact_meg_contact`) VALUES (
			'{$name}',
			'{$email}',
			'{$content}')";
		mysql_query($sql);
			if(mysql_affected_rows()>0)
			{
				success("发送成功",$_SERVER["PHP_SELF"]);
			}else{
				error("发送失败");
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
		  <li class="active">联系我们</li>
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
				  <form class="form form-horizontal" method="post">
				    <div class="control-group">
				          <!-- Text input-->
				          <label class="control-label" for="username">姓名</label>
				          <div class="controls">
				            <input type="text" class="form-control" placeholder="请输入你的姓名" name="name">
				            <p class="help-block">请文明用名！</p>
				          </div>
				        </div>
				    <div class="control-group">
				          <!-- Text input-->
				          <label class="control-label" for="Email1">电子邮件</label>
				          <div class="controls">
				       	  <input type="text" class="form-control" name="email" placeholder="请输入你的电子邮件">
				            <p class="help-block">请输入规范的电子邮件！</p>
				          </div>
				        </div>

				    <div class="control-group">
				          <!-- Textarea -->
				          <label class="control-label">留言内容</label>
				          <div class="controls">
				            <div class="textarea">
				                <textarea type="" class="form-control" style="resize: none;" rows="5" name="content"> </textarea>
				            </div>
				          </div>
				       </div>
				       <br>
						<button type="submit" class="btn btn-info">发送</button>
				    </fieldset>
				  </form>
			</div>
	</div>
	</div>
</div>
<?php require "include/footer.php" ?>
<?php require "include/js.php" ?>

  </body>
</html>