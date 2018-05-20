<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"E:\hua/application/index\view\index\index.html";i:1525404369;s:45:"E:\hua/application/index\view\index\base.html";i:1526815243;}*/ ?>
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

      

	      <div id="owl-home" class="owl-carousel owl-theme home-slider">

                <div class="item">
                    <div class="h-slider-bg">
                        <img class="slide-bg" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/home-slider/slide-1.jpg" alt="slide-1">
                    </div>
                    <div class="wrapper s-custom">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="b-s-desc main-slider_fadeInLeft ">最优质的服务</div>
                            <h1 class="s-custom-3">总有你要得哪一款</h1>
                            <a class="btn-1 h-slide-btn" href="#">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h-slider-bg">
                        <img class="slide-bg" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/home-slider/slide-2.jpg" alt="slide-2">
                    </div>
                    <div class="wrapper">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>关注花卉成长<br />优雅高尚</h1>
                            <div class="b-s-text">拉美xx君子兰，你的首选
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h-slider-bg">
                        <img class="slide-bg" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/home-slider/slide-3.jpg" alt="slide-3">
                    </div>
                    <div class="wrapper s-custom-2 s-content-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="s-border"></h1>
                            <div class="b-s-text">7*24小时，呵护蔬菜花卉</div>
                            <div class="input-box in-home-slider">
                                <button class="button-border text-uppercase">
                                    <span class="text-btn">查看品种</span>
                                    <span class="borfer-btn"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div><section class="tools-bg dash-top-line">
                <div class="top-icon-block"></div>
                <div class="wrapper text-center circle-box circle-box-3">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="title-content-box hom-1 wow bounceInDown center">
                                <h2>我们辛勤劳动，为了您的花卉情绪</h2>
                                <p>自然蔬菜，吃出健康，吃出新生活</p>
                            </div>
                        </div>
                    </div>
                    <div class="row hom-1-c">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                            <div class="c-link-box wow rollIn">
                                <a class="btn big-circle pull-right" href="#">
                                    <span class="c-content-block">
                                        <span class="ef icon_clock"></span>
                                        <span class="b-text">Working Hours</span>
                                        <span class="desc">8:00AM-18:00PM</span>                                    </span>                             </a>                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="c-link-box wow rollIn">
                                <a class="btn big-circle pull-left" href="#">
                                    <span class="c-content-block">
                                        <span class="ef icon_documents"></span>
                                        <span class="b-text">Get In Touch NOW</span>
                                        <span class="desc">Offer Friendly Service!</span>                                   </span>                             </a>                            </div>
                        </div>
                    </div>
                    <div class="el-image-left hidden-xs hidden-sm"></div>
                    <div class="el-image-right hidden-xs hidden-sm"></div>
                </div>
                <div class="tooth-color-w"></div>
            </section>




<section class="services">

	<div class="shop-grid">
		<div class="row wow fadeInUp">

			<?php if(is_array($flower) || $flower instanceof \think\Collection || $flower instanceof \think\Paginator): if( count($flower)==0 ) : echo "" ;else: foreach($flower as $key=>$vo): ?>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="product-box">
					<div class="product-image">
						<a href="<?php echo url('index/index/buy',array('id'=>$vo['id'])); ?>">
							<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/<?php echo $vo['cover']; ?>" alt="product">
						</a>
					</div>
					<div class="product-desc-wrapper">
						<div class="product-title"><span><?php echo $vo['name']; ?></span></div>
						<div class="product-desc">Sale off</div>
						<div class="row-pr">
							<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
								<?php if($vo['type'] == 1): ?>
<a class="add-to-cart pull-left" href="<?php echo url('index/index/buy',array('id'=>$vo['id'],'type'=>2)); ?>"><span>申请代养</span></a><?php endif; ?>
								<a class="add-to-cart pull-right" href="<?php echo url('index/index/buy',array('id'=>$vo['id'],'type'=>1)); ?>"><span>立即购买</span></a>
                                <a class="add-to-cart pull-right" href="javascript:addcart(<?php echo $vo['id']; ?>)"><span>加入购物车</span></a>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
								<div class="price">￥<?php echo $vo['price']; ?></div>
								<div class="rating pull-right">
									<?php $__FOR_START_1429__=0;$__FOR_END_1429__=$vo['level'];for($k=$__FOR_START_1429__;$k < $__FOR_END_1429__;$k+=1){ ?>

											<span class="ef icon_star"></span>


									<?php } $__FOR_START_24060__=0;$__FOR_END_24060__=5-$vo['level'];for($k=$__FOR_START_24060__;$k < $__FOR_END_24060__;$k+=1){ ?>

											<span class="ef icon_star empty"></span>

									<?php } ?>





								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php endforeach; endif; else: echo "" ;endif; ?>




		</div>




	</div>

</section>






            <!-- <section class="services right-image-box">
                <div class="wrapper">
                    <div class="row-1">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-title-box wow rollIn center">
                                <h2>Our Services</h2>
                                <span>Nam lobortis fringilla felis. Fusce vol utpate urna cras quam vitae turpis</span>
                            </div>
                        </div>
                    </div>
                    <div class="row-1 wow fadeInUp">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <ul class="nav nav-tabs vertical-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#menu1">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/34x34/watering-can.png" alt="watering-can">
                                        <span>Garden Care</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#menu2">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/34x34/haystack.png" alt="haystack">
                                        <span>Lawn Moving</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#menu3">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/34x34/tractor.png" alt="tractor">
                                        <span>Rubbish Removal</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#menu4">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/34x34/pear.png" alt="pear">
                                        <span>Landscape Design</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#menu5">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/34x34/tap.png" alt="tap">
                                        <span>Watering Garden</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="tab-content h1-tab-content">
                                <div id="menu1" class="tab-pane fade in active">
                                    <h3>Garden Care</h3>
                                    <p>Nam lobortis fringilla felis. Fusce vol utpat mi at urna. Cras ut nec quam vitae turpis sed ipsum convallis. Duis libero. Suspendisse potenti. Suspndisse ipsu porta ligula non elementum ultricies.</p>
                                    <p>Justo urna egestas metusl ut ornare leo augue pharetra risus. Morbid tinclunt  massa ac vestibulum rutrum.</p>
                                    <ul class="list-style-twig">
                                        <li>Careful and regular work of your garden or lawn</li>
                                        <li>Dignissim consectetuer neque</li>
                                        <li>Proin risus nibh viverra eget lobortis feugiat</li>
                                    </ul>
                                    <button class="btn extra-color text-uppercase">
                                        <span class="ef icon_documents"></span>
                                        <span>Request Free Quote</span>
                                    </button>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <h3>Lawn Moving</h3>
                                    <p>Nam lobortis fringilla felis. Fusce vol utpat mi at urna. Cras ut nec quam vitae turpis sed ipsum convallis. Duis libero. Suspendisse potenti. Suspndisse ipsu porta ligula non elementum ultricies.</p>
                                    <p>Justo urna egestas metusl ut ornare leo augue pharetra risus. Morbid tinclunt  massa ac vestibulum rutrum.</p>
                                    <ul class="list-style-twig">
                                        <li>Careful and regular work of your garden or lawn</li>
                                        <li>Dignissim consectetuer neque</li>
                                        <li>Proin risus nibh viverra eget lobortis feugiat</li>
                                    </ul>
                                    <button class="btn extra-color text-uppercase">
                                        <span class="ef icon_documents"></span>
                                        <span>Request Free Quote</span>
                                    </button>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <h3>Rubbish Removal</h3>
                                    <p>Nam lobortis fringilla felis. Fusce vol utpat mi at urna. Cras ut nec quam vitae turpis sed ipsum convallis. Duis libero. Suspendisse potenti. Suspndisse ipsu porta ligula non elementum ultricies.</p>
                                    <p>Justo urna egestas metusl ut ornare leo augue pharetra risus. Morbid tinclunt  massa ac vestibulum rutrum.</p>
                                    <ul class="list-style-twig">
                                        <li>Careful and regular work of your garden or lawn</li>
                                        <li>Dignissim consectetuer neque</li>
                                        <li>Proin risus nibh viverra eget lobortis feugiat</li>
                                    </ul>
                                    <button class="btn extra-color text-uppercase">
                                        <span class="ef icon_documents"></span>
                                        <span>Request Free Quote</span>
                                    </button>
                                </div>
                                <div id="menu4" class="tab-pane fade">
                                    <h3>Landscape Design</h3>
                                    <p>Nam lobortis fringilla felis. Fusce vol utpat mi at urna. Cras ut nec quam vitae turpis sed ipsum convallis. Duis libero. Suspendisse potenti. Suspndisse ipsu porta ligula non elementum ultricies.</p>
                                    <p>Justo urna egestas metusl ut ornare leo augue pharetra risus. Morbid tinclunt  massa ac vestibulum rutrum.</p>
                                    <ul class="list-style-twig">
                                        <li>Careful and regular work of your garden or lawn</li>
                                        <li>Dignissim consectetuer neque</li>
                                        <li>Proin risus nibh viverra eget lobortis feugiat</li>
                                    </ul>
                                    <button class="btn extra-color text-uppercase">
                                        <span class="ef icon_documents"></span>
                                        <span>Request Free Quote</span>
                                    </button>
                                </div>
                                <div id="menu5" class="tab-pane fade">
                                    <h3>Watering Garden</h3>
                                    <p>Nam lobortis fringilla felis. Fusce vol utpat mi at urna. Cras ut nec quam vitae turpis sed ipsum convallis. Duis libero. Suspendisse potenti. Suspndisse ipsu porta ligula non elementum ultricies.</p>
                                    <p>Justo urna egestas metusl ut ornare leo augue pharetra risus. Morbid tinclunt  massa ac vestibulum rutrum.</p>
                                    <ul class="list-style-twig">
                                        <li>Careful and regular work of your garden or lawn</li>
                                        <li>Dignissim consectetuer neque</li>
                                        <li>Proin risus nibh viverra eget lobortis feugiat</li>
                                    </ul>
                                    <button class="btn extra-color text-uppercase">
                                        <span class="ef icon_documents"></span>
                                        <span>Request Free Quote</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs hidden-sm">
                            <img class="content-right-image" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/home/men.png" alt="men">                        </div>
                    </div>
                </div>
            </section> -->








            <section class="gallery-box">

                <div class="gallery-wrapper">
                    <div class="g-row">
                        <div class="g-item">
                            <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-1.jpg" alt="Recent Work">
                            <div class="item-gallery-descr">
                                <div class="btn-modal-box">
                                    <a class="btn-modal" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-1.jpg" data-toggle="lightbox" data-title="Recent Work">
                                        <span class="ef icon_zoom-in"></span>
                                    </a>
                                    <button type="button" class="btn-modal" data-toggle="modal" data-target="#myModal">
                                        <span class="ef icon_documents"></span>
                                    </button>
                                </div>
                                <div class="desc-work">Trees In The Garden</div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat minima vitae cum unde perspiciatis autem consectetur exercitationem, iusto iure deleniti animi non nesciunt suscipit sapiente possimus voluptatibus ratione, rerum? Voluptatibus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt et nam corporis tenetur modi deleniti reprehenderit, itaque temporibus nisi in cumque laboriosam magni, voluptate quidem quos maxime aspernatur quae ullam!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="g-item">
                            <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-2.jpg" alt="Recent Work">
                            <div class="item-gallery-descr">
                                <div class="btn-modal-box">
                                    <a class="btn-modal" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-2.jpg" data-toggle="lightbox" data-title="Recent Work">
                                        <span class="ef icon_zoom-in"></span>
                                    </a>
                                    <button type="button" class="btn-modal" data-toggle="modal" data-target="#myModal-2">
                                        <span class="ef icon_documents"></span>
                                    </button>
                                </div>
                                <div class="desc-work">Trees In The Garden</div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat minima vitae cum unde perspiciatis autem consectetur exercitationem, iusto iure deleniti animi non nesciunt suscipit sapiente possimus voluptatibus ratione, rerum? Voluptatibus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt et nam corporis tenetur modi deleniti reprehenderit, itaque temporibus nisi in cumque laboriosam magni, voluptate quidem quos maxime aspernatur quae ullam!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="g-item">
                            <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-3.jpg" alt="Recent Work">
                            <div class="item-gallery-descr">
                                <div class="btn-modal-box">
                                    <a class="btn-modal" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-3.jpg" data-toggle="lightbox" data-title="Recent Work">
                                        <span class="ef icon_zoom-in"></span>
                                    </a>
                                    <button type="button" class="btn-modal" data-toggle="modal" data-target="#myModal-3">
                                        <span class="ef icon_documents"></span>
                                    </button>
                                </div>
                                <div class="desc-work">Trees In The Garden</div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat minima vitae cum unde perspiciatis autem consectetur exercitationem, iusto iure deleniti animi non nesciunt suscipit sapiente possimus voluptatibus ratione, rerum? Voluptatibus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt et nam corporis tenetur modi deleniti reprehenderit, itaque temporibus nisi in cumque laboriosam magni, voluptate quidem quos maxime aspernatur quae ullam!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="g-item">
                            <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-4.jpg" alt="Recent Work">
                            <div class="item-gallery-descr">
                                <div class="btn-modal-box">
                                    <a class="btn-modal" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-4.jpg" data-toggle="lightbox" data-title="Recent Work">
                                        <span class="ef icon_zoom-in"></span>
                                    </a>
                                    <button type="button" class="btn-modal" data-toggle="modal" data-target="#myModal-4">
                                        <span class="ef icon_documents"></span>
                                    </button>
                                </div>
                                <div class="desc-work">Trees In The Garden</div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat minima vitae cum unde perspiciatis autem consectetur exercitationem, iusto iure deleniti animi non nesciunt suscipit sapiente possimus voluptatibus ratione, rerum? Voluptatibus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt et nam corporis tenetur modi deleniti reprehenderit, itaque temporibus nisi in cumque laboriosam magni, voluptate quidem quos maxime aspernatur quae ullam!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-row">
                        <div class="g-item">
                            <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-5.jpg" alt="Recent Work">
                            <div class="item-gallery-descr">
                                <div class="btn-modal-box">
                                    <a class="btn-modal" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-5.jpg" data-toggle="lightbox" data-title="Recent Work">
                                        <span class="ef icon_zoom-in"></span>
                                    </a>
                                    <button type="button" class="btn-modal" data-toggle="modal" data-target="#myModal">
                                        <span class="ef icon_documents"></span>
                                    </button>
                                </div>
                                <div class="desc-work">Trees In The Garden</div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat minima vitae cum unde perspiciatis autem consectetur exercitationem, iusto iure deleniti animi non nesciunt suscipit sapiente possimus voluptatibus ratione, rerum? Voluptatibus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt et nam corporis tenetur modi deleniti reprehenderit, itaque temporibus nisi in cumque laboriosam magni, voluptate quidem quos maxime aspernatur quae ullam!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="g-item">
                            <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-6.jpg" alt="Recent Work">
                            <div class="item-gallery-descr">
                                <div class="btn-modal-box">
                                    <a class="btn-modal" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-6.jpg" data-toggle="lightbox" data-title="Recent Work">
                                        <span class="ef icon_zoom-in"></span>
                                    </a>
                                    <button type="button" class="btn-modal" data-toggle="modal" data-target="#myModal-2">
                                        <span class="ef icon_documents"></span>
                                    </button>
                                </div>
                                <div class="desc-work">Trees In The Garden</div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat minima vitae cum unde perspiciatis autem consectetur exercitationem, iusto iure deleniti animi non nesciunt suscipit sapiente possimus voluptatibus ratione, rerum? Voluptatibus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt et nam corporis tenetur modi deleniti reprehenderit, itaque temporibus nisi in cumque laboriosam magni, voluptate quidem quos maxime aspernatur quae ullam!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="g-item">
                            <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-7.jpg" alt="Recent Work">
                            <div class="item-gallery-descr">
                                <div class="btn-modal-box">
                                    <a class="btn-modal" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-7.jpg" data-toggle="lightbox" data-title="Recent Work">
                                        <span class="ef icon_zoom-in"></span>
                                    </a>
                                    <button type="button" class="btn-modal" data-toggle="modal" data-target="#myModal-3">
                                        <span class="ef icon_documents"></span>
                                    </button>
                                </div>
                                <div class="desc-work">Trees In The Garden</div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat minima vitae cum unde perspiciatis autem consectetur exercitationem, iusto iure deleniti animi non nesciunt suscipit sapiente possimus voluptatibus ratione, rerum? Voluptatibus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt et nam corporis tenetur modi deleniti reprehenderit, itaque temporibus nisi in cumque laboriosam magni, voluptate quidem quos maxime aspernatur quae ullam!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="g-item">
                            <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-8.jpg" alt="Recent Work">
                            <div class="item-gallery-descr">
                                <div class="btn-modal-box">
                                    <a class="btn-modal" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/400x300/pr-8.jpg" data-toggle="lightbox" data-title="Recent Work">
                                        <span class="ef icon_zoom-in"></span>
                                    </a>
                                    <button type="button" class="btn-modal" data-toggle="modal" data-target="#myModal-4">
                                        <span class="ef icon_documents"></span>
                                    </button>
                                </div>
                                <div class="desc-work">Trees In The Garden</div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat minima vitae cum unde perspiciatis autem consectetur exercitationem, iusto iure deleniti animi non nesciunt suscipit sapiente possimus voluptatibus ratione, rerum? Voluptatibus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt et nam corporis tenetur modi deleniti reprehenderit, itaque temporibus nisi in cumque laboriosam magni, voluptate quidem quos maxime aspernatur quae ullam!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-center">
                        <a class="btn btn-border wow bounceInUp center" href="#">
                            <span>Lead More</span>
                        </a>
                    </div>
                </div>
                <div class="tooth-color-gr"></div>
            </section>



            <!-- <section class="why-choose-us bg-wrapper">
                <div class="wrapper">
                    <div class="row-1 ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-title-box custom-5 wow rollIn center ">
                                <h2>Why Choose Us</h2>
                                <span>The Name you can Trust with Professional and Fully Trained Operators!</span>                          </div>
                        </div>
                    </div>
                    <div class="row-1">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 hidden-xs hidden-sm im-box">
                            <img class="content-left-image" alt="girl" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/home/girl.png">                       </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="listing l-row-2">
                                <ul>
                                    <li class="wow bounce">
                                        <span class="fl-ic flaticon-gardening4"></span>
                                        <div class="list-content">
                                            <h4>Excellent Services</h4>
                                            <div>Nam lobortis fringilla felis sce sed utpat mi at urna cras ut nec.</div>
                                        </div>
                                    </li>
                                    <li class="wow bounce">
                                        <span class="fl-ic flaticon-plants5"></span>
                                        <div class="list-content">
                                            <h4>All Quotes Free</h4>
                                            <div>Nam lobortis fringilla felis sce sed utpat mi at urna cras ut nec.</div>
                                        </div>
                                    </li>
                                    <li class="wow bounce">
                                        <span class="fl-ic flaticon-sunny23"></span>
                                        <div class="list-content">
                                            <h4>Satisfied Customers</h4>
                                            <div>Nam lobortis fringilla felis sce sed utpat mi at urna cras ut nec.</div>
                                        </div>
                                    </li>
                                    <li class="wow bounce">
                                        <span class="fl-ic flaticon-shower5"></span>
                                        <div class="list-content">
                                            <h4>Guaranteed Work</h4>
                                            <div>Nam lobortis fringilla felis sce sed utpat mi at urna cras ut nec.</div>
                                        </div>
                                    </li>
                                    <li class="wow bounce">
                                        <i class="fl-ic flaticon-cutting8"></i>
                                        <div class="list-content">
                                            <h4>Insured Operators</h4>
                                            <div>Nam lobortis fringilla felis sce sed utpat mi at urna cras ut nec.</div>
                                        </div>
                                    </li>
                                    <li class="wow bounce">
                                        <span class="fl-ic flaticon-shovel16"></span>
                                        <div class="list-content">
                                            <h4>Quality and Reliability</h4>
                                            <div>Nam lobortis fringilla felis sce sed utpat mi at urna cras ut nec.</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->



<!--             <section class="color-bg box-tools-bg home-1">
                <div class="wrapper">
                    <div class="row-4">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row-2-blocks row-2-blocks-2 wow bounceInDown center">
                                <div class="r-block-1">
                                    <div class="c-content-block">
                                        <h2>We Work Hard And Make Your Garden Beautiful</h2>
                                        <div>Friendly customer service staff for your all questions!</div>
                                    </div>
                                </div>
                                <div class="r-block-2">
                                    <div class="btn big-circle">
                                        <div class="big-text">
                                            GET in touch today!                                     </div>
                                        <div class="sm-text">
                                            We'll fix all your Problems!                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tooth-color-gr"></div>
            </section>
            <section class="quote-olw bg-wrapper q-h-1">
                <div class="wrapper">
                    <div class="row-1">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-title-box wow rollIn center  ">
                                <h2>Happy Customers</h2>
                                <span>Nam lobortis fringilla felis. Fusce vol utpat mi at urna. Cras ut nec quam vitae turpis</span>
                            </div>
                        </div>
                    </div>
                    <div class="row-1">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div id="quote-olw-h1">
                                <div class="quote-box">
                                  <quote class="quote-block-2">
                                    <div class="quote-wrap">
                                            <div class="quote-photo">
                                                <img class="#" alt="image" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/76x76/image2.jpg">                                            </div>
                                            <div class="text-quote">
                                                <p>Nulla euismod malesuada nibh. Donec nunc. Praesent sit amet turpis eu nisl faucibus pharetra. Fusce quis neque vel leo semp er rhoncus. Ut interdum, risus id luctus consectetuer velit neq ue ornare quam beat ornare nisi velit nec turpis. Mauris lorem. Phasellus egestas urna vel sem. Ut auctor.</p>
                                            </div>
                                        </div>
                                        <span class="ef arrow_triangle-down"></span>                                    </quote>
                                    <div class="q-signature">
                                        <h4>Rayasil Zadu</h4>
                                        <div class="q-sub">Home Owner, California</div>
                                    </div>
                                </div>
                                <div class="quote-box">
                                  <quote class="quote-block-2">
                                    <div class="quote-wrap">
                                            <div class="quote-photo">
                                                <img class="#" alt="image" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/76x76/image1.jpg">                                            </div>
                                            <div class="text-quote">
                                                <p>Nulla euismod malesuada nibh. Donec nunc. Praesent sit amet turpis eu nisl faucibus pharetra. Fusce quis neque vel leo semp er rhoncus. Ut interdum, risus id luctus consectetuer velit neq ue ornare quam beat ornare nisi velit nec turpis. Mauris lorem. Phasellus egestas urna vel sem. Ut auctor.</p>
                                            </div>
                                        </div>
                                        <span class="ef arrow_triangle-down"></span>                                    </quote>
                                    <div class="q-signature">
                                        <h4>Jeebon Heza</h4>
                                        <div class="q-sub">Home Owner, Newyork</div>
                                    </div>
                                </div>
                                <div class="quote-box">
                                  <quote class="quote-block-2">
                                    <div class="quote-wrap">
                                            <div class="quote-photo">
                                                <img class="#" alt="image" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/76x76/image2.jpg">                                            </div>
                                            <div class="text-quote">
                                                <p>Nulla euismod malesuada nibh. Donec nunc. Praesent sit amet turpis eu nisl faucibus pharetra. Fusce quis neque vel leo semp er rhoncus. Ut interdum, risus id luctus consectetuer velit neq ue ornare quam beat ornare nisi velit nec turpis. Mauris lorem. Phasellus egestas urna vel sem. Ut auctor.</p>
                                            </div>
                                        </div>
                                        <span class="ef arrow_triangle-down"></span>                                    </quote>
                                    <div class="q-signature">
                                        <h4>Rayasil Zadu</h4>
                                        <div class="q-sub">Home Owner, California</div>
                                    </div>
                                </div>
                                <div class="quote-box">
                                  <quote class="quote-block-2">
                                    <div class="quote-wrap">
                                            <div class="quote-photo">
                                                <img class="#" alt="image" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/76x76/image1.jpg">                                            </div>
                                            <div class="text-quote">
                                                <p>Nulla euismod malesuada nibh. Donec nunc. Praesent sit amet turpis eu nisl faucibus pharetra. Fusce quis neque vel leo semp er rhoncus. Ut interdum, risus id luctus consectetuer velit neq ue ornare quam beat ornare nisi velit nec turpis. Mauris lorem. Phasellus egestas urna vel sem. Ut auctor.</p>
                                            </div>
                                        </div>
                                        <span class="ef arrow_triangle-down"></span>                                    </quote>
                                    <div class="q-signature">
                                        <h4>Jeebon Heza</h4>
                                        <div class="q-sub">Home Owner, Newyork</div>
                                    </div>
                                </div>
                                <div class="quote-box">
                                  <quote class="quote-block-2">
                                    <div class="quote-wrap">
                                            <div class="quote-photo">
                                                <img class="#" alt="image" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/76x76/image2.jpg">                                            </div>
                                            <div class="text-quote">
                                                <p>Nulla euismod malesuada nibh. Donec nunc. Praesent sit amet turpis eu nisl faucibus pharetra. Fusce quis neque vel leo semp er rhoncus. Ut interdum, risus id luctus consectetuer velit neq ue ornare quam beat ornare nisi velit nec turpis. Mauris lorem. Phasellus egestas urna vel sem. Ut auctor.</p>
                                            </div>
                                        </div>
                                        <span class="ef arrow_triangle-down"></span>                                    </quote>
                                    <div class="q-signature">
                                        <h4>Rayasil Zadu</h4>
                                        <div class="q-sub">Home Owner, California</div>
                                    </div>
                                </div>
                                <div class="quote-box">
                                  <quote class="quote-block-2">
                                    <div class="quote-wrap">
                                            <div class="quote-photo">
                                                <img class="#" alt="image" src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/76x76/image1.jpg">                                            </div>
                                            <div class="text-quote">
                                                <p>Nulla euismod malesuada nibh. Donec nunc. Praesent sit amet turpis eu nisl faucibus pharetra. Fusce quis neque vel leo semp er rhoncus. Ut interdum, risus id luctus consectetuer velit neq ue ornare quam beat ornare nisi velit nec turpis. Mauris lorem. Phasellus egestas urna vel sem. Ut auctor.</p>
                                            </div>
                                        </div>
                                        <span class="ef arrow_triangle-down"></span>                                    </quote>
                                    <div class="q-signature">
                                        <h4>Jeebon Heza</h4>
                                        <div class="q-sub">Home Owner, Newyork</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-folw"></div>
                </div>
            </section> -->




            <section class="light-bg home-1-blog-post">
                <div class="wrapper">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title-box wow rollIn center  ">
                            <h2>Blog Posts</h2>
                            <span>Nam lobortis fringilla felis. Fusce vol utpat mi at urna cras quam vitae turpis</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div id="owl-team">


															<?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): if( count($news)==0 ) : echo "" ;else: foreach($news as $key=>$new): ?>
                                <div class="item wow rollIn center">
                                    <div class="team-img h-post-image">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/<?php echo $new['cover']; ?>" alt="img">
                                        <span class="date-post">10 <span>Apr</span></span>
                                        <div class="post-icon">
                                            <span class="ef icon_image "></span>
                                        </div>
                                    </div>
                                    <div class="team-info-block">
                                        <h4><?php echo $new['title']; ?></h4>
                                        <div class="info-box">
                                            <ul>
                                                <li>
                                                    By Admin
                                                </li>
                                                <li>
                                                    hua.com
                                                </li>
                                                <li>
                                                    3 Comments
                                                </li>
                                            </ul>
                                        </div>
                                        <p><?php echo $new['description']; ?></p>
                                    </div>
                                </div>



                              <?php endforeach; endif; else: echo "" ;endif; ?>



                            </div>
                        </div>
                    </div>
                </div>
            </section>








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
