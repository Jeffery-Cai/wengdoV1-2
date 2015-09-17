
<?php
/**
 * wengdo注册页面
 * @author: Jeffery
 * create time: 2015-09-05
 */
require "include/inic.php";

	// 表单接收
if($_POST)
{
	$username=isset($_POST["username"])?trim($_POST["username"]):"";
	$password=isset($_POST["pass"])?trim($_POST["pass"]):"";
	$confirmPass=isset($_POST["confirmPass"])?trim($_POST["confirmPass"]):"";
	$gender=$_POST["gender"];
	$email=isset($_POST["email"])?trim($_POST["email"]):"";
	$personal_content=isset($_POST["personal_content"])?trim($_POST["personal_content"]):"";

// 验证用户名
	empty($username)?error("用户名为空"):"";
	preg_match("/^[a-z0-9_\x{4e00}-\x{9fa5}]{2,16}$/ui",$username)?"":error("用户名不正确");

// 验证密码
	empty($password)?error("密码为空"):"";
	empty($confirmPass)?error("确认密码为空"):"";
	preg_match("/^[a-zA-Z\d_]{8,}$/",$password)?"":error("密码不正确");
	$password==$confirmPass?"":error("密码跟确认密码不一致");

// 验证邮箱
	empty($email)?error("邮箱为空"):"";
	preg_match('/^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,4}$/',$email)?success("注册成功,赶紧去登陆下看看吧",$_SERVER["PHP_SELF"]):error("邮箱不正确");


// 插入sql语句
	$sql="INSERT INTO `wd_register` (`register_name`,`register_password`,`register_email`,`register_gender`,`register_per_products`) VALUES('".$username."','".$password."','".$email."','".$gender."','".$personal_content."')";

	echo $sql;

// 执行sql语句
	$res=mysql_query($sql);
// 关闭数据库
	mysql_close($conn);

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
  				<li class="active">注册</li>
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
  					<h3>注册 > <span class="pull-right"><a href="login.php" title="登陆">登陆</a></span></h3>
  					<form class="form form-horizontal" method="post" id="registerForm">
  						<div class="control-group">
  							<!-- Text input-->
  							<label class="control-label" for="username">用户名</label>
  							<div class="controls">
  								<input type="text" class="form-control" placeholder="请输入你的用户名" id="username" name="username">
  							</div>
  							<p>用户名只能包括中文，英文字母，数字，下划线 ( _ )不能含、空格2-16位</p>
  						</div>
  						<br>
  						<div class="control-group">
  							<label class="control-label" for="password">密码</label>
  							<div class="controls">
  								<input type="password" class="form-control" id="password" placeholder="密码" name="pass">
  							</div>
  						</div>
  						<p>密码为8位以上</p>
  						<br>
  						<div class="control-group">
  							<label class="control-label" for="confirmPass">确认密码</label>
  							<div class="controls">
  								<input type="password" class="form-control" id="confirmPass" placeholder="确认密码" name="confirmPass">
  							</div>
  						</div>
  						<br>
  						<div class="control-group">
  							<label class="">性别</label>
  							<div class="controls ">
  								<input type="radio" value="1" checked="checked" name="gender">男
  								<input type="radio" value="0" name="gender">女
  							</div>
  						</div>
  						<br>
  						<div class="control-group">
  							<!-- Text input-->
  							<label class="control-label" for="Email1">电子邮件</label>
  							<div class="controls">
  								<input type="text" class="form-control" id="Email1" placeholder="电子邮箱" name="email">
  							</div>
  						</div>
  						<br>
  						<div class="control-group">
  							<!-- Textarea -->
  							<label class="control-label">个人介绍</label>
  							<div class="controls">
  								<div class="textarea">
  									<textarea class="form-control" name="personal_content"></textarea>
  								</div>
  							</div>
  						</div>
  						<br>
  						<button type="submit" class="btn btn-info">注册</button>
  					</fieldset>
  				</form>
  			</div>
  		</div>
  	</div>
  </div>

  <?php require "include/footer.php" ?>
  <?php require "include/js.php" ?>
  <script src="js/bootstrapValidator.min.js"></script>
  <script type="text/javascript">
  /* header注册register表单验证 */
$("#registerForm").bootstrapValidator({
    fields: {
    	// 注册的用户名
    	  username: {
    	  	//validators:验证器
                validators: {
                    notEmpty: {
                        message: '*用户名不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 10,
                        message: '*用户名必须大于6个字符并且小于10个字符'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: '*用户名只能由字母、数字和下划线组成*'
                    }
                }
            },
        // 注册的密码
        	pass: {
        		validators:{
        			notEmpty :{
        				message : '*密码不能为空'
        			},
					identical: {
                        field: 'confirmPass',
                        message: '*密码跟确认密码不一致'
                    },
                    different: {
                        field: 'username',
                        message: '*密码不能是相同的用户名'
                    }
        		}
        	},
        // 密码跟确认密码
        	confirmPass: {
        		validators:{
        			notEmpty :{
        				message : '*确认密码不能为空'
        			},
					identical: {
                        field: 'pass',
                        message: '*确认密码跟密码不一致'
                    },
                    different: {
                        field: 'registerUsername',
                        message: '*密码不能是相同的用户名'
                    }
        		}
        	},

       // 电子邮箱
       		email: {
       			validators:{
        			notEmpty :{
        				message : '*电子邮箱不能为空'
        			},
        			emailAddress: {
        				message : '*输入不是有效的电子邮件地址'
        			}
        		}
       		}
    }
})
  </script>
</body>
</html>