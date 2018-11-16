<?php
/*
 * Template Name: intro
 */
?>

<?php get_header(); ?>

<div class="page-intro">
    <div class="container intro-mobile-container">
        <div id="intro-container">
            <div id="intro-wrapper">
                <div class="intro-subpage-1">    <!--first page-->
                    <div class="intro-bigTitle_1">系所簡介</div>
                    <!--下半部分-->
                    <p class="intro-first-page-text_1">本博士班成立目標為培育具有生物科技產業前瞻視野，開發產業界所需之創新技術，且具備生物科技產品研發能力的博士人才。主要發展為「精準生醫研創平台.跨領域產學整合」 ，以學術研究為基準，進而解決臨床及產業應用問題為主要方向。期望整合本院師資及跨領域專長技術，配合本校雄厚之資通訊半導體研發能量，帶領台灣生物科技產業跨入創新產業技術領域，藉此促進產業升級，建立國內生物科技產業界與學術界合利互利共生之典範。</p>
	            </div>
            </div>
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
