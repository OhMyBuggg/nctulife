<?php
/*
 * Template Name: en-news
 */
    
        get_header('en_header');
        $cat_name = 'news';
        $page_title='Latest News';
        $n=1;

?>
<div class="nl-page">
    <div class="container">
            <div class="mobile-nl-header hp-newsheader">
                <div class="intro-bigTitle_1"><?php echo $page_title;?></div>
            </div>
        <div class="nl-container">
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
                            ?>
                            
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

        <!--下面頁數-->
        <div class="newslist_nav">
            
            <!--回到第一頁-->
            <a href="<?php echo site_url()."/${cat_name}/page/1"; ?>"><div class="nl-first_page"></div></a>
                
                <!--上一頁如果已在第一頁就不動-->
                <?php if( $paged == 1 ) :?>
            
            <a href="<?php echo site_url()."/${cat_name}/page/1"; ?>"><div class="nl-prev_page"></div></a>
                
                <?php else: ?>
            
            <a href="<?php echo site_url()."/${cat_name}/page/".($paged-1); ?>"><div class="nl-prev_page"></div></a>
                
                <?php endif; ?>

            <div class="spot">
                <!--目前在第幾頁-->
                <div class="nl-page_num"><?php echo $paged; ?></div>

                 <!--最後一頁的頁數-->
            <div class="nl-page_max_num"><?php echo $the_query->max_num_pages ?></div>
            
            </div>
                
                <!--下一頁如果在最後一頁就不動-->
                <?php if( $paged == $the_query->max_num_pages ) :?>
            
            <a href="<?php echo site_url()."/${cat_name}/page/".($the_query->max_num_pages); ?>"><div class="nl-next_page"></div></a>
                
                <?php else: ?>
            
            <a href="<?php echo site_url()."/${cat_name}/page/".($paged+1); ?>"><div class="nl-next_page"></div></a>
               
                <?php endif; ?>
            
            <!--到最後一頁-->
            <a href="<?php echo site_url()."/${cat_name}/page/".($the_query->max_num_pages); ?>"><div class="nl-last_page"></div></a>
                
                <!--下面手機板沒有-->
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
<!--<?php wp_nav_menu (array('theme_location' => 'Menu1','container_class' => 'nav_menu','container_id'=>'nav_menu_'.$n)); ?>
<?php //get_sidebar(); ?>-->
<?php get_footer(); ?>
