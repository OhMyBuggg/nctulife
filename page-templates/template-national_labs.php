<?php
/*
 *Template Name:national_labs
 */
?>
<?php get_header(); ?>
<div class="page-national_labs">
    <div class="container">
        <div class="rnl-block">
            <p class="subtitled mp-title1">03 研究資源</p>
            <p class="subtitle mp-title2">周邊國家實驗室</p>
            <!--<div class="rh-btn rh-btn_left"></div>
            <div class="rh-btn rh-btn_right"></div>
            <div class="clear_both"></div>
            <hr class="rh-line">-->
        </div>
        <div class="rnl-img_block">
        </div>
        <div class="rnl-item_block">
            <a href="http://www.nsrrc.org.tw/">
            <div class="rnl-item">
                <div class="rnl-item_icon"></div>
                <div class="rnl-item_cht subtitled">國家同步輻射研究中心</div>
                <div class="rnl-item_eng text">National Synchrotron Radiation Research Center</div>
            </div>
            </a>
            <a href="https://www.nchc.org.tw/">
            <div class="rnl-item">
                <div class="rnl-item_icon"></div>
                <div class="rnl-item_cht subtitled">國家高速網路與計算中心</div>
                <div class="rnl-item_eng text">National Center for high-Performance Computing</div>
            </div>
            </a>
            <a href="http://www.ndl.narl.org.tw/about/intro">
            <div class="rnl-item">
                <div class="rnl-item_icon"></div>
                <div class="rnl-item_cht subtitled">國家奈米元件實驗室</div>
                <div class="rnl-item_eng text">National Nano Device Laboratories</div>
            </div>
            </a>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
    });
</script>

<?php wp_nav_menu (array('theme_location' => 'Menu4','container_class' => 'nav_menu','container_id' => 'nav_menu_3')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
