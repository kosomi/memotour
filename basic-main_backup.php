<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 위젯 대표아이디 설정
$wid = 'CMB';

// 게시판 제목 폰트 설정
$font = 'font-16 en';

// 게시판 제목 하단라인컬러 설정 - red, blue, green, orangered, black, orange, yellow, navy, violet, deepblue, crimson..
$line = 'navy';

// 사이드 위치 설정 - left, right
$side = ($at_set['side']) ? 'left' : 'right';

?>
<style>
	.widget-index .at-main,
	.widget-index .at-side { padding-bottom:0px; }
	.widget-index .div-title-underbar { margin-bottom:15px; }
	.widget-index .div-title-underbar span { padding-bottom:4px; }
	.widget-index .div-title-underbar span b { font-weight:500; }
	.widget-index .widget-img img { display:block; max-width:100%; /* 배너 이미지 */ }
	.widget-box { margin-bottom:25px; }
</style>

<!-- 인덱스 배너 시작 { -->
<section id="main_slide">
    <div class="main_banner">
        <div id="main_carousel" class="carousel slide" data-ride="carousel"> 
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#main_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main_carousel" data-slide-to="1"></li>
            <li data-target="#main_carousel" data-slide-to="2"></li>
            <li data-target="#main_carousel" data-slide-to="3"></li>
          </ol>
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item banner_num01 active">
              <div class="carousel-caption">
                <div data-animation="animated fadeInUp">
                    <div class="mtext02"> "꿈은 이루어진다" 미국 정통 대륙횡단 </div>
                    <div class="mtext02"><h2> 북부코스, 남부코스, 중부코스 </h2></div>
                    <a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=gnutour" class="colbg btn-lg" role="button">여행상품 둘러보기</a>
                </div>
              </div>
            </div>
            <div class="item banner_num02">
              <div class="carousel-caption">
                <div data-animation="animated fadeInUp">
                    <div class="mtext02"> "미국 역사의 시작" 미 동부 캐나다 </div>
                    <div class="mtext02"><h2> 뉴욕, 워싱턴DC, 나이아가라 폭포, 토론토, 몬트리올, 퀘백, 보스톤 </h2></div>
                    <a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=gnutour" class="colbg btn-lg" role="button">여행상품 둘러보기</a>
                </div>
              </div>
            </div>  
            <div class="item banner_num03">
              <div class="carousel-caption">
                <div data-animation="animated fadeInUp">
                    <div class="mtext02"> "죽기전에 가봐야 할" 미 서부 대륙관광 </div>
                    <div class="mtext02"><h2> 그랜드캐년, 자이언트 캐년, 브라이스 캐년, 라스베가스, 요세미티, 샌프란시스코 </h2></div>
                    <a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=gnutour" class="colbg btn-lg" role="button">여행상품 둘러보기</a>
                </div>
              </div>
            </div>  
            <div class="item banner_num04">
              <div class="carousel-caption">
                <div data-animation="animated fadeInUp">
                    <div class="mtext02"> "잉카의 나라", "삼바의 나라", "탱고의 나라" </div>
                    <div class="mtext02"><h2> 페루, 브라질, 아르헨티나, 요세미티, 센프란시스코, 남미 일주 12일 </h2></div>
                    <a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=gnutour" class="colbg btn-lg" role="button">여행상품 둘러보기</a>
                </div>
              </div>
            </div>           
         </div>             
          
          <!-- Controls --> 
          <a class="left carousel-control" href="#main_carousel" data-slide="prev"> <span class="glyphicon glyphicon-menu-left"></span> </a>
          <a class="right carousel-control" href="#main_carousel" data-slide="next"> <span class="glyphicon glyphicon-menu-right"></span> </a> 
        </div>
    </div>
</section>
<!-- 인덱스 배너 끝 } -->

<section class="topbar clearfix" style="background-color: #F8F8F8; text-align: center; padding: 70px 0px 130px 0px;">
    <div class="inner">
        <div class="col-sm-12">
            <h1><b> 추천 여행상품 </b></h1><br>
            <h4 style="line-height: 30px; "> 여행 상품 하나하나에 25년 경력의 오랜 노하우가 담겨져 있습니다. </h4>
        </div><!--end:t-left-->
    </div><!--end:inner-->
</section><!--end:topbar-->

<center>

<!-- 갤러리 시작 -->
<div class="div-title-underbar" style="max-width: 1200px;">
	<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=basic">
	  <span class="pull-right lightgray <?php echo $font;?>">+</span>
	  <span class="div-title-underbar-bold border-<?php echo $line;?> <?php echo $font;?>">
	    <b>Gallery</b>
	  </span>
	</a>
</div>
<div class="widget-box">
	<?php echo apms_widget('basic-post-gallery', $wid.'-wm3', 'center=1'); ?>
</div>
<!-- 갤러리 끝 -->  

<div class="at-container widget-index" style="max-width: 1200px;">
	<div class="row at-row" style="margin: 0px;">
		<!-- 메인 영역 -->
		<div class="col-lg-12">
			<!-- 여행상품 시작--> 
			<div class="widget-box">
				<?php echo apms_widget('basic-post-garo', $wid.'-wm1', 'icon={아이콘:caret-right} date=1 center=1 strong=1,2'); ?>
			</div>
			<!-- 여행상품 끝-->
		</div>
	</div>
</div>
</center>

<style>
    .contactingg {
        padding: 30px; 
        background-image: url("<?php echo G5_URL ?>/img/contacting.jpg");
        background-repeat:no-repeat;
        background-position: center center;
        background-size: cover;
        height: 100%;
        overflow: hidden;
        color: white;
    }
</style>
<center class='contactingg'>
<table style="text-align: center;">
    <tr>
        <td> 
            <br><br><br>
            <h1 style="line-height: 34px;"><b> 투어스타와 여행을 계획하시면 언제라도 연락주세요. </b></h1><br>
            <h4 style="line-height: 30px; "> 어떠한 행사든 문의 주십시요. 어렵고 힘든 행사수배도 저희 투어스타가 성심껏 최선을다해서 꼭만들어내겠습니다. </h4>
            <br><br>
            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qna" class="btn-lg" role="button">여행상품 예약하기</a>  
            <br><br><br>
        </td>
    </tr>
</table>
</center>