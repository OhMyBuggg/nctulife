<?php
/*
 * Template Name: en-cooperation
 */
?>

<?php get_header('en_header'); ?>

<div class="page-intro">
    <div class="intro-subpage-1">    
        <div class="intro-bigTitle_1">Industry-Academia Collaboration</div>
        <!--下半部分-->
        <div class="ra-circle_block">
            <div class="ra-circle_first">
                <div class="ra-circle_l">
                    <div class="circle_p1_1 textbox textbox0">
                        Delta Electronics, Inc.
                    </div>
                    <div class="circle_p1_1 textbox textbox1">
                        AllBio science, Inc.
                    </div>
                    <div class="circle_p1_1 textbox textbox2">
                        
                    </div>
                    <div class="circle_p2 textbox textbox0">
                        <!--股份有限公司-->       
                    </div>
                    <div class="circle_p2 textbox textbox1">
                        <!--股份有限公司-->       
                    </div>
                    <div class="circle_p2 textbox textbox2">
                        <!--股份有限公司-->       
                    </div>
                </div>
                <div class="ra-circle_2">
                    <div class="circle_p1_1 textbox textbox0">
                        Meridigen Biotechnology
                    </div>
                    <div class="circle_p1_2 textbox textbox1">
                        
                    </div>
                    <div class="circle_p1_1 textbox textbox2">
                        
                    </div>
                    <div class="circle_p2 textbox textbox0">
                        <!--股份有限公司-->
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
                        The Health GeneTech Corporation
                    </div>
                    <div class="circle_p1_1 textbox textbox1">
                        
                    </div>
                    <div class="circle_p1_1 textbox textbox2">
                        
                    </div>
                    <div class="circle_p2 textbox textbox0">
                        <!--股份有限公司-->
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
                        Bio Race International, Inc.
                    </div>
                    <div class="circle_p1_1 textbox textbox1">
                        
                    </div>
                    <div class="circle_p1_1 textbox textbox2">
                        
                    </div>
                    <div class="circle_p2 textbox textbox0">
                        <!--股份有限公司-->
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
                        CheeShin Technology, Inc.
                    </div>
                    <div class="circle_p1_2 textbox textbox1">
                        
                    </div>
                    <div class="circle_p1_2 textbox textbox2">
                        
                    </div>
                    <div class="circle_p2 textbox textbox0">
                        <!--股份有限公司-->
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
                        Helios Bioelectronics Inc.
                    </div>
                    <div class="circle_p1_2 textbox textbox1">
                        
                    </div>
                    <div class="circle_p1_2 textbox textbox2">
                        
                    </div>
                    <div class="circle_p2 textbox textbox0">
                        <!--股份有限公司-->
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
<!--往左右頁移動-->
    <div class="left"></div>
    <div class="right"></div>
</div>


<script>
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
<?php get_footer(); ?>
