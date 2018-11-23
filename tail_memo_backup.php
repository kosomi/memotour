<?php
    if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

    if (G5_IS_MOBILE) {
        include_once(G5_THEME_MOBILE_PATH.'/tail.php');
        return;
    }
?>

<?php if (!isset($_GET[$bo_table]) && !defined('_INDEX_')): ?>

            <br><br>
        </div>
    </div>
</div>

<?php endif ?>

<section class="topbar clearfix" style="background-color: #00BDBB; position: relative;  color: white; height: 180px; padding-top: 50px; ">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 text-center"><br>
                <h2> 투어스타와 함께 여행하세요. 잊지 못할 추억을 만들어 드립니다.</h2>
            </div>
            <div class="col-sm-4 text-center"><br>
                <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qna" class="btn-lg" role="button"> 여행문의 하기 </a>
            </div>                
        </div>
    </div>
</section><!--end:topbar-->

<style>
    .mkdf_tweet_text a {
        color: white;
    }
    .footmenu {
        color: white;
    }
    .btn-lg {
        color: white;
        border-radius: 100px;
        letter-spacing: 0em;
        font-size: 1.5vmin;
        padding: 10px 20px;
        background-color: transparent !important;
        border: 1px solid #fff;
    }
</style>

<!-- 하단 시작 { -->
<footer style="background-color: #333333;">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-6 text-left" style="color:white; line-height: 30px; font-size: 16px; ">
                <h2 style="padding-bottom: 10px;"><a href="<?php echo G5_URL ?>/" style='color: white; font-weight: bold;'> 투어스타 그룹 </a> <br></h2>
                미국 동부 캐나다 * 미서부지역*등 미국전역을 25년 경험으로 모든행사 가능한 현지랜드여행사로 고객감동 투어스타여행사입니다. <br>
                <ul class="mkdf_twitter_widget">
                    <li>
                        <a href="tel:201-496-5555" style="color:white;">
                            NY +1 201-496-5555
                        </a>
                    </li>
                    <li>
                        <a href="tel:213-215-8272" style="color:white;">
                            LA +1 213-215-8272
                        </a>
                    </li>
                    <li>
                        Fax 551-313-0025
                    </li>
                    <li>
                        카카오톡: NY2LA
                    </li>
                    <li>
                        <a href="https://www.google.com/maps/dir/Current+Location/595 BROAD AVE, STE #14 RIDGEFIELD NJ 07657" style="color:white;">
                            595 BROAD AVE, STE #14 RIDGEFIELD NJ 07657
                        </a>
                    </li>
                    <li>
                        <a href="mailto:star@tourstarusa.com" style="color:white;">
                            STAR@TOURSTARUSA.COM
                        </a>
                    </li>
                    <li>
                        <br>    
                    </li>
                </ul> 
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 text-left">
                <br>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 text-left">                
                <h3 style="color: white; line-height: 30px;"> MENU </h3>
                <ul class="mkdf_twitter_widget" style="font-size: 15px; line-height: 30px;">
                    <li>
                        <div class="mkdf_tweet_text"> 
                            <?php echo $menu_h; ?> 
                        </div>
                    </li> 
                    <li>
                        <div class="mkdf_tweet_text"> 
                            <?php echo $menu_c; ?> 
                        </div>
                    </li> 
                    <li>
                        <div class="mkdf_tweet_text"> 
                            <?php echo $menu_p; ?> 
                        </div>
                    </li> 
                    <li>
                        <div class="mkdf_tweet_text"> 
                            <?php echo $menu_z; ?> 
                        </div>
                    </li> 
                    <li>
                        <div class="mkdf_tweet_text"> 
                            <?php echo $menu_g; ?> 
                        </div>
                    </li> 
                    <li>
                        <div class="mkdf_tweet_text"> 
                            <?php echo $menu_r; ?> 
                        </div>
                    </li> 
                    <li>
                        <div class="mkdf_tweet_text"> 
                            <?php echo $menu_q; ?> 
                        </div>
                    </li>   
                <?php if ($is_admin): ?>
                    <li>
                        <div class="mkdf_tweet_text"> 
                            <?php echo $menu_a; ?> 
                        </div>
                    </li> 
                <?php endif ?> 
                <?php if($is_member) { //Login ?>
                    <li>
                        <div class="mkdf_tweet_text"> 
                            <a href="<?php echo G5_URL ?>/bbs/logout.php">로그아웃</a>
                        </div>
                    </li>        
                <?php if($is_admin) { ?>
                    <li>
                        <div class="mkdf_tweet_text"> 
                            <a href="<?php echo G5_ADMIN_URL ?>">관리</a>
                        </div>
                    </li>
                <?php } ?>
                <?php } else { //Logout ?>  
                    <li>
                        <div class="mkdf_tweet_text"> 
                            <a href="<?php echo G5_URL ?>/bbs/login.php">로그인</a>
                        </div>
                    </li>
                    <li>
                        <div class="mkdf_tweet_text"> 
                            <a href="<?php echo G5_URL ?>/bbs/register.php"> 회원가입 </a> 
                        </div>
                    </li>
                <?php } ?>
                    <li>
                        <br>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 text-left">
                <h3 style="color: white; line-height: 30px;"> SNS </h3>
                <ul class="mkdf_twitter_widget" style="font-size: 15px; line-height: 30px;">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fa fa-facebook"></i><span> Facebook </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fa fa-twitter"></i><span> Twitter </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div style="background-color: #282828;">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-12 text-center" style="padding: 10px">
                <a href=" aafwekf awef" style="color: gray;"> © 2012 Tourstarusa.com - All Rights Reserved. </a>
            </div>
        </div>
    </div>    
</div>
<!-- } 하단 끝 -->



<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->
</div>
</body>
</html>
<!-- } 하단 끝 -->  

<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo THEMA_URL;?>/assets/js/respond.js"></script>
<![endif]-->

<!-- JavaScript -->
<script>
var sub_show = "<?php echo $at_set['subv'];?>";
var sub_hide = "<?php echo $at_set['subh'];?>";
var menu_startAt = "<?php echo ($m_sat) ? $m_sat : 0;?>";
var menu_sub = "<?php echo $m_sub;?>";
var menu_subAt = "<?php echo ($m_subsat) ? $m_subsat : 0;?>";
</script>
<script src="<?php echo THEMA_URL;?>/assets/bs3/js/bootstrap.min.js"></script>
<script src="<?php echo THEMA_URL;?>/assets/js/sly.min.js"></script>
<script src="<?php echo THEMA_URL;?>/assets/js/custom.js"></script>
<?php if($is_sticky_nav) { ?>
<script src="<?php echo THEMA_URL;?>/assets/js/sticky.js"></script>
<?php } ?>

<?php echo apms_widget('basic-sidebar'); //사이드바 및 모바일 메뉴(UI) ?>

<?php if($is_designer || $is_demo) include_once(THEMA_PATH.'/assets/switcher.php'); //Style Switcher ?>









<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 1);
?>