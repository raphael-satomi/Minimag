<?php

    function bm_layout_customizer( $wp_customize ){

        // Settings
        $wp_customize->add_setting( 'bm_topmenu_show', array('default' => 'yes') );
        $wp_customize->add_setting( 'bm_search_show', array('default' => 'yes') );
        $wp_customize->add_setting( 'bm_privacy_url', array('default' => '') );
        
        // Sections
        $wp_customize->add_section('bm_layout_section', array(
            'title' => 'Opções de Layout',
            'priority' => 2
        ));
    
        // Controllers
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'bm_topmenu_show',
                array(
                    'label' => 'Mostrar menu superior',
                    'section' => 'bm_layout_section',
                    'settings' => 'bm_topmenu_show',
                    'type' => 'checkbox',
                    'choices' => array(
                        'yes' => 'Sim'
                    )
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'bm_search_show',
                array(
                    'label' => 'Mostrar Busca',
                    'section' => 'bm_layout_section',
                    'settings' => 'bm_search_show',
                    'type' => 'checkbox',
                    'choices' => array(
                        'yes' => 'Sim'
                    )
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'bm_privacy_url',
                array(
                    'label' => 'Página de Política de privacidade',
                    'section' => 'bm_layout_section',
                    'settings' => 'bm_privacy_url',
                    'type' => 'dropdown-pages'
                )
            )
        );

    }