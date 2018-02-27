<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if(G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<!-- 상단 시작 { -->
    <div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
     } ?>
</div>

<div class="container-fluid" id="top_bar">
    <div class="container">
        <div class="row">
            <div class="col s3">
                <ul>
                    <li><a href="" id="favorite">즐겨찾기</a></li>
                    <li><a href="">모바일 버전</a></li>
                </ul>
                
                
            </div>
            <div class="col s9">

            
            <ul class="right">
                    <?php if ($is_member && $is_admin) {
                        echo '<li><a href="' . G5_ADMIN_URL . '/shop_admin/"><b>관리자</b></a></li>';
                    } ?>
                    <?php if ($is_member) {
                        echo '<li><a href="' . G5_BBS_URL . '/logout.php?url=shop">로그아웃</a></li>';
                        echo '<li><a href="'.G5_SHOP_URL.'/mypage.php">내 정보</a></li>';
                        echo '<li><a href="'.G5_SHOP_URL.'/itemuselist.php">사용후기</a></li>';
                        echo '<li><a href="'.G5_BBS_URL.'/qalist.php">1:1문의</a></li>';
                    }else {
                        echo '<li><a href="' . G5_BBS_URL . '/register.php">회원가입</a></li>';
                        echo '<li><a href="' . G5_BBS_URL . '/login.php?url=' . $urlencode . '"><b>로그인</b></a></li>';
                    } ?>
                    <li><a href="<?php echo G5_SHOP_URL; ?>/cart.php">장바구니</a></li>
                    <li><a href="<?php echo G5_SHOP_URL; ?>/wishlist.php">찜 목록</a></li>
                    <li><a href="<?php echo G5_SHOP_URL; ?>/couponzone.php">쿠폰존</a></li>
                    <li><a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php">주문/배송 조회</a></li>
                    <li><a href="<?php echo G5_BBS_URL; ?>/faq.php">FAQ</a></li>                        
                </ul>
                </div>
        </div>
    </div>
</div>


<div class="container" id="sub_top_bar">
    <div class="row">
        <div class="col s3">
            <a href=""><img src="http://shop.mydepot.kr/ycart/img/left_top_ban.jpg" alt="배너"></a>
        </div>
        <div class="col s6">
            <a href="<?php echo G5_SHOP_URL; ?>/"><img id="top_logo" src="<?php echo G5_DATA_URL; ?>/common/logo_img" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>
        <div class="col s3">
            <div class="row">
                <div class="col s12">
                    <div id="favorite_word" class="right valign-wrapper">
                        <ul>
                        <li id="word1"><a href="#!"><span>1</span>청바지 7종 세트</a></li>
                        <li id="word2"><a href="#!"><span>2</span>남성용 와이셔츠</a></li>
                        <li id="word3"><a href="#!"><span>3</span>터틀넥 티셔츠</a></li>
                        <li id="word4"><a href="#!"><span>4</span>후드티</a></li>
                        <li id="word5"><a href="#!"><span>5</span>봄옷 신상 특가할인</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col s12">
                    <form id="search_bar" name="frmsearch1" action="<?php echo G5_SHOP_URL; ?>/search.php" onsubmit="return search_submit(this);">
                        <input type="text" name="q" value="<?php echo stripslashes(get_text(get_search_string($q))); ?>" id="sch_str" data-length="10" required>
                        <button type="submit" id="sch_submit" class="btn black white-text">검색</button>
                    </form>
                    <script>
                    function search_submit(f) {
                        if (f.q.value.length < 2) {
                            alert("검색어는 두글자 이상 입력하십시오.");
                            f.q.select();
                            f.q.focus();
                            return false;
                        }

                        return true;
                    }
                    </script>                    
                </div>
            </div>


        </div>
    </div>
</div>

<?php include_once(G5_SHOP_SKIN_PATH.'/boxcategory.skin.php'); // 전체 상품 카테고리 ?>

<div id="nav2" class="container-fluid">
    <!--
    <div class="container">
        <nav class="nav-wrapper transparent center-align">
            <ul>
                <li><a href="http://shop.mydepot.kr/ycart/shop/search.php?q=">추가분류1</a></li>
                <li><a href="badges.html">추가분류2</a></li>
                <li><a href="collapsible.html">추가분류3</a></li>
            </ul>
            </div>
        </nav>
    </div>
    -->
</div>



<div class="container">
    <div class="col s12">

    </div>
    <?php include(G5_SHOP_SKIN_PATH.'/boxtodayview.skin.php'); // 오늘 본 상품 ?>
    <!-- 쇼핑몰 배너 시작 { -->
    <?php echo display_banner('왼쪽'); ?>
    <!-- } 쇼핑몰 배너 끝 -->
</div>

<!-- 일단 숨겨놓고 나중에 정리 -->
<div id="hidden_temp" style="display:none;">
    <?php include_once(G5_SHOP_SKIN_PATH.'/boxcategory.skin.php'); // 전체 상품 카테고리 ?>
    <?php include_once(G5_SHOP_SKIN_PATH.'/boxevent.skin.php'); // 이벤트 ?>
</div>

  

    <!-- 콘텐츠 시작 { -->
    <div class="container">
        <?php if ((!$bo_table || $w == 's' ) && !defined('_INDEX_')) { ?><div id="wrapper_title"><h3 class="center-align"><?php echo $g5['title'] ?></h3></div><?php } ?>