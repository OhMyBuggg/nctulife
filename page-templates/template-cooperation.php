<?php
/*
 * Template Name: cooperation
 */
?>

<?php get_header(); ?>

<div class="page-intro">
    <!--<div class="container intro-mobile-container">
        <div id="intro-container">
            <div id="intro-wrapper">-->
                <div class="intro-subpage-1">    <!--first page-->
                    <div class="intro-bigTitle_1">產學合作</div>
                    <!--下半部分-->
                    <div class="ra-circle_block">
                        <div class="ra-circle_first">
                            <div class="ra-circle_l">
                                <div class="circle_p1_1 textbox textbox0">
                                    台達電子工業
                                </div>
                                <div class="circle_p1_1 textbox textbox1">
                                    百歐生命科技
                                </div>
                                <div class="circle_p1_1 textbox textbox2">
                                    <!--測試第三第一-->
                                </div>
                                <div class="circle_p2 textbox textbox0">
                                    股份有限公司       
                                </div>
                                <div class="circle_p2 textbox textbox1">
                                    股份有限公司     
                                </div>
                                <div class="circle_p2 textbox textbox2">
                                    <!--股份有限公司-->       
                                </div>
                            </div>
                            <div class="ra-circle_2">
                                <div class="circle_p1_1 textbox textbox0">
                                    宣捷生物科技
                                </div>
                                <div class="circle_p1_2 textbox textbox1">
                                    <!--測試第二第一-->
                                </div>
                                <div class="circle_p1_1 textbox textbox2">
                                    <!--測試第三第一-->
                                </div>
                                <div class="circle_p2 textbox textbox0">
                                    股份有限公司
                                </div>
                                <div class="circle_p2 textbox textbox1">
                                    <!--股份有限公司-->
                                </div>
                                <div class="circle_p2 textbox textbox2">
                                    <!--股份有限公司-->
                                </div>
                            </div>
                            <div class="ra-circle_3">
                                <div class="circle_p1_1 textbox textbox0">
                                    康健基因科技
                                </div>
                                <div class="circle_p1_1 textbox textbox1">
                                    <!--測試第二第一-->
                                </div>
                                <div class="circle_p1_1 textbox textbox2">
                                    <!--測試第三第一-->
                                </div>
                                <div class="circle_p2 textbox textbox0">
                                    股份有限公司
                                </div>
                                <div class="circle_p2 textbox textbox1">
                                    <!--股份有限公司-->
                                </div>
                                <div class="circle_p2 textbox textbox2">
                                    <!--股份有限公司-->
                                </div>
                            </div>
                        </div>
                        <div class="ra-circle_second">
                            <div class="ra-circle_4">
                                <div class="circle_p1_1 textbox textbox0">
                                    百芮國際
                                </div>
                                <div class="circle_p1_1 textbox textbox1">
                                    <!--測試第二第一-->
                                </div>
                                <div class="circle_p1_1 textbox textbox2">
                                    <!--測試第三第一-->
                                </div>
                                <div class="circle_p2 textbox textbox0">
                                    股份有限公司
                                </div>
                                <div class="circle_p2 textbox textbox1">
                                    <!--股份有限公司-->
                                </div>
                                <div class="circle_p2 textbox textbox2">
                                    <!--股份有限公司-->
                                </div>
                            </div>
                            <div class="ra-circle_5">
                                <div class="circle_p1_2 textbox textbox0">
                                    琦芯科技
                                </div>
                                <div class="circle_p1_2 textbox textbox1">
                                    <!--測試第二第一-->
                                </div>
                                <div class="circle_p1_2 textbox textbox2">
                                    <!--測試第三第一-->
                                </div>
                                <div class="circle_p2 textbox textbox0">
                                    股份有限公司
                                </div>
                                <div class="circle_p2 textbox textbox1">
                                    <!--股份有限公司-->
                                </div>
                                <div class="circle_p2 textbox textbox2">
                                    <!--股份有限公司-->
                                </div>
                            </div>
                            <div class="ra-circle_6">
                                <div class="circle_p1_2 textbox textbox0">
                                    瀚源生醫
                                </div>
                                <div class="circle_p1_2 textbox textbox1">
                                    <!--測試第二第一-->
                                </div>
                                <div class="circle_p1_2 textbox textbox2">
                                    <!--測試第三第一-->
                                </div>
                                <div class="circle_p2 textbox textbox0">
                                    股份有限公司
                                </div>
                                <div class="circle_p2 textbox textbox1">
                                    <!--股份有限公司-->
                                </div>
                                <div class="circle_p2 textbox textbox2">
                                    <!--股份有限公司-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--</div>
        </div>
    </div>-->

<!--往左右頁移動-->
    <div class="left"></div>
    <div class="right"></div>

                <!--<a class="icon_down" href="<?php echo site_url(); ?>/dean" style="opacity:1; transform: matrix(1,0,0,1,0,0);"><div class="right_icon"></div></a>

    <div id="icon_down_wrapper" class="icon_down_slide"></div>
    <a href="<?php echo site_url(); ?>/dean" style="opacity:1; transform: matrix(1,0,0,1,0,0);">
        <span onclick="iconDown()" class="icon_down"></span>
    </a>-->

</div>


<script>
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

    var now = 0;

    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
        $('.textbox').hide();
        $('.textbox'+now).fadeIn(1000,"swing");
        $('.left').click(function(){
            now = (now+2-1)%2;
            $('.textbox').hide();
            $('.textbox'+now).fadeIn(1000,"swing");
        });
        $('.right').click(function(){
            now = (now+1)%2;
            $('.textbox').hide();
            $('.textbox'+now).fadeIn(1000,"swing");
        })
    });
</script>
<!--<?php wp_nav_menu (array('theme_location' => 'Menu2','container_class' => 'nav_menu','container_id' => 'nav_menu_1')); ?>
<?php //get_sidebar(); ?>-->
<?php get_footer(); ?>
