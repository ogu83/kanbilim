<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL ayarlarý - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanýlacak veritabanýnýn adý */
define('DB_NAME', 'kanbilimcom');

/** MySQL veritabaný kullanýcýsý */
define('DB_USER', 'kanbilimcom');

/** MySQL veritabaný parolasý */
define('DB_PASSWORD', '7f3f7kff');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratýlacak tablolar için veritabaný karakter seti. */
define('DB_CHARSET', 'utf8');

/** Veritabaný karþýlaþtýrma tipi. Herhangi bir þüpheniz varsa bu deðeri deðiþtirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eþsiz doðrulama anahtarlarý.
 *
 * Her anahtar farklý bir karakter kümesi olmalý!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kýlmak için istediðiniz zaman bu deðerleri deðiþtirebilirsiniz. Bu tüm kullanýcýlarýn tekrar giriþ yapmasýný gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b)P9%.@1 z|(h9E<GO[>,4RU8X-=:-&/4r<D=1e[{+uMsAJ.zo_G]081PxsQ7>V3');
define('SECURE_AUTH_KEY',  'A(iV*Zvs<y&V?tyWEwe*XlnHUWy;p[4>|9!GcLHcOE0Yz78Fy#%f1c}W8p]Np}+q');
define('LOGGED_IN_KEY',    'f|c~#lZDE,oF(C> <G88tmb^P+ID}lvONXd-`?8Jn+R_+4v0>xn<]J ekY2-w45)');
define('NONCE_KEY',        'BO6lDx#R%ew=cJqGl-icnN2<kj@$V6ryn@tg.O>0_d).eiB|Ewg!I1|D6*-_f]+M');
define('AUTH_SALT',        'l[U!A7kR +|^c%XF^@!K9kbwz:OWS26vPAQgDDTQ9D7fg?Eq-`:E)O/030P-J,R5');
define('SECURE_AUTH_SALT', '7]jLaqc>*Qk%tvN`Y#QB:EHP+8gz?7}-K^TkcGg9+X!/:J~Vx;?g(]R]}KHIK7.#');
define('LOGGED_IN_SALT',   'R.9QF). vbU~0$K@}jz,O9nHEB|hfC4gY?U^1E,:U?|J;w(?YXpU6pNw-TGS/X$h');
define('NONCE_SALT',       '0q;%aZw9f74p.M[0$/|Y l!bt-~Tm!Xe*UM2|V?[>Xnvw19sCR2 1n)UacLJW+I.');
/**#@-*/

/**
 * WordPress veritabaný tablo ön eki.
 *
 * Tüm kurulumlara ayrý bir önek vererek bir veritabanýna birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'wp_';

/**
 * WordPress yerel dil dosyasý, varsayýlan ingilizce.
 *
 * Bu deðeri deðiþtirmenize gerek yok! Zaten Türkçe'ye ayarlý.
 * tr_TR.mo Türkçe dil dosyasýnýn wp-content/languages dizini altýnda olduðundan emin olun.
 * Türkçe çeviri hakkýnda öneri ve eleþtirilerinizi iletisim@wordpress-tr.com adresine iletebilirsiniz.
 *
 */
define('WPLANG', 'tr_TR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
