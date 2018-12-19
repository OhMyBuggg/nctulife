<?php
/*
 * Template Name: academics
 */
    
        get_header();
        $cat_name = 'news';
        $page_title='最新消息';
        $n=1;

?>
<div class="nl-page">
    <div class="container">
        <div class="nl-container">
            <div class="mobile-nl-header hp-newsheader">
                <div class="intro-bigTitle_1"><?php echo $page_title;?></div>
            </div>
                            <?php
                            $i=0;
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $args = array(
                            'category_name' => $cat_name,
                            'posts_per_page' => 3,
                            'paged' => $paged
                            );
                            $the_query = new WP_Query($args);
                            //echo $the_query->max_num_pages;
                            if($the_query->have_posts()):
                                while($the_query->have_posts()):
                                    $the_query->the_post();
                                    if($i % 4 == 0):
                            ?>
                            <?php endif; ?>
            <div class="nl-list_item">
                            <div class="nl-news_item_date"><?php the_time('Y.m.d'); ?></div>
                            <br>
                            <div class="dash"></div>
                            <a class="nl-news_item_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <div class="clear_both"></div>
            </div>
                            <?php
                                    $i = $i + 1;
                                endwhile;
                            else:?>
            <div class="nl-list_item">
                                <div class="hp-news_item_title">No post ~~</div>
            </div>
                            <?php
                            endif;
                                    //$current_page = get_query_var( 'paged' );
                                    //previous_posts_link( 'Older Posts' );
                                    //next_posts_link( 'Newer Posts', $the_query->max_num_pages );
                            ?>
        </div>
        <div class="newslist_nav">
            <a href="<?php echo site_url()."/${cat_name}/page/1"; ?>"><div class="nl-first_page"></div></a>
                <?php if( $paged == 1 ) :?>
            <a href="<?php echo site_url()."/${cat_name}/page/1"; ?>"><div class="nl-prev_page"></div></a>
                <?php else: ?>
            <a href="<?php echo site_url()."/${cat_name}/page/".($paged-1); ?>"><div class="nl-prev_page"></div></a>
                <?php endif; ?>
            <div class="nl-page_num"><?php echo $paged; ?></div>
            <hr class="nl-vertical_line">
            <div class="nl-page_max_num"><?php echo $the_query->max_num_pages ?></div>
                <?php if( $paged == $the_query->max_num_pages ) :?>
            <a href="<?php echo site_url()."/${cat_name}/page/".($the_query->max_num_pages); ?>"><div class="nl-next_page"></div></a>
                <?php else: ?>
            <a href="<?php echo site_url()."/${cat_name}/page/".($paged+1); ?>"><div class="nl-next_page"></div></a>
                <?php endif; ?>
            <a href="<?php echo site_url()."/${cat_name}/page/".($the_query->max_num_pages); ?>"><div class="nl-last_page"></div></a>
                <input type="text" id="jump_to" name="jump_to" max="<?php echo $the_query->max_num_pages ?>">
            <a href="#" class="nl-go"></a>
        </div>
                            <?php  wp_reset_postdata(); ?>
    </div>
</div>
<script>
/*
    $(document).ready(function(){
    $('.nl-container').perfectScrollbar();
    });
/*for mobile*/


</script>
<?php wp_nav_menu (array('theme_location' => 'Menu1','container_class' => 'nav_menu','container_id'=>'nav_menu_'.$n)); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
