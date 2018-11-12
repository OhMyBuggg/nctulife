<?php
    $GLOBALS['q_config']['language'] = 'en';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>-->
<title>College of Science, NCTU</title>
        <!--<link rel="stylesheet" href="<?php bloginfo('template_url');?>/reset.css" type="text/css" media="screen" />-->
        <!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen and (min-width: 701px)"/>-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style-en.css" type="text/css" media="screen and (min-width: 701px)"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style-en-mobile.css" type="text/css" media="screen and (max-width:700px)"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/perfect-scrollbar/css/perfect-scrollbar.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/lightbox2/dist/css/lightbox.css">
	<?php
 
    if(is_page('en-homepage') || is_page_template('page-templates/template-newslist.php') || is_single() ||  is_page('search')){ /*首頁*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/css/en-homepage.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/en-homepage-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/css/gallery.css" type="text/css" media="screen and (min-width: 701px)" />';
    }
    else if(is_page('en-intro')||is_page('en-dean')||is_page('en-vice_dean')||is_page('en-staff') || is_page('en-history_of_the_deans')){/*學院簡介*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/css/en-intro.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/en-intro-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';

    }
    else if(is_page('en-regulations_and_forms')||is_page('en-conference_room')){/*下載專區*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/css/en-downloads.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/en-downloads-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
    }
    else if(is_page('en-exchange_student')||is_page('en-joint_dual_degree')||is_page('en-academic_exchange')||is_page('en-activity_record')){/*國際交流合作-國際學術合約*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/en-inter_contract.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/en-inter_contract-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';

    }
    else if(is_page('gallery')||is_page('gallery_list')){/*國際交流合作-國際學術合約*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/gallery.css" type="text/css" media="screen and (min-width: 701px)" />';
    }
    else if(is_page('en-studying_abroad')){/*國際交流合作-出國計畫*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/en-studying_abroad.css" type="text/css" media="screen and (min-width:701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/studying_abroad-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';

    }
    else if(is_page('en-academics')||is_page('en-research_centers')||is_page('academics_test')){/*學術單位*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/en-academics.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/en-academics-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
    }
    else if(is_page('en-research_achievements') || is_page('en-most_subsided_projects') || is_page('en-research_highlights') || is_page('en-national_labs')){/*研究發展*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/css/en-research.css" type="text/css" media="screen and (min-width: 701px)" />';

        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/mobile-css/en-research-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
    }
    else if( is_page('en-admissions')||is_page('en-mainland_overseas_chinese') || is_page('en-international_admissions') ){/*招生資訊*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url'); 
        echo'/css/en-admissions.css" type="text/css" media="screen and (min-width: 701px)" />';
        
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo'/mobile-css/en-admissions-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
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
    if(is_page('en-homepage')){
        echo '
    <script src="' ; bloginfo('template_url') ; echo '/js/homepage.js" type="text/javascript" media="screen and (min-width:701px)"></script>';
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
			    <a href="<?php echo site_url(); ?>/en-homepage"><div id="mysidetext1" class="menu_block" style="transition:0.8s;"><div class="header-icon header-icon0"><div class="menutext">Home</div></div></div></a>
                            <a href="<?php echo site_url(); ?>/en-intro"><div id="mysidetext2" class="menu_block" style="transition:1.2s;"><div class="header-icon header-icon1"><div class="menutext">About</div></div></div></a>
                            <a href="<?php echo site_url(); ?>/en-academics"><div id="mysidetext3" class="menu_block"  style="transition:1.6s;"><div class="header-icon header-icon2"><div class="menutext">Academics</div></div></div></a>
                            <a href="<?php echo site_url(); ?>/en-admissions"><div id="mysidetext4" class="menu_block"  style="transition:2s;"><div class="header-icon header-icon3"><div class="menutext">Admissions</div></div></div></a>
                            <a href="<?php echo site_url(); ?>/en-research_achievements"><div id="mysidetext5" class="menu_block" style="transition:2.4s;"><div class="header-icon header-icon4"><div class="menutext">Research</div></div></div></a>
                            <a href="<?php echo site_url(); ?>/en-exchange_student"><div id="mysidetext6" class="menu_block" style="transition:2.8s;"><div class="header-icon header-icon5"><div class="menutext">International</div></div></div></a>
                            <a href="<?php echo site_url(); ?>/en-regulations_and_forms"><div id="mysidetext7" class="menu_block" style="transition:3.2s;"><div class="header-icon header-icon6"><div class="menutext">Downloads</div></div></div></a>


            <div class="mobile-foot"> <!--AnnieDisplayNone-->
		<div class="foot-line"></div>
                <div class="foot-top">
                    <p class="foot-font-top formobile">TEL│886-3-572-7077</p>
                    <p class="foot-font-top formobile">FAX│886-3-571-9507</p>
                    <p class="foot-font-top formobile">E-MAIL│science@cc.nctu.edu.tw</p>
                </div>
                <div class="foot-bottom">
                <p class="foot-font-bottom formobile">Rm. 101, Science Building 3,</br>1001 University Road, Hsinchu, Taiwan 300, ROC</p>
                </div>
            </div>


			</div>
		</div>

		<!-- Use any element to open the sidenav -->
		<span onclick="openNav()" class="dropbtn"></span>

		<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
                <div class="mobile-header formobile">NCTU</div> <!--AnnieDisplayNone-->
                <div class="mobile-header-line"></div>
                <!-- add in dropdown btn-->
<!--
                <div id="header-block2">理</div>
                <div id="header-block3">學</div>
                <div id="header-block4">院</div>
                <div id="header-block5">國立交通大學</div>
-->
                <div id="header-block6">The College of Science</div>
                <div id="header-block7">The<br>College<br>of<br>Science</div>
		<a href="<?php echo site_url(); ?>/en-homepage"><div class="header-block-link"></div></a>
</div>

<div id="header">
	<div class="box mobilehidden">
	    <div id="header-block0">
	        <div id="header-block1"></div>
        	<a href="<?php echo site_url(); ?>/en-homepage" class="header__icon" id="header__icon"></a>
        	<!-- add in dropdown btn-->

                <div class="mobile-header formobile">交通</br>大學</div> <!--AnnieDisplayNone-->
                <div class="mobile-header-line"></div>
                <div id="header-block2">College</div>
                <div id="header-block4">of</div>
                <div id="header-block5">Science</div>
                <div id="header-block6">NCTU</div>
                <!--<div id="header-block7">The<br>College<br>of<br>Science</div>-->

            </div>
            <a href="<?php echo site_url(); ?>/en-homepage"><div id="header-block-link"></div></a>
            <div id="header-foot"></div>
            <div id="header-icon0">
            <a href="<?php echo site_url(); ?>/en-intro">
                <div class="header-icon header-icon1"><div class="header-text">About</div></div>
            </a>
            <a href="<?php echo site_url(); ?>/en-academics">
                <div class="header-icon header-icon2"><div class="header-text">Academics</div></div>
            </a>
            <a href="<?php echo site_url(); ?>/en-admissions">
                <div class="header-icon header-icon3"><div class="header-text">Admissions</div></div>
            </a>
            <a href="<?php echo site_url(); ?>/en-research_achievements">
                <div class="header-icon header-icon4"><div class="header-text">Research</div></div>
            </a>
            <a href="<?php echo site_url(); ?>/en-exchange_student">
                <div class="header-icon header-icon5"><div class="header-text">International</div></div>
            </a>
            <a href="<?php echo site_url(); ?>/en-regulations_and_forms">
                <div class="header-icon header-icon6"><div class="header-text">Downloads</div></div>
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
