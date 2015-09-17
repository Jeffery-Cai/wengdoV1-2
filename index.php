<?php
	/**
 * wengdo首页
 * @author: Jeffery
 * create time: 2015-09-05
 */
	require "include/inic.php";

//查询通知

	$noticeData=selectDb("SELECT * FROM `wd_article_cate` LEFT JOIN `wd_article` ON wd_article_cate.article_cate_id=wd_article.article_cate_id WHERE wd_article_cate.article_cate_id=1 ORDER BY article_id DESC");
	
//查询新闻
	$newsData=selectDb("SELECT * FROM `wd_article_cate` LEFT JOIN `wd_article` ON wd_article_cate.article_cate_id=wd_article.article_cate_id WHERE wd_article_cate.article_cate_id=2 ORDER BY article_id DESC");
	
// 查询广告
	$adData=selectDb("SELECT * FROM `wd_ad` ORDER BY ad_id DESC");
	$caseData=selectDb("SELECT * FROM `wd_case` ORDER BY case_id DESC LIMIT 0,5");

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
	<!DOCTYPE html>
	<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" itemprop="keywords" content="<?php echo $optiondata['option_key'] ?>" />
		<meta name="description" itemprop="description" content="<?php echo $optiondata["option_description"] ?>" />
		<title>文豆集团-首页</title>
		<!-- Bootstrap -->
		<!-- <link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/base.css">	 
		<link rel="stylesheet" href="css/index.css">	
		<link rel="stylesheet" href="css/ihover.min.css">	
		<link rel="stylesheet" href="css/flickity.css">	

    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    </head>
    <body>  
     <?php require "include/header.php" ?>

     <style type="text/css">
     .ad div{
      width: 100%;
    }
    .ad img{
      width: 100%;
      height: 436px;
    }
    .flickity-page-dots{
      bottom: 18px!important;
    }
    .tempWrap{
      width: 100%!important;
    }
    .ih-item.square{
      box-shadow: none!important;
    }
    .picMarquee-left{ overflow:hidden; position:relative;  border:1px solid #ddd;   }
    .picMarquee-left .hd{ overflow:hidden;  height:30px;padding:0 10px;  }
    .picMarquee-left .hd .prev,.picMarquee-left .hd .next{ display: block;
      float: right;
      margin-right: 5px;
      margin-top: 2px;
      overflow: hidden;
      cursor: pointer;
      color: orange!important;
      font-size: 18px;
      font-weight: 700;}

      .picMarquee-left .bd{ padding:10px;   }
      .picMarquee-left .bd ul{ overflow:hidden; zoom:1;}
      .picMarquee-left .bd ul li{ margin:0 8px; float:left; _display:inline; overflow:hidden; text-align:center;  }
      .picMarquee-left .bd ul li .pic{ text-align:center; }
      .picMarquee-left .bd ul li .pic img{ width:380px; height:230px; display:block; padding:2px; border:1px solid #ccc; }
      .picMarquee-left .bd ul li .pic a:hover img{ border-color:#999;  }
      .picMarquee-left .bd ul li .title{ line-height:24px;   }


      </style>
      <div class="container-inner">
       <div class="ad">
        <?php foreach ($adData as $value) {?>
        <div><a href=""><img src="<?php echo './admin/adImg/'.$value['ad_img_url'] ?>" alt="<?php echo $value['ad_description'] ?>" class="img-responsive"></a></div>
        <?php } ?>
      </div>
    </div>

    <!-- 中间部分 -->
    <div class="content">
     <div class="news">	

      <div class="container">
       <div class="row">
        <div class="col-md-6">
         <ul class="nav nav-tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">通知</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">公司新闻</a></li><span class="pull-right" style="margin-top:5px;margin-right:4px"><a href="">More</a></span>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab1">
           <ul>
            <?php foreach ($noticeData as $value) {?>
            <li><div class="news-day"><?php echo date("Y-m-d",$value["article_time"]) ?></div><a href="<?php echo $value["article_links"] ?>"> → <?php echo $value["article_title"] ?></a></li>
            <?php } ?>
          </ul>
        </div>  
        <div class="tab-pane" id="tab2">
         <ul>
          <?php foreach ($newsData as $value) {?>
          <li><div class="news-day"><?php echo date("Y-m-d",$value["article_time"]) ?></div><a href="<?php echo $value["article_links"] ?>"> → <?php echo $value["article_title"] ?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>	
  <div class="col-md-6">
   <ul class="nav nav-tabs">
    <li class="active"><a href="#tab4" data-toggle="tab">通知</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab4">
     <ul>
      <?php foreach ($noticeData as $value) {?>
      <li><div class="news-day"><?php echo date("Y-m-d",$value["article_time"]) ?></div><a href="<?php echo $value["article_links"] ?>"> → <?php echo $value["article_title"] ?></a></li>
      <?php } ?>
    </ul>
  </div>
</div>
</div>  
</div>
</div>
</div>
<br>
<br>
<div class="container">
  <!-- 优秀案例 -->
  <div class="row">
   <div class="case_bg"><img src="images/case_title.gif" alt=""></div>
   <br>
   <div class="picMarquee-left">
    <div class="hd">
     <a class="next"> > </a>
     <a class="prev"> < </a>
   </div>
   <div class="bd">
     <ul class="picList">
      <?php foreach ($caseData as $value) {?>
      <li>
       <div class="pic ih-item square effect6 from_top_and_bottom">
        <a href="<?php echo $value["case_link"] ?>" target="_blank">
          <img src="./admin/uploads/<?php echo $value['case_img_url'] ?>" alt="<?php echo $value['case_description'] ?>"/>
          <div class="info">
            <h3><?php echo $value["case_title"] ?></h3>
            <p><?php echo $value["case_description"] ?></p>
          </div>
        </a>
      </div>
      <div class="title"><a href="<?php echo $value["case_link"] ?>" target="_blank"><?php echo $value["case_title"] ?></a></div>
    </li>
    <?php } ?>
  </ul>
</div>
</div>
</div>
</div>
</div>
</div>

<br>
<br>
<div class="contact">
  <div class="container">
<div class="row">
 <div class="col-md-6">
  <h3>公司地址</h3>
  <?php echo str_replace("\r\n","<br>",$optiondata["option_address"]); ?>
</div>
 <div class="col-md-6">
  <h3>联系我们</h3>
  <?php echo str_replace("\r\n","<br>",$optiondata["contact"]); ?>
</div>
</div>
</div>
</div>
<?php require "include/footer.php"?>
<?php require "include/js.php"?>
<script src="js/TouchSlide.1.1.js"></script>
<script src="js/flickity.pkgd.min.js"></script>
<script src="js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript">
$(".ad").flickity({
 wrapAround:"true",
 pageDots: "true",
 autoPlay: "1500"

});
jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:3,interTime:50,trigger:"click"});

			// 手机滑动优秀案例
TouchSlide({ 
 slideCell:"#picScroll",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					autoPage:true, //自动分页
					pnLoop:"false", // 前后按钮不循环
					delayTime:"1000"
				});
</script>
</body>
</html>