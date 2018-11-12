<?php
/*
 *Template Name:research_centers
 */
?>
<?php get_header(); ?>
<div class="page-academics_1">
    <div class="container">
        <a class="icon_up formobile"href="<?php echo site_url(); ?>/academics" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="left_icon_w"></div></a>
        <div id="ac-container">
            <div class="ac-title_block">
                <div class="subtitled rc-smalltitle">02 研究中心</div>
                <div class="subtitle rc-bigtitle">中心介紹</div>
                <div class="rc-smalltitle formobile">02 研究中心</div>
                <div class="rc-bigtitle formobile">中心介紹</div>
		<div class="ac-line"></div>
            </div>
	    <!--for mobile -->
	    <div class="ac-circle_block formobile">
		<a target="_blank" href="http://cos.nctu.edu.tw/~cis/index.html"><div class="rc-text">前瞻跨領域基礎科學中心</div></a>
		<a target="_blank" href="http://yaucenter.nctu.edu.tw/"><div class="rc-text">丘成桐中心</div></a>
	    </div>
            <!--circle block-->
            <div class="ac-circle_block mobilehidden">
                <div class="ac-big_circle_bg"></div>
                <div class="rc-big_circle"></div>
                <div class="rc-dot1 rc-dot">
                    <div class="subtitled rc-text rc-text1"><a target="_blank" href="http://cos.nctu.edu.tw/~cis/index.html">前瞻跨領域基礎科學中心</a></div>
                </div>
                <div class="rc-dot2 rc-dot">
                    <div class="subtitled rc-text rc-text2"><a target="_blank" href="http://yaucenter.nctu.edu.tw/">丘成桐中心</a></div>
                </div>
            </div>
        </div>

        <!--description block-->
        <div class="rc-descript_block rc-block1">
            <div class="subtitle ac-descript_title ac-title_b">前瞻跨領域基礎科學中心</div>
            <div class="text ac-descript_text">本中心針對前瞻材料、生物分子探測、量子科學及介觀物理等重點方向，同時成立理論計算研究群，積極與實驗相配合。藉堅強的理論及實驗能力，以超快雷射等先進光譜技術及奈米技術為核心，整合物理、化學、材料、生科、奈米方面之人才，組成團隊全力發展，成果斐然，並提昇理學院之研究質量，成果驚人。</div>
        </div>
        <div class="rc-descript_block rc-block2">
            <div class="subtitle ac-descript_title ac-title_b">丘成桐中心</div>
            <div class="text ac-descript_text">丘成桐中心旨在協助本校厚植學術研發能量，培育人才及國際化。具體目標為藉助丘院士在數學及科學的傑出研究貢獻，邀請丘院士共同來推動科技、教育及文化事業。 研究主題： <ul class="rc-list"><li>三維影像研究群</li><li>生醫影像研究群</li><li>幾何與數論研究群</li><li>弦論與廣義相對論研究群</li><li>複雜計算研究群</li></ul></div>
        </div>
    </div>
</div>

<script>
    $(".ac-big_circle_bg").css("background-image","none");
    $(".ac-dot").hide();
    for(i=2;i>0;--i){
        $(".rc-dot"+i).delay((2-i)*200).fadeIn(200,"swing");
    }

    $(document).ready(function(){
        //block1
        $(".rc-dot1").hover(function(){
            //hover in
            //$(".ac-big_circle_bg").css("background-image","url(<?php bloginfo('template_url');?>/image/equipment_03-3.png)");
            $(".ac-big_circle_bg").css("background-image","none");
            $(".rc-big_circle").css("border","dashed 2px #00AAE6");
            $(".rc-text1").fadeIn(500,"swing");
            $(".rc-block1").css("bottom","0px");
        },function(){
            //hover out
            //$(".ac-big_circle_bg").css("background-image","url(<?php bloginfo('template_url');?>/image/equipment_03-1.png)");
            $(".ac-big_circle_bg").css("background-image","none");
            $(".rc-big_circle").css("border","dashed 2px rgba(220,220,220,1)");
            //$(".ac-text1").fadeOut(500,"swing");
            $(".rc-text1").hide();
            $(".rc-block1").css("bottom","-55vmin");
        });
        //block2
        $(".rc-dot2").hover(function(){
            //hover in
            //$(".ac-big_circle_bg").css("background-image","url(<?php bloginfo('template_url');?>/image/equipment_03-3.png)");
            $(".ac-big_circle_bg").css("background-image","none");
            $(".rc-big_circle").css("border","dashed 2px #00AAE6");
            $(".rc-text2").fadeIn(500,"swing");
            $(".rc-block2").css("bottom","0px");
        },function(){
            //hover out
            //$(".ac-big_circle_bg").css("background-image","url(<?php bloginfo('template_url');?>/image/equipment_03-1.png)");
            $(".ac-big_circle_bg").css("background-image","none");
            $(".rc-big_circle").css("border","dashed 2px rgba(220,220,220,1)");
            //$(".ac-text2").fadeOut(500,"swing");
            $(".rc-text2").hide();
            $(".rc-block2").css("bottom","-55vmin");
        });

            $(".nav_menu").on("click",function(){});
    });
</script>
<?php wp_nav_menu (array('theme_location' => 'Menu5','container_class' => 'nav_menu','container_id' => 'nav_menu_2')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
