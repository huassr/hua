<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:51:"E:\hua/application/index\view\admin\order2list.html";i:1526818182;s:45:"E:\hua/application/index\view\admin\base.html";i:1526819007;s:45:"E:\hua/application/index\view\admin\head.html";i:1526719077;s:45:"E:\hua/application/index\view\admin\left.html";i:1525404369;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/com/AdminLTE/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/css/Fontss/css/font-awesome.css"/>
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
    
<link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/css/jquery.fileupload.css">
  <!-- 搜索 -->
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">代养列表</h3>
    </div>
    <div class="box-body">
      <form method="GET" action="<?php echo url('admin/order2list'); ?>" id='form'>
      <div class="row">
        <div class="col-xs-4 col-md-3">
          <div class="input-group">
            <input name="word" type='text' class='form-control' value="" placeholder='关键词搜索..'>
            <span class="input-group-addon" onclick="$('#form').submit();"><i class="fa fa-search"></i></span>
              <?php if($_GET['word'] != ''): ?>
            <a title='清除条件' class="input-group-addon" href="<?php echo url('admin/order2list'); ?>"><i class="fa fa-remove"></i></a>
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
            <th>商品</th>
            <th>用户</th>
            <th>数量</th>
            <th>总费用</th>
            <th>托管时长</th>
            <th>状态</th>
            <th>下单时间</th>
            <th>操作</th>
          </tr>
          <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <tr>
            <td><?php echo $vo['id']; ?></td>
            <td><img height="60" src="<?php echo $THink['Config']['WEBSERVER']; ?>/<?php echo $vo['cover']; ?>"></td>
            <td><?php echo $vo['nickname']; ?></td>
            <td><?php echo $vo['num']; ?></td>
            <td><span class="label label-success">$<?php echo $vo['fee']; ?></span></td>
            <td><span class="label label-warning"><?php echo $vo['time']; ?>month</span></td>
            <td><?php if($vo['status'] == 1): ?><span class="label label-warning">未支付</span>
              <?php elseif($vo['status'] == 2): ?><span class="label label-success">托养中</span>
              <?php endif; ?>
            </td>
            <td><?php echo date("Y-m-d H:i",$vo['addtime']); ?></td>

            <td>


              <?php if($vo['status'] == 2): ?>
                <a href="javascript:updatestat(<?php echo $vo['id']; ?>)" class="btn btn-success">更新花卉状态</a>

                  <!-- <a href="javascript:;" class="disabled btn btn-default">replied</a> -->
                <?php endif; ?>
                <a href="javascript:setstat(<?php echo $vo['id']; ?>,-1);" class="btn btn-danger">删除</a>



            </td>
          </tr>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>

    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
	    <ul class="pagination pagination-sm no-margin pull-right"><?php echo $page; ?></ul>
	  </div>
  </div>


  <div class="modal fade" tabindex="-1" role="dialog" id="flower">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">update flower status now</h4>
        </div>
        <div class="modal-body">


            <form class="form" id="updateadmin">
              <input type="hidden" name="oid" value="">

              <div class="form-group">
                  <label for="">height(cm)</label>
                  <input type="number" name="height" value="40" class="form-control">
              </div>

              <div class="form-group">
                <label for="">wight(g)</label>
                <input type="number" name="weight" value="20" class="form-control">
              </div>


                <div class="form-group">

                  <textarea name="text" class="form-control" rows="8" cols="80" placeholder="please decribe the flower status ,using words"></textarea>

                </div>

                <div class='form-group'>
                  <label>detail图片：</label>
                    <a href="javascript:$('.showcover').html('');" onclick="return confirm('确定清除？');" class='pull-right'>清除封面</a> <br>
                      <button type='button' class='btn btn-success btn-sm fileinput-button'><i class="glyphicon glyphicon-picture"></i> <small>推荐尺寸 400*300 点击上传</small>
                        <input  id="uploadcover" type="file" name="files" accept="image/*" multiple></button>
                        <div id="progress" class="progress">
                            <div class="progress-bar progress-bar-success"></div>
                        </div>
                        <div id="files" class="files">
                        </div>
                        <div class='showcover' style="min-height:300px;">


                        </div>

                </div>





            </form>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" onclick="makeupdate()" class="btn btn-primary">Submit</button>
        </div>



      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<script type="text/javascript">
function setstat(id,t){
  if(t == -1){
    var r = confirm("确定删除该订单？");
  }
  if(r == true){
    $.post(location.href,{"id":id,"t":t},function(data){
      alert(data.msg);
      if(data.ret == 1) location.reload();
    },'JSON');
  }
}

function updatestat(id){
  $("input[name='oid']").val(id);
  $("#flower").modal();
}


function makeupdate(){

$.post("<?php echo url('index/admin/FlowerStatUpdate'); ?>",$("#updateadmin").serialize(),function(data){


      alert(data.msg);
      if(data.code === 1){
        location.reload();
      }


},'JSON');

}
</script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/vendor/jquery.ui.widget.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/load-image.all.min.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/canvas-to-blob.min.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/jquery.iframe-transport.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/jquery.fileupload.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/jquery.fileupload-process.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/jquery.fileupload-image.js"></script>
<script type="text/javascript">
$(function(){
    $('#uploadcover').fileupload({
        url: "<?php echo url('Common/upload'); ?>",
        dataType: 'JSON',
        acceptFileTypes: 'jpg,png,gif,jpeg,bmp',
      maxFileSize: 8000000, // 800kb
      disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator && navigator.userAgent),
        imageMaxWidth: 400, //自动裁剪保持该宽度
        imageMaxHeight: 300,
        imageCrop: true,
        done: function (e, data) {
          console.log(data);
          if(data.result.ret == 1){


              var file=`<div class="col-xs-6 col-md-3">
              <input type="hidden" name='album[]' value=`+data.result.file+`>
                  <a href="#" class="thumbnail">
                    <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/`+data.result.file+`" alt="...">
                  </a>
                </div>`;
              $(".showcover").append(file);
            }else{
              // alert(data.result.msg);
            }
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');

});
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
