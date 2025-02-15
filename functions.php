<?php
function eliminar_estilos_wordpress() {
    // Desactivar los estilos por defecto de WordPress
    wp_dequeue_style('wp-block-library'); // Elimina los estilos de Gutenberg
    wp_dequeue_style('wp-block-library-theme'); // Elimina más estilos de Gutenberg
    wp_dequeue_style('global-styles'); // Elimina los estilos globales de WordPress 5.9+
    wp_dequeue_style('classic-theme-styles'); // Para WordPress 6.1+
}
add_action('wp_enqueue_scripts', 'eliminar_estilos_wordpress', 100);

function deshabilitar_estilos_gutenberg() {
    remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
}
add_action('after_setup_theme', 'deshabilitar_estilos_gutenberg');