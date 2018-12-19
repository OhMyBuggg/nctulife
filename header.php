<?php
    $GLOBALS['q_config']['language'] = 'zh';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
        <!--<link rel="stylesheet" href="<?php bloginfo('template_url');?>/reset.css" type="text/css" media="screen" />-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen and (min-width: 701px)"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style-mobile.css" type="text/css" media="screen and (max-width:700px)"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/perfect-scrollbar/css/perfect-scrollbar.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/lightbox2/dist/css/lightbox.css">
	<?php


    if(is_page('homepage') || is_page_template('page-templates/template-newslist.php') || is_single() || is_page('videolist') || is_page('search')){ /*首頁*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/css/homepage.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/homepage-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';


        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/gallery.css" type="text/css" media="screen and (min-width: 701px)" />';
    }
    else if(is_page('intro')||is_page('dean')||is_page('vice_dean')||is_page('staff') || is_page('history_of_the_deans')){/*學院簡介*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/css/intro.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/intro-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
    }
    else if(is_page('regulations_and_forms')||is_page('conference_room')){/*下載專區*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/css/downloads.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/downloads-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
    }
    else if(is_page('exchange_student')||is_page('joint_dual_degree')||is_page('academic_exchange')||is_page('activity_record')){/*國際交流合作-國際學術合約*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/inter_contract.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/inter_contract-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';

    }
    else if(is_page('gallery')||is_page('gallery_list')){/*國際交流合作-國際學術合約*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/gallery.css" type="text/css" media="screen and (min-width: 701px)" />';
    }
    else if(is_page('studying_abroad')){/*國際交流合作-出國計畫*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/studying_abroad.css" type="text/css" media="screen and (min-width:701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/studying_abroad-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';

    }
    else if(is_page('academics')||is_page('research_centers')||is_page('academics_test')){/*學術單位*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/academics.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/academics-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
    }
    else if(is_page('research_achievements') || is_page('most_subsided_projects') || is_page('research_highlights') || is_page('national_labs')){/*研究發展*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/css/research.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/mobile-css/research-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
    }
    else if( is_page('admissions')||is_page('mainland_overseas_chinese') || is_page('international_admissions') ){/*招生資訊*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/admissions.css" type="text/css" media="screen and (min-width: 701px)" />';
        
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/admissions-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
    }
    else if( is_page('learning_info') ){/*修業資訊*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/learning_info.css" type="text/css" media="screen and (min-width: 701px)" />';
        
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/admissions-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
    }
    else if( is_page('cooperation') ){/*產學合作*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/cooperation.css" type="text/css" media="screen and (min-width: 701px)" />';
        
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/admissions-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
    }
    else if( is_page('enroll_info') ){/*招生資訊*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/enroll_info.css" type="text/css" media="screen and (min-width: 701px)" />';
        
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/admissions-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
    }
    else if(is_page('contact')){/*聯絡我們*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/css/contact.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/intro-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
    }


    ?>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url');?>/js/jquery.preload.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url');?>/js/jquery.mousewheel.min.js" type="text/javascript"></script>
        <script src='<?php bloginfo('template_url');?>/js/perfect-scrollbar/js/perfect-scrollbar.jquery.js'></script>
        <script src='<?php bloginfo('template_url');?>/js/lightbox2/dist/js/lightbox.js'></script>
<?php
    if(is_page('academics')){
        echo '
    <script src="' ; bloginfo('template_url') ; echo '/js/jumptopage.js" type="text/javascript" media="screen and (min-width:701px)"></script>';
    }else if(is_page_template('template-newslist.php')){
        echo '<script src="' ; bloginfo('template_url') ; echo '/js/jumptopage.js" type="text/javascript"></script>';
    }
?>
<?php wp_head(); ?>
</head>
<body>

<div class="mobile_header formobile">
                    <div class="bottom-dropbtn">
                        <div id="menucontainer" class="menubuttoncontainer">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                        </div>
                    </div>

		<div id="mySidenav" class="sidenav">
 			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><div class="close_btn"></div></a>
            <div class="lang_switch"><a href="<?php echo site_url(); ?>/homepage/?lang=zh" style="letter-spacing:0.4em;">中文</a>&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url(); ?>/en-homepage/?lang=en">English</a></div>
			<div class="sidenavlink">
			    <a href="<?php echo site_url(); ?>"><div id="mysidetext1" class="menu_block" style="transition:0.8s;"><div class="header-icon header-icon0"><div class="menutext">首頁</div></div></div></a>
                            <a href="<?php echo site_url(); ?>/intro"><div id="mysidetext2" class="menu_block" style="transition:1.2s;"><div class="header-icon header-icon1"><div class="menutext">系所簡介</div></div></div></a>
                            <a href="<?php echo site_url(); ?>/academics"><div id="mysidetext3" class="menu_block"  style="transition:1.6s;"><div class="header-icon header-icon2"><div class="menutext">學術單位</div></div></div></a>-
                            <a href="<?php echo site_url(); ?>/research_achievements"><div id="mysidetext5" class="menu_block" style="transition:2.4s;"><div class="header-icon header-icon4"><div class="menutext">研究發展</div></div></div></a>
                            <!--<a href="<?php echo site_url(); ?>/admissions"><div id="mysidetext4" class="menu_block"  style="transition:2s;"><div class="header-icon header-icon3"><div class="menutext">招生資訊</div></div></div></a>-->
                            <a href="<?php echo site_url(); ?>/learning_info"><div id="mysidetext4" class="menu_block"  style="transition:2s;"><div class="header-icon header-icon3"><div class="menutext">修業資訊</div></div></div></a>
                            <!--<a href="<?php echo site_url(); ?>/exchange_student"><div id="mysidetext6" class="menu_block" style="transition:2.8s;"><div class="header-icon header-icon5"><div class="menutext">國際交流合作</div></div></div></a>-->
                            <a href="<?php echo site_url(); ?>/cooperation"><div id="mysidetext6" class="menu_block" style="transition:2.8s;"><div class="header-icon header-icon5"><div class="menutext">產學合作</div></div></div></a>
                            <!--<a href="<?php echo site_url(); ?>/regulations_and_forms"><div id="mysidetext7" class="menu_block" style="transition:3.2s;"><div class="header-icon header-icon6"><div class="menutext">下載專區</div></div></div></a>-->
                            <a href="<?php echo site_url(); ?>/enroll_info"><div id="mysidetext7" class="menu_block" style="transition:3.2s;"><div class="header-icon header-icon6"><div class="menutext">招生資訊</div></div></div></a>
                            <a href="<?php echo site_url(); ?>/contact"><div id="mysidetext2" class="menu_block" style="transition:1.2s;"><div class="header-icon header-icon7"><div class="menutext">聯絡我們</div></div></div></a>


            <div class="mobile-foot"> <!--AnnieDisplayNone-->
		<div class="foot-line"></div>
                <div class="foot-top">
                    <p class="foot-font-top formobile">TEL│886-3-572-7077</p>
                    <p class="foot-font-top formobile">FAX│886-3-571-9507</p>
                    <p class="foot-font-top formobile">E-MAIL│science@cc.nctu.edu.tw</p>
                </div>
                <div class="foot-bottom">
                <p class="foot-font-bottom formobile">300 新竹市東區大學路1001號<br>基礎科學教學研究大樓101室</p>
                </div>
            </div>


			</div>
		</div>

		<!-- Use any element to open the sidenav -->
		<span onclick="openNav()" class="dropbtn"></span>

		<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
                <div class="mobile-header formobile">交通</br>大學</div> <!--AnnieDisplayNone-->
                <div class="mobile-header-line"></div>
                <!-- add in dropdown btn-->
                <div id="header-block2">生</div>
                <div id="header-block3">科</div>
                <div id="header-block4">院</div>
                <div id="header-block8">產業博士班</div>
                <div id="header-block5">國立交通大學</div>
                <div id="header-block6">Ph.D in Industrial Development of<br>College of Biological Science and Technology</div>
                <div id="header-block7">Ph.D in<br>Industrial<br>Development<br>of<br>CBST</div>
		<a href="<?php echo site_url(); ?>"><div class="header-block-link"></div></a>
</div>

<div id="header">
	<div class="box mobilehidden">
	    <div id="header-block0">
	        <div id="header-block1"></div>
        	<a href="<?php echo site_url(); ?>" class="header__icon" id="header__icon"></a>
        	<!-- add in dropdown btn-->

                <div class="mobile-header formobile">交通</br>大學</div> <!--AnnieDisplayNone-->
                <div class="mobile-header-line"></div>
                <!-- add in dropdown btn-->
                <div id="header-block2">生</div>
                <div id="header-block3">科</div>
                <div id="header-block4">院</div>
                <div id="header-block8">產業博士班</div>
                <div id="header-block5">國立交通大學</div>
                <div id="header-block6">Ph.D in Industrial Development of<br>College of Biological Science and Technology</div>
                <div id="header-block7">Ph.D in<br>Industrial<br>Development<br>of<br>CBST</div>

            </div>
            <a href="<?php echo site_url(); ?>"><div id="header-block-link"></div></a>
            <div id="header-foot"></div>
            <div id="header-icon0">
            <a href="<?php echo site_url(); ?>/intro">
                <div class="header-icon header-icon1"><div class="header-text">系所簡介</div></div>
            </a>
            <a href="<?php echo site_url(); ?>/academics">
                <div class="header-icon header-icon2"><div class="header-text">學術單位</div></div></a>
            <a href="<?php echo site_url(); ?>/research_achievements">
                <div class="header-icon header-icon4"><div class="header-text">研究發展</div></div>
            </a>
            <!--<a href="<?php echo site_url(); ?>/admissions">
                <div class="header-icon header-icon3"><div class="header-text">招生資訊</div></div>
            </a>-->
            <a href="<?php echo site_url(); ?>/learning_info">
                <div class="header-icon header-icon3"><div class="header-text">修業資訊</div></div>
            </a>    
            <!--<a href="<?php echo site_url(); ?>/exchange_student">
                <div class="header-icon header-icon5"><div class="header-text">國際交流合作</div></div>
            </a>-->
            <a href="<?php echo site_url(); ?>/cooperation">
                <div class="header-icon header-icon5"><div class="header-text">產學合作</div></div>
            </a>
            <!--<a href="<?php echo site_url(); ?>/regulations_and_forms">
                <div class="header-icon header-icon6"><div class="header-text">下載專區</div></div>
            </a>-->
            <a href="<?php echo site_url(); ?>/enroll_info">
                <div class="header-icon header-icon6"><div class="header-text">招生資訊</div></div>
            </a>
            <a href="<?php echo site_url(); ?>/contact">
                <div class="header-icon header-icon7"><div class="header-text">聯絡我們</div></div>
            </a>
            </div>
	</div>
</div>

<script>
/* Set the width of the side navigation to 250px */
function openNav() {
    var menutextheight = "8vh";
    document.getElementById("mySidenav").style.height = "100%";
    document.getElementById("menucontainer").style.opacity = "0";
    document.getElementById("mysidetext1").style.height = menutextheight;
    document.getElementById("mysidetext2").style.height = menutextheight;
    document.getElementById("mysidetext3").style.height = menutextheight;
    document.getElementById("mysidetext4").style.height = menutextheight;
    document.getElementById("mysidetext5").style.height = menutextheight;
    document.getElementById("mysidetext6").style.height = menutextheight;
    document.getElementById("mysidetext7").style.height = menutextheight;
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.height = "0vh";
    document.getElementById("menucontainer").style.opacity = "1";
    document.getElementById("mysidetext1").style.height = "0px";
    document.getElementById("mysidetext2").style.height = "0px";
    document.getElementById("mysidetext3").style.height = "0px";
    document.getElementById("mysidetext4").style.height = "0px";
    document.getElementById("mysidetext5").style.height = "0px";
    document.getElementById("mysidetext6").style.height = "0px";
    document.getElementById("mysidetext7").style.height = "0px";

}
</script>
<!--small screen header-->
<!--
<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

// Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');}
        }
      }
    }
</script>
-->

<!--menu list-->
<!--<script type="text/javascript">
$(document).ready(function() {
    $(".toggle").click(function() {
        $(this).toggleClass("active");
        $(".nav").slideToggle();
    });
    $(".nav > ul > li:has(ul) > a").append('<div class="arrow-bottom"></div>');
});
</script>-->
