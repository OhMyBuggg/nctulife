<?php
/*
 * Template Name: videolist
 */
    if (qtranxf_getLanguage() == 'en')
        get_header('en_header');
    else
        get_header(); 


    $i=0;
    $args = array('category_name' => 'videos');
    $the_query = new WP_Query($args);

?>
<div class="vl-page">
    <div class="container">
<?php
    if($the_query->have_posts()):
        while($the_query->have_posts()):
            $the_query->the_post();
                if($i == 0):
?>
        <div class="vl-header-background" style="background-image: url(https://img.youtube.com/vi/<?php the_field('YoutubeID');?>/maxresdefault.jpg);">
        </div>
        <div class="vl-header">
                <div class="subtitled vl-littleTitle">04  影片專區</div>
                <div class="text vl-littleTitle"><?php the_time('Y.m.d'); ?></div>
                <div class="subtitle vl-title_block"><?php the_title(); ?></div>
                <a href="<?php the_permalink(); ?>"><div class="vl-button text">觀看影片</div></a>
        </div>
        <div class="vl-body">
<?php           else:?>
            <div class="vl-item">
                <div class="vl-item-photo" style="background-image: url(https://img.youtube.com/vi/<?php the_field('YoutubeID');?>/hqdefault.jpg);"></div>
                <div class="vl-item-description">
                    <a href="<?php the_permalink(); ?>"><div class="vl-item-icon"></div></a>
                    <div class="text vl-item-text"><?php the_title(); ?></div>
                    <div class="text vl-item-text"><?php the_time('Y.m.d'); ?></div>
                </div>
            </div>
<?php           endif;
        $i = $i + 1;
    endwhile;
?>
        </div>
<?php else:?>
        <div class="vl-header">
                <div class="subtitled vl-littleTitle">02  影片專區</div>
        </div>
        <div class="vl-body">
                <div class="hp-news_item_title">此頁沒有文章喔！</div>
        </div>
<?php 
    endif;
    wp_reset_postdata(); 
?>
    </div>
</div>
<script>

    $(document).ready(function(){
        $('.vl-body').perfectScrollbar();
    });
/*for mobile*/


</script>
<?php wp_nav_menu (array('theme_location' => 'Menu6','container_class' => 'nav_menu','container_id' => 'nav_menu_4')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
