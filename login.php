
<?php
/**
 * wengdo登陆页面
 * @author: Jeffery
 * create time: 2015-09-05
 */
require "include/inic.php";

session_set_cookie_params(3600);
session_start();
	// 表单接收
if($_POST)
{
	$username=isset($_POST["username"])?trim($_POST["username"]):"";
	$password=isset($_POST["pass"])?trim($_POST["pass"]):"";
	// $email=isset($_POST["email"])?trim($_POST["email"]):"";

// // 验证用户名
// 		empty($username)?error("用户名为空"):"";
// 		preg_match("/^[a-z0-9_\x{4e00}-\x{9fa5}]{2,16}$/ui",$username)?"":error("用户名不正确");
// // 验证密码
// 		empty($password)?error("密码为空"):"";
// 		preg_match("/^[a-zA-Z\d_]{8,}$/",$password)?"":error("密码不正确");

/* 验证邮箱
		empty($email)?error("邮箱为空"):"";
		preg_match('/^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,4}$/',$email)?success("登陆成功",$_SERVER["PHP_SELF"]):error("邮箱不正确");
*/
  $sedata=selectDb("SELECT register_password FROM wd_register WHERE register_name='{$username}'");
  foreach ($sedata as $value)
  {
     if($password==$value["register_password"])
     {
      // 设置是否登陆
       setcookie("is_login",1,time()+60*60);

       // 设置用户名
       setcookie("username",$username,time()+60*60);
       success("登陆成功","./per-detail.php");
     }
  }
  error("登陆失败");
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
        <li class="active">登陆</li>
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
     <h3>登陆</h3>
     <form class="form form-horizontal" method="post">
      <div class="control-group">
       <!-- Text input-->
       <label class="control-label" for="username">用户名</label>
       <div class="controls">
        <input type="text" class="form-control" placeholder="请输入你的姓名" id="username" name="username">
    </div>
</div>
<br>
<div class="control-group">
   <label class="control-label" for="password">密码</label>
   <div class="controls">
    <input type="password" class="form-control" id="password" placeholder="请输入密码" name="pass">
</div>
<p>密码为8位以上</p>
</div
<br>
<button type="submit" class="btn btn-info">登陆</button>
<!-- <a href="per-detail.php" class="btn btn-success">详细资料</a> -->
</form>
</div>
</div>
</div>
</div>
<?php require "include/footer.php" ?>
<?php require "include/js.php" ?>

</body>
</html>