<?php
/*
Plugin Name: SEO Redireccionador 301 Pro
Description: Redirecciones manuales ultra-ligeras para arquitectura SEO.
Version: 1.0
Author: Arquitecto de Visibilidad
*/

if (!defined('ABSPATH')) exit;

add_action('template_redirect', 'ejecutar_redirecciones_seo_pro');

function ejecutar_redirecciones_seo_pro() {
    // MAPA DE REDIRECCIONES (URL origen => URL destino)
    // No metas el dominio, solo el path relativo.
    $redirecciones = [
        '/url-vieja-basura/' => '/url-nueva-ganadora/',
        '/categoria/antigua/' => '/nicho-rentable/',
        '/post-que-no-posiciona/' => 'https://telegram.me/tu-canal-nicho', // Redirección externa directa
    ];

    $url_actual = rtrim($_SERVER['REQUEST_URI'], '/');

    foreach ($redirecciones as $origen => $destino) {
        if ($url_actual == rtrim($origen, '/')) {
            wp_redirect($destino, 301);
            exit;
        }
    }
}