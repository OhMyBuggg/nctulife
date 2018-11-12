<?php
/*
 *Template Name:studying_abroad
 */
?>
<?php get_header(); ?>
<div class="page-sa">
    <div class="container">
        <div class="sa-img"></div>
                            <?php
                            $i=0;
                            $args = array('category_name' => 'studying_abroad');
                            $the_query = new WP_Query($args);
                            $post_num = $the_query->found_posts;
                            if($the_query->have_posts()):
                                while($the_query->have_posts()):
                                    $the_query->the_post();
                                    $file = get_field('regulation');
                            ?>
        <div class="sa-container <?php echo "item$i";?>">
            <div class="sa-img_block">
                <div class="subtitled sa-littleTitle">02  出國計畫</div>
                <div class="sa-btn sa-btn_prev"></div>
                <div class="sa-btn sa-btn_next"></div>
                <?php if($file):?>
                    <a href="<?php echo $file['url']; ?>"><div class="sa-btn sa-btn_download"></div></a>
                <?php endif;?>
		<div class="sa-collegename-box">
                    <div class="subtitled sa-collegename"><?php the_field('college_cht'); ?></div>
		</div>
                <div class="subtitle sa-title"><?php the_title(); ?></div>
                <div class="text sa-engtitle"><?php the_field('college_eng'); ?></div>
 		<div class="sa-line"></div>
            </div>
	    <div class="sa-container1">
            <div class="sa-applicant">
                <p class="subtitled">申請資格</p>
                <p class="text"><?php the_field('applicant'); ?></p>
            </div>
            <div class="sa-documents">
                <p class="subtitled">申請文件</p>
                <!--<?php if($file):?>
                    <a href="<?php echo $file['url']; ?>"><p class="text">申請簡章<br></p></a>
                <?php endif;?>-->
                <p class="text"><?php the_field('documents'); ?></p>
            </div>
            <div class="sa-duration">
                <p class="subtitled">出國期間</p>
                <p class="text"><?php the_field('duration'); ?></p>
            </div>
            <div class="sa-due_date">
                <p class="subtitled">申請截止日</p>
                <p class="text"><?php the_field('due_date'); ?></p>
            </div>
            <div class="sa-note">
                <p class="subtitled">備註</p>
                <p class="text"><?php the_field('note'); ?></p>
            </div>
 	    <div class="mobile-space"></div>
       	    </div>
        </div>
                            <?php
                                    $i = $i + 1;
                                endwhile;
                            else:?>
            <div class="sa-container">
                <div class="sa-img_block"></div>
                <div class="subtitle">目前沒有交換學校</div>
            </div>
                            <?php
                            endif;
                            ?>
                            <?php  wp_reset_postdata(); ?>
    </div>
    <a class="icon_up"href="<?php echo site_url(); ?>/exchange_student" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="left_icon"></div></a>

</div>

<script>
    pic_num = 4;
    pic_now = 1;
    now = 0;
    num = <?php echo $post_num; ?>;

    for (i = pic_num; i >= 3; --i) { 
        $('.sa-img').css("background-image","url(<?php bloginfo('template_url')?>/image/banner_0"+i+".jpg");
    }
    $.preload( '<?php bloginfo('template_url')?>/image/banner_01.jpg',
            '<?php bloginfo('template_url')?>/image/banner_02.jpg',
            '<?php bloginfo('template_url')?>/image/banner_03.jpg',
            '<?php bloginfo('template_url')?>/image/banner_04.jpg',
            '<?php bloginfo('template_url')?>/image/banner_05.jpg',
            '<?php bloginfo('template_url')?>/image/banner_06.jpg'
          );

    $(document).ready(function() {
        $('.sa-container').hide();
        $('.item'+now).fadeIn(1500,"swing");
        $(".nav_menu").on("click",function(){});
    });

    $('.sa-btn_prev').click(function(){
        pic_now = pic_now % pic_num + 3 ;
        $('.sa-img').css("background-image","url(<?php bloginfo('template_url')?>/image/banner_0"+pic_now+".jpg");
        now = (now+num-1)%num;
        $('.sa-container').hide();
        $('.item'+now).fadeIn(1500,"swing");
    });
    $('.sa-btn_next').click(function(){
        pic_now = pic_now % pic_num + 3 ;
        $('.sa-img').css("background-image","url(<?php bloginfo('template_url')?>/image/banner_0"+pic_now+".jpg");
        now = (now+1)%num;
        $('.sa-container').hide();
        $('.item'+now).fadeIn(1500,"swing");
    });
</script>


<?php wp_nav_menu (array('theme_location' => 'Menu3','container_class' => 'nav_menu','container_id'=>'nav_menu_2')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
