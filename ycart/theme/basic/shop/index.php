<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

define("_INDEX_", TRUE);

include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

    <!-- 메인이미지 시작 { -->
    <?php echo display_banner('메인', 'mainbanner.10.skin.php'); ?>
    <!-- } 메인이미지 끝 -->

    <div class="container">
        <a href="http://shop.mydepot.kr/ycart/shop/list.php?ca_id=10"><img id="big_banner" src="../img/ban1.jpg" alt=""></a>
        <table id="ad_subject">
            <tbody>
                <tr>
                    <td id="ban1">봄신상 판매</td>
                    <td id="ban2">반팔셔츠 특가전</td>
                    <td id="ban3">넥타이 컬렉션</td>
                    <td id="ban4">청바지 입고</td>
                    <td id="ban5">자켓 빅세일</td>
                    <td id="ban6">퀵 배송</td>
                </tr>
            </tbody>
        </table>
    </div>



    <?php if($default['de_type1_list_use']) { ?>

    <!-- 히트상품 시작 { -->
    <div class="container item_list_section">
        <section>
            <header>
                <h3>
                    <a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=1">히트상품</a>
                </h3>
            </header>
            <?php
        $list = new item_list();
        $list->set_type(1);
        $list->set_view('it_img', true);
        $list->set_view('it_id', true);
        $list->set_view('it_name', true);
        $list->set_view('it_basic', true);
        $list->set_view('it_cust_price', true);
        $list->set_view('it_price', true);
        $list->set_view('it_icon', true);
        $list->set_view('sns', true);
        echo $list->run();
        ?>
        </section>
        <!-- } 히트상품 끝 -->

    </div>
    <?php } ?>

    <?php if($default['de_type2_list_use']) { ?>

    <div class="container item_list_section">
        <!-- 추천상품 시작 { -->
        <section>
            <header>
                <h3>
                    <a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=2">추천상품</a>
                </h3>
            </header>
            <?php
            $list = new item_list();
            $list->set_type(2);
            $list->set_view('it_id', false);
            $list->set_view('it_name', true);
            $list->set_view('it_basic', true);
            $list->set_view('it_cust_price', true);
            $list->set_view('it_price', true);
            $list->set_view('it_icon', true);
            $list->set_view('sns', true);
            echo $list->run();
            ?>
        </section>
        <!-- } 추천상품 끝 -->

    </div>
    <?php } ?>

    <?php if($default['de_type3_list_use']) { ?>
    <div class="container item_list_section">
        <!-- 최신상품 시작 { -->
        <section>
            <header>
                <h3>
                    <a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=3">최신상품</a>
                </h3>
            </header>
            <?php
    $list = new item_list();
    $list->set_type(3);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    echo $list->run();
    ?>
        </section>
        <!-- } 최신상품 끝 -->
    </div>
    <?php } ?>


    <?php if($default['de_type4_list_use']) { ?>
    <div class="container item_list_section">
        <!-- 인기상품 시작 { -->
        <section>
            <header>
                <h3 class="left">
                    <a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=4">인기상품</a>
                </h3>
                <a class="right" href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=4">더보기..</a>
            </header>
            <?php
    $list = new item_list();
    $list->set_type(4);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    echo $list->run();
    ?>
        </section>
        <!-- } 인기상품 끝 -->
    </div>
    <?php } ?>

    <?php if($default['de_type5_list_use']) { ?>
    <div class="container item_list_section">
        <!-- 할인상품 시작 { -->
        <section>
            <header>
                <h3 class="left">
                    <a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=5">할인상품</a>
                </h3>
                <a class="right" href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=5">더보기..</a>
            </header>
            <?php
    $list = new item_list();
    $list->set_type(5);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    echo $list->run();
    ?>
        </section>
        <!-- } 할인상품 끝 -->
    </div>
    <?php } ?>

    <!-- 커뮤니티 최신글 시작 { -->
    <section id="sidx_lat">
        <table>
            <tbody>
                <tr>
                    <td colspan="4" height="250">
                        <?php echo latest('theme/shop_basic', 'notice', 5, 30); ?>
                    </td>
                    <td rowspan="3" width="300" class="center-align">
                        <img src="../img/bankinfo.jpg" alt="">
                    </td>
                    <td rowspan="3">
                        <img src="../img/addinfo.jpg" alt="" usemap="#imgmap2018215113626">
                        <map id="imgmap2018215113626" name="imgmap2018215113626"><area shape="rect" alt="1:1문의" title="" coords="21,208,136,238" href="http://shop.mydepot.kr/ycart/bbs/qalist.php" target="_self" /><area shape="rect" alt="FAQ" title="" coords="19,250,146,285" href="http://shop.mydepot.kr/ycart/bbs/faq.php" target="_self" /><!-- Created by Online Image Map Editor (http://www.maschek.hu/imagemap/index) --></map>
                    </td>
                </tr>
                <tr>
                    <td width="150" height="150">
                        <button class="waves-effect waves-dark btn white">
                            <i class="material-icons">local_printshop</i>
                            <span>FAX</span>
                        </button>
                    </td>
                    <td width="150" height="150">
                        <button class="waves-effect waves-dark btn white">
                            <i class="material-icons">phone</i>
                            <span>가맹모집</span>
                        </button>
                    </td>
                    <td width="150" height="150">
                        <button class="waves-effect waves-dark btn white">
                            <i class="material-icons">photo</i>
                            <span>사진확인</span>
                        </button>
                    </td>
                    <td width="150" height="150">
                        <button class="waves-effect waves-dark btn white">
                            <i class="material-icons">pin_drop</i>
                            <span>오는 길</span>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td width="150" height="150">
                        <button class="waves-effect waves-dark btn white">
                            <i class="material-icons">report</i>
                            <span>주의사항</span>
                        </button>
                    </td>
                    <td width="150" height="150">
                        <button class="waves-effect waves-dark btn white">
                            <i class="material-icons">content_paste</i>
                            <span>계산서 발행</span>
                        </button>
                    </td>
                    <td width="150" height="150">
                        <button class="waves-effect waves-dark btn white">
                            <i class="material-icons">credit_card</i>
                            <span>대량주문</span>
                        </button>
                    </td>
                    <td width="150" height="150">
                        <button class="waves-effect waves-dark btn white">
                            <i class="material-icons">help</i>
                            <span>문의</span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>



    </section>
    <!-- } 커뮤니티 최신글 끝 -->

    <?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
?>