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
define( 'DB_NAME', '215g13' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', '215g13' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'CVTIC20' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Dlcjk?/GqhSN^4LP,M[Zp!kJOU/M_PG]OD_Rvny_L;Bm[JS_3I}<g2J/Nf(1zPaB' );
define( 'SECURE_AUTH_KEY',  'n~-G:G&:jH?Xj$?(D*65boHtKq~Q@x(?sjz_{4nJjqc/EtK-Yp`pOH/8ff~+!EqX' );
define( 'LOGGED_IN_KEY',    'v*1Zzx*)]_GQ@JoU.[w:QoM~.PC_/$e!gIM&K(x|h-gFqK/]K?>@#J`m2+}$)OOZ' );
define( 'NONCE_KEY',        '`RJ$KqcWaYt=t/g^4.E.sx>yB@2v~[QarcH2XT#K@<e^A?_*exIqGG:/SSZ(/F0S' );
define( 'AUTH_SALT',        '9||x%IQP:?H}E3v;mX&tt; hZ:1:u,~MF3]aE!;v;O&KA_z|m/i!-yG:<;QhI?>D' );
define( 'SECURE_AUTH_SALT', 'd]8i3)tSo]/I`LA7#D$Gks&xyGI,}}!7/v2z^8k##7t~Ol2H+1f1X<p5*{vIBho^' );
define( 'LOGGED_IN_SALT',   'i{Ti}FLf/8m?VJa&Ny6=&5d(fpBzD)u>x9K.XmftX00F5Y2~ ?VK[7^keM1@U;U!' );
define( 'NONCE_SALT',       '@9H:>l;=:Tn>(}=frEjBl|gPE-f8CPonM8$1(*/8=TcLOkl~B,UO^V|9sJIl9n?*' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp13_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
