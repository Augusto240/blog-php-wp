<?php
/*
 Plugin Name: Meu Plugin
 Plugin URI: http://meusite.com
 Description: Um plugin simples para adicionar posts populares.
 Version: 1.0
 Author: Seu Nome
 Author URI: http://seusite.com
*/

function exibir_posts_populares() {
    $args = array(
        'posts_per_page' => 5,
        'orderby' => 'comment_count'
    );
    $popular_posts = new WP_Query( $args );
    
    if ( $popular_posts->have_posts() ) {
        echo '<ul>';
        while ( $popular_posts->have_posts() ) {
            $popular_posts->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        echo '</ul>';
    }
}
add_shortcode( 'posts_populares', 'exibir_posts_populares' );

function shortcode_meu_nome() {
    return 'Seu Nome';
}
add_shortcode( 'meu_nome', 'shortcode_meu_nome' );

// Shortcode para exibir o nome do autor
function shortcode_meu_nome() {
    return 'Seu Nome';
}
add_shortcode( 'meu_nome', 'shortcode_meu_nome' );

// Shortcode para exibir a data atual
function shortcode_data_atual() {
    return date('d/m/Y');
}
add_shortcode( 'data_atual', 'shortcode_data_atual' );
