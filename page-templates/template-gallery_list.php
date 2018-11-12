<?php
/*
 *Template Name: gallery_list
 */
//get header
if (qtranxf_getLanguage() == 'en')
    get_header('en_header');
else
    get_header(); 

?>
<div class="page-gallery_list">
    <div class="gl-container">
        <div class="white_block">
        </div>
        <div class="img_block">
            <div class="img_block-image">
            </div>
            <div class="img_block-text_block">
                <div class="img_block-text">相簿列表</div>
            </div>
        </div>
                                    <?php
                                    // wp query
                                    $args = array('category_name' => 'gallery');
                                    $the_query = new WP_Query($args);

                                    if($the_query->have_posts()):
                                        $years = array();
                                        $year = "";
                                        $prev_year = "";
                                        while($the_query->have_posts()):
                                            $the_query->the_post();
                                            $prev_year = $year;
                                            $year = get_the_date('Y');
                                            //find first photo url of a album
                                            $image=acf_photo_gallery('gallery', $post->ID)[0];
                                            $img_url=$image['full_image_url'];
                                            
                                            if( $year != $prev_year):
                                                array_push($years,$year);
                                                if( $prev_year != "" ):
                                    ?>
            </div>
                                                <?php endif;?>
            <div class="posts_block posts-<?php echo $year;?>" data-photo="<?php echo $img_url;?>" data-title="<?php the_title(); ?>">
                                            <?php endif;?>
                            <div class="gl-titles" data-photo="<?php echo $img_url;?>" data-title="<?php the_title(); ?>"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
                                    <?php endwhile; endif;?>
                                    <?php if( $year != "" ): ?>
            </div>
                                    <?php endif;?>
        <div class="year_block">
                                    <?php foreach($years as $year):?>
            <div class="year_block-item yb-item-<?php echo $year;?> yb-item-normal" data-rel="<?php echo $year;?>"><?php echo $year;?></div>
                                    <?php endforeach;?>
        </div>
    </div>
</div>
<script>
    var prev_year = <?php echo $years[0];?>;
    $(document).ready(function() {
        //initialize
        $(".yb-item-"+prev_year).removeClass("yb-item-normal").addClass("yb-item-selected");
        $(".posts-"+prev_year).show();
        $('.img_block-image').css('background-image', 'url(' + $('.posts-'+prev_year).data('photo') + ')');
        $('.img_block-text').text($('.posts-'+prev_year).data('title'));

        $(".gl-titles").hover(function(){
            $('.img_block-image').css('background-image', 'url(' + $(this).data('photo') + ')');
            $('.img_block-text').text($(this).data('title'));
        },function(){});

                                    <?php foreach($years as $year):?>
        $(".yb-item-<?php echo $year;?>").click(function(){
            $(".yb-item-"+prev_year).removeClass("yb-item-selected").addClass("yb-item-normal");
            $(".yb-item-<?php echo $year;?>").removeClass("yb-item-normal").addClass("yb-item-selected");

            $(".posts_block").hide();
            $(".posts-<?php echo $year;?>").fadeIn(1000,"swing");

            $('.img_block-image').css('background-image', 'url(' + $('.posts-<?php echo $year;?>').data('photo') + ')');
            $('.img_block-text').text($('.posts-<?php echo $year;?>').data('title'));

            prev_year = <?php echo $year;?>;
        });
                                    <?php endforeach;?>
    });
</script>
<?php wp_nav_menu (array('theme_location' => 'Menu2','container_class' => 'nav_menu','container_id' => 'nav_menu_6')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
