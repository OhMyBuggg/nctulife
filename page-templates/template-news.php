<?php
/*
 * Template Name: news
 */
    
        get_header();
        $cat_name = 'news';
        $page_title='最新消息';
        $n=1;

        $html = file_get_contents("https://dbt.nctu.edu.tw/newslist/");
        // 通過 preg_replace 函數使頁面源碼由多行變單行
       $htmlOneLine = preg_replace("/\r|\n|\t/","",$html);

       // 通過 preg_match 函數提取獲取頁面的標題信息
       preg_match('/<ul>(.*)<\/ul>/iU',$htmlOneLine,$titleArr);

       // 由於 preg_match 函數的結果是數組的形式
       $title = $titleArr[0];

       preg_match_all('/<a class="news-title"(.*)<\/a>/iU',$htmlOneLine,$contentArr);
       $c = count($contentArr, 0);
       $cc = count($contentArr, 1);

       $c = $cc / $c;

       for ($i=0; $i <$c; $i++){
            $content[$i] = $contentArr[0][$i];
       }
       // 通過 echo 函數輸出標題信息
        //echo $html[0];
        //$htmloneline = preg_replace('/\r|\n|\t/', '',$html);
       // preg_match('/<div class="rf-form_list_block"><ul>(.*?)<\/ul><\/div>/',$htmloneline,$bar);
       // preg_match('/<div[^>]*class="rf_block1_0"[^>]*>(.*?) <\/div>/',$html,$content);
?>
<div class="nl-page">
    <div class="container">
        <div class="bar"><?php echo $title;?></div>
        <div class="content">
            <?php 
                for ($i=0; $i <5; $i++){
                    preg_match('/href="(.*)"/', $content[$i], $h);
                    //$hh = '/$h[0]/';
                    $url = $h[1];
                    //$content[$i] = preg_replace($h,"",$content[$i]);
                    //$content[$i] = preg_replace('/<\/a>/','</div>',$content[$i]);

                    echo $content[$i];
                    echo '<br>';
           }?>    
        </div>
            <!--<div class="mobile-nl-header hp-newsheader">
                <div class="intro-bigTitle_1"><?php echo $bar;?></div>
            </div>-->
        <!--<div class="nl-container">
                            <?php
                            $i=0;
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $args = array(
                            'category_name' => $cat_name,
                            'posts_per_page' => 3,
                            'paged' => $paged
                            );
                            $the_query = new WP_Query($args);
                            if($the_query->have_posts()):
                                while($the_query->have_posts()):
                                    $the_query->the_post();
                            ?>
                            
            <div class="nl-list_item">
                            <div class="nl-news_item_date"><?php the_time('Y.m.d'); ?></div>
                            <br>
                            <div class="dash"></div>
                            <a class="nl-news_item_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                            ?>
        </div>-->

        <!--下面頁數-->
        <!--<div class="newslist_nav">
            
            <!--回到第一頁
            <a href="<?php echo site_url()."/${cat_name}/page/1"; ?>"><div class="nl-first_page"></div></a>
                
                <!--上一頁如果已在第一頁就不動
                <?php if( $paged == 1 ) :?>
            
            <a href="<?php echo site_url()."/${cat_name}/page/1"; ?>"><div class="nl-prev_page"></div></a>
                
                <?php else: ?>
            
            <a href="<?php echo site_url()."/${cat_name}/page/".($paged-1); ?>"><div class="nl-prev_page"></div></a>
                
                <?php endif; ?>

            <div class="spot">
                <!--目前在第幾頁
                <div class="nl-page_num"><?php echo $paged; ?></div>

                 <!--最後一頁的頁數
            <div class="nl-page_max_num"><?php echo $the_query->max_num_pages ?></div>
            
            </div>
                
                <!--下一頁如果在最後一頁就不動
                <?php if( $paged == $the_query->max_num_pages ) :?>
            
            <a href="<?php echo site_url()."/${cat_name}/page/".($the_query->max_num_pages); ?>"><div class="nl-next_page"></div></a>
                
                <?php else: ?>
            
            <a href="<?php echo site_url()."/${cat_name}/page/".($paged+1); ?>"><div class="nl-next_page"></div></a>
               
                <?php endif; ?>
            
            <!--到最後一頁
            <a href="<?php echo site_url()."/${cat_name}/page/".($the_query->max_num_pages); ?>"><div class="nl-last_page"></div></a>
                
                <!--下面手機板沒有
                <input type="text" id="jump_to" name="jump_to" max="<?php echo $the_query->max_num_pages ?>">
            
            <a href="#" class="nl-go"></a>
        
        </div>-->
                            <?php  wp_reset_postdata(); ?>
    </div>
</div>
<script>



</script>
<?php get_footer(); ?>
