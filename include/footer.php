<?php
	/**
	 * wengdo前台友链列表
	 * author: Jeffery
	 * create time: 2015-09-08
	 */

// 此处报错BUG
	require "config.php";
	// 查询wd_article表
	$friendData=selectDb("SELECT * FROM `wd_friend_links` ORDER BY friend_links_id DESC");

	// 查询sql语句
  $sql="SELECT * FROM `wd_option`";
  $res=mysql_query($sql);

  $optiondata=array();
  if(mysql_num_rows($res)>0)
  {
    $rows=mysql_fetch_assoc($res);
    $optiondata=$rows;
  }
?>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<p>文豆集团 <?php echo $optiondata["copyright"] ?></p>
			<p>法律顾问：广东晟晨律师事务所-张勇律师</p>
			</div>
			<div class="col-md-6">
				<div class="pull-right">
					<div class="btn-group dropup">
					  <button type="button" class="btn btn-default">友情链接</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					  	<?php foreach ($friendData as $value) {?>
						  	 <li><?php echo '<a href="'.$value["friend_links"].'" title="'.$value['friend_description'].'">'.$value["friend_title"].'</a>' ?></li>
					     <?php } ?>
					  </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>