<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ']k|;BQ4Usp!Hp*mc6&8Hx}m8|A>8MwHNH$/1wMS3){K>Zg%;#=U>[nL3hG0;0!?+' );
define( 'SECURE_AUTH_KEY',  ')G,G<&QRr4g]sS_{/q-XB5dt~VGyvv`r/7qim9aq1d=^k+A9G?ASapCfEz=wTb/_' );
define( 'LOGGED_IN_KEY',    'dR~BAwC-wVBn:6w2fIEZ/E/P@K+VTQ`!s*L1a-uJG@`K^l6zW8cDf7|#%b8KR@S(' );
define( 'NONCE_KEY',        'tjR]533.V3J_!2s-J6ZMaE<=<%m}B20z-],!qP}Kzyes=g15R>1N`1xVTyoki[2^' );
define( 'AUTH_SALT',        'lh>ggh&{5_@LO(LI6%bVsaB~frlqD{FwUy!]*Asn 1*ePS;[HO_%S:A{ZO]CX9D7' );
define( 'SECURE_AUTH_SALT', 'mdO5Up9U(*ww!x,95*<{-E2rtS[i` M<}lrVj[w&Rp^3W]zGe%kpfB)/;=Ab,6#E' );
define( 'LOGGED_IN_SALT',   'pwV)HioCNDD7w)ZaEYd0ss65Ch7&SFAQ0uYH>aFRl8oXx:9Y+:n&>{0u:vy&OakE' );
define( 'NONCE_SALT',       'VFzm^>J0s0!UGH|Ej/|AY|;JIraVdm9p~0D,#D$e=w[>*b;e9KPL~F3u^P=ixz@Q' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
