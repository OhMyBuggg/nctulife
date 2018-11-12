<?php
/*
 *Template Name:en-national_labs
 */
?>
<?php get_header('en_header'); ?>
<div class="page-national_labs">
    <div class="container">
        <div class="rnl-block">
            <p class="subtitled rh-title1">03 Academic Resources</p>
            <p class="subtitle rh-title2">National Laboratory</p>
            <!--<div class="rh-btn rh-btn_left"></div>
            <div class="rh-btn rh-btn_right"></div>
            <div class="clear_both"></div>
            <hr class="rh-line">-->
        </div>
        <div class="rnl-img_block">
        </div>
        <div class="rnl-item_block">
            <a href="http://www.nsrrc.org.tw/" target="_blank">
            <div class="rnl-item">
                <div class="rnl-item_icon"></div>
                <div class="rnl-item_eng text">National Synchrotron Radiation Research Center</div>
            </div>
            </a>
            <a href="https://www.nchc.org.tw/" target="_blank">
            <div class="rnl-item">
                <div class="rnl-item_icon"></div>
                <div class="rnl-item_eng text">National Center for high-Performance Computing</div>
            </div>
            </a>
            <a href="http://www.ndl.narl.org.tw/about/intro" target="_blank">
            <div class="rnl-item">
                <div class="rnl-item_icon"></div>
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

<?php wp_nav_menu (array('theme_location' => 'Menu9','container_class' => 'nav_menu','container_id' => 'nav_menu_3')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
