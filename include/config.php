<?php
	/**
	 * 配置数据库文件
	 * author: Jeffery
	 * create time: 2015-09-05
	 */
error_reporting ( 0 );
// 主机名
define("HOST","localhost");
// 用户名
define("USER","root");
// 密码
define("PASS","");

// 连接数据库
		$conn=mysql_connect(HOST,USER,PASS) or die("数据库连接失败");

// 选择数据库
		mysql_select_db("wd_db") or die("选择数据库失败");

		mysql_query("set names utf8");

		
?>