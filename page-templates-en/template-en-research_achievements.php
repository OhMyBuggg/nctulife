<?php
/*
 *Template Name:en-research_achievements
 */
?>
<?php get_header('en_header'); ?>
<div class="page-research_achievements">
    <div class="container">    
        <div class="ra-color_block"></div>
        <div class="ra-block">
	    <p class="subtitled ra-title1 formobile">Fields of Research</p>
            <p class="subtitled ra-title1 mobilehidden">01 Fields of Research</p>
            <p class="subtitle ra-title2">Research Areas</p>
            <!--
            <div class="ra-btn ra-btn1"></div>
 	        <div class="ra-line formobile"></div>
            <a href="<?php echo site_url(); ?>/most_subsided_projects"><div class="ra-btn ra-btn2"></div></a>
            -->
            <div class="ra-circle_block mobilehidden">
                <a href="<?php echo site_url(); ?>/en-research_highlights#pyhsics">
                    <div class="ra-circle_l ra-c1 subtitled mobilehidden">Physics</div>
                </a>
                <a href="<?php echo site_url(); ?>/en-research_highlights#mathmetics">
                    <div class="ra-circle_l ra-c2 subtitled mobilehidden">Mathematics & Statistics</div>
                </a>
                <a href="<?php echo site_url(); ?>/en-research_highlights#chemistry">
                    <div class="ra-circle_l ra-c3 subtitled mobilehidden">Chemistry</div>
                </a>
            </div>
            <div class="ra-circle_block formobile">
                <div class="ra-c1_mobile formobile"><div class=ra-icon-p></div></div>
                <div class="ra-c2_mobile formobile"><div class=ra-icon-m></div></div>
                <div class="ra-c3_mobile formobile"><div class=ra-icon-c></div></div>
            </div>

            <div class="formobile ra-block2">
                <div class="ra-text-M formobile">
                        <div class="ra-subtitled ra-text">Data Science & Combinatorics</div>
                        <div class="ra-subtitled ra-text">Mathematical Modeling & Scientific Computing</div>
                        <div class="ra-subtitled ra-text">Differential Equations & Dynamical Systems</div>
                        <div class="ra-subtitled ra-text">Applied Statistics & Financial Engineering</div>
                        <div class="ra-subtitled ra-text">Number Theory & Geometry Analysis</div>
                </div>
            </div>
            <div class="formobile ra-block1">
                <div class="ra-text-P formobile">
                        <div class="ra-subtitled ra-text">Electro- Optical Science</div>
                        <div class="ra-subtitled ra-text">Theoretical & Computational Physics</div>
                        <div class="ra-subtitled ra-text">Nanoscience & Nanotechnology</div>
                        <div class="ra-subtitled ra-text">Condensed Matter & Low Temperature Physics</div>
                        <div class="ra-subtitled ra-text">Semiconductor Physics & Devices</div>
                </div>
            </div>
            <div class="formobile ra-block3">
                <div class="ra-text-C formobile">
                        <div class="ra-subtitled ra-text">Biochemistry & Bioanalysis</div>
                        <div class="ra-subtitled ra-text">Polymer Chemistry & Photoelectric Material</div>
                        <div class="ra-subtitled ra-text">Advanced Organic & Inorganic Chemistry</div>
                        <div class="ra-subtitled ra-text">Green Energy</div>
                        <div class="ra-subtitled ra-text">Molecular Science & Theoretical Chemistry</div>
                </div>
            </div>

            <div class="ra-text_block ra-block2 mobilehidden">
                <div class="subtitle ra-subtitle ra-title3-M mobilehidden">Mathematics<br>&<br>Statistics</div>
                <div class="ra-text-M">
			<div class="ra-subtitled ra-text">Data Science & Combinatorics</div>
                	<div class="ra-subtitled ra-text">Mathematical Modeling & Scientific Computing</div>
                	<div class="ra-subtitled ra-text">Differential Equations & Dynamical Systems</div>
                	<div class="ra-subtitled ra-text">Applied Statistics & Financial Engineering</div>
                	<div class="ra-subtitled ra-text">Number Theory & Geometry Analysis</div>
		</div>
            </div>
            <div class="ra-text_block ra-block1 mobilehidden">
                <div class="subtitle ra-subtitle ra-title3-P mobilehidden">Physics</div>
                <div class="ra-text-P">
			<div class="ra-subtitled ra-text">Electro- Optical Science</div>
                	<div class="ra-subtitled ra-text">Theoretical & Computational Physics</div>
                	<div class="ra-subtitled ra-text">Nanoscience & Nanotechnology</div>
                	<div class="ra-subtitled ra-text">Condensed Matter & Low Temperature Physics</div>
                	<div class="ra-subtitled ra-text">Semiconductor Physics & Devices</div>
		</div>
            </div>
            <div class="ra-text_block ra-block3 mobilehidden">
                <div class="subtitle ra-subtitle ra-title3-C mobilehidden">Chemistry</div>
                <div class="ra-text-C">
			<div class="ra-subtitled ra-text">Biochemistry & Bioanalysis</div>
                	<div class="ra-subtitled ra-text">Polymer Chemistry & Photoelectric Material</div>
                	<div class="ra-subtitled ra-text">Advanced Organic & Inorganic Chemistry</div>
               		<div class="ra-subtitled ra-text">Green Energy</div>
                	<div class="ra-subtitled ra-text">Molecular Science & Theoretical Chemistry</div>
		</div>
            </div>

        </div>
    </div>
    <!--<a class="icon_down icon_ra" href="http://188.166.179.62/most_subsided_projects" style="opacity:1; transform: matrix(1,0,0,1,0,0);"></a>
-->
</div>

<script>
    /*default setting*/
    $(".ra-title3-P").css("margin-left","0vw");
    $(".ra-text-P").css("margin-top","0vh");

    $(".ra-c1").hover(
        function(){
            $(".ra-title3-M").css("margin-left","-22vw");
            $(".ra-text-M").css("margin-top","-40vh");
            $(".ra-title3-C").css("margin-left","-22vw");
            $(".ra-text-C").css("margin-top","-40vh");
            $(".ra-title3-P").css("margin-left","0vw");
	    $(".ra-text-P").css("margin-top","0vh");
        }/*,function(){
	    $(".ra-title3-M").css("margin-left","-22vw");
	    $(".ra-text-M").css("margin-top","-40vh");
            $(".ra-title3-C").css("margin-left","-22vw");
            $(".ra-text-C").css("margin-top","-40vh");
	}*/
    );
    $(".ra-c1_mobile").hover(
        function(){
            $(".ra-block1").fadeIn(500,"swing");
            $(".ra-c1_mobile").css("border","1px solid rgba(230, 50, 30, 1)");
            $(".ra-c1_mobile").css("color","rgba(230, 50, 30, 1)");
            $(".ra-block1").css("display","block");
            $(".ra-block2").css("display","none");
            $(".ra-block3").css("display","none");
        }
    );
    $(".ra-c2").hover(
        function(){
            $(".ra-title3-P").css("margin-left","-22vw");
            $(".ra-text-P").css("margin-top","-40vh");
            $(".ra-title3-C").css("margin-left","-22vw");
            $(".ra-text-C").css("margin-top","-40vh");
            $(".ra-title3-M").css("margin-left","0vw");
            $(".ra-text-M").css("margin-top","0vh");
        }/*,function(){
            $(".ra-title3-P").css("margin-left","-22vw");
            $(".ra-text-P").css("margin-top","-40vh");
            $(".ra-title3-C").css("margin-left","-22vw");
            $(".ra-text-C").css("margin-top","-40vh");
        }*/
    );
    $(".ra-c2_mobile").hover(
        function(){
            $(".ra-block2").fadeIn(500,"swing");
            $(".ra-block1").css("display","none");
            $(".ra-c1_mobile").css("border","1px solid rgba(100, 100, 100, 1)");
            $(".ra-c1_mobile").css("color","rgba(100,100,100,1)");
            $(".ra-block3").css("display","none");
        }/*,function(){
            $(".ra-block2").fadeOut(500,"swing");
        }*/
    );
    $(".ra-c3").hover(
        function(){
            $(".ra-title3-P").css("margin-left","-22vw");
            $(".ra-text-P").css("margin-top","-40vh");
            $(".ra-title3-M").css("margin-left","-22vw");
            $(".ra-text-M").css("margin-top","-40vh");
            $(".ra-title3-C").css("margin-left","0vw");
            $(".ra-text-C").css("margin-top","0vh");
        }/*,function(){
            $(".ra-title3-P").css("margin-left","-22vw");
            $(".ra-text-P").css("margin-top","-40vh");
            $(".ra-title3-M").css("margin-left","-22vw");
            $(".ra-text-M").css("margin-top","-40vh");
        }*/
    );
    $(".ra-c3_mobile").hover(
        function(){
            $(".ra-block3").fadeIn(500,"swing");
            $(".ra-block1").css("display","none");
            $(".ra-c1_mobile").css("border","1px solid rgba(100, 100, 100, 1)");
            $(".ra-c1_mobile").css("color","rgba(100,100,100,1)");
            $(".ra-block2").css("display","none");
        }/*,function(){
            $(".ra-block3").fadeOut(500,"swing");
        }*/
    );
    
    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
	$(".ra-c1_mobile").css("border","1px solid rgba(230, 50, 30, 1)");
	$(".ra-c1_mobile").css("color","rgba(230, 50, 30, 1)");
        $(".ra-text_block").css("display","block");
        $(".ra-block1").css("display","block");
    });
</script>

<?php wp_nav_menu (array('theme_location' => 'Menu9','container_class' => 'nav_menu','container_id' => 'nav_menu_1')); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
