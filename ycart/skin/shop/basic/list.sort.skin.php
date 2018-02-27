<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$syt_sort_href = $_SERVER['SCRIPT_NAME'].'?';
if($ca_id)
    $syt_sort_href .= 'ca_id='.$ca_id;
else if($ev_id)
    $syt_sort_href .= 'ev_id='.$ev_id;
if($skin)
    $syt_sort_href .= '&amp;skin='.$skin;
$syt_sort_href .= '&amp;sort=';

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_CSS_URL.'/style.css">', 0);
?>

<!-- 상품 정렬 선택 시작 { -->
<div class="row">
    <section id="syt_sort" class="col s12">
        <!-- <ul>
            <li><a href="<?php echo $syt_sort_href; ?>it_price&amp;sortodr=asc" class="btn01">낮은가격순</a></li>
            <li><a href="<?php echo $syt_sort_href; ?>it_price&amp;sortodr=desc" class="btn01">높은가격순</a></li>
            <li><a href="<?php echo $syt_sort_href; ?>it_name&amp;sortodr=asc" class="btn01">상품명순</a></li>
            <li><a href="<?php echo $syt_sort_href; ?>it_type1&amp;sortodr=desc" class="btn01">히트상품</a></li>
            <li><a href="<?php echo $syt_sort_href; ?>it_type2&amp;sortodr=desc" class="btn01">추천상품</a></li>
            <li><a href="<?php echo $syt_sort_href; ?>it_type3&amp;sortodr=desc" class="btn01">최신상품</a></li>
            <li><a href="<?php echo $syt_sort_href; ?>it_type4&amp;sortodr=desc" class="btn01">인기상품</a></li>
            <li><a href="<?php echo $syt_sort_href; ?>it_type5&amp;sortodr=desc" class="btn01">할인상품</a></li>
        </ul> -->

        <ul id="ssch_sort" class="tabs">
            <li class="tab col s2"><a href="<?php echo $syt_sort_href; ?>it_sum_qty&amp;sortodr=desc" class="waves-effect waves-light btn grey darken-3">판매많은순</a></li>
            <li class="tab col s2"><a href="<?php echo $syt_sort_href; ?>it_price&amp;sortodr=asc" class="waves-effect waves-light btn grey darken-3">낮은가격순</a></li>
            <li class="tab col s2"><a href="<?php echo $syt_sort_href; ?>it_price&amp;sortodr=desc" class="waves-effect waves-light btn grey darken-3">높은가격순</a></li>
            <li class="tab col s2"><a href="<?php echo $syt_sort_href; ?>it_use_avg&amp;sortodr=desc" class="waves-effect waves-light btn grey darken-3">평점높은순</a></li>
            <li class="tab col s2"><a href="<?php echo $syt_sort_href; ?>it_use_cnt&amp;sortodr=desc" class="waves-effect waves-light btn grey darken-3">후기많은순</a></li>
            <li class="tab col s2"><a href="<?php echo $syt_sort_href; ?>it_update_time&amp;sortodr=desc" class="waves-effect waves-light btn grey darken-3">최근등록순</a></li>
        </ul>
    </section>
</div>
<!-- } 상품 정렬 선택 끝 -->