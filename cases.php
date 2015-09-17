<?php 
/**
	 * wengdo前台案例列表
	 * author: Jeffery
	 * create time: 2015-09-08
	 */
require "include/inic.php";

$datacount=selectDb("SELECT * FROM wd_case");

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
$casedata=selectDb("SELECT * FROM wd_case ORDER BY case_id DESC LIMIT {$offset},{$per_record}");
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
	<link rel="stylesheet" href="css/ihover.min.css">	
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
    	<?php require "include/header.php" ?>

    	<div class="case-content">
    		<div class="container">
    			<ol class="breadcrumb">
    				<li><a href="#">首页</a></li>
    				<li class="active">产品展示</li>
    			</ol>
    			<br>
    			<div class="row case_img">
    				<?php foreach ($casedata as $value) {?>
    				<div class="col-sm-6 col-md-4">
    					<div class="thumbnail">
    						<img src="./admin/uploads/<?php echo $value['case_img_url'] ?>" alt="<?php echo $value['case_description'] ?>">
    						<div class="caption">
    							<p><?php echo '<a href="'.$value['case_link'].'" title="'.$value['case_description'].'">'.$value["case_title"].'</a>' ?></p>
    						</div>
    					</div>
    				</div>
    				<?php } ?>
    			</div>
    			<div class="row">
    				<nav>
    					<ul class="pager">
    						<?php echo $html=pagetionCo($page_num); ?>
    					</ul>
    				</nav>
    			</div>
    		</div>
    	</div>
    	<?php require "include/footer.php" ?>
    	<?php require "include/js.php" ?>
    </body>
    </html>