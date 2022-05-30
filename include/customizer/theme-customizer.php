<?php 

    require get_template_directory().'/include/customizer/social.php';
    require get_template_directory().'/include/customizer/layout.php';

    function bm_customize_register( $wp_customize ) {

        $wp_customize->get_section('title_tagline')->title = 'Informações Principais';
        $wp_customize->get_section('title_tagline')->description = 'Altere com cuidado';
        $wp_customize->get_section('custom_css')->description = '';

        $wp_customize->add_panel('opcoes', array(
            'title' => 'Opções do Tema',
            'priority' => 1
        ));

        bm_social_customizer( $wp_customize );

        bm_layout_customizer( $wp_customize );

    }