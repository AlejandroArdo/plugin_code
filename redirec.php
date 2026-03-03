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

    // Obtenemos solo el path de la URL actual (ignorando query strings)
    $path_actual = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path_actual = '/' . trim($path_actual, '/');

    foreach ($redirecciones as $origen => $destino) {
        // Normalizamos el origen para la comparación
        $origen_normalizado = '/' . trim(parse_url($origen, PHP_URL_PATH), '/');

        if ($path_actual === $origen_normalizado) {
            wp_redirect($destino, 301);
            exit;
        }
    }
}
