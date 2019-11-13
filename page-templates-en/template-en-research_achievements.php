<?php
/*
 *Template Name:en-research_achievements
 */
?>
<?php get_header('en_header'); ?>
<div class="page-research_achievements webpage">
    <p class="subtitled ra-title1_1 mobilehidden">Research & Development</p>
    <div class="container">    
        <!--<p class="subtitled ra-title1 formobile">重點研究</p>-->
        <div class="ra-color_block"></div>
        <div class="ra-block">
        <p class="subtitle ra-title2">Research Focuses<br>by Field</p>
            <!--
            <div class="ra-btn ra-btn1"></div>
            <div class="ra-line formobile"></div>
            <a href="<?php echo site_url(); ?>/most_subsided_projects"><div class="ra-btn ra-btn2"></div></a>
            -->
            <div class="ra-circle_block mobilehidden">
                <div class="ra-circle_b subtitled mobilehidden">Basic Interdisciplinary Subjects</div>
                <!--<a href="<?php echo site_url(); ?>/research_highlights#pyhsics">-->
                <a href="https://cbt.nctu.edu.tw/research_highlights/#bioinfo">
                    <div class="ra-circle_l ra-c1 subtitled mobilehidden">Bioinformatics</div>
                </a>
                <!--</a>-->
                <!--<a href="<?php echo site_url(); ?>/research_highlights#mathmetics">-->
                <a href="https://cbt.nctu.edu.tw/research_highlights/#cell">
                    <div class="ra-circle_2 ra-c2 subtitled mobilehidden">Cells<br>and<br>Tumors</div>
                </a>
                <!--</a>-->
                <!--<a href="<?php echo site_url(); ?>/research_highlights#chemistry">-->
                <a href="https://cbt.nctu.edu.tw/research_highlights/#protein">
                    <div class="ra-circle_3 ra-c3 subtitled mobilehidden">Protein<br>and<br>Biomass Energy</div>
                </a>
                <!--</a>-->
                <a href="https://cbt.nctu.edu.tw/research_highlights/#biophysics">
                    <div class="ra-circle_4 ra-c4 subtitled mobilehidden"><br><br><br>Biophysics,<br>Nano Inspection<br>and<br>Neuroscience</div>
                </a>
            </div>
            <div class="ra-circle_block formobile">
                <div class="ra-c1_mobile text formobile">物</div>
                <div class="ra-c2_mobile text formobile">數</div>
                <div class="ra-c3_mobile text formobile">化</div>
            </div>

            <!--<div class="ra-text_block ra-block2">
                <div class="subtitle ra-subtitle ra-title3 mobilehidden">數統領域</div>
                <hr class="ra-hr">
                <div class="ra-subtitled ra-text">數據科學組合數學</div>
                <div class="ra-subtitled ra-text">數學建模科學計算</div>
                <div class="ra-subtitled ra-text">微分方程動態系統</div>
                <div class="ra-subtitled ra-text">統計應用財務工程</div>
                <div class="ra-subtitled ra-text">數論幾何與分析</div>
            </div>
            <div class="ra-text_block ra-block1">
                <div class="subtitle ra-subtitle ra-title3 mobilehidden">物理領域</div>
                <hr class="ra-hr">
                <div class="ra-subtitled ra-text">光電科學</div>
                <div class="ra-subtitled ra-text">理論物理計算物理</div>
                <div class="ra-subtitled ra-text">奈米科技</div>
                <div class="ra-subtitled ra-text">凝態物理低溫物理</div>
                <div class="ra-subtitled ra-text">半導體物理與元件</div>
            </div>
            <div class="ra-text_block ra-block3">
                <div class="subtitle ra-subtitle ra-title3 mobilehidden">化學領域</div>
                <hr class="ra-hr">
                <div class="ra-subtitled ra-text">化學生物生物分析</div>
                <div class="ra-subtitled ra-text">高分子化學光電材料</div>
                <div class="ra-subtitled ra-text">高等有機化學無機化學</div>
                <div class="ra-subtitled ra-text">綠色能源</div>
                <div class="ra-subtitled ra-text">分子科學理論化學</div>
            </div>-->

        </div>
    </div>
    <!--<a class="icon_down icon_ra" href="http://188.166.179.62/most_subsided_projects" style="opacity:1; transform: matrix(1,0,0,1,0,0);"></a>
-->
</div>
<div class="mobile">
    <div class="intro-bigTitle_1">研究發展</div>
    <div class="container">
        <a class="link-1" href="https://cbt.nctu.edu.tw/research_achievements/"></a>
        <a class="link-2" href="https://cbt.nctu.edu.tw/research_achievements/"></a>
        <a class="link-3" href="https://cbt.nctu.edu.tw/research_achievements/"></a>
        <a class="link-4" href="https://cbt.nctu.edu.tw/research_achievements/"></a>
    </div>
</div>

<script>


    $(".ra-c1").hover(
        function(){
            $(".ra-block1").fadeIn(500,"swing");
        },function(){
            $(".ra-block1").fadeOut(500,"swing");
        }
    );
    $(".ra-c1_mobile").hover(
        function(){
            $(".ra-block1").fadeIn(500,"swing");
            $(".ra-c1_mobile").css("border","1px solid rgba(230, 50, 30, 1)");
            $(".ra-c1_mobile").css("color","rgba(230, 50, 30, 1)");
            $(".ra-block1").css("display","block");
        },function(){
            $(".ra-block1").fadeOut(500,"swing");
        }
    );
    $(".ra-c2").hover(
        function(){
            $(".ra-block2").fadeIn(500,"swing");
        $(".ra-block1").fadeOut(500,"swing");
        },function(){
            $(".ra-block2").fadeOut(500,"swing");
        }
    );
    $(".ra-c2_mobile").hover(
        function(){
            $(".ra-block2").fadeIn(500,"swing");
            $(".ra-block1").css("display","none");
            $(".ra-c1_mobile").css("border","1px solid rgba(100, 100, 100, 1)");
            $(".ra-c1_mobile").css("color","rgba(100,100,100,1)");
        },function(){
            $(".ra-block2").fadeOut(500,"swing");
        }
    );
    $(".ra-c3").hover(
        function(){
            $(".ra-block3").fadeIn(500,"swing");
        $(".ra-block1").fadeOut(500,"swing");
        },function(){
            $(".ra-block3").fadeOut(500,"swing");
        }
    );
    $(".ra-c3_mobile").hover(
        function(){
            $(".ra-block3").fadeIn(500,"swing");
            $(".ra-block1").css("display","none");
            $(".ra-c1_mobile").css("border","1px solid rgba(100, 100, 100, 1)");
            $(".ra-c1_mobile").css("color","rgba(100,100,100,1)");
        },function(){
            $(".ra-block3").fadeOut(500,"swing");
        }
    );
    
    $(document).ready(function() {
        $(".nav_menu").on("click",function(){});
    $(".ra-c1_mobile").css("border","1px solid rgba(230, 50, 30, 1)");
    $(".ra-c1_mobile").css("color","rgba(230, 50, 30, 1)");
        $(".ra-block1").css("display","block");
    });
</script>
