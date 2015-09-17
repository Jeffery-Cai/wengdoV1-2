<?php
	require "include/inic.php";
	$data1=selectDb("SELECT * FROM `wd_document` WHERE document_id=1");
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
<?php 
	foreach ($data1 as $value) {
		echo $value["document_content"];
	}
?>
<!-- 
<div class="about">
<div class="container">
	<ol class="breadcrumb">
  <li><a href="#">首页</a></li>
  <li><a href="#">关于我们</a></li>
  <li class="active">了解文豆</li>
	</ol>
	 <ul class="nav nav-pills nav-justified">
		<li class="active"><a href="#tab1" data-toggle="tab">关于我们</a></li>
		 <li class=""><a href="#tab2" data-toggle="tab">团队介绍</a></li>
		 <li class=""><a href="#tab3" data-toggle="tab">我们的优势</a></li>
		 <li class=""><a href="#tab4" data-toggle="tab">发展历程</a></li>
	 </ul>
	 <div class="about-img"><img src="images/about_img.gif" alt="" style="width:100%"></div>
	 <div class="tab-content">
	 <div class="tab-pane active" id="tab1">
		<p>
			文豆集团，是一家提供互联网服务的高科技集团公司，集策划、设计、前端优化、研发、测试、系统运维、网站推广、运营、团队外包及互联网人才培养为一体的成熟业务体系。总部位于广州市海珠区鹭江地铁旁。

		</p>
      <p> 文豆主要提供高品质网站建设方案，电子商务平台解决方案，移动端应用开发方案（基于Android、iOS APP及移动端网站），微应用、微商城、微官网、微互动营销解决方案，企业信息化解决方案（OA、CRM），以及PHP网站开发、Java开发、UI设计、淘宝美工人才培养服务，人才外包服务，高端IT人才猎头服务。
		</p>
		<p>
		公司的运营理念是：
		携手共进，共赢天下
		以结果为导向。树立好工作目标，监督过程，实现理想效果。
		打造一流的团队，创造一流的服务，成为一流的行业标志。
		</p>
		<p>
		员工职业发展：
		我们非常清楚职业发展计划对于每个员工的重要性。公司对人员的要求，更加看重心态，只要愿意成为文豆的一份子，公司都会让员工充分展示自己，发挥他们的潜力、才干和热情，在文豆走向职业的成功。
		</p>
		<p>
		服务理念：
		产品是核心，服务是灵魂，服务是命脉。
		走在行业的前端，创造新的至高点。
		</p>
	 </div> 
	 <div class="tab-pane" id="tab2">
		<p>
			一个前进的时代,总有一种奋发向上的精神;
		一个发展的企业,总有一种积极进取的凝聚力——那就是团队的力量。
		事实告诉我们,一个企业,不仅要有强大的物质基础,更要有一个强大的团队力量。
		<br>
		这种力量源自理想、源自信仰、源自操守、源自品格,是一个企业战胜一切艰难险阻的强大动力。
		文豆坚持把培育一支优秀的团队摆在重要位置,让文豆每个人自觉地与企业同呼吸,共命运,荣辱与共,同心同德,齐心协力,勇于进取,共同实现企业发展目。
		<br>
		文豆明确合理的企业目标是团队每个成员凝聚在一起的奋斗方向,在对目标认知与共识的基础上,鼓舞斗志,团结奋进,自觉为团队贡献力量,并把个体利益升华为团队利益,增强团队凝聚力。
		企业通过企业文化的创造、认同、享用、继承和发展,完成个性目标与企业目标的融合过程,增强内部共性化,培养员工共同价值观,提升凝聚力。
		<br>
		团队精神的精髓是“协作“,而协作的基础是信任,而信任是团队乃至公司发展的前提,
		文豆团队每一个成员将诚实、公开、一致、尊重、宽容五个方面互为一体,创造了一个相互信任的氛围,培养彼此之间的信任感。 个性创造奇迹,团队成就未来。有效地发挥团队精神,有助于企业集中人、财、物发挥集体效应,增强企业竞争力,使企业朝着更高、更远目标不断迈进。
		<img src="images/1-140Z6005T3934.jpg" alt="" class="pull-center img-responsive">
		</p>
	 </div> 
	 <div class="tab-pane" id="tab3">
		<p>
		我们擅长项目开发、产品网络推广、企业品牌传播、事件营销，注重传播源身份、角度、品牌和互动的效果营销团队。性价比高，策划准，效果好。
		</p>
<p>洞察客户需求，策划相应解决方案及创新建议。是整个项目的执行根基和指南。
站在客户的角度，倾听并真正理解客户需求的变化，及时加以应对。这会让项目进度更加顺利。
强调项目经理和客户的全程沟通，重视项目沟通会，关键节点可安排工作人员驻扎客户公司现场，以便高效、准确地解决关键问题。</p>
<p>
当客户需求和公司既定流程有所冲突，根据实际情况协调安排公司相关部门配合，急客户之所需。 在项目执行过程中，有一套专业科学的质量保障系统及规范。配置专职专人质量控制人员，对各个环节进行及时检查、测试及纠正。
欲善其事，必先利其器。文豆有一套合理的奖惩制度，保障和调动项目组成员的积极性。
</p>
	 </div>
	  <div class="tab-pane" id="tab4">
		<p>
		<p>>2015年2月，文豆集团，深圳总部正式成立，开始运营
<p>>2015年1月，集团下的软件公司“广州爬山去软件科技有限公司”成立
<p>>2014年10月，文豆正式启动集团化的运营模式
<p>>2014年7月文豆网络-番禺技术培训中心成立，为番禺区的IT爱好者提供专业的岗前培训
<p>>2014年6月文豆网络-广州大学城技术培训中心成立，为大学城附近的学子提供专业的岗前培训
<p>>2013年12月文豆电商学院成立，为广大电商企业及商家提供电商人才培养服务
<p>>2013年5月技术研发部研发的 WDCRM（文豆客户关系管理系统）1.0版本上线，为企业信息化建设提供专业的客户关系管理解决方案服务
<p>>2013年1月技术研发部研发的分推客云平台上线，为广大中小企业提供基于微信的微网站，微商城等微应用服务
<p>>2012年6月ACI正式授权文豆为ACI认证培训考试中心
<p>>2012年4月技术研发部研发的PHP必答网上线，为PHP爱好者提供免费的技术问答服务
<p>>2012年3月技术研发部研发的PHP资讯网上线，为PHP爱好者提供相关的资讯信息服务
<p>>2012年2月技术研发部研发的Web人才网上线，构建国内最专业的Web人才求职招聘平台
<p>>2011年11月与上海商派网络科技有限公司签订合作成为知识供应商，为其客户培养电商技术人才
<p>>2010年6月技术研发部研发的ee72源码商城上线，为广大程序员提供源码买卖交易服务平台
<p>>2010年3月技术研发部研发的1.0研发完成，为各大企业提供高端的网站建设实施方案，从策划，设计，开发，营销一体化的解决方案
<p>>2010年2月与南方医科大学的医学职业技术学院合作创建大学生校园实训中心，同时成立培训部，同时技术研发部结合实际开发要<p>>求研发出了自己的课程体系，开始给员工及客户企业做岗前培训
<p>>2009年12月创建文豆网络，开始为企业提供互联网解决方案
		</p>
	 </div>
	</div>
</div>
</div> -->
<?php require "include/footer.php" ?>
<?php require "include/js.php" ?>
  </body>
</html>