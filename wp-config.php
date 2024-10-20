<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'sgbd3' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')QU@),P]_/qMOaFpKTXm?_.!)xpntiN(ObuL:j*h^$)j!BIDP {R:P?]dO^+jV{~' );
define( 'SECURE_AUTH_KEY',  'i;rut:NOg2VM&DTRLS{!wE.`^60TN[#sxqnrCIUGg:)*WimP-&)sc>j4hgjKG>}9' );
define( 'LOGGED_IN_KEY',    'TG3)rI,4~iW4_|I!~-Zqho&(OXZT2}wMKr;(f-3R2G6$W Z%1<41R#</}/.Xxy#-' );
define( 'NONCE_KEY',        '$bYEE@1pb0aMX*2c4a9z$-W-lFEXCo^mGxH67}Sh!qkg.$UjXS0QKI:[G!$R4Ci}' );
define( 'AUTH_SALT',        ';mq?u_@EeU_Je9i^{Cs}%Nk3lbirGNWSP1fOf.BDH,4hg/CNe$aGE|{f&GnR.Wu@' );
define( 'SECURE_AUTH_SALT', 'X`>vp3)L%YU$+Zsm8.8a+ae+1YhH`>4|n+k5K3d-tSe_H>~~%SP3T%>++X3c$I^I' );
define( 'LOGGED_IN_SALT',   '5N|oiwG]l//_%gKH/Pt-UoR2h(&dlEyQbGd=0M>4VF*!8/l5.)%gND@p({Mxv)~;' );
define( 'NONCE_SALT',       'hb`>OsY+$.2=&1C5& 8F<8gJZ.[oSl:a9Jxw{=T}xA6,<ZQ,>!MnPUp)R7n9Ej>r' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
