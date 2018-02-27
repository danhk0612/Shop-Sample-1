$("#favorite_word li").mouseenter(function() {
  $("#favorite_word li").show();
  $("#favorite_word ul").css("top", "52px");
});

$("#favorite_word li").mouseleave(function() {
  $("#favorite_word li").hide();
  $("#favorite_word li:first-child").show();
  $("#favorite_word ul").css("top", "0px");
});

$("#ad_subject td").mouseenter(function() {
  $ban_id = $(this).attr("id");
  $ban_img = "../img/" + $ban_id + ".jpg";
  switch ($ban_id) {
    case 'ban1':
      $ban_url = "http://shop.mydepot.kr/ycart/shop/list.php?ca_id=10";
      break;
    case 'ban2':
      $ban_url = "http://shop.mydepot.kr/ycart/shop/list.php?ca_id=50";
      break;
    case 'ban3':
      $ban_url = "http://shop.mydepot.kr/ycart/shop/list.php?ca_id=70";
      break;
    case 'ban4':
      $ban_url = "http://shop.mydepot.kr/ycart/shop/list.php?ca_id=60";
      break;
    case 'ban5':
      $ban_url = "http://shop.mydepot.kr/ycart/shop/list.php?ca_id=30";
      break;
    case 'ban6':
      $ban_url =
        "http://shop.mydepot.kr/ycart/bbs/board.php?bo_table=notice&wr_id=7";
      break;
    default:
      break;
  }

  $("#big_banner").attr("src", $ban_img);
  $("#big_banner")
    .parent()
    .attr("href", $ban_url);
});

$("#big_banner").parent().parent().mouseenter(function() {
  clearInterval(playAlert2);
});

$("#big_banner").parent().parent().mouseleave(function() {
  ban_roll();
});

function fav_word_control($num) {
  $("#word"+$num).show().siblings().hide(); 
}

function big_ban_control($num) {
  switch ($num) {
    case 1:
      $ban_url = "http://shop.mydepot.kr/ycart/shop/list.php?ca_id=10";
      $ban_no = "ban1";
      break;
    case 2:
      $ban_url = "http://shop.mydepot.kr/ycart/shop/list.php?ca_id=50";
      $ban_no = "ban2";
      break;
    case 3:
      $ban_url = "http://shop.mydepot.kr/ycart/shop/list.php?ca_id=70";
      $ban_no = "ban3";
      break;
    case 4:
      $ban_url = "http://shop.mydepot.kr/ycart/shop/list.php?ca_id=60";
      $ban_no = "ban4";
      break;
    case 5:
      $ban_url = "http://shop.mydepot.kr/ycart/shop/list.php?ca_id=30";
      $ban_no = "ban5";
      break;
    case 6:
      $ban_url =
        "http://shop.mydepot.kr/ycart/bbs/board.php?bo_table=notice&wr_id=7";
      $ban_no = "ban6";
      break;
    default:
      break;
  }
  $ban_img_url = "../img/" + $ban_no + ".jpg";
  $("#big_banner").attr("src", $ban_img_url);
  $("#big_banner")
    .parent()
    .attr("href", $ban_url);
}

let $word_num = 1;
playAlert = setInterval(function() {
  $word_num++;
  if($word_num>6) $word_num = 1;
  fav_word_control($word_num);
}, 2000);

function ban_roll() {
  let $ban_num = 1;
  playAlert2 = setInterval(function() {
    $ban_num++;
    if($ban_num>6) $ban_num = 1;
    big_ban_control($ban_num);
  }, 3000);
}

$(document).ready(function() {
  ban_roll();
  $("#favorite").on("click", function(e) {
    let bookmarkURL = window.location.href;
    let bookmarkTitle = document.title;
    let triggerDefault = false;

    if (window.sidebar && window.sidebar.addPanel) {
      // Firefox version &lt; 23
      window.sidebar.addPanel(bookmarkTitle, bookmarkURL, "");
    } else if (
      (window.sidebar &&
        navigator.userAgent.toLowerCase().indexOf("firefox") < -1) ||
      (window.opera && window.print)
    ) {
      // Firefox version &gt;= 23 and Opera Hotlist
      let $this = $(this);
      $this.attr("href", bookmarkURL);
      $this.attr("title", bookmarkTitle);
      $this.attr("rel", "sidebar");
      $this.off(e);
      triggerDefault = true;
    } else if (window.external && "AddFavorite" in window.external) {
      // IE Favorite
      window.external.AddFavorite(bookmarkURL, bookmarkTitle);
    } else {
      // WebKit - Safari/Chrome
      alert(
        (navigator.userAgent.toLowerCase().indexOf("mac") != -1
          ? "Cmd"
          : "Ctrl") + "+D 를 이용해 이 페이지를 즐겨찾기에 추가할 수 있습니다."
      );
    }

    return triggerDefault;
  });
  let hover_banner_width = $("#stv_list").width() + 10;
  $("#stv_list").css("left", hover_banner_width);
});
