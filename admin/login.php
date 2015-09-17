<?php
  require "../include/inic.php";
  // 存储时间
  session_set_cookie_params(3600);
  session_start();
  // 退出登陆
    if(isset($_GET["logout"]) && isset($_GET["logout"])==1)
    {
         // session_unset();
        // 删除两个以上的session
      /* 清除COOKIE
          setcookie("is_login",0,time()-1);
          setcookie('username',$name,time()-1);
        */
        session_destroy();
    }
  if($_POST)
  {
    $name=$_POST["username"];
    $pass=$_POST["password"];
    $resdata=selectDb("SELECT register_password FROM wd_register WHERE register_name='{$name}'");
    foreach ($resdata as $value) {
      if($pass==$value["register_password"])
      {
        // 设置是否登陆
       // setcookie("is_login",1,time()+60*60);
        $_SESSION["is_login"]=1;

        // 设置值
        //setcookie('username',$name,time()+60*60);
        $_SESSION["username"]=$name;

        success("登陆成功","./index.php");
      }
    }
        error("登陆失败");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unicorn Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="../css/unicorn.login.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>
        <div id="logo">
            <img src="../img/logo.png" alt="" />
        </div>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" method="post"/>
            <p>请输入你的用户名与密码</p>
            <div class="control-group">
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="Username" name="username"/>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password"/>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <span class="pull-left"><a href="#" class="flip-link" id="to-recover">忘记密码？</a></span>
                <span class="pull-right"><input type="submit" class="btn btn-inverse" value="登陆" /></span>
            </div>
        </form>
        <form id="recoverform" action="#" class="form-vertical" />
        <p>请输入你的电子邮件找回你的密码</p>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link" id="to-login">&lt; 返回登陆</a></span>
            <span class="pull-right"><input type="submit" class="btn btn-inverse" value="发送" /></span>
        </div>
    </form>
</div>

<script src="../js/jquery.min.js"></script>  
<script src="../js/unicorn.login.js"></script> 
</body>
</html>
