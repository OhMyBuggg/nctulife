<?php
/*
 *Template Name:research_highlight_1
 */

    $html = file_get_contents("https://cbt.nctu.edu.tw/research_highlights/#bioinfo");
    $htmlOneLine = preg_replace("/\r|\n|\t/","",$html);
    preg_match('/<p class="subtitled rh-title1">(.*)<\/p>/iU',$htmlOneLine,$titleArr);
    $title = $titleArr[0];
    preg_match('/<p class="subtitle rh-title2">(.*)<\/p>/iU',$htmlOneLine,$titleArr2);
    $subtitle = $titleArr2[0];
?>
<?php get_header(); ?>
<div class="page-research_achievements webpage">
    <div class="container">
        <div class="title"><?php echo $title?></div>
        <div class="subtitle"><?php echo $subtitle?></div>
        <div class="bar"></div>
    </div>
</div>

<script>
    // nothing here
</script>

