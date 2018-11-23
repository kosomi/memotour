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
    .memowhite a, .footer_a, .menu a {
        color: white;
    }

</style>

<!-- 하단 시작 { -->
<footer class="footer noprint" style="width:100%; background: url(http://www.memoatour.com/img/blackmosaic.jpg);">
    <div class="container">
    <div class="row margin-top margin-bottom footer__widgets-areas">

        <div class="col-md-6 footer__widgets-area footer__widgets-area--1 text-left" style="color:white;">
            <div id="text-2" class="widget block-after-indent widget_text"><h3 class="widget__title" style="padding-bottom: 10px;">Memoa Tour</h3>
                <div class="textwidget" style="font-size:15px; line-height: 30px;">
                    OPEN HOUR : <span style="color:#f4a820;">월요일 - 금요일: 9am ~ 7pm / 토요일 : 9 : 30am ~ 1pm </span><br>
                    KAKAO 24H : <span style="color:#f4a820;"> MemoaTour </span><br>
                    <div>전화 번호  : <a href='tel:213 381 8000' class='footer_a' style='color:white;'>213-381-8000</a> / <a href='tel:213 259 9000' class='footer_a' style='color:white;>213-259-9000</a> <br> 
                    E-mail : <a href='mailto:help@memoatour.com ' class='footer_a' style='color:white;'>help@memoatour.com </a>
                    </div>
                    Address : <span style="color:#f4a820;"> 3435 Wilshire blvd #103, Los Angeles CA 90010 </span><br>
                    Business Licence# 00032837451-0001-7
                </div> 
            </div>
        </div> 

        <div class="col-md-3 footer__widgets-area footer__widgets-area--1 text-left" style="color:white;">
            <div id="text-2" class="widget block-after-indent widget_text"><h3 class="widget__title" style="padding-bottom: 10px;"> Menu </h3>
                <div class="textwidget">
                    <div class="widget-contact-info__item__text memowhite memowhite" style="line-height: 40px;">
                        <h6><i class="fa fa-check"></i><a href="http://www.memoatour.com/bbs/content.php?co_id=company"> 여행 약관 </a></h6>
                        <h6><i class="fa fa-check"></i><a href="http://www.memoatour.com/bbs/content.php?co_id=company"> 결제와 환불 </a></h6>
                        <h6><i class="fa fa-check"></i><a href="http://www.memoatour.com/bbs/content.php?co_id=company"> 찾아오는 길 </a></h6>
                        <h6><i class="fa fa-check"></i><a href="http://www.memoatour.com/bbs/board.php?bo_table=qna"> 여행문의 </a></h6>
                        <h6><i class="fa fa-check"></i><a href="http://www.memoatour.com/bbs/board.php?bo_table=customers"> 예약확인 </a></h6>    
                    </div>
                </div> 
            </div>
        </div>  

        <div class="col-md-3 footer__widgets-area footer__widgets-area--1 text-left" style="color:white;">
            <div id="text-2" class="widget block-after-indent widget_text"><h3 class="widget__title" style="padding-bottom: 10px;"> SNS </h3>
                <div class="textwidget">
                    <div class="widget-contact-info__item__text memowhite memowhite" style="line-height: 40px;">
                        <h6><i class="fa fa-check"></i><a href="http://www.memoatour.com/bbs/content.php?co_id=company"> Facebook </a></h6>
                        <h6><i class="fa fa-check"></i><a href="http://www.memoatour.com/bbs/content.php?co_id=company"> 카카오 플러스 </a></h6>  
                    </div>
                </div> 
            </div>
            <div id="text-2" class="widget block-after-indent widget_text"><h3 class="widget__title" style="padding-bottom: 10px;"> Payment </h3>
                <div class="textwidget">
                    <div class="widget-contact-info__item__text memowhite memowhite" style="line-height: 40px;">
                        <h6><i class="fa fa-check"></i><a href="http://www.memoatour.com/bbs/content.php?co_id=company"> Venmo </a></h6>
                        <h6><i class="fa fa-check"></i><a href="http://www.memoatour.com/bbs/content.php?co_id=company"> Paypal </a></h6>  
                    </div>
                </div> 
            </div>
        </div>

    </div>
    </div>
</footer>

<div class="footer__bottom" style="background-color: #84A908; color: white; padding: 14px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <div class="footer__copyright">Copyright © <span style="color:white;"> Memoatour.com </span> All Rights Reserved.</div>
            </div>
            <div class="col-md-6 text-right">
                <div class="footer-nav">
                    <ul id="menu-footer-menu" class="menu">
                        <a href="http://www.memoatour.com/bbs/content.php?co_id=company">Terms &#038; Conditions</a> &nbsp;
                        <a href="http://www.memoatour.com/bbs/content.php?co_id=company">Cookies</a> &nbsp;
                        <a href="http://www.memoatour.com/bbs/content.php?co_id=company">Privacy Policy</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- } 하단 끝 --> 
 
</div>
</body>
</html>
<!-- } 하단 끝 -->   

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