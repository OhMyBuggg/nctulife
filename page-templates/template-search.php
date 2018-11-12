<?php
/*
 * Template Name: search
 */
    if (qtranxf_getLanguage() == 'en')
        get_header('en_header');
    else
        get_header(); 
?>
<div class="nl-page">
    <div class="container">
        <div class="search-container">
<script>
  (function() {
    var cx = '016446745100244550116:cg7peocn4iy';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>
        </div>
                            <?php  wp_reset_postdata(); ?>
    </div>
</div>
<script>
    $(document).ready(function(){
	$('.search-container').perfectScrollbar();
    });


</script>
<?php //wp_nav_menu (array('theme_location' => 'Menu1','container_class' => 'nav_menu','container_id'=>'nav_menu_'.$n)); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
