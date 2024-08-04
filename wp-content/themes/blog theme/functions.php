<?php
function meu_tema_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'meu_tema_setup' );
function criar_post_type_projetos() {
    register_post_type( 'projetos',
        array(
            'labels' => array(
                'name' => __( 'Projetos' ),
                'singular_name' => __( 'Projeto' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail' )
        )
    );
}
add_action( 'init', 'criar_post_type_projetos' );
