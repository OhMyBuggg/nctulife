<?php
/*
 * Template Name: en-homepage
 */
    $translate = 1;
?>
<?php get_header('en_header'); ?>
<div class="hp">
    <div class="hp-p01_next hp-p01_1" style="display:none;"></div>
    <div class="hp-p01 hp-p01_0">
        <div class="language-opt">
        <a href="<?php echo site_url(); ?>/?lang=zh">
            <div class="lang-chi">
            </div>
        </a>
        </div>
    </div>
        <div id="p5-announce-block">
            <div id="copy-right-title">著作權聲明</div>
            <div id="copy-right-text"> 1.陽明交通大學生科院產業博士班網站(以下簡稱本網站)上刊載之所有內容，除著作權法規定不得為著作權之標的(如法律、命令、公務員撰擬之講稿、新聞稿等--請參考著作權法第9條規定)外，其他包括文字敘述、攝影、圖片、錄音、影像及其他資訊，均受著作權法保護。<br>2.本網站所提供相關連結網站之網頁或資料，均為被連結網站所提供，相關權利為該等網站或合法權利人所有，本網站不擔保其正確性、即時性或完整性。</div>
        </div>
        <div id="foot">
            <div id="foot-left">
                <p id="foot-font-1">
                    <?php echo $translate ? 'NYCU' : '國立陽明交通大學' ?>
                </p>
                <p id="foot-font-2">
                    <?php echo $translate ? '<br>' : '生科院產業博士班' ?>
                </p>
                <p id="foot-font-3">Industrial Development<br>Graduate Program of CBT</p>
            </div>
            <div id="foot-center">
                <div class="foot-font-4"><img class="ft-icon" src="<?php bloginfo('template_url')?>/image/icon/icon_info_01.svg"> 886-3-572-9287</div>
                <div class="foot-font-4"><img class="ft-icon" src="<?php bloginfo('template_url')?>/image/icon/icon_info_02.svg"> 886-3-571-9288</div>
                <div class="foot-font-4"><img class="ft-icon" src="<?php bloginfo('template_url')?>/image/icon/icon_info_03.svg"> meiling@cc.nctu.edu.tw</div>
                <div class="foot-font-4"><img class="ft-icon" src="<?php bloginfo('template_url')?>/image/icon/icon_info_04.svg"> 
                    <?php echo $translate ? 'Room 117, Lab Building 1, 75 Bo-Ai Street, Hsin-Chu, Taiwan 300, ROC' : '300 新竹市博愛街75號 賢齊館325室' ?>
                </div>
                <hr class="ft-hr"/>
                <div class="foot-font-4" style="float:left;">
                    <a href="http://www.nctu.edu.tw/">
                        <?php echo $translate ? 'NYCU' : '國立陽明交通大學' ?>
                    </a>
                    <a href="https://pidcbt.nctu.edu.tw/wp-content/uploads/2019/07/產業博士班網站導覽.pdf">
                        <?php echo $translate ? '' : ' | 網頁導覽' ?> | 
                    </a>
                    <a target=_blank href="https://pidcbt.nctu.edu.tw/wp-content/uploads/2019/04/Web_Design_Guideline.pdf">
                        <?php echo $translate ? 'Web Design Guideline' : '設計規範' ?>
                    </a>
                    <a id="hp-announce">
                        <?php echo $translate ? '' : ' | 著作權聲明' ?>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var now_bg = 0;
    var frequency = 5000;
    var now_news = 0;
    
    function showNext(){
        old_bg = now_bg;
        now_bg = (now_bg+1)%4;
        next_bg = (now_bg+1)%4;
        $(".hp-p01").addClass("hp-p01_"+now_bg).removeClass("hp-p01_"+old_bg);
        $(".hp-p01_next").addClass("hp-p01_"+next_bg).removeClass("hp-p01_"+now_bg);
        timer = setTimeout(showNext, frequency);
    }
    
    $( document ).ready(function(){
        timer = setTimeout(showNext, frequency);
    });
    
    $("#hp-announce").hover(function(){
        $("#p5-announce-block").fadeIn(500);
    },function(){
        $("#p5-announce-block").fadeOut(500);
    });

</script>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
