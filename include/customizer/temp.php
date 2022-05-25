<?php

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bm_youtube',
            array(
                'label' => 'Link do Youtube',
                'section' => 'bm_social_section',
                'settings' => 'bm_youtube',
                'type' => 'text'
            )
        )
    );