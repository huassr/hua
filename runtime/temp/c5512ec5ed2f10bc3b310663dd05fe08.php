<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:46:"E:\hua/application/index\view\admin\index.html";i:1525404369;s:45:"E:\hua/application/index\view\admin\base.html";i:1526818308;s:45:"E:\hua/application/index\view\admin\head.html";i:1526719077;s:45:"E:\hua/application/index\view\admin\left.html";i:1525404369;}*/ ?>
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
    
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/static/echarts.js"></script>
<!-- 曲线图 -->
<div class="box box-solid">
<div class="box-body">
	<div id="container" style="min-width: 310px; height: 450px; margin: 0 auto"></div>
</div>
</div>


<script type="text/javascript">
var app = echarts.init(document.getElementById('container'));
var posList = [
    'left', 'right', 'top', 'bottom',
    'inside',
    'insideTop', 'insideLeft', 'insideRight', 'insideBottom',
    'insideTopLeft', 'insideTopRight', 'insideBottomLeft', 'insideBottomRight'
];

app.configParameters = {
    rotate: {
        min: -90,
        max: 90
    },
    align: {
        options: {
            left: 'left',
            center: 'center',
            right: 'right'
        }
    },
    verticalAlign: {
        options: {
            top: 'top',
            middle: 'middle',
            bottom: 'bottom'
        }
    },
    position: {
        options: echarts.util.reduce(posList, function (map, pos) {
            map[pos] = pos;
            return map;
        }, {})
    },
    distance: {
        min: 0,
        max: 100
    }
};

app.config = {
    rotate: 90,
    align: 'left',
    verticalAlign: 'middle',
    position: 'insideBottom',
    distance: 15,
    onChange: function () {
        var labelOption = {
            normal: {
                rotate: app.config.rotate,
                align: app.config.align,
                verticalAlign: app.config.verticalAlign,
                position: app.config.position,
                distance: app.config.distance
            }
        };
        myChart.setOption({
            series: [{
                label: labelOption
            }, {
                label: labelOption
            }, {
                label: labelOption
            }, {
                label: labelOption
            }]
        });
    }
};


var labelOption = {
    normal: {
        show: true,
        position: app.config.position,
        distance: app.config.distance,
        align: app.config.align,
        verticalAlign: app.config.verticalAlign,
        rotate: app.config.rotate,
        formatter: '{c}  {name|{a}}',
        fontSize: 16,
        rich: {
            name: {
                textBorderColor: '#fff'
            }
        }
    }
};

option = {
    color: ['#003366', '#006699', '#4cabce', '#e5323e'],
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            type: 'shadow'
        }
    },
    legend: {
        data: ['代养订单', '在线订单']
    },
    toolbox: {
        show: true,
        orient: 'vertical',
        left: 'right',
        top: 'center',
        feature: {
            mark: {show: true},
            dataView: {show: true, readOnly: false},
            magicType: {show: true, type: ['line', 'bar', 'stack', 'tiled']},
            restore: {show: true},
            saveAsImage: {show: true}
        }
    },
    calculable: true,
    xAxis: [
        {
            type: 'category',
            axisTick: {show: false},
            data: <?php echo $day; ?>
        }
    ],
    yAxis: [
        {
            type: 'value'
        }
    ],
    series: [
        {
            name: '代养订单',
            type: 'bar',
            barGap: 0,
            label: labelOption,
            data: <?php echo $data2; ?>
        },
        {
            name: '在线订单',
            type: 'bar',
            label: labelOption,
            data: <?php echo $data1; ?>
        },

    ]
};


app.setOption(option);
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
