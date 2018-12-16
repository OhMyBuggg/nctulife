<?php
/*
 * Template Name: academics
 */
?>
<?php get_header(); ?>
<div class="hp">
    <div class="hp-nav">
        <ul>
            <li style="background-color:#646464"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            </div>
        </ul>
    </div>
    <div class="hp-p01_next hp-p01_1" style="display:none;"></div>
    <div class="hp-p01 hp-p01_0">
        <div class="language-opt">
            <div class="lang-left lang-choose">
                中文
            </div>
            <a href="<?php echo site_url(); ?>/en-homepage/?lang=en">
        <!--<a href="http://188.166.179.62/homepage">-->
        <div class="lang-right lang-normal">
                English
            </div>
        </a>
        </div>
    </div>
    <div class="hp-p02">
    <div class="bgcontainer"></div>
        <div class="container" style="overflow-y: hidden">
        <div class="hp-container">
                    <div class="hp-news hp-news0">  news1 
            <div class="icon_down"><div class="right_icon"></div></div>
                        <div class="hp-newsheader">
                            <div id="hp-news-icon1" class="hp-news-icon"></div>
                            <div class="hp-newstitle">最新消息</div>
                            <a href="<?php bloginfo('template_url')?>/news"><div class="hp-moreinfo"></div></a>
                            <div class="hp-nextnews"></div>
                        </div>
                        <div class="hp-newsbody">
                            <?php
                            $is_multiple=False;
                            $args = array(
                            'category_name' => 'news',
                            'posts_per_page' => 4
                            );
                            $the_query = new WP_Query($args);
                            if($the_query->have_posts()):
                                while($the_query->have_posts()):
                                    $the_query->the_post();
                                    if($is_multiple):
                            ?>
                                <hr class="news_line">
                            <?php endif; ?>
                            <div class="hp-news_item_date"><?php the_time('Y.m.j'); ?></div>
                            <a class="hp-news_item_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <hr class="news_line">
                <?php
                                    $is_multiple=True;
                                endwhile;
                            else:?>
                                <div class="hp-news_item_title">還沒發佈新文章喔！</div>
                            <?php
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="hp-news hp-news1">  news2 
                        <div class="icon_up"><div class="left_icon"></div></div>
                        <div class="icon_down"><div class="right_icon"></div></div>
                        <div class="hp-newsheader">
                            <div id="hp-news-icon2" class="hp-news-icon"></div>
                            <div class="hp-newstitle">師生榮譽</div>
                            <a href="<?php bloginfo('template_url')?>/honor"><div class="hp-moreinfo"></div></a>
                            <div class="hp-nextnews"></div>
                        </div>
                        <div class="hp-newsbody">
                            <?php
                            $is_multiple=False;
                            $args = array(
                            'category_name' => 'honor',
                            'posts_per_page' => 4
                        );
                            /*$args = array(
                                'post_type' => 'news_events',
                                'tax_query' => [
                                    'taxonomy' => 'cat_news_events',
                                    'field' => 'slug',
                                    'terms' => 'awards_honors'
                                ]
                            );*/
                            $the_query = new WP_Query($args);
                            if($the_query->have_posts()):
                                while($the_query->have_posts()):
                                    $the_query->the_post();
                                    if($is_multiple):
                            ?>
                                <hr class="news_line">
                            <?php endif; ?>
                            <div class="hp-news_item_date"><?php the_time('Y.m.j'); ?></div>
                            <a class="hp-news_item_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <hr class="news_line">
                            <?php
                                    $is_multiple=True;
                                endwhile;
                            else:?>
                                <div class="hp-news_item_title">還沒發佈新文章喔！</div>
                            <?php
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="hp-news hp-news2"> news3 
                        <div class="icon_up"><div class="left_icon"></div></div>
                        <div class="icon_down"><div class="right_icon"></div></div>
                        <div class="hp-newsheader">
                            <div id="hp-news-icon3" class="hp-news-icon"></div>
                            <div class="hp-newstitle">學術活動</div>
                            <a href="<?php bloginfo('template_url')?>/activity"><div class="hp-moreinfo"></div></a>
                            <div class="hp-nextnews"></div>
                        </div>
                        <div class="hp-newsbody">
                            <?php
                            $is_multiple=False;
                            $args = array(
                            'category_name' => 'activity',
                            'posts_per_page' => 4
                            );
                            $the_query = new WP_Query($args);
                            if($the_query->have_posts()):
                                while($the_query->have_posts()):
                                    $the_query->the_post();
                                    if($is_multiple):
                            ?>
                                <hr class="news_line">
                            <?php endif; ?>
                            <div class="hp-news_item_date"><?php the_time('Y.m.j'); ?></div>
                            <a class="hp-news_item_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <hr class="news_line">
                            <?php
                                    $is_multiple=True;
                                endwhile;
                            else:?>
                                <div class="hp-news_item_title">還沒發佈新文章喔！</div>
                            <?php
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="hp-news hp-news3">  news4 
                        <div class="icon_up"><div class="left_icon"></div></div>    
                        <div class="hp-newsheader">
                            <div id="hp-news-icon4" class="hp-news-icon"></div>
                            <div class="hp-newstitle">人文科普</div>
                            <a href="<?php bloginfo('template_url')?>/humanities_and_social_sciences"><div class="hp-moreinfo"></div></a>
                <div class="hp-nextnews"></div>
                        </div>
                        <div class="hp-newsbody">
                            <?php
                            $is_multiple=False;
                            $args = array(
                            'category_name' => 'humanities_and_social_sciences',
                            'posts_per_page' => 4
                            );
                            $the_query = new WP_Query($args);
                            if($the_query->have_posts()):
                                while($the_query->have_posts()):
                                    $the_query->the_post();
                                    if($is_multiple):
                            ?>
                                <hr class="news_line">
                            <?php endif; ?>
                            <div class="hp-news_item_date"><?php the_time('Y.m.j'); ?></div>
                            <a class="hp-news_item_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <hr class="news_line">
                            <?php
                                    $is_multiple=True;
                                endwhile;
                            else:?>
                                <div class="hp-news_item_title">還沒發佈新文章喔！</div>
                            <?php
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
            </div>
            </div>

            <div class="mobile-foot">
                <div class="foot-top">
                    <p class="foot-font-top formobile">TEL│886-3-572-7077</p>
                    <p class="foot-font-top formobile">FAX│886-3-571-9507</p>
                    <p class="foot-font-top formobile">E-MAIL│science@cc.nctu.edu.tw</p>
                </div>
                <div class="foot-line"></div>
                <div class="foot-bottom">
        <p class="foot-font-bottom formobile">300 新竹市東區大學路1001號基礎科學教學研究大樓一樓101室</p>
        </div>
            </div>

        </div>
    </div>-->
    <div class="hp-p03">
        <div class="container">
            <div id="hp-field-pic1" class="hp-field-before"></div>
            <div id="hp-field-pic2" class="hp-field-before"></div>
            <div id="hp-field-pic3" class="hp-field-before"></div>
            <a href="<?php echo site_url(); ?>/research_highlights#pyhsics">
                <div id="hp-field-link1" class="hp-field-link-before">
                    <div id="hp-field-icon1" class="hp-field-link-before"></div>
                    <div id="hp-field-font1" class="hp-field-link-before">物理領域研究</div>
                </div>
            </a>
            <a href="<?php echo site_url(); ?>/research_highlights#mathmetics">
                <div id="hp-field-link2" class="hp-field-link-before">
                    <div id="hp-field-icon2" class="hp-field-link-before"></div>
                    <div id="hp-field-font2" class="hp-field-link-before">數統領域研究</div>
                </div>
            </a>
            <a href="<?php echo site_url(); ?>/research_highlights#chemistry">
                <div id="hp-field-link3" class="hp-field-link-before">
                    <div id="hp-field-icon3" class="hp-field-link-before"></div>
                    <div id="hp-field-font3" class="hp-field-link-before">化學領域研究</div>
                </div>
            </a>
        </div>
    </div>-->
    <div class="hp-p04">
        <div class="container">
            <div id="hp-gallery">
                <div class="hp-img_wrapper">
                    <div class="hp-img" style="background-image:url(<?php bloginfo('template_url')?>/image/photo_01.jpg);">
                        <div class="hp-img_mask"></div>
                    </div>
                </div>
                <div class="hp-img_wrapper">
                    <div class="hp-img" style="background-image:url(<?php bloginfo('template_url')?>/image/photo_02.jpg);">
                        <div class="hp-img_mask"></div>
                    </div>
                </div>
                <div class="hp-img_wrapper">
                    <div class="hp-img" style="background-image:url(<?php bloginfo('template_url')?>/image/photo_03.jpg);">
                        <div class="hp-img_mask"></div>
                    </div>
                </div>
                <div class="hp-img_wrapper">
                    <div class="hp-img" style="background-image:url(<?php bloginfo('template_url')?>/image/photo_04.jpg);">
                        <div class="hp-img_mask"></div>
                    </div>
                </div>
                <div class="hp-img_wrapper_wide">
                    <div class="hp-img" style="background-image:url(<?php bloginfo('template_url')?>/image/photo_05.jpg);">
                        <div class="hp-img_mask"></div>
                    </div>
                </div>
                <a href="<?php echo site_url(); ?>/gallery_list">
                    <div id="hp-gallery-link" class="hp-gallery-link-before">
                        <div id="hp-gallery-icon" class="hp-gallery-link-before"></div>
                        <div id="hp-gallery-font" class="hp-gallery-link-before">師生動態</div>
                    </div>
                </a>
            </div>
        </div>
    </div>-->
    <div class="hp-p05">
        <div class="container">
            <div id="p5-left"></div>
            <div id="p5-right"></div>
            <a href="<?php echo site_url(); ?>/admissions">
                <div id="p5-left-button">高中生專區</div>
            </a>
            <a href="<?php echo site_url(); ?>/international_admissions">
                <div id="p5-right-button">國際生專區</div>
            </a>
            <div id="p5-announce-block">
                <div id="copy-right-title">著作權聲明</div>
                <div id="copy-right-text"> 1.交通大學理學院網站(以下簡稱本網站)上刊載之所有內容，除著作權法規定不得為著作權之標的(如法律、命令、公務員撰擬之講稿、新聞稿等--請參考著作權法第9條規定)外，其他包括文字敘述、攝影、圖片、錄音、影像及其他資訊，均受著作權法保護。<br>2.本網站所提供相關連結網站之網頁或資料，均為被連結網站所提供，相關權利為該等網站或合法權利人所有，本網站不擔保其正確性、即時性或完整性。</div>
            </div>
            <div id="foot">
                <div id="foot-left">
                    <p id="foot-font-1">國立交通大學</p>
                    <p id="foot-font-2">理學院</p>
                    <p id="foot-font-3">The College of Science</p>
                </div>
                <div id="foot-center">
                    <div class="foot-font-4"><img class="ft-icon" src="<?php bloginfo('template_url')?>/image/icon/icon_info_01.svg"> 886-3-572-7077</div>
                    <div class="foot-font-4"><img class="ft-icon" src="<?php bloginfo('template_url')?>/image/icon/icon_info_02.svg"> 886-3-571-9507</div>
                    <div class="foot-font-4"><img class="ft-icon" src="<?php bloginfo('template_url')?>/image/icon/icon_info_03.svg"> science@cc.nctu.edu.tw</div>
                    <div class="foot-font-4"><img class="ft-icon" src="<?php bloginfo('template_url')?>/image/icon/icon_info_04.svg"> 300 新竹市東區大學路1001號基礎科學教學研究大樓101室</div>
                    <hr class="ft-hr"/>
                    <div class="foot-font-4 foot-bottom" style="float:left;"> <a href="http://www.nctu.edu.tw/">交通大學</a> | <a target="_blank" href="<?php bloginfo('template_url');?>/files/site_map.jpg">網頁導覽</a> | <a href="http://cos.nctu.edu.tw/"> 舊版網頁</a> | <a target=_blank href="<?php bloginfo('template_url')?>/files/Web_Design_Guideline.pdf">設計規範</a> | <a id="hp-announce">著作權聲明</a> 
                    <form class="foot-searchbox" action="<?php echo site_url();?>/search/?lang=zh">
                        <input type="hidden" name="cx" value="016446745100244550116:cg7peocn4iy" />
                        <input type="hidden" name="cof" value="FORID:11" />
                        <input type="hidden" name="ie" value="UTF-8" />
                        <input type="text" name="q" placeholder="站內搜尋">
                        <input type="submit" value=" ">
                    </form>
                    </div>
                </div>
                <div id="foot-right">
                    <div >
                        <img class="ft-link-icon" src="<?php bloginfo('template_url')?>/image/icon/FB_icon.png" alt="Facebook link">
                    </div>
                    <div  style="margin-top:1vh">
                        <img class="ft-link-icon" src="<?php bloginfo('template_url')?>/image/icon/YT_icon.png" alt="YouTube link">
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</div>
<script>
    var now_bg = 0;
    var frequency = 5000;
    var now_news = 0;
    
    function showNext(){
        old_bg = now_bg;
        now_bg = (now_bg+1)%9;
        next_bg = (now_bg+1)%9;
        $(".hp-p01").addClass("hp-p01_"+now_bg).removeClass("hp-p01_"+old_bg);
        $(".hp-p01_next").addClass("hp-p01_"+next_bg).removeClass("hp-p01_"+now_bg);
        timer = setTimeout(showNext, frequency);
    }
    
    $( document ).ready(function(){
    $('.hp-newsbody').perfectScrollbar();
        timer = setTimeout(showNext, frequency);
        $(".hp-news0").show();
    });

    $(".hp-nextnews").click(function(){
        $(".hp-news"+now_news).fadeOut(1000);
        now_news = (now_news + 1)%4;
        $(".hp-news"+now_news).fadeIn(1000);
        console.log(screen.width + "/" + screen.height);
    });


    $(".icon_down").click(function(){
        $(".hp-news"+now_news).fadeOut(1000);
        now_news = (now_news + 1)%4;
        $(".hp-news"+now_news).fadeIn(1500);
        console.log(screen.width + "/" + screen.height);
    });
    $(".icon_up").click(function(){
        $(".hp-news"+now_news).fadeOut(1000);
        now_news = (now_news + 3)%4;
        $(".hp-news"+now_news).fadeIn(1500);
        console.log(screen.width + "/" + screen.height);
    });
    $("#hp-announce").hover(function(){
        $("#p5-announce-block").fadeIn(500);
    },function(){
        $("#p5-announce-block").fadeOut(500);
    });

</script>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
