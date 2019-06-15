<?php

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        // register blocks

        acf_register_block(array(
            'name'              => 'aboutus',
            'title'             => __('About us'),
            'description'       => __('A custom about us block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-page',
            'keywords'          => array( 'contactus, acf' ),
        ));

        acf_register_block(array(
            'name'              => 'features',
            'title'             => __('Features'),
            'description'       => __('A features block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-page',
            'keywords'          => array( 'features, acf' ),
        ));

        acf_register_block(array(
            'name'              => 'mainscreen',
            'title'             => __('Mainscreen'),
            'description'       => __('A mainscreen block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-page',
            'keywords'          => array( 'mainscreen, acf' ),
        ));

    }
}

function custom_block_render_callback( $block ) {
    // Remove "acf/" from name so we can use a path-friendly slug
    $slug = str_replace( 'acf/', '', $block['name'] );
    
    // include a template part from within the "template-parts/block" folder
    if( file_exists( STYLESHEETPATH . "/template-parts/block-{$slug}.php" ) ) {
        include( STYLESHEETPATH . "/template-parts/block-{$slug}.php" );
    }
}