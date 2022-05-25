<?php 

    require get_template_directory().'/include/customizer/social.php';

    function bm_customize_register( $wp_customize ) {

        bm_social_customizer( $wp_customize );

    }