<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:52:"/var/www/hua/application/index/view/index/index.html";i:1522326403;s:51:"/var/www/hua/application/index/view/index/base.html";i:1522326403;}*/ ?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>花卉蔬菜，线上选购</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />

        <link href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/css/master.css" rel="stylesheet">

        <!-- SWITCHER -->
        <link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/switcher.css" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/color1.css" title="color1" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/color2.css" title="color2" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/color3.css" title="color3" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/color4.css" title="color4" media="all" />

        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/jquery-1.11.2.min.js"></script>  
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/bootstrap.min.js"></script>

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
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <a href="." class="btn extra-color text-uppercase pull-right">未知的</a>
                        </div>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="wrapper">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <a href="." class="logo"></a>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 cart-block-r">
                            <div class="cart-block pull-right">
                                <i class="flaticon-shopping-bag1"></i>
                                <div class="cart-box">
                                    <div class="cart-price pull-right">
                                        <span class="color-primary text-uppercase">购物车:</span>
                                        <span class="price">￥1000.00</span>
                                        <div class="items-cart">1 ITEMS</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 nav-box">
                            <span id="toggle-nav" class="ef icon_menu mobile-menu-toggle"></span>
                            <nav class="nav-container">
                                <ul>
                                    <li class="search pull-right">
                                        <form class="search-form form-inline" action="#" method="POST">
                                            <div class="form-group">
                                                <label class="sr-only" for="searchQuery">Search...</label>
                                                <input type="search" class="search-field" id="searchQuery" placeholder="Search...">
                                            </div>
                                            <button type="submit" class="hidden"><span class="ef icon_search"></span></button>
                                        </form>
                                        <a class="iconSearch" href="#">
                                            <span class="ef icon_search"></span>                                        </a>                                    </li>
                                    <li><a class="#" href="index.html">Home</a></li>
                                    <li><a class="#" href="about.html">关于</a></li>
                                    <li><a class="#" href="#">服务</a></li>
                                    <li><a class="#" href="<?php echo url('index/index/store'); ?>">产品</a></li>
                                    <li><a class="#" href="shop.html">在线选购</a></li>
                                    <li><a class="#" href="blog.html">新闻</a></li>
                                    <li><a class="#" href="contact.html">联系我们</a></li>

                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </header>



      

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


            <section class="row4">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow bounceInUp">
                            <div class="allocated-block">
                                <span class="flaticon-plants3 circle"></span>
                                <h4>花卉</h4>
                                <div>选自全球的花卉品种，专业养护，室内室外，高贵的花卉应用仅有</div>
                                <a class="btn btn-border color-1 big" href="blog-post.html">
                                    <span>了解更多</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow bounceInUp">
                            <div class="allocated-block">
                                <span class="flaticon-machine2 circle"></span>
                                <h4>为什么专业</h4>
                                <div>专业的花卉种植人员，全身心每天呵护</div>
                                <a class="btn btn-border color-1 big" href="blog-post.html">
                                    <span>READ MORE</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow bounceInUp">
                            <div class="allocated-block">
                                <span class="flaticon-insect18 circle"></span>
                                <h4>蔬菜</h4>
                                <div>无公害种植各种蔬菜，无农药，无施肥，真正全天然。</div>
                                <a class="btn btn-border color-1 big" href="blog-post.html">
                                    <span>READ MORE</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow bounceInUp">
                            <div class="allocated-block">
                                <i class="flaticon-fences2 circle"></i>
                                <h4>免费咨询服务</h4>
                                <div>任何关于花卉的问题，免费提供咨询及建议。</div>
                                <a class="btn btn-border color-1 big" href="blog-post.html">
                                    <span>READ MORE</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services right-image-box">
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
            </section>
            <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >手机网站模板</a></div>

            <section class="gallery-box">
                <div class="wrapper">
                    <div class="row-1 wow rollIn center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-title-box custom-5">
                                <h2>Recent Projects</h2>
                                <span>Nam lobortis fringilla felis. Fusce vol utpat urna cras utnec quam vitae turpis</span>
                            </div>
                        </div>
                    </div>  
                </div>
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

            <section class="why-choose-us bg-wrapper">
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

            </section>



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
                                <div class="item wow rollIn center">
                                    <div class="team-img h-post-image">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/370x230/img-4.jpg" alt="img">
                                        <span class="date-post">10 <span>Apr</span></span>
                                        <div class="post-icon">
                                            <span class="ef icon_image "></span>
                                        </div>
                                    </div>
                                    <div class="team-info-block">
                                        <h4>Curabitur cursus porta lectus</h4>
                                        <div class="info-box">
                                            <ul>
                                                <li>
                                                    By Admin
                                                </li>
                                                <li>
                                                    Garden Care
                                                </li>
                                                <li>
                                                    3 Comments
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Neque arcu tincidunt neque pharetra coduct mod nibh leo non libero. Cras augue ipsum phare train
                                            sed.  Integ er ante nunc accumsan.</p>
                                    </div>
                                </div>

                                <div class="item wow pulse">
                                    <div class="team-img h-post-image">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/370x230/img-5.jpg" alt="img">
                                        <span class="date-post">10 <span>Apr</span></span>
                                        <div class="post-icon">
                                            <span class="ef icon_pencil_alt "></span>
                                        </div>
                                    </div>
                                    <div class="team-info-block">
                                        <h4>Suspendisse purus id sapien</h4>
                                        <div class="info-box">
                                            <ul>
                                                <li>
                                                    By Admin
                                                </li>
                                                <li>
                                                    Garden Care
                                                </li>
                                                <li>
                                                    3 Comments
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Neque arcu tincidunt neque pharetra coduct mod nibh leo non libero. Cras augue ipsum phare train
                                            sed.  Integ er ante nunc accumsan.</p>
                                    </div>
                                </div>

                                <div class="item wow bounceInRight center">
                                    <div class="team-img h-post-image">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/370x230/img-6.jpg" alt="img">
                                        <span class="date-post">10 <span>Apr</span></span>
                                        <div class="post-icon">
                                            <span class="ef icon_film "></span>
                                        </div>
                                    </div>
                                    <div class="team-info-block">
                                        <h4>Mauris lectus enim luctus vitae</h4>
                                        <div class="info-box">
                                            <ul>
                                                <li>
                                                    By Admin
                                                </li>
                                                <li>
                                                    Garden Care
                                                </li>
                                                <li>
                                                    3 Comments
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Neque arcu tincidunt neque pharetra coduct mod nibh leo non libero. Cras augue ipsum phare train
                                            sed.  Integ er ante nunc accumsan.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="team-img h-post-image">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/370x230/img-4.jpg" alt="img">
                                        <span class="date-post">10 <span>Apr</span></span>
                                        <div class="post-icon">
                                            <span class="ef icon_image "></span>
                                        </div>
                                    </div>
                                    <div class="team-info-block">
                                        <h4>Curabitur cursus porta lectus</h4>
                                        <div class="info-box">
                                            <ul>
                                                <li>
                                                    By Admin
                                                </li>
                                                <li>
                                                    Garden Care
                                                </li>
                                                <li>
                                                    3 Comments
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Neque arcu tincidunt neque pharetra coduct mod nibh leo non libero. Cras augue ipsum phare train
                                            sed.  Integ er ante nunc accumsan.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="team-img h-post-image">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/370x230/img-5.jpg" alt="img">
                                        <span class="date-post">10 <span>Apr</span></span>
                                        <div class="post-icon">
                                            <span class="ef icon_pencil_alt "></span>
                                        </div>
                                    </div>
                                    <div class="team-info-block">
                                        <h4>Suspendisse purus id sapien</h4>
                                        <div class="info-box">
                                            <ul>
                                                <li>
                                                    By Admin
                                                </li>
                                                <li>
                                                    Garden Care
                                                </li>
                                                <li>
                                                    3 Comments
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Neque arcu tincidunt neque pharetra coduct mod nibh leo non libero. Cras augue ipsum phare train
                                            sed.  Integ er ante nunc accumsan.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="team-img h-post-image">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/370x230/img-6.jpg" alt="img">
                                        <span class="date-post">10 <span>Apr</span></span>
                                        <div class="post-icon">
                                            <span class="ef icon_film "></span>
                                        </div>
                                    </div>
                                    <div class="team-info-block">
                                        <h4>Mauris lectus enim luctus vitae</h4>
                                        <div class="info-box">
                                            <ul>
                                                <li>
                                                    By Admin
                                                </li>
                                                <li>
                                                    Garden Care
                                                </li>
                                                <li>
                                                    3 Comments
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Neque arcu tincidunt neque pharetra coduct mod nibh leo non libero. Cras augue ipsum phare train
                                            sed.  Integ er ante nunc accumsan.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="team-img h-post-image">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/370x230/img-4.jpg" alt="img">
                                        <span class="date-post">10 <span>Apr</span></span>
                                        <div class="post-icon">
                                            <span class="ef icon_image "></span>
                                        </div>
                                    </div>
                                    <div class="team-info-block">
                                        <h4>Curabitur cursus porta lectus</h4>
                                        <div class="info-box">
                                            <ul>
                                                <li>
                                                    By Admin
                                                </li>
                                                <li>
                                                    Garden Care
                                                </li>
                                                <li>
                                                    3 Comments
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Neque arcu tincidunt neque pharetra coduct mod nibh leo non libero. Cras augue ipsum phare train
                                            sed.  Integ er ante nunc accumsan.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="team-img h-post-image">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/370x230/img-5.jpg" alt="img">
                                        <span class="date-post">10 <span>Apr</span></span>
                                        <div class="post-icon">
                                            <span class="ef icon_pencil_alt "></span>
                                        </div>
                                    </div>
                                    <div class="team-info-block">
                                        <h4>Suspendisse purus id sapien</h4>
                                        <div class="info-box">
                                            <ul>
                                                <li>
                                                    By Admin
                                                </li>
                                                <li>
                                                    Garden Care
                                                </li>
                                                <li>
                                                    3 Comments
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Neque arcu tincidunt neque pharetra coduct mod nibh leo non libero. Cras augue ipsum phare train
                                            sed.  Integ er ante nunc accumsan.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="team-img h-post-image">
                                        <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/370x230/img-6.jpg" alt="img">
                                        <span class="date-post">10 <span>Apr</span></span>
                                        <div class="post-icon">
                                            <span class="ef icon_film "></span>
                                        </div>
                                    </div>
                                    <div class="team-info-block">
                                        <h4>Mauris lectus enim luctus vitae</h4>
                                        <div class="info-box">
                                            <ul>
                                                <li>
                                                    By Admin
                                                </li>
                                                <li>
                                                    Garden Care
                                                </li>
                                                <li>
                                                    3 Comments
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Neque arcu tincidunt neque pharetra coduct mod nibh leo non libero. Cras augue ipsum phare train
                                            sed.  Integ er ante nunc accumsan.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>











<!-- 

            <section class="color-bg box-tools-bg percent-blocks">
                <div class="wrapper">
                    <div class="row-1">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="our-info h1">
                                <li class="chart" data-percent="1500">
                                    <span class="ef icon_like_alt"></span>
                                    <div class="number percent"></div>
                                    <div class="text">Completed Projects</div>
                                </li>
                                <li class="chart" data-percent="358">
                                    <span class="ef icon_group"></span>
                                    <div class="number percent"></div>
                                    <div class="text">Satisfied Customers</div>
                                </li>
                                <li class="chart" data-percent="26">
                                    <span class="ef icon_house"></span>
                                    <div class="number percent"></div>
                                    <div class="text">Nationwide Branches</div>
                                </li>
                                <li class="chart" data-percent="2641">
                                    <span class="ef icon_tools"></span>
                                    <div class="number percent"></div>
                                    <div class="text">Free Quotes Sent</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tooth-color-d"></div>
            </section> -->
<!--             <section class="content-foooter-2 no-line">
                <div class="wrapper">
                    <div class="row-1">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow rollIn">
                            <div class="footer-2-title-box">
                                <div class="fot-2-title">Follow Us</div>
                                <div class="fot-2-title">On Social Media</div>
                            </div>
                            <div class="soc-box">
                                <ul class="social-circle">
                                    <li><a href="#"><span class="ef social_facebook_circle"></span></a></li>
                                    <li><a href="#"><span class="ef social_twitter_circle"></span></a></li>
                                    <li><a href="#"><span class="ef social_pinterest_circle"></span></a></li>
                                    <li><a href="#"><span class="ef social_youtube_circle"></span></a></li>
                                    <li><a href="#"><span class="ef social_instagram_circle"></span></a></li>
                                    <li><a href="#"><span class="ef social_googleplus_circle"></span></a></li>
                                </ul>
                                <div class="followers">5k Followers</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow lightSpeedIn">
                            <div class="attractive-box">
                                <div class="attractive">
                                    Hire Us For Any Service & Get 25% Off Now &bull; Ends 10 April<div class="attractive-text left"><span class="att-text">Limited Time offer</span><span class="ef arrow_triangle-down"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>        --> 

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
                                    <div class="f-subscribe">
                                        <h4>Subscribe Newsletter</h4>
                                        <div id="mc_embed_signup">
                                            <form action="/templines.us9.list-manage.com/subscribe/post?u=fe9a9cfcf8d73763bcc53f206&amp;id=319cafcc43" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                                <div id="mc_embed_signup_scroll">
                                                    <div class="mc-field-group">
                                                        <input type="email" value="#" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your email">
                                                    </div>
                                                    <div id="mce-responses" class="clear">
                                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                                    </div>
                                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                    <div style="position: absolute; left: -5000px;">
                                                        <input type="text" name="b_fe9a9cfcf8d73763bcc53f206_319cafcc43" tabindex="-1" value="#">
                                                    </div>
                                                    <div class="clear">
                                                        <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"   class="btn btn-primary btn-icon-right"><span class="btn-icon"><i class="fa icon_mail_alt "></i></span> </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
    </body>
</html>

