<?php
/**
 * wengdo头部
 * @author Jeffery
 * create time: 2015-09-05
 */
require "config.php";
 $data=selectDb("SELECT * FROM `wd_nav` WHERE nav_pid=0");

foreach($data as $key => $value){
		$sub_nav_item=array();
		$sub_nav=array();
		
		$sql="select nav_name,nav_links from wd_nav where nav_pid =".$value['nav_id'];
		$res=mysql_query($sql);
		
		if(mysql_num_rows($res)>0){
			while($row=mysql_fetch_row($res)){
				$sub_nav_item['nav_name']=$row[0];
				$sub_nav_item['nav_links']=$row[1];
				$sub_nav[]=$sub_nav_item;
			}
		}
		
		$data[$key]['sub_nav']=$sub_nav;
	}
?>
<header class="header">
	<nav class="navbar navbar-default navbar-static-top navbar-fixed-top nav-height nav-bg">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="index.php"><img src="images/logo.gif" alt="" style="max-width:85%"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<?php foreach ($data as $key => $value) {
          		?>
						<li class="dropdown">
							<a href="javascript:void(0)"><span class="glyphicon glyphicon-align-center"></span><?php echo $value['nav_name'] ?>
								<b class="caret"></b></a>
							 <ul class="dropdown-menu child-nav">
							 	<?php foreach ($value['sub_nav'] as $key => $value) {
							 	 ?>
							 	 <li><a href="<?php echo $value["nav_links"] ?>"><?php echo $value['nav_name']; ?></a></li>
								<?php } ?>
							 </ul>
						</li>
						<?php } ?>
          </ul>
        </div>
	 <!-- 注册和登陆 -->
		<div class="login">
			<ul>
				<li><a href="register.php">注册</a></li>
				<li><a href="login.php">登陆</a></li>
				<li><a href="javascript:void(0)" data-toggle="popover" data-placement="left" data-trigger="focus" data-content="请按Ctrl+D！">收藏</a></li>
			</ul>
		</div>
      </div>
    </nav>
</header>