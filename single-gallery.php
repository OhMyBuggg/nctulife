<?php
/*
 *Template Name: gallery 
 */
//get header
if (qtranxf_getLanguage() == 'en')
    get_header('en_header');
else
    get_header(); 

?>
<div class="page-gallery">
    <div class="gallery-container">
        <div class="gallery-wrapper">
                        <?php
                        $post_id = $post->ID; // current post ID
                        $cat = get_the_category(); 
                        $current_cat_id = $cat[0]->cat_ID; // current category ID 

                        $args = array( 
                            'category' => $current_cat_id,
                            'orderby'  => 'post_date',
                            'order'    => 'DESC'
                        );
                        $posts = get_posts( $args );
                        // get IDs of posts retrieved from get_posts
                        $ids = array();
                        foreach ( $posts as $thepost ) {
                            $ids[] = $thepost->ID;
                            }
                        // get and echo previous and next post in the same category
                        $thisindex = array_search( $post_id, $ids );
                        $previd = isset($ids[ $thisindex - 1 ])? $ids[ $thisindex - 1 ] : $ids[ $thisindex ];
                        $nextid = isset($ids[ $thisindex + 1 ])? $ids[ $thisindex + 1 ] : $ids[ $thisindex ];
                        ?>
            <div class="gallery-item gallery-item_1st">
                <div class="gallery-title"><?php the_title(); ?></div>
                <a href="<?php echo get_permalink($previd) ?>"><div class="gallery-button gallery-prev"></div></a>
                <a href="<?php echo get_permalink($nextid) ?>"><div class="gallery-button gallery-next"></div></a>
            </div>
<?php
    //Get the images ids from the post_metadata
    $images = acf_photo_gallery('gallery', $post->ID);
    //Check if return array has anything in it
    if( count($images) ):
        //Cool, we got some data so now let's loop over it
        $i = 0;
        foreach($images as $image):
            $title = $image['title']; //The title
            $caption= $image['caption']; //The caption
            $full_image_url= $image['full_image_url']; //Full size image url
            $medium_image_url = acf_photo_gallery_resize_image($full_image_url, 640, 640); //Resized size to 262px width by 160px height image url
            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
            $url= $image['url']; //Goto any link when clicked
            $target= $image['target']; //Open normal or new tab
            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
?>
            <div class="gallery-item">
<?php if(qtranxf_getLanguage() == 'en'):?>
            <a href="<?php echo $full_image_url; ?>" data-lightbox="gallery" data-title="">
<?php else:?>
            <a href="<?php echo $full_image_url; ?>" data-lightbox="gallery" data-title="<?php echo $caption; ?>">
<?php endif;?>

                <img class="photo photo-<?php echo $i;?>" src="<?php echo $medium_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                </a>
            </div>
<?php   
            ++$i;
        endforeach;
    endif;
?>
            <div class="gallery-item-bottom"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.gallery-container').perfectScrollbar();
    });
</script>
<?php wp_nav_menu (array('theme_location' => 'Menu2','container_class' => 'nav_menu','container_id' => 'nav_menu_6')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
