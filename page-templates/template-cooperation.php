<?php
/*
 * Template Name: cooperation
 */
?>

<?php get_header(); ?>

<div class="page-intro">
                <div class="intro-subpage-1">    
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
                                <div class="circle_p1_1 textbox textbox1">
                                     萬能生物科技
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
                            <div class="ra-circle_3">
                                <div class="circle_p1_1 textbox textbox0">
                                    康健基因科技
                                </div>
                                <div class="circle_p1_1 textbox textbox1">
                                    台灣生捷科技
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
                        </div>
                        <div class="ra-circle_second">
                            <div class="ra-circle_4">
                                <div class="circle_p1_2 textbox textbox0">
                                    百芮國際
                                </div>
                                <div class="circle_p1_2 textbox textbox1">
                                    曜楊實業
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
                            <div class="ra-circle_5">
                                <div class="circle_p1_2 textbox textbox0">
                                    琦芯科技
                                </div>
                                <div class="circle_p1_2 textbox textbox1">
                                    強普生技
                                </div>
                                <div class="circle_p1_2 textbox textbox2">
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
<!--往左右頁移動-->
    <div class="left"></div>
    <div class="right"></div>
</div>


<script>
    var now = 0;

    $(document).ready(function() {
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
