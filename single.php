<?php
$post = $wp_query->post;

if ( in_category( 'videos' ) ) {
  include( TEMPLATEPATH.'/single-videos.php' );
} 
else if ( in_category( 'gallery' ) ) {
  include( TEMPLATEPATH.'/single-gallery.php' );
} 
else {
  include( TEMPLATEPATH.'/single-generic.php' );
}
?>
