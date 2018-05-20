<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:49:"E:\hua/application/index\view\admin\userlist.html";i:1526719592;s:45:"E:\hua/application/index\view\admin\base.html";i:1526818232;s:45:"E:\hua/application/index\view\admin\head.html";i:1526719077;s:45:"E:\hua/application/index\view\admin\left.html";i:1525404369;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/com/AdminLTE/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/com/AdminLTE/css/AdminLTE.css">
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/com/AdminLTE/css/skins/skin-blue.css">
<!-- jQuery 2.1.4 -->
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/jquery-1.11.2.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/com/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/com/common.js"></script>
<style type="text/css">
/*loading*/
#mask{position: fixed;z-index: 999999;top: 0;bottom: 0;left: 0;right: 0;display: none;}
#mask .loading{padding: 10px 15px;background: #333;opacity: 0.75;text-align: center;color: #FFF;line-height: 23px;position: fixed;left:0;right: 0;bottom: 0;top: 0;width: 120px;height: 65px;z-index: 999999;margin: auto;border-radius: 4px;}
</style>
<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="#" target='_blank' class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><i class='fa fa-television'></i></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><i class='fa fa-television'></i><?php echo \think\Config::get('SITE'); ?></span>
  </a>
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->

            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">Admin</span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <p>
                Admin管理员
                <small>上次登录：2018-06-13</small>
              </p>
            </li>

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">

              </div>
              <div class="pull-right">
                <a href="<?php echo url('index/admin/logout'); ?>" class="btn btn-default btn-flat">退出系统</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

  <!-- Left side column. contains the logo and sidebar -->
  <?php if(\think\Session::get('login_cinema_status') != 1): ?>
  <aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li><a href="<?php echo url('index/admin/index'); ?>"><i class="fa fa-bar-chart"></i> <span>管理概况</span></a></li>


        <li><a href="<?php echo url('Index/admin/flowerlist'); ?>">花卉管理</a></li>
        <li><a href="<?php echo url('Index/admin/vegelist'); ?>">蔬菜管理</a></li>
        <li><a href="<?php echo url('Index/admin/orderlist'); ?>">订单管理</a></li>
        <li><a href="<?php echo url('Index/admin/order2list'); ?>">代养管理</a></li>

        <li><a href="<?php echo url('Index/admin/queslist'); ?>">咨询列表</a></li>
         <li><a href="<?php echo url('Index/admin/bloglist'); ?>">新闻管理</a></li>
        <li><a href="<?php echo url('Index/admin/userlist'); ?>">用户管理</a></li>
           <!-- <li><a href="<?php echo url('Index/admin/likelist'); ?>">点赞记录</a></li> -->



    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
<if condition="$eq egt '0' OR $eq neq ''">
<script type="text/javascript">
if(!isNaN('<?php echo $eq; ?>')){
  $(".sidebar-menu > li").eq(<?php echo $eq; ?>).addClass('active');
}else{
  $(".sidebar-menu > li").each(function(){
    var txt = $.trim($(this).children('a').text());
    if(txt == '<?php echo $eq; ?>'){
      $(this).addClass('active');
      return;
    }
  });
}
</script>
</if>

  <?php endif; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
    
  <!-- 搜索 -->
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">用户列表</h3>

    </div>
    <div class="box-body">
      <form method="GET" action="<?php echo url('index/admin/userlist'); ?>" id='form'>
      <div class="row">
        <div class="col-xs-4 col-md-3">
          <div class="input-group">
            <input name="word" value="<?php echo $_GET['word']; ?>" type='text' class='form-control' placeholder='昵称关键词搜索..'>
            <span class="input-group-addon" onclick="$('#form').submit();"><i class="fa fa-search"></i></span>
            <?php if($_GET['word'] != ''): ?>
            <a title='清除条件' class="input-group-addon" href="<?php echo url('index/admin/userlist'); ?>"><i class="fa fa-remove"></i></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      </form>
    </div><!-- /.box-body -->
  </div>
  <!-- 列表 -->
  <div class="box box-solid">
    <div class="box-body">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th>ID</th>
            <th>昵称</th>
            <th>邮箱</th>
            <th>性别</th>
            <th>电话</th>
            <th>注册时间</th>
            <th>操作</th>
          </tr>
          <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
          <tr>
            <td><?php echo $vo['id']; ?></td>
            <td><?php echo $vo['nickname']; ?></td>
            <td><?php echo $vo['email']; ?></td>
            <td><?php if($vo['sex'] == 1): ?><span class="label label-info">男</span><?php else: ?><span class="label label-danger">女</span><?php endif; ?></td>
            <td><?php echo $vo['phone']; ?></td>
          <td><?php echo date('Y-m-d H:i',$vo['addtime']); ?></td>

            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle btn-xs" data-toggle="dropdown">
                  管理
                  <span class="caret"></span>
                  <span class="sr-only">+</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="javascript:setstat(<?php echo $vo['id']; ?>,-1);">删除</a></li>
                </ul>
              </div>
            </td>
          </tr>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>

    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
	    <ul class="pagination pagination-sm no-margin pull-right"><?php echo $list->render(); ?></ul>
	  </div>
  </div>
<script type="text/javascript">
function setstat(id,t){
  if(t == -1){
    var r = confirm("确定删除该用户？");
  }else if(t == 1){
    var r = confirm("确定显示该用户？");
  }else if(t == 0){
    var r = confirm("确定隐藏该用户？");
  }
  if(r == true){
    $.post("<?php echo url('index/admin/deluser'); ?>",{"id":id},function(data){
      alert(data.msg);
      if(data.ret == 1) location.reload();
    },'JSON');
  }
}
</script>

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->

    <!-- Default to the left -->
    <a  target='_blank'>&copy; </a>
  </footer>
</div><!-- ./wrapper -->
<!-- AdminLTE App -->
<script src="/public/static/com/AdminLTE/js/app.min.js"></script>
<div id="mask"><div class='loading'></div></div>

</body>
</html>
