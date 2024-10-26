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
        <div id="titleSection" class="blue_gradiant_bg center_y_title">
            <div class="section wave_text">
                <p class="words wave" aria-hidden="true">이화민<br />웹 개발자 포트폴리오 _</p>
                <p class="words">이화민<br />웹 개발자 포트폴리오 _</p>
            </div>
        </div>
        <div id="aboutMe" class="section">
            <h2 class="title_circle blue_circle"><span>About me</span></h2>
            <div class="flex_box profile_wrap">
                <div class="flex_l">
                    <div id="ProfileImageContainer">
                        <img src="/images/profile_image.png" alt="이화민">
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
                    <div class="skills web">
                        <h4>Web</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip radius_100">HTML</li>
                            <li class="chip radius_100">CSS</li>
                            <li class="chip radius_100">Jquery</li>
                            <li class="chip radius_100">Mysql</li>
                            <li class="chip radius_100">Gnuboard</li>
                        </ul>
                    </div>
                    <div class="skills design">
                        <h4>Design & Prototyping</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip radius_100">Figma</li>
                            <li class="chip radius_100">Photoshop</li>
                            <li class="chip radius_100">Illustrator</li>
                        </ul>
                    </div>
                    <div class="skills tool">
                        <h4>Tool</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip radius_100">VSCode</li>
                            <li class="chip radius_100">Android Studio</li>
                        </ul>
                    </div>
                    <div class="skills version">
                        <h4>Version Control & Collaboration</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip radius_100">Notion</li>
                            <li class="chip radius_100">Slack</li>
                        </ul>
                    </div>
                    <div class="skills mobile_app">
                        <h4>MobileApp</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip radius_100">Kotlin</li>
                            <li class="chip radius_100">Android Studio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="project" class="blue_bg">
            <div class="section">
                <h2 class="title_circle white_circle"><span>Project</span></h2>
            </div>
        </div>
    </div>

<?php
include_once(G5_PATH.'/tail.php');