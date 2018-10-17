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
define('DB_NAME', 'ptt01');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'D!?m8U7#n=RrJx]uQ$1Uf;%No3<5tU`9e5h;4)P}i#j{>T^SgIQ BJFpxIQ@MJn$');
define('SECURE_AUTH_KEY', 'F#*Zl!>R.UIoF<?vD?Jns:!.)&?a<^QPMkMEUd9@}N-6V|rfJ{.qS[LquO3cx<:@');
define('LOGGED_IN_KEY', 'HbX!yP9#Oh4pA^|,]1Ev;0*?7=Pl]nqO.D8%wb_DN~P#3f{~(5AQNe4Ul 0QlHHQ');
define('NONCE_KEY', '_E,L-}/LYZ8$4-H@)lR^m>rq-Pa,*zC(6b0(PPLvC3QXene_*s9V`YnJ/Jx&jJ6F');
define('AUTH_SALT', '[?S2}.F|}uAeG /g?%Z}iaX B!ddT`ikXYFvM_2a- [/cjgjR5IE}kcIIU[q/ ?=');
define('SECURE_AUTH_SALT', 'xzg}id.m=qMdYsbQyGO2RP2@VPL5sFpu+PTN:oY[a-fAdJFG7LfBvLl,_9]d78vd');
define('LOGGED_IN_SALT', 'TVSVW_[[:Cheu5aIz-dN)C^PCVwG1)Q@r3[{N}{U2xCLXXe~l5cbuGM*EzC-j|m#');
define('NONCE_SALT', 'Mr$D[=14zvEoNUIUCk-<ZIqjhS?uSrF m#aS3y>c0P9^hfGk=XlrFrtoFg;+vX1&');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'ptt_';


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

