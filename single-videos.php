<?php 
    if (qtranxf_getLanguage() == 'en')
        get_header('en_header');
    else
        get_header(); 
?>

<div class="vl-page">
    <div class="video-container">
        <iframe class="video-content" src="https://www.youtube.com/embed/<?php the_field('YoutubeID');?>" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
