<?php
	/**
	 * wengdo后台管理头部
	 * author: Jeffery
	 * create time:  2015-09-07
	 */
  require "config.php";
  // 开启会话控制
  session_start();

// 意见信息总数
  $sql="SELECT contact_id FROM wd_contact";
  $res=mysql_query($sql);
  $numData=array();
  if(mysql_num_rows($res)>0)
  {
    while($rows=mysql_fetch_assoc($res))
    {
      $numData[]=$rows;
    }
  } 
  $opinion_num=count($numData);

// 没有登陆过的用户，不可进入后台页面
  if(!isset($_SESSION["is_login"])==1)
  {
    die('<script type="text/javascript">alert("你未登陆,即将为你跳转到登陆界面");location.href="../admin/login.php";</script>');
  }
  ?>
  <div id="header">
   <h1><a href="./dashb">文豆 后台管理系统</a></h1>		
 </div>
 
 <div id="search">
  <form action="">
   <input type="text" placeholder="Search here..." /><button type="submit" class="tip-right" title="Search"><i class="icon-search icon-white"></i></button>
 </form>
</div>
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav btn-group">
    <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-user"></i> <span class="text"><?php echo $_SESSION['username']; ?></span></a></li>
               <!--  <li class="btn btn-inverse dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">信息</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#">new message</a></li>
                        <li><a class="sInbox" title="" href="#">inbox</a></li>
                        <li><a class="sOutbox" title="" href="#">outbox</a></li>
                        <li><a class="sTrash" title="" href="#">trash</a></li>
                    </ul>
                  </li> -->
                  <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">设置</span></a></li>
                  <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-pencil"></i> <span class="text">意见信息</span><span class="label"><?php echo $opinion_num; ?></span></a></li>
                  <li class="btn btn-inverse"><a title="" href="login.php?logout=1"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
                </ul>
              </div>

              <div id="sidebar">
                <ul id="sidebar_id" style="display: block;">
                  <li><a href="index.php"><i class="icon icon-home"></i> <span>首页</span></a>
                  </li>
                  <li class="submenu"><a href=""><i class="icon icon-th-list"></i> <span>文章管理</span><span class="label"> > </span></a>
                    <ul>
                      <li><a href="article.php">所有文章</a></li>
                      <li><a href="article_add.php">添加文章</a></li>
                    </ul>
                  </li>
                  <li class="submenu"><a href=""><i class="icon icon-th-list"></i> <span>导航管理</span><span class="label"> > </span></a>
                    <ul>
                      <li><a href="nav.php">所有导航</a></li>
                      <li><a href="nav_add.php">添加导航</a></li>
                    </ul>
                  </li>
                  <li class="submenu"><a href=""><i class="icon icon-th-list"></i> <span>案例管理</span><span class="label"> >  </span></a>
                    <ul>
                      <li><a href="products.php">案例列表</a></li>
                      <li><a href="products_add.php">添加案例</a></li>
                    </ul>
                  </li>
                  <li class="submenu"><a href=""><i class="icon icon-th-list"></i> <span>用户管理</span><span class="label"> > </span></a>
                    <ul>
                     <li><a href="user_gl.php">用户列表</a></li>
                     <li><a href="user_add_gl.php">添加用户</a></li>
                   </ul>
                 </li>
                 <li class="submenu"><a href=""><i class="icon icon-th-list"></i> <span>意见管理</span><span class="label"> > </span></a>
                  <ul>
                   <li><a href="opinion.php">意见列表</a></li>
                 </ul>
               </li> 
               <li class="submenu"><a href=""><i class="icon icon-th-list"></i> <span>合作伙伴管理</span><span class="label"> > </span></a>
                <ul>
                 <li><a href="partner.php">合作伙伴</a></li>
               </ul>
             </li>
             <li class="submenu"><a href=""><i class="icon icon-th-list"></i> <span>单页管理</span><span class="label"> > </span></a>
              <ul>
               <li><a href="document_list.php">单页列表</a></li>
             </ul>
           </li>
           <!-- <li><a href=""><i class="icon icon-th-list"></i> <span>管理员管理</span></a> -->
         </li>
         <li class="submenu"><a href=""><i class="icon icon-th-list"></i> <span>广告管理</span><span class="label"> > </span></a>
          <ul>
           <li><a href="ad_list.php">广告列表</a></li>
           <li><a href="ad_add_list.php">添加广告</a></li>
         </ul>
       </li>
       <li class="submenu"><a href=""><i class="icon icon-th-list"></i> <span>留言管理</span><span class="label"> > </span></a>
        <ul>
         <li><a href="meg_list.php">留言列表</a></li>
       </ul>
     </li>
     <!-- <li><a href="recycle.php"><i class="icon icon-th-list"></i> <span>回收站</span></a> -->
   </li>
   <li class="submenu"><a href=""><i class="icon icon-th-list"></i> <span>友情链接</span><span class="label"> > </span></a>
     <ul>
       <li><a href="friend_links.php">友链列表</a></li>
       <li><a href="friend_add_links.php">添加友链</a></li>
     </ul>
   </li>
   <li><a href="option.php"><i class="icon icon-th-list"></i> <span>网站设置</span></a></li>
 </ul>
 
</div>