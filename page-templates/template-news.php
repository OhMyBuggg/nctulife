<?php
/*
 * Template Name: news
 */
    
        get_header();
        $cat_name = 'news';
        $page_title='最新消息';
        $n=1;

        $html = file_get_contents("http://3.134.90.114/newslist/?header=hidden");
        // 通過 preg_replace 函數使頁面源碼由多行變單行
       $htmlOneLine = preg_replace("/\r|\n|\t/","",$html);

       // 通過 preg_match 函數提取獲取頁面的標題信息
       preg_match('/<ul>(.*)<\/ul>/iU',$htmlOneLine,$titleArr);

       // 由於 preg_match 函數的結果是數組的形式
       $title = $titleArr[0];

       preg_match_all('/<a class="news-title"(.*)<\/a>/iU',$htmlOneLine,$contentArr);
       preg_match_all('/<div class="news-title-year"(.*)<\/div>/iU',$htmlOneLine,$yearArr);
       preg_match_all('/<div class="news-title-date"(.*)<\/div>/iU',$htmlOneLine,$dateArr);
       $c = count($contentArr, 0);
       $cc = count($contentArr, 1);

       $c = $cc / $c;

       for ($i=0; $i <$c; $i++){
            $content[$i] = $contentArr[0][$i];
            $year[$i] = $yearArr[0][$i];
            $date[$i] = $dateArr[0][$i];
       }
       $i = 0;
?>
<div class="nl-page">
    <div class="container">
        <div class="intro-bigTitle_1">
          最新消息
        </div>
        <div class="content">
            <div class="text">
                <?php 
                    if($i > 0) echo '<div class="bar"></div>';
                    echo $content[$i];      
                    $i = $i + 1;
               ?>    
           </div>
           <div class="text">
                <?php 
                    if($i > 0) echo '<div class="bar"></div>';
                    echo $content[$i];       
                    echo '<br>';
                    echo $year[$i]; 
                    $i = $i + 1;
               ?>   
           </div> 
           <div class="text">
                <?php 
                    if($i > 0) echo '<div class="bar"></div>';
                    echo $content[$i];       
                    echo '<br>';
                    $i = $i + 1;
               ?>   
           </div> 
           <div class="text">
                <?php 
                    if($i > 0) echo '<div class="bar"></div>';
                    echo $content[$i];       
                    echo '<br>';
                    $i = $i + 1;
               ?>   
           </div> 
           <div class="text">
                <?php 
                    if($i > 0) echo '<div class="bar"></div>';
                    echo $content[$i];       
                    echo '<br>';
                    $i = $i + 1;
               ?>   
           </div> 
        </div>
            
      <?php  wp_reset_postdata(); ?>
    </div>
</div>
<script>



</script>
<?php get_footer(); ?>
