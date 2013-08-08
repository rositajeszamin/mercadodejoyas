<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'mercadodejoyas');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'mercadodejoyas');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'm3rc4d0d3j0y4s');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'k}cTWm+q_*otH*+U,7;x-TA#s*q-3K&sf2 OIV/aR+R^j#!28Lns0iHZ%5hlA#nc'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'o=3Gz9v4*-F8 @%q.)R9I;ew+ToXYS<VR-&ms|++ilt%Vkn&*wC}W%_P}VPO|YKx'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '.t-|$O7~g4-yEtx&tLy77k]Gj{`@{j,()I6-W;n:p{7J7sBoikICea%K58m-Qu(`'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'b<#5M9dzyBsT-/=`vCC!H--e%^Fi{?r+iDW@Nvd*4uH)x^.lv&34[i>Y:e;+-Apm'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '^lSh+-,}p+k|TFldLOUi|+tn.2ZmI()GxF]P|fw?Pzjg]+99j}o-s6jFLP[rQ!E+'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'V|Z~OwTYk?RDV&l-mSp*R1Cn@@O@(}n=V6F`;6nXZ4;(!N6c,p *l^|2nw=Q8,#|'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '=sAG$0B>qs.GuA)/fGjxSiT>1bNqy5o22w0ZR|!qO#9fTl_aH$^Mc0Vk~4f8a+m:'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '.|OJ+A}YU-NZgvt`eaNyCX .GGxP|3]g%*;U&=*B7zqOWGkII)N]&[jO+Zm0w;XM'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

