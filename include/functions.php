<?php
/**
 * 成功弹出库
 * $content: string类型, 弹出消息框
 * $url: 路径
 */
	function success($content,$url)
	{
		echo '<script type="text/javascript">alert("'.$content.'");location.href="'.$url.'"</script>';
	}
/**
 * 失败弹出库
 */
	function error($content)
	{
		die('<script type="text/javascript">alert("'.$content.'");history.back();</script>');
	}

/**
 * bootstrap分页函数（有1,2,3,4,5页数功能）
 * $page_num: 总页数
 */

function pagetion($page_num)
{
   // 当前页数
  $cur_id=isset($_GET["page"])?(int)$_GET["page"]:1;

  // 上一页
  $next_id=$cur_id-1;

  // 下一页
  $pre_id=$cur_id+1;

  $html="";


// 首页、点击的时候，返回最前的一页、当点击首页的时候，不让按钮点击 
  if($cur_id==1)
  {
    $html.='<a tabindex="0" class="first ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default ui-state-disabled" id="DataTables_Table_0_first">First</a>';

  }else{
    $html.='<a tabindex="0" class="first ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default" id="DataTables_Table_0_first" href="?page=1">First</a>';
  }



// 上一页、点击的时候，返回当前页数-1、当到了最前的页数，不让按钮点击
  if($cur_id==1)
  {
    $html.='<a tabindex="0" class="previous fg-button ui-button ui-state-default ui-state-disabled" id="DataTables_Table_0_previous">Prev</a>';
  }else{
    $html.='<a tabindex="0" class="previous fg-button ui-button ui-state-default" id="DataTables_Table_0_previous" href="?page='.$next_id.'">Prev</a>';
  }


  // ...12[3]45...
  // $cur_id-2 <= $i <= $cur_id+2
  // 前...

  if($cur_id>3)
  {
   $html.="...";
  }

  for($i=1;$i<=$page_num;$i++)
  {
     if(($cur_id-2) <= $i && $i <= ($cur_id+2))
     { 
      // 判断是否是当前页，是的话，不让它可以点击
        if($cur_id==$i)
        {
          $html.='<a tabindex="0" class="fg-button ui-button ui-state-default ui-state-disabled">'.$i.'</a>';
        
        }else{
          $html.='<a tabindex="0" class="fg-button ui-button ui-state-default" href="?page='.$i.'">'.$i.'</a>';
        }
     }
  }
  if($cur_id<($page_num-2))
  {
    $html.="...";
  }

// 下一页、点击的时候，返回当前页面+1、当到了最后一页的时候，不让Next按钮可以点击
  if($cur_id>$page_num-2)
  {
   $html.='<a tabindex="0" class="next fg-button ui-button ui-state-default ui-state-disabled" id="DataTables_Table_0_next">Next</a>';

  }else{
   $html.='<a tabindex="0" class="next fg-button ui-button ui-state-default" id="DataTables_Table_0_next" href="?page='.$pre_id.'">Next</a>';
  }

  if($cur_id>$page_num-2)
  {
    $html.='<a tabindex="0" class="last ui-corner-tr ui-corner-br fg-button ui-button ui-state-default ui-state-disabled" id="DataTables_Table_0_last">Last</a>';
  }else{
    // 最后一页、点击的时候，返回到总页数、当到了最后一页的时候，不让Last按钮可以点击
    $html.='<a tabindex="0" class="last ui-corner-tr ui-corner-br fg-button ui-button ui-state-default" id="DataTables_Table_0_last" href="?page='.$page_num.'">Last</a>';
  }
  return $html;
}



/**
 * bootstrap分页函数（只有上页与下页功能）
 * $page_num: 总页数
 */
function pagetionCo($page_num)
{
   // 当前页数
  $cur_id=isset($_GET["page"])?(int)$_GET["page"]:1;

  // 上一页
  $next_id=$cur_id-1;

  // 下一页
  $pre_id=$cur_id+1;

  $html="";


// 上一页、点击的时候，返回当前页数-1、当到了最前的页数，不让按钮点击
  if($cur_id==1)
  {
    $html.='<li class="disabled"><a>Prev</a></li>';
  }else{
    $html.='<li><a href="?page='.$next_id.'">Prev</a></li>';
  }

// 下一页、点击的时候，返回当前页面+1、当到了最后一页的时候，不让Next按钮可以点击

   if($cur_id==$page_num)
  {
    $html.='<li class="disabled"><a>Next</a></li>';
  }else{
    $html.='<li><a href="?page='.$pre_id.'">Next</a></li>';
  }
  return $html;
}




/**
 * 数据库多个删除函数
 * $delname: 表单删除的名称(id)
 * $table: 数据库表名
 * $table_id: 数据库表名ID(主键)
 */
function delMore($delname,$table,$table_id,$url)
{
     $delid=implode(",",$_POST[$delname]);
        $sql="DELETE FROM {$table} WHERE {$table_id} IN({$delid})";
        mysql_query($sql);
        // 判断是否影响了记录
        if(mysql_affected_rows()>0)
        {
            success("删除成功",$url);
        }else{
            error("删除失败");
        }
}

/**
 * 数据库查询函数
 * $sqlContent: sql查询语句
 * return $data: $data= ;
 */
function selectDb($sqlContent)
{
  $res=mysql_query("{$sqlContent}");
  $data=array();
  if(mysql_num_rows($res)>0)
  {
    while($rows=mysql_fetch_assoc($res))
    {
      $data[]=$rows;
    }
  } 
  return $data;
}

/**
 * 数据库编辑功能函数
 * $table: 数据库表名
 * $table_id: 数据库ID(主键);
 */
function editTable($sqlContent)
{ 
         $res=mysql_query("{$sqlContent}");
         $id_data=array();
         if(mysql_num_rows($res)>0)
         {  
           $id_data=mysql_fetch_assoc($res);
         }
         return $id_data;
}

/**
 * 数据库修改功能函数
 * $sqlContent: sql语句
 * $table_id: 数据库ID(主键);
 */
function updateTable($sqlContent,$url)
{
  // 修改sql语句
      $sql="{$sqlContent}";
      mysql_query($sql);
      if(mysql_affected_rows()>0)
      {
        success("更新成功",$url);
      }else{
        error("更新失败");
      }
}

/**
 * 上传函数
 */

	function upload_file($input_name, $uploaded_dir='./uploads/'){
    // 接收上传过来的文件数据
    $file = $_FILES[$input_name];  

    // 根据错误信息反馈用户
    $error = $file['error'];
    switch($error){
        case UPLOAD_ERR_INI_SIZE:
            //die('<script>alert("");location.href="'.$_SERVER['PHP_SELF'].'"</script>');
            error("请上传小于1MB的文件");
            break;
        case UPLOAD_ERR_FORM_SIZE:
            break;
        case UPLOAD_ERR_PARTIAL:
            //die('<script>alert("你的网络有问题");location.href="'.$_SERVER['PHP_SELF'].'"</script>');
          error("你的网络有问题");
            break;
        case UPLOAD_ERR_NO_FILE:
            //die('<script>alert("请选择上传的文件");location.href="'.$_SERVER['PHP_SELF'].'"</script>');
             error("请选择上传的文件");
            break;
    }

    // 限制文件类型（MIME）
    $type = $file['type'];
    if( !in_array($type, array('image/jpeg', 'image/jpg', 'image/png', 'image/gif'))){
       // die('<script>alert("请上传jpg、png、gif格式的图片");location.href="'.$_SERVER['PHP_SELF'].'"</script>');
        error("请上传jpg、png、gif格式的图片");
    }

    // 限制文件大小
    $size = $file['size'];
    if( $size > 1*1024*1024 ){
        //die('<script>alert("请上传小于1MB的文件");location.href="'.$_SERVER['PHP_SELF'].'"</script>');
        error("请上传小于1MB的文件");
    }
        
    // 生成文件名
    // $filename = date('YmdHis') . rand(1000,9999);

    // 检查上传目录是否存在
    if( !file_exists( $uploaded_dir ) ){
        mkdir( $uploaded_dir );
    }

    // 获取原文件的文件类型
    $suffix = '';
    switch($file['type']){
        case 'image/jpeg':
        case 'image/jpg':
            $suffix = 'jpg';
            break;
        case 'image/png':
            $suffix = 'png';
            break;
        case 'image/gif':
            $suffix = 'gif';
            break;
    }

    // 保存文件
    $result = move_uploaded_file($file['tmp_name'], "{$uploaded_dir}{$_FILES[$input_name]['name']}");  

    if( $result ){
        //die('<script>alert("文件上传成功");location.href="'.$_SERVER['PHP_SELF'].'"</script>');
    }else{
        error("文件上传失败");
       // die('<script>alert("文件上传失败");location.href="'.$_SERVER['PHP_SELF'].'"</script>');
    }
}
?>