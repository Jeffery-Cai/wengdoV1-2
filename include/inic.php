<?php
	header("Content-Type:text/html;charset=utf-8");

// 设置时区
	date_default_timezone_get("Aria/Shanghai");
/**
 * 包含配置数据库文件
 */

// 网站根目录
	define("PATH_URL",__FILE__);

	$u=dirname(PATH_URL)."/";
	$url=str_replace("\\","/",$u);
	require $url.'config.php';

	/**
 * 包含函数库文件
 */
	require $url.'functions.php';
	
?>