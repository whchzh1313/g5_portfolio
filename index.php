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
            <div class="section wave_text" data-aos="fade">
                <p class="words wave" aria-hidden="true">이화민<br />웹 개발자 포트폴리오</p>
                <p class="words">이화민<br />웹 개발자 포트폴리오</p>
            </div>
        </div>
        <div id="aboutMe" class="section">
            <h2 class="title_circle blue_circle"><span data-aos="fade-up">About me</span></h2>
            <div class="flex_box profile_wrap">
                <div class="flex_l">
                    <div id="ProfileImageContainer">
                        <img src="/images/profile_image.png" alt="이화민">
                    </div>
                </div>
                <div class="flex_r">
                    <div class="flex_box" data-aos="fade-up">
                        <h3>이화민</h3>
                        <p>1997.07.15</p>
                    </div>
                    <p class="font_gray" data-aos="fade-up">Web Developer</p>
                    <p data-aos="fade-up">새로운 환경과 변화에 빠르게 적응하며, <br />
                    끊임없이 성장하고 도전을 즐기는 웹 개발자입니다.</p>
                </div>
            </div>
            <div id="skill" class="inner_section">
                <h3 data-aos="fade-up">Skill</h3>
                <div id="skillWrap" class="flex_box flex_wrap">
                    <div class="skills web" data-aos="fade-up" data-aos-delay="0">
                        <h4>Web</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip radius_100">HTML</li>
                            <li class="chip radius_100">CSS</li>
                            <li class="chip radius_100">Jquery</li>
                            <li class="chip radius_100">Mysql</li>
                            <li class="chip radius_100">Gnuboard</li>
                        </ul>
                    </div>
                    <div class="skills design" data-aos="fade-up" data-aos-delay="125">
                        <h4>Design & Prototyping</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip radius_100">Figma</li>
                            <li class="chip radius_100">Photoshop</li>
                            <li class="chip radius_100">Illustrator</li>
                        </ul>
                    </div>
                    <div class="skills tool" data-aos="fade-up" data-aos-delay="250">
                        <h4>Tool</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip radius_100">VSCode</li>
                            <li class="chip radius_100">Android Studio</li>
                        </ul>
                    </div>
                    <div class="skills version" data-aos="fade-up" data-aos-delay="375">
                        <h4>Version Control & Collaboration</h4>
                        <ul class="flex_box skill_chips">
                            <li class="chip radius_100">Notion</li>
                            <li class="chip radius_100">Slack</li>
                        </ul>
                    </div>
                    <div class="skills mobile_app" data-aos="fade-up" data-aos-delay="500">
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
                <h2 class="title_circle white_circle"><span data-aos="fade-up">Project</span></h2>
                <div id="project_slk">
                    <div class="project_detail">
                        <div class="detail_slk">
                            <div class="project_capture"><img src="/images/projects/kcell_1.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/kcell_2.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/kcell_3.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/kcell_4.png" alt=""></div>
                        </div>
                        <div class="detail_desc"></div>
                    </div>
                    <div class="project_detail">
                        <div class="detail_slk">
                            <div class="project_capture"><img src="/images/projects/mycell_1.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/mycell_2.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/mycell_3.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/mycell_4.png" alt=""></div>
                        </div>
                        <div class="detail_desc"></div>
                    </div>
                    <div class="project_detail">
                        <div class="detail_slk">
                            <div class="project_capture"><img src="/images/projects/angelot_1.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/angelot_2.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/angelot_3.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/angelot_4.png" alt=""></div>
                        </div>
                        <div class="detail_desc"></div>
                    </div>
                    <div class="project_detail">
                        <div class="detail_slk">
                            <div class="project_capture"><img src="/images/projects/enf_1.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/enf_2.png" alt=""></div>
                        </div>
                        <div class="detail_desc"></div>
                    </div>
                    <div class="project_detail">
                        <div class="detail_slk">
                            <div class="project_capture"><img src="/images/projects/dobongye_1.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/dobongye_2.png" alt=""></div>
                        </div>
                        <div class="detail_desc"></div>
                    </div>
                    <div class="project_detail">
                        <div class="detail_slk">
                            <div class="project_capture"><img src="/images/projects/cowell_1.png" alt=""></div>
                        </div>
                        <div class="detail_desc"></div>
                    </div>
                    <div class="project_detail">
                        <div class="detail_slk">
                            <div class="project_capture"><img src="/images/projects/eun_u_1.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/eun_u_2.png" alt=""></div>
                        </div>
                        <div class="detail_desc"></div>
                    </div>
                    <div class="project_detail">
                        <div class="detail_slk">
                            <div class="project_capture"><img src="/images/projects/iconiq_1.png" alt=""></div>
                        </div>
                        <div class="detail_desc"></div>
                    </div>
                    <div class="project_detail">
                        <div class="detail_slk">
                            <div class="project_capture"><img src="/images/projects/m01_1.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/m01_2.png" alt=""></div>
                        </div>
                        <div class="detail_desc"></div>
                    </div>
                    <div class="project_detail">
                        <div class="detail_slk">
                            <div class="project_capture"><img src="/images/projects/rejuent_1.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/rejuent_2.png" alt=""></div>
                            <div class="project_capture"><img src="/images/projects/rejuent_3.png" alt=""></div>
                        </div>
                        <div class="detail_desc"></div>
                    </div>
                </div>
                <div id="project_slk_nav">
                    <div class="project_logo"><img src="/images/projects/project_kcell.png" alt=""></div>
                    <div class="project_logo"><img src="/images/projects/project_mycell.png" alt=""></div>
                    <div class="project_logo"><img src="/images/projects/project_angelot.png" alt=""></div>
                    <div class="project_logo"><img src="/images/projects/project_enf.png" alt=""></div>
                    <div class="project_logo"><img src="/images/projects/project_dobongye.png" alt=""></div>
                    <div class="project_logo"><img src="/images/projects/project_cowell.png" alt=""></div>
                    <div class="project_logo"><img src="/images/projects/project_eun_u.png" alt=""></div>
                    <div class="project_logo"><img src="/images/projects/project_iconiq.png" alt=""></div>
                    <div class="project_logo"><img src="/images/projects/project_m01.png" alt=""></div>
                    <div class="project_logo"><img src="/images/projects/project_rejuent.png" alt=""></div>
                </div>
                <div class="#project_slk_arrow" value="slickNext">
                    <img src="/images/arr_next.png" alt="">
                </div>
                <script>
			        $('.project_detail.slick-current .detail_slk').slick({
				        slidesToShow: 1,
				        slidesToScroll: 1,
				        cssEase: 'cubic-bezier(0.7,0,0.2,1)',
				        infinite: true,
				        dots: true,
				        arrows: true,
				        speed: 600,
				        autoplay: true,
				        autoplaySpeed: 4000,
				        focusOnSelect: true,
			        });
			        $('#project_slk').slick({
				        fade: true,
				        cssEase: 'cubic-bezier(0.7,0,0.2,1)',
				        infinite: true,
				        dots: false,
				        arrows: false,
				        speed: 600,
				        autoplay: true,
                        swipeToSlide: false,
				        autoplaySpeed: 4000,
				        asNavFor: '#project_slk_nav',
			        });
			        $('#project_slk_nav').slick({
				        slidesToShow: 4,
				        slidesToScroll: 1,
				        cssEase: 'cubic-bezier(0.7,0,0.2,1)',
				        infinite: true,
				        dots: false,
				        arrows: false,
				        speed: 600,
				        autoplay: true,
				        autoplaySpeed: 4000,
				        focusOnSelect: true,
				        asNavFor: '#project_slk'
			        });
			        $('#project_slk_arrow').click(function(){
				        $('.project_detail.slick-current .detail_slk').slick($(this).val());
			        });
                    $('#project_slk').on('afterChange', function(event, slick, currentSlide, nextSlide){
                        ('.project_detail.slick-current .detail_slk').slick('unslick').slick();
                    });
		        </script>
            </div>
        </div>
    </div>
<?php
include_once(G5_PATH.'/tail.php');