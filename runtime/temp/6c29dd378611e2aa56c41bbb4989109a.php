<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:48:"E:\hua/application/index\view\index\myorder.html";i:1525404369;s:45:"E:\hua/application/index\view\index\base.html";i:1526815243;}*/ ?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>花卉蔬菜，线上选购</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />

        <link href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/css/master.css" rel="stylesheet">
        <!-- <link href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/css/bootstrap.min.css" rel="stylesheet"> -->
        <!-- SWITCHER -->
        <link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/switcher.css" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/color1.css" title="color1" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/color2.css" title="color2" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/color3.css" title="color3" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/color4.css" title="color4" media="all" />
         <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/css/awesome.css"/>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/jquery-1.11.2.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/bootstrap.min.js"></script>
        <style media="screen">
          .form-control{border-color: #d0c9c9;}
        </style>
    </head>
    <body data-scrolling-animations="true">
        <div class="b-page">
            <!-- Start Switcher -->
            <div class="switcher-wrapper">
                <div class="demo_changer">
                    <div class="demo-icon customBgColor"><span class="ef icon_cog "></span></div>
                    <div class="form_holder">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="predefined_styles">
                                    <div class="skin-theme-switcher">
                                        <h4>Skin</h4>
                                        <a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#7da500;"> </a>
                                        <a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#b7ca0d;"> </a>
                                        <a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#0bdabc;"> </a>
                                        <a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#01a664;"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- End Switcher -->
            <header id="header">
                <div class="header-top">
                    <div class="wrapper">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="header-info">
                                <div class="description-header">
                                    欢迎来到花卉蔬菜选购网
                                </div>
                                <div class="color-primary">
                                    +001 6688724
                                </div>
                                <div class="color-primary">
                                    hello@flower.com
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="loginarea">
                          <?php if(\think\Session::get('login_uid') != ''): ?>

                                  <a href="javascript:logout()" class="btn extra-color text-uppercase pull-right">(<?php echo \think\Session::get('login_nick'); ?>)登出</a>

                                  <a href="<?php echo url('index/index/myorder'); ?>"  class="btn extra-color text-uppercase pull-right" style="margin-right:10px;">我的订单</a>
                                    <a href="<?php echo url('index/index/myask'); ?>"  class="btn extra-color text-uppercase pull-right" style="margin-right:10px;">我的咨询</a>
<a href="<?php echo url('index/index/myorder2'); ?>"  class="btn extra-color text-uppercase pull-right" style="margin-right:10px;">我的托养</a>

                          <?php else: ?>
                            <a href="javascript:$('#loginmod').modal()"  class="btn extra-color text-uppercase pull-right" style="margin-left:10px;">登录</a>

                              <a href="<?php echo url('index/index/register'); ?>" class="btn extra-color text-uppercase pull-right">注册</a>
                          <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="wrapper">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <a href="." class="logo"></a>
                        </div>
  <?php if(\think\Session::get('login_uid') != ''): ?>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 cart-block-r">
                            <div class="cart-block pull-right">
                                <a href="<?php echo url('index/index/mycart'); ?>"><i class="flaticon-shopping-bag1"></i></a>
                                <div class="cart-box">
                                    <div class="cart-price pull-right">
                                        <span class="color-primary text-uppercase">购物车:</span>
                                        <span class="price"><?php echo $cart_total; ?></span>
                                        <div class="items-cart"><?php echo $cart_item; ?> ITEMS</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 nav-box">
                            <span id="toggle-nav" class="ef icon_menu mobile-menu-toggle"></span>
                            <nav class="nav-container">
                                <ul>
                                    <li class="search pull-right">

                                            <div class="form-group">
                                                <label class="sr-only" for="searchQuery">Search...</label>
                                                <input type="text" class="search-field" id="search" placeholder="Search...">
                                            </div>


                                        <a class="iconSearch" href="#">
                                            <span class="ef icon_search"></span>                                        </a>                                    </li>
                                    <li><a class="#" href="<?php echo url('index/index/index'); ?>">主页</a></li>

                                    <li><a class="#" href="<?php echo url('index/index/store'); ?>">在线选购</a></li>
                                    <li><a class="#" href="<?php echo url('index/index/news'); ?>">新闻</a></li>
                                    <li><a class="#" href="<?php echo url('index/index/about'); ?>">关于</a></li>
                                    <!-- <li><a class="#" href="#">服务</a></li> -->
                                    <!-- <li><a class="#" href="contact.html">联系我们</a></li> -->

                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </header>


        <div class="col-md-12 text-center" style="padding: 15px;z-index: 99999;" id="searchbox">




        </div>

      
  <section class="title-center">
    <div class="row" style="padding:25px 30px;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<?php if($orders != NULL): if(is_array($orders) || $orders instanceof \think\Collection || $orders instanceof \think\Paginator): if( count($orders)==0 ) : echo "" ;else: foreach($orders as $key=>$vo): if($vo['data'] != ''): ?>

      <div class="panel panel-default">
        <div class="panel-heading"><?php echo $vo['orderid']; ?> &nbsp订单总额:<span style="color:red;font-size:25px;"><?php echo $vo['total']; ?></span> &nbsp     <p>订单状态:<?php if($vo['status'] == 1): ?>
            <span class="label label-success">no pay</span><?php elseif($vo['status'] == 2): ?>
            <span class="label label-info">waiting post</span><?php elseif($vo['status'] == 3): ?>
            <span class="label label-warning">posting</span><?php elseif($vo['status'] == 4): ?>
                <span class="label label-success">done</span>
            <?php endif; ?>
          </p></div>
        <div class="panel-body">
                  <ul class="media-list">
                    <?php if(is_array($vo['data']) || $vo['data'] instanceof \think\Collection || $vo['data'] instanceof \think\Paginator): if( count($vo['data'])==0 ) : echo "" ;else: foreach($vo['data'] as $key=>$towdata): ?>

                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="<?php echo \think\Config::get('SERVER'); ?>/<?php echo $towdata['flower']['cover']; ?>" alt="..." width="100">
                          </a>
                        </div>
                        <div class="media-body">
                          <h3 class="media-heading"><?php echo $towdata['flower']['name']; ?></h3>
                          <h4>数量:<?php echo $towdata['num']; ?></h4>
                          <p>单价：<?php echo $towdata['price']; ?></p>
                        </div>
                      </li><hr>


                    <?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>
      <div class="">
          <p>下单时间:<?php echo date("Y-m-d H:i:s",$vo['addtime']); ?></p>
          <span class="btn btn-warning" onclick="Ask(<?php echo $vo['id']; ?>)" style="padding:8px 15px">咨询问题</span>
          <?php if($vo['status'] == 3): ?><span class="btn btn-warning" onclick="recieve(<?php echo $vo['id']; ?>)" style="padding:8px 15px">确认收货</span><?php endif; if($vo['expressinfo'] != ''): ?>
          <p><?php echo $vo['expressinfo']['name']; ?>:<?php echo $vo['expressinfo']['id']; ?></p>
          <?php endif; ?>
      </div>

        </div>
      </div>




































        <?php else: ?>
        <div class="media">
        <div class="media-left">
          <a href="#">
            <img height="175px" class="media-object" src="<?php echo \think\Config::get('WEBSER'); ?>/<?php echo $vo['cover']; ?>" alt="...">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $vo['orderid']; ?></h4>
          <p><?php echo $vo['name']; ?></p>
          <p style="color:red;font-size:20px;">订单总额:$<?php echo $vo['fee']; ?></p>
          <p>下单时间:<?php echo date("Y-m-d H:i:s",$vo['addtime']); ?></p>
          <p>订单状态:<?php if($vo['status'] == 1): ?>
            <span class="label label-success">no pay</span><?php elseif($vo['status'] == 2): ?>
          <span class="label label-info">waiting post</span><?php elseif($vo['status'] == 3): ?>
          <span class="label label-warning">posting</span><?php elseif($vo['status'] == 4): ?>
              <span class="label label-success">done</span>
          <?php endif; ?>
        </p>
          <span class="btn btn-warning" onclick="Ask(<?php echo $vo['id']; ?>)" style="padding:8px 15px">咨询问题</span>
          <?php if($vo['status'] == 3): ?><span class="btn btn-warning" onclick="recieve(<?php echo $vo['id']; ?>)" style="padding:8px 15px">确认收货</span><?php endif; ?>
        </div>
        <?php if($vo['expressinfo'] != ''): ?>
        <p><?php echo $vo['expressinfo']['name']; ?>:<?php echo $vo['expressinfo']['id']; ?></p>
        <?php endif; ?>
      </div>

      <?php endif; ?>
          <hr>
      <?php endforeach; endif; else: echo "" ;endif; else: ?>

        <div class="well">
            <p>You didn't buy anything here.</p>

        </div>

      <?php endif; ?>
      </div>

      <div class="col-md-6">
<?php if($orders != NULL): if($page == 1): ?>
        <a class="btn extra-color text-uppercase pull-right" style="padding:10px 5px" href="<?php echo url('index/index/myorder'); ?>?p=1">已经到第一页</a>
        <?php else: ?>
          <a class="btn extra-color text-uppercase pull-right" style="padding:10px 5px" href="<?php echo url('index/index/myorder'); ?>?p=<?php echo $page-1; ?>">上一页</a>
        <?php endif; ?>
      </div>
    <div class="col-md-6">
      <?php if($page == $maxpage): ?>
        <a class="btn extra-color text-uppercase" style="padding:10px 5px" href="<?php echo url('index/index/myorder'); ?>?p=<?php echo $maxpage; ?>">最后一页</a>
      <?php else: ?>
      <a class="btn extra-color text-uppercase" style="padding:10px 5px" href="<?php echo url('index/index/myorder'); ?>?p=<?php echo $page+1; ?>">下一页</>
      <?php endif; endif; ?>
    </div>



    </div>
  </section>


  <div class="modal fade" tabindex="-1" role="dialog" id="ask">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">告诉我们你想知道些什么？</h4>
        </div>
        <div class="modal-body">


            <form class="form" id="askform">
              <input type="hidden" name="oid" value="">
                <div class="form-group">

                    <label for="">问题标题</label>
                    <input style="border-color: #d0c9c9;" class="form-control" type="text" name="title" value="">
                </div>


                <div class="form-group">
		<label>请描述你的问题，我们的工作人员将在看到您问题的3小时内回复您！您可在我的咨询中查看。</label>
                  <textarea name="content" class="form-control" rows="8" cols="80"></textarea>

                </div>



            </form>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
          <button type="button" onclick="makeask()" class="btn btn-primary">提交</button>
        </div>



      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<script type="text/javascript">
function Ask(id){

  $("input[name='oid']").val(id);
  $("#ask").modal();
}
function makeask(){
  $.post("<?php echo url('index/index/ask'); ?>",$("#askform").serialize(),function(data){
        if(data.code===1){

              alert('成功提交问题，请您耐心等待');
		$("#ask").modal('hide');

        }else{
          alert('你还没登录');
        }



  },'JSON');



}

function recieve(id){

  if(confirm("Are you sure to recieve your post?") === true){

    $.post("<?php echo url('index/index/recieve'); ?>",{'id':id},function(data){

          if(data.code === 1){

            alert(data.msg);
            location.reload();

          }



    },'JSON')
  }
}
</script>







            <footer id="footer">
                <div class="footer-blocks">
                    <div class="wrapper">
                        <div class="row-footer">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
                                <div class="footer-logo">
                                    <a href="#" class="logo-footer"></a>
                                </div>
                                <div class="f-b-box">
                                    <p>花花花卉，是一家线上线下同步运营的大型花卉市场，我们以真诚的服务为你效劳！！！</p>
                                    <a class="btn btn-border dark" href="."><span>Read More</span></a>
        
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
                                <h4 class="border">Latest Tweets</h4>
                                <div class="f-b-box">
                                    <ul class="lat-tw">
                                        <li>
                                            <span class="ef social_twitter_circle"></span>
                                            <div class="tw-message">
                                                买花卉，就来xx网 <a href="."></a>
                                            </div>
                                            <div class="tw-time">1 minute ago</div>
                                        </li>
                                        <li>
                                            <span class="ef social_twitter_circle"></span>
                                            <div class="tw-message">
                                                我们荣获河南省花卉协会xx <a href="."></a>
                                            </div>
                                            <div class="tw-time">35 minute ago</div>
                                        </li>
                                        <li>
                                            <span class="ef social_twitter_circle"></span>
                                            <div class="tw-message">
                                               新推出花卉，新西兰品<a href="."></a>
                                            </div>
                                            <div class="tw-time">2 hours ago</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
                                <h4 class="border">instagram Feed</h4>
                                <div class="f-b-box">
                                    <div class="i-row">
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in1.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in2.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in3.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="i-row">
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in4.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in5.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in6.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="i-row">
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in7.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in8.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in9.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
                                <h4 class="border">Contact Info</h4>
                                <div class="f-b-box">
                                    <div class="contact-f-wrapper">
                                        <div class="f-contact-box">
                                            <span class="contact-name">
                                                Address:
                                            </span>
                                            <span class="contact-info">
                                                焦作市，河南理工大学
                                            </span>
                                        </div>
                                        <div class="f-contact-box">
                                            <span class="contact-name">
                                                焦作办公室:
                                            </span>
                                            <span class="contact-info">
                                                +12 3456 7890 / +12 3456 0987
                                            </span>
                                        </div>
                                        <div class="f-contact-box">
                                            <span class="contact-name">
                                                郑州办公室:
                                            </span>
                                            <span class="contact-info">
                                                +12 3456 7890 / +12 3456 0987
                                            </span>
                                        </div>
                                        <div class="f-contact-box">
                                            <span class="contact-name">
                                                传真:
                                            </span>
                                            <span class="contact-info">
                                                +0542 000 594
                                            </span>
                                        </div>
                                        <div class="f-contact-box">
                                            <span class="contact-name">
                                                Email:
                                            </span>
                                            <span class="contact-info">
                                                info@domain.com
                                            </span>
                                        </div>
                                    </div>


                                </div>
                            </div>



                        </div>



                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="wrapper">
                        <div class="row-footer">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInLeft">
                                <span class="copiright">
                                    Copyright &copy; 2018.huaFlower All rights reserved.More Templates
                                </span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 nav-footer wow fadeInRight">
                                <ul>
                                    <li class="active">
                                        <a href="#">home</a>
                                    </li>
                                    <li>
                                        <a href="#">about</a>
                                    </li>
                                    <li>
                                        <a href="#">services</a>
                                    </li>
                                    <li>
                                        <a href="#">our works</a>
                                    </li>
                                    <li>
                                        <a href="#">store</a>
                                    </li>
                                    <li>
                                        <a href="#">blog</a>
                                    </li>
                                    <li>
                                        <a href="#">contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>




<div class="modal fade" tabindex="-1" role="dialog" id="loginmod">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">登录花花网</h4>
      </div>
      <div class="modal-body">



        <form id="login">
            <div class="form-group">
              <label for="exampleInputEmail1">邮箱or手机号</label>
              <input type="account" name="account" class="form-control" id="exampleInputEmail1" placeholder="email or phone">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="login_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="login()" class="btn btn-primary">login</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->






<div class="modal fade" tabindex="-1" role="dialog" id="socket">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">new message</h4>
      </div>
      <div class="modal-body">

          <p id="webmsg"></p>



      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<div class="modal fade" id="ad_add" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加地址</h4>
      </div>
      <div class="modal-body">

                <div class="input-group">

                            <span class="input-addon">收货人</span>
                            <input type="text" name="ad_recieve" class="form-control">

                </div>


                <div class="input-group">
                    <span class="input-addon">电话</span>
                    <input type="text" name="ad_phone" class="form-control">
                </div>


                <div class="form-group">
                    <textarea class="form-control" name="ad_address" rows="3" placeholder="详细地址"></textarea>
                </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="modal fade" tabindex="-1" role="dialog" id="pay">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">扫一扫，支付</h4>
      </div>
      <div class="modal-body">

          <h2>此订单需支付 <span id="orderpay"></span></h2>
          <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/img/pay.png" alt="">

      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/js/bootstrap-select.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/js/dmss.js"></script>

        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/jquery-ui.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/modernizr.custom.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/smoothscroll.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/wow.min.js"></script>

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!--Owl Carousel-->
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/waypoints.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/jquery.easypiechart.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/func.js"></script>

        <script type="text/javascript">

</script>

        <script type="text/javascript">

          function login(){

              var account = $("input[name='account']").val();
              var password = $("input[name='login_password']").val();
              if(account == "" || password == ""){
                alert('用户名密码不能为空');
                return;
              }
              $.post("<?php echo url('index/index/login'); ?>",{'account':account,'password':password},function(data){
                  alert(data.msg);
                  if(data.code===1){
                        $("#loginmod").modal('hide');
                        var succ = `  <a href="javascript:logout()" class="btn extra-color text-uppercase pull-right">(`+data.nickname+`)登出</a>
                          <a href="<?php echo url('index/index/myorder'); ?>"  class="btn extra-color text-uppercase pull-right" style="margin-right:10px;">我的订单</a>
                            <a href="<?php echo url('index/index/myask'); ?>"  class="btn extra-color text-uppercase pull-right" style="margin-right:10px;">我的咨询</a>
<a href="<?php echo url('index/index/myorder2'); ?>"  class="btn extra-color text-uppercase pull-right" style="margin-right:10px;">我的托养</a>`;
                            $("#loginarea").html(succ);

                  }

              },'JSON');

          }



      function logout(){
        $.post("<?php echo url('index/index/logout'); ?>",function(ret){

              if(ret.code===1){
                location.href="<?php echo url('index/index/index'); ?>";
              }


        },'JSON');



      }
        </script>


<script>
// base64

(function(global,factory){typeof exports==="object"&&typeof module!=="undefined"?module.exports=factory(global):typeof define==="function"&&define.amd?define(factory):factory(global)})(typeof self!=="undefined"?self:typeof window!=="undefined"?window:typeof global!=="undefined"?global:this,function(global){"use strict";var _Base64=global.Base64;var version="2.4.3";var buffer;if(typeof module!=="undefined"&&module.exports){try{buffer=require("buffer").Buffer}catch(err){}}var b64chars="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";var b64tab=function(bin){var t={};for(var i=0,l=bin.length;i<l;i++)t[bin.charAt(i)]=i;return t}(b64chars);var fromCharCode=String.fromCharCode;var cb_utob=function(c){if(c.length<2){var cc=c.charCodeAt(0);return cc<128?c:cc<2048?fromCharCode(192|cc>>>6)+fromCharCode(128|cc&63):fromCharCode(224|cc>>>12&15)+fromCharCode(128|cc>>>6&63)+fromCharCode(128|cc&63)}else{var cc=65536+(c.charCodeAt(0)-55296)*1024+(c.charCodeAt(1)-56320);return fromCharCode(240|cc>>>18&7)+fromCharCode(128|cc>>>12&63)+fromCharCode(128|cc>>>6&63)+fromCharCode(128|cc&63)}};var re_utob=/[\uD800-\uDBFF][\uDC00-\uDFFFF]|[^\x00-\x7F]/g;var utob=function(u){return u.replace(re_utob,cb_utob)};var cb_encode=function(ccc){var padlen=[0,2,1][ccc.length%3],ord=ccc.charCodeAt(0)<<16|(ccc.length>1?ccc.charCodeAt(1):0)<<8|(ccc.length>2?ccc.charCodeAt(2):0),chars=[b64chars.charAt(ord>>>18),b64chars.charAt(ord>>>12&63),padlen>=2?"=":b64chars.charAt(ord>>>6&63),padlen>=1?"=":b64chars.charAt(ord&63)];return chars.join("")};var btoa=global.btoa?function(b){return global.btoa(b)}:function(b){return b.replace(/[\s\S]{1,3}/g,cb_encode)};var _encode=buffer?buffer.from&&buffer.from!==Uint8Array.from?function(u){return(u.constructor===buffer.constructor?u:buffer.from(u)).toString("base64")}:function(u){return(u.constructor===buffer.constructor?u:new buffer(u)).toString("base64")}:function(u){return btoa(utob(u))};var encode=function(u,urisafe){return!urisafe?_encode(String(u)):_encode(String(u)).replace(/[+\/]/g,function(m0){return m0=="+"?"-":"_"}).replace(/=/g,"")};var encodeURI=function(u){return encode(u,true)};var re_btou=new RegExp(["[À-ß][-¿]","[à-ï][-¿]{2}","[ð-÷][-¿]{3}"].join("|"),"g");var cb_btou=function(cccc){switch(cccc.length){case 4:var cp=(7&cccc.charCodeAt(0))<<18|(63&cccc.charCodeAt(1))<<12|(63&cccc.charCodeAt(2))<<6|63&cccc.charCodeAt(3),offset=cp-65536;return fromCharCode((offset>>>10)+55296)+fromCharCode((offset&1023)+56320);case 3:return fromCharCode((15&cccc.charCodeAt(0))<<12|(63&cccc.charCodeAt(1))<<6|63&cccc.charCodeAt(2));default:return fromCharCode((31&cccc.charCodeAt(0))<<6|63&cccc.charCodeAt(1))}};var btou=function(b){return b.replace(re_btou,cb_btou)};var cb_decode=function(cccc){var len=cccc.length,padlen=len%4,n=(len>0?b64tab[cccc.charAt(0)]<<18:0)|(len>1?b64tab[cccc.charAt(1)]<<12:0)|(len>2?b64tab[cccc.charAt(2)]<<6:0)|(len>3?b64tab[cccc.charAt(3)]:0),chars=[fromCharCode(n>>>16),fromCharCode(n>>>8&255),fromCharCode(n&255)];chars.length-=[0,0,2,1][padlen];return chars.join("")};var atob=global.atob?function(a){return global.atob(a)}:function(a){return a.replace(/[\s\S]{1,4}/g,cb_decode)};var _decode=buffer?buffer.from&&buffer.from!==Uint8Array.from?function(a){return(a.constructor===buffer.constructor?a:buffer.from(a,"base64")).toString()}:function(a){return(a.constructor===buffer.constructor?a:new buffer(a,"base64")).toString()}:function(a){return btou(atob(a))};var decode=function(a){return _decode(String(a).replace(/[-_]/g,function(m0){return m0=="-"?"+":"/"}).replace(/[^A-Za-z0-9\+\/]/g,""))};var noConflict=function(){var Base64=global.Base64;global.Base64=_Base64;return Base64};global.Base64={VERSION:version,atob:atob,btoa:btoa,fromBase64:decode,toBase64:encode,utob:utob,encode:encode,encodeURI:encodeURI,btou:btou,decode:decode,noConflict:noConflict};if(typeof Object.defineProperty==="function"){var noEnum=function(v){return{value:v,enumerable:false,writable:true,configurable:true}};global.Base64.extendString=function(){Object.defineProperty(String.prototype,"fromBase64",noEnum(function(){return decode(this)}));Object.defineProperty(String.prototype,"toBase64",noEnum(function(urisafe){return encode(this,urisafe)}));Object.defineProperty(String.prototype,"toBase64URI",noEnum(function(){return encode(this,true)}))}}if(global["Meteor"]){Base64=global.Base64}if(typeof module!=="undefined"&&module.exports){module.exports.Base64=global.Base64}else if(typeof define==="function"&&define.amd){define([],function(){return global.Base64})}return{Base64:global.Base64}});

</script>
        <script type="text/javascript">


        var wsServer = 'ws://127.0.0.1:5005';
        //调用websocket对象建立连接：
        //参数：ws/wss(加密)：//ip:port （字符串）
        var websocket = new WebSocket(wsServer)
        //onopen监听连接打开
        websocket.onopen = function (evt) {

          console.log(websocket.readyState);
        };

      //    监听连接关闭
       websocket.onclose = function (evt) {
           console.log("Disconnected");
       };

        //onmessage 监听服务器数据推送
        websocket.onmessage = function (evt) {

           // console.log('Retrieved data from server: ' + evt.data);
           // alert(evt.data);
           console.log(evt.data);

            var data = Base64.decode(evt.data);
            console.log(data)
           $("#webmsg").html(data);
           $("#socket").modal();
        };
    //监听连接错误信息
    //    websocket.onerror = function (evt, e) {
    //        console.log('Error occured: ' + evt.data);
    //    };

        </script>



        <script type="text/javascript">


                    $("#search").on('input propertychange',function(){

                        keyuphandle();

                    });

                var sktimer=null;

                   function keyuphandle() {
                    clearTimeout(sktimer);

                    sktimer = setTimeout(dosearch, 500);
                }

                function dosearch() {

                    var k = $.trim($("#search").val());
                    if(k == ''){$("#searchbox").html('没有相关结果');return false;}

                $("#searchbox").html('waitting for server...');
                    $.get("<?php echo url('index/index/search'); ?>?keytext="+k+"",function(data){

                            if(data.code===1){


                            var con='';

                            $.each(data.list,function(k,obj){

                                    con+=`<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="product-box">
                    <div class="product-image">
                        <a href="<?php echo url('index/index/buy'); ?>">
                            <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/`+obj.cover+`" alt="product">
                        </a>
                    </div>
                    <div class="product-desc-wrapper">
                        <div class="product-title"><span>`+obj.name+`</span></div>
                        <div class="product-desc">Sale off</div>
                        <div class="row-pr">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

<a class="add-to-cart pull-left" href="<?php echo url('index/index/buy'); ?>?id=`+obj.id+`&type=2"><span>申请代养</span></a>
                                <a class="add-to-cart pull-right" href="<?php echo url('index/index/buy'); ?>?id=`+obj.id+`&type=1"><span>立即购买</span></a>
                                <a class="add-to-cart pull-right" href="javascript:addcart(`+obj.id+`)"><span>加入购物车</span></a>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="price">￥`+obj.price+`</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>`;

                            });


                            // console.log(con);

                            }else{

                              con='没有相关结果';
                            }

                             $("#searchbox").html(con);


                    },'JSON');
                }

                //加入购物车
                function addcart(pid){
                    $.post("<?php echo url('index/index/addcart'); ?>",{'pid':pid},function(ret){
                      alert(ret.msg);
                    },'JSON');
                }

        </script>
    </body>
</html>
