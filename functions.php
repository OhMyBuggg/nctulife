<?php
    register_nav_menus(
        array(
            'Menu1' => __( '公告列表' ),
            'Menu2' => __( '學院簡介' ),
            'Menu3' => __( '國際交流合作' ),
            'Menu4' => __( '研究發展' ),
            'Menu5' => __( '學術單位' ),
            'Menu6' => __( '招生資訊' ),
            'Menu7' => __( '學院簡介(英)' ),
            'Menu8' => __( '國際交流合作(英)' ),
            'Menu9' => __( '研究發展(英)' ),
            'Menu10' => __( '學術單位(英)' ),
            'Menu11' => __( '招生資訊(英)' ),
            'Menu12' => __( '下載專區(英)' ),
        )
    );
    
    add_theme_support( 'post-thumbnails' );

    @ini_set( 'upload_max_size' , '25M' ); 

?>
