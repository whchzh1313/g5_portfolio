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
        <div id="titleSection" class="section blue_gradiant_bg">
            <p>이화민<br />웹 개발자 포트폴리오 _</p>
        </div>
        <div id="aboutMe" class="section blue_bg">
            <h2 class="title_circle blue_circle">About me</h2>
            <div class="flex_box">
                <div class="flex_l">
                    <div id="ProfileImageContainer">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="flex_r">
                    <div class="flex_box">
                        <h3>이화민</h3>
                        <p>1997.07.15</p>
                    </div>
                    <p class="font_gray">Web Developer</p>
                    <p>새로운 환경과 변화에 빠르게 적응하며, <br />
                    끊임없이 성장하고 도전을 즐기는 웹 개발자입니다.</p>
                </div>
            </div>
            <div id="skill" class="inner_section">
                <h3>Skill</h3>
                <div id="skillWrap" class="flex_box flex_wrap">
                    <div class="skills">
                        <h4>Web</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip">HTML</li>
                            <li class="chip">CSS</li>
                            <li class="chip">Jquery</li>
                            <li class="chip">Mysql</li>
                            <li class="chip">Gnuboard</li>
                        </ul>
                    </div>
                    <div class="skills">
                        <h4>Design & Prototyping</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip">Figma</li>
                            <li class="chip">Photoshop</li>
                            <li class="chip">Illustrator</li>
                        </ul>
                    </div>
                    <div class="skills">
                        <h4>Tool</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip">VSCode</li>
                            <li class="chip">Android Studio</li>
                        </ul>
                    </div>
                    <div class="skills">
                        <h4>Version Control & Collaboration</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip">Notion</li>
                            <li class="chip">Slack</li>
                        </ul>
                    </div>
                    <div class="skills">
                        <h4>MobileApp</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip">Kotlin</li>
                            <li class="chip">Android Studio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="project" class="section blue_bg">
            <h2 class="title_circle white_circle">Project</h2>
        </div>
    </div>

<?php
include_once(G5_PATH.'/tail.php');