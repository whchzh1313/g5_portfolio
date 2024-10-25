<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

<div id="footer">
    <p>© 2024. Lee Hwa Min. All rights reserved.</p>
</div>

<?php
include_once(G5_PATH."/tail.sub.php");