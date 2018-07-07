<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'gifas');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lh&$S_zW+IdbY]Z(xS$ew.Dm>@G^..Y vKS6i!w) A+U.I;&]K{6gx;>y%nvb6qf');
define('SECURE_AUTH_KEY',  'U{]Q0;;W^EkqBk~])@[0OWwqh?.-,gpgp2HA$tRn[rZYWN2*JC:H#qiIwK(Rz0HR');
define('LOGGED_IN_KEY',    'r4xw GASBCWwZ;},H-YSj8%PS0_uNvtgNT-qmL0&LAK@N[Wrv@PGE@8|ey)Ya@tL');
define('NONCE_KEY',        '=|rW&4G{|Nx|Un_?<n>zLS@=WuEBj55bdo!FP^m4ds9*ASaHEv` m4t.eME:qci/');
define('AUTH_SALT',        'r,cQf1OIB}or,G 4<]WyE1Ett~#.l,6+}y7eB!?jMmf}{NkVGCS|Xq9L&^6blP:^');
define('SECURE_AUTH_SALT', '0Pk7@ViuO]pd14`({]+B1|[etDy@xhB=E{c.W{6M9oDF9W{LzdNX^5Mmr]5SLGFa');
define('LOGGED_IN_SALT',   '[V{!-W2RA^P{5)920F&:d+{I 6k*OAHxu@QmorNQD/{)b)x=++WM/fOYY_%KVb{m');
define('NONCE_SALT',       '#;e+1a!0+DWFMM0}aMs%YI-AScSMce|^iCb .6 qZ7|2:fgwKlS_*FVs3 08L1fN');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');