<?php
    if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

    $http = $_SERVER['HTTP_HOST'];  

    if($http=='localhost'||$http=='192.168.1.17'){
        $home = G5_URL;  
        $firstpage = $home;  
    } else { 

        if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
            $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redirect);
            exit();
        }

        $home = 'https://www.ustourstar.com';
    };
    include_once(G5_LIB_PATH.'/latest.lib.php');
    include_once(G5_LIB_PATH.'/outlogin.lib.php');
    include_once(G5_LIB_PATH.'/poll.lib.php');
    include_once(G5_LIB_PATH.'/visit.lib.php');
    include_once(G5_LIB_PATH.'/connect.lib.php');
    include_once(G5_LIB_PATH.'/popular.lib.php');

    $menu_h = '<a href="'.$home.'" target="_self"> 홈 </a>';
    $menu_c = '<a href="'.$home.'/page_about.php?bo_table=about" target="_self"> 회사소개 </a>';
    $menu_p = '<a href="'.$home.'/bbs/board.php?bo_table=gnutour" target="_self"> 여행상품^ </a>'; 
    $menu_z = '<a href="'.$home.'/page_contact.php?bo_table=contact" target="_self"> 연락처 </a>'; 
    $menu_g = '<a href="'.$home.'/bbs/board.php?bo_table=gallery" target="_self"> 갤러리 </a>'; 
    $menu_r = '<a href="'.$home.'/bbs/board.php?bo_table=review" target="_self"> 여행 후기 </a>'; 
    $menu_q = '<a href="'.$home.'/bbs/board.php?bo_table=qna" target="_self"> 여행 문의 </a>'; 
    $menu_a = '<a href="'.$home.'/bbs/write.php?bo_table=gnutour" target="_self"> 여행상품 추가 +  </a>';
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
    <meta http-equiv="imagetoolbar" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php if (0): ?>
    <link rel="stylesheet" href="http://response07.pud.kr/5.3.1.5/theme/response07/css/default.css?ver=171222">
    <link rel="stylesheet" href="http://response07.pud.kr/5.3.1.5/theme/response07/skin/latest/pic_basic/style.css?ver=171222">
    <link rel="stylesheet" href="http://response07.pud.kr/5.3.1.5/theme/response07/skin/latest/list/style.css?ver=171222">
    <!--[if lte IE 8]><script src="http://response07.pud.kr/5.3.1.5/js/html5.js"></script><![endif]-->
     
    <script src="http://response07.pud.kr/5.3.1.5/js/jquery-1.8.3.min.js"></script>
    <script src="http://response07.pud.kr/5.3.1.5/js/jquery.menu.js?ver=171222"></script>
    <script src="http://response07.pud.kr/5.3.1.5/js/common.js?ver=171222"></script>
    <script src="http://response07.pud.kr/5.3.1.5/js/wrest.js?ver=171222"></script>
    <script src="http://response07.pud.kr/5.3.1.5/js/placeholders.min.js"></script>
    <link rel="stylesheet" href="http://response07.pud.kr/5.3.1.5/js/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="http://response07.pud.kr/5.3.1.5/theme/response07/webis/plugin/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="http://response07.pud.kr/5.3.1.5/theme/response07/webis/plugin/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://response07.pud.kr/5.3.1.5/theme/response07/webis/plugin/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="http://response07.pud.kr/5.3.1.5/theme/response07/webis/plugin/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="http://response07.pud.kr/5.3.1.5/theme/response07/webis/css/layout.css">
    <script type="text/javascript" src="http://response07.pud.kr/5.3.1.5/theme/response07/webis/js/bootstrap.js"></script>
    <script type="text/javascript" src="http://response07.pud.kr/5.3.1.5/theme/response07/webis/js/touchSwip.js"></script>
    <script type="text/javascript" src="http://response07.pud.kr/5.3.1.5/theme/response07/webis/js/plugins.js"></script>
    <script type="text/javascript" src="http://response07.pud.kr/5.3.1.5/theme/response07/webis/js/dlmenu.js"></script>
    <script type="text/javascript" src="http://response07.pud.kr/5.3.1.5/theme/response07/webis/js/common.js"></script>
    <link rel="stylesheet" href="http://img.webis.co.kr/sir/placeholder/css/animations.css">
    <link rel="stylesheet" href="http://img.webis.co.kr/sir/placeholder/css/prettyPhoto.css">
    <link rel="stylesheet" href="http://img.webis.co.kr/sir/placeholder/css/owl.css">
    <link rel="stylesheet" href="http://response07.pud.kr/5.3.1.5/theme/response07/webis/css/common.css">
    <link rel="stylesheet" href="http://response07.pud.kr/5.3.1.5/theme/response07/webis/css/main.css">
    <link rel="stylesheet" href="http://response07.pud.kr/5.3.1.5/theme/response07/webis/css/responsive.css">
    <script type="text/javascript" src="http://response07.pud.kr/5.3.1.5/theme/response07/webis/plugin/holderjs/2.9.0/holder.min.js"></script>
    <link rel="stylesheet" href="http://img.webis.co.kr/sir/Headban.css">    
<?php endif ?> 

    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/default.css?ver=171222">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/stylepic_basic.css?ver=171222">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/stylelist.css?ver=171222">
    <!--[if lte IE 8]><script src="<?php echo G5_URL ?>/jscss/html5.js"></script><![endif]-->
     
    <script src="<?php echo G5_URL ?>/jscss/jquery-1.8.3.min.js"></script>
    <script src="<?php echo G5_URL ?>/jscss/jquery.menu.js?ver=171222"></script>
    <script src="<?php echo G5_URL ?>/jscss/common.js?ver=171222"></script>
    <script src="<?php echo G5_URL ?>/jscss/placeholders.min.js"></script>
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/font-awesome.min.css">
    <script type="text/javascript" src="<?php echo G5_URL ?>/jscss/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/bootstrap-theme.min.css"> 
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/layout.css">
 
    <script type="text/javascript" src="<?php echo G5_URL ?>/jscss/menujquery.min.js"></script>      
    <script type="text/javascript" src="<?php echo G5_URL ?>/jscss/menucommon.js"></script>

    <script type="text/javascript" src="<?php echo G5_URL ?>/jscss/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo G5_URL ?>/jscss/touchSwip.js"></script>
    <script type="text/javascript" src="<?php echo G5_URL ?>/jscss/plugins.js"></script>
    <script type="text/javascript" src="<?php echo G5_URL ?>/jscss/dlmenu.js"></script>
    <script type="text/javascript" src="<?php echo G5_URL ?>/jscss/common.js"></script>
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/animations.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/owl.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/common.css">
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/main.css"> 
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/responsive.css">
    <script type="text/javascript" src="<?php echo G5_URL ?>/jscss/holder.min.js"></script>
    <link rel="stylesheet" href="<?php echo G5_URL ?>/jscss/Headban.css"> 

</head>
<body>
<div id="wrap">
<!-- 상단 시작 { -->
<header>

    <style>
        .topbar a {
            color: white;
        }
    </style>    
    <section class="topbar clearfix" style="background-color: #00BDBB; color: white;">
        <div class="inner">
            <div class="t-left col-sm-9 clearfix" style="font-size:14px;">
                <span> <i class="fa fa-map-marker"></i> <a href="https://www.google.com/maps/dir/Current+Location/595 BROAD AVE, STE #14 RIDGEFIELD NJ 07657" style="font-size:14px;"> 595 BROAD AVE, STE #14 RIDGEFIELD NJ 07657</a>  </span>
                <span> <i class="fa fa-envelope"></i> <a href="mailto:star@tourstarusa.com" style="font-size:14px;"> star@tourstarusa.com</a></span>
                <span> <i class="fa fa-phone"></i><a href="tel:201-496-5555" style="font-size:14px;">NY +1 201-496-5555</a></span>
            </div><!--end:t-left-->

            <div class="t-rieght col-sm-3 clearfix">
                <ul class="nav">

                <?php if($is_member) { //Login ?>
                    <li>
                        <a href="<?php echo G5_URL ?>/bbs/logout.php"><i class="fa fa-user" aria-hidden="true"></i> 로그아웃 </a>
                    </li>        
                <?php if($is_admin) { ?>
                    <li>
                        <a href="<?php echo G5_ADMIN_URL ?>"><i class="fa fa-cog" aria-hidden="true"></i> 관리 </a>
                    </li>
                <?php } ?>
                <?php } else { //Logout ?>  
                    <li>
                        <a href="<?php echo G5_URL ?>/bbs/login.php"><i class="fa fa-user" aria-hidden="true"></i> 로그인 </a>
                    </li>
                    <li>
                        <a href="<?php echo G5_URL ?>/bbs/register.php"><i class="fa fa-cog" aria-hidden="true"></i> 회원가입 </a> 
                    </li>
                <?php } ?>

                </ul>
            </div><!--end:t-right-->
        </div><!--end:inner-->
    </section><!--end:topbar-->
    <div class="nav-container stickmenu3333333-on-off-33333 clearfix" style="padding: 10px;">
        <div class="inner">
             <a href="<?php echo $home; ?>/" class="logo">
                <span class='blank'></span><img src="<?php echo G5_URL ?>/img/logo.png" alt="그누투어" style='width: 240px;'>
            </a>
            <ul class="main-menu">
                <li class="multi-level-menu" style="z-index:999"> <?php echo $menu_h; ?> </li>
                <li class="multi-level-menu" style="z-index:998"> <?php echo $menu_c; ?> </li>
                <li class="multi-level-menu" style="z-index:997"> <?php echo $menu_p; ?> 
                    <ul class="sub-menu">
                        <li class="multi-level-menu" style="z-index:999"> <?php echo $menu_h; ?> </li>
                        <li class="multi-level-menu" style="z-index:998"> <?php echo $menu_c; ?> </li>
                        <li class="multi-level-menu" style="z-index:997"> <?php echo $menu_p; ?> </li>
                        <li class="multi-level-menu" style="z-index:996"> <?php echo $menu_z; ?> </li>
                        <li class="multi-level-menu" style="z-index:995"> <?php echo $menu_g; ?> </li>
                        <li class="multi-level-menu" style="z-index:994"> <?php echo $menu_r; ?> </li>
                        <li class="multi-level-menu" style="z-index:993"> <?php echo $menu_q; ?> </li>    
                        <?php if ($is_admin): ?>
                        <li class="multi-level-menu" style="z-index:992"> <?php echo $menu_a; ?> </li>
                        <?php endif ?>
                    </ul>
                </li>
                <li class="multi-level-menu" style="z-index:996"> <?php echo $menu_z; ?> </li>
                <li class="multi-level-menu" style="z-index:995"> <?php echo $menu_g; ?> </li>
                <li class="multi-level-menu" style="z-index:994"> <?php echo $menu_r; ?> </li>
                <li class="multi-level-menu" style="z-index:993"> <?php echo $menu_q; ?> </li>    
                <?php if ($is_admin): ?>
                <li class="multi-level-menu" style="z-index:992"> <?php echo $menu_a; ?> </li>
                <?php endif ?>
            </ul>
            <!-- end:main-menu -->
                <div id="mobile-menu" class="dl-menuwrapper">
                    <button class="dl-trigger"><i class="fa fa-bars"></i></button>
                    <ul class="dl-menu">
                        <li class="multi-level-menu" style="z-index:999"> <?php echo $menu_h; ?> </li>
                        <li class="multi-level-menu" style="z-index:998"> <?php echo $menu_c; ?> </li>
                        <li class="multi-level-menu" style="z-index:997"> <?php echo $menu_p; ?> </li>
                        <li class="multi-level-menu" style="z-index:996"> <?php echo $menu_z; ?> </li>
                        <li class="multi-level-menu" style="z-index:995"> <?php echo $menu_g; ?> </li>
                        <li class="multi-level-menu" style="z-index:994"> <?php echo $menu_r; ?> </li>
                        <li class="multi-level-menu" style="z-index:993"> <?php echo $menu_q; ?> </li>    
                        <?php if ($is_admin): ?>
                        <li class="multi-level-menu" style="z-index:992"> <?php echo $menu_a; ?> </li>
                        <?php endif ?>
                    </ul>
                </div>
            <!-- end:dl-menuwrapper -->
        </div>
    </div>
</header>
<!-- } 상단 끝 -->

<?php if (!defined('_INDEX_')): ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
    <?php if (!isset($_GET['bo_table'])): ?>
        <br><br>
    <?php endif ?>
<?php endif ?>








