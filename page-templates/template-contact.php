<?php
/*
 * Template Name: contact
 */
?>

<?php get_header(); ?>

<div class="page-intro">
    <div class="container intro-mobile-container">
        <div class="intro-bigTitle_1">聯絡我們</div>
        <div class="ra-circle_first">
            <div class="page-1">
            <div class="nextpage"></div>
            <div class="ra-circle_first_block_1">
                <div class="ra-circle_l">
                </div>
                <div class="first_block_context_block">
                    <div class="first_first_line">行政專員</div>
                    <div class="first_second_line">呂聖鈴</div>
                    <div class="middle_line"><hr></div>
                    <div class="first_third_line">研究計畫及財產等事務<br>shenq@cc.nctu.edu.tw<br>03-5712121 # 56902</div>
                </div>
            </div>
            <div class="ra-circle_first_block_2">
                <div class="ra-circle_2">
                </div>
                <div class="first_block_context_block">
                    <div class="first_first_line">技士</div>
                    <div class="first_second_line">郭珍佑</div>
                    <div class="middle_line"><hr></div>
                    <div class="first_third_line"><p>館舍及公儀維修 門禁管理</p><p>系教評會業務 排課</p><p>shenq@mail.nctu.edu.tw</p><p>03-5712121 # 56901</p></div>
                </div>
            </div>
            </div>
            <!--<div class="ra-circle_first_block_3">
                <div class="ra-circle_3">
                </div>
                <div class="first_block_context_block">
                    <div class="first_first_line">行政專員</div>
                    <div class="first_second_line">郭淑卿</div>
                    <div class="middle_line"><hr></div>
                    <div class="first_third_line">院務及研究生相關事務<br>sunny@mail.nctu.edu.tw<br>03-5712121 # 56937</div>
                </div>
            </div>-->
        </div>
        <div class="ra-circle_second">
            <div class="page-1">
            <div class="ra-circle_second_block_1">
                <div class="ra-circle_4">
                </div>
                <div class="second_block_context_block">
                    <div class="second_first_line">行政專員</div>
                    <div class="second_second_line">吳佳文</div>
                    <div class="middle_line"><hr></div>
                    <div class="second_third_line">專題演講 實驗室環安<br>chiawen@mail.nctu.edu.tw<br>03-5712121 # 56943</div>
                </div>
            </div>
            <div class="ra-circle_second_block_2">
                <div class="second_block_context_block">
                    <div class="second_first_line">行政專員</div>
                    <div class="second_second_line">陳珮筠</div>
                    <div class="middle_line"><hr></div>
                    <div class="second_third_line">大學部及國際處師生<br>教學空間設備相關事務<br>g0630@nctu.edu.tw<br>03-5712121 # 56930</div>
                </div>
                <div class="ra-circle_5">
                </div>
            </div>
            </div>
            <div class="prepage"></div>
            <!--<div class="ra-circle_second_block_3">
                <div class="second_block_context_block">
                    <div class="second_first_line">工友</div>
                    <div class="second_second_line">葉連發</div>
                    <div class="middle_line"><hr></div>
                    <div class="second_third_line">館舍維護 收發信件<br>sunny@mail.nctu.edu.tw<br>03-5712121 # 53008</div>
                </div>
                <div class="ra-circle_6">
                </div>
            </div>-->
        </div>
                
    </div>
                <a class="icon_down" href="<?php echo site_url(); ?>/dean" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="right_icon"></div></a>
<!--
    <div id="icon_down_wrapper" class="icon_down_slide"></div>
    <a href="<?php echo site_url(); ?>/dean" style="opacity:1; transform: matrix(1,0,0,1,0,0);">
        <span onclick="iconDown()" class="icon_down"></span>
    </a>-->

</div>


<script>
$(document).ready(function(){
  $(".nextpage").click(function(){
    $(".page-1").hide();
  });
  $(".prepage").click(function(){
    $(".page-1").show();
  });
});
    //just querying the DOM...like a boss!

/*Annie added for mobile*/
// add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
// function enqueue_child_theme_styles() {
// wp_enqueue_style( 'parent-style',get_template_directory_uri().'/style.css' );
// wp_enqueue_style( 'child-style', get_stylesheet_uri(), NULL,
// filemtime( get_stylesheet_directory() . '/style.css' ) );
// }
    function iconDown(){
        var nextpageDuration = 140;
    document.getElementById("icon_down_wrapper").style.height = "100vh";
        setTimeout(function(){
        window.location = '<?php echo site_url(); ?>/dean';
        },nextpageDuration);
    }

/*Annie added for mobile*/

    var wrapper = document.querySelector("#intro-wrapper");
    var next_buttons = document.querySelectorAll(".intro-next");
    var prev_buttons = document.querySelectorAll(".intro-prev");

    // the activeLink provides a pointer to the currently displayed item
    var activeLink = 0;
     
    // setup the event listener for the next_buttons
    for (var i = 0; i < next_buttons.length; i++) {
        next_buttons[i].addEventListener('click', setClickedItem_1, false);
    }
    for (var i = 0; i < prev_buttons.length; i++) {
        prev_buttons[i].addEventListener('click', setClickedItem_2, false);
    }

    function setClickedItem_1(e) {
        activeLink = (activeLink + 1) % 4;
     
        var position = (-70)*activeLink;
        var translateValue = "translate3d(" + position + "vw, 0px, 0)";
        window.setTimeout(function(){wrapper.style["opacity"]="1";}, 600);
        wrapper.style["opacity"]="0";
        wrapper.style[transformProperty] = translateValue;
    }
     
    function setClickedItem_2(e) {
        activeLink = (activeLink + 3) % 4;
     
        var position = (-70)*activeLink;
        var translateValue = "translate3d(" + position + "vw, 0px, 0)";
        window.setTimeout(function(){wrapper.style["opacity"]="1";}, 600);
        wrapper.style["opacity"]="0";
        wrapper.style[transformProperty] = translateValue;
    }
     
    // Dealing with Transforms
    var transforms = ["transform",
                "msTransform",
                "webkitTransform",
                "mozTransform",
                "oTransform"];
     
    var transformProperty = getSupportedPropertyName(transforms);
     
    // vendor prefix management
    function getSupportedPropertyName(properties) {
        for (var i = 0; i < properties.length; i++) {
            if (typeof document.body.style[properties[i]] != "undefined") {
                return properties[i];
            }
        }
        return null;
    }

    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
    });
</script>
<?php wp_nav_menu (array('theme_location' => 'Menu2','container_class' => 'nav_menu','container_id' => 'nav_menu_1')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
