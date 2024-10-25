<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<div id="main">
    <div id="section1" class="section">
        
    </div>
    <div id="section2" class="section">
        
    </div>
    <div id="section3" class="section">
        
    </div>
    <div id="section4" class="section">
        
    </div>
</div>

<?php
include_once(G5_PATH.'/tail.php');