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

// ** MySQL ayarlar� - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress i�in kullan�lacak veritaban�n�n ad� */
define('DB_NAME', 'kanbilimcom');

/** MySQL veritaban� kullan�c�s� */
define('DB_USER', 'kanbilimcom');

/** MySQL veritaban� parolas� */
define('DB_PASSWORD', '7f3f7kff');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yarat�lacak tablolar i�in veritaban� karakter seti. */
define('DB_CHARSET', 'utf8');

/** Veritaban� kar��la�t�rma tipi. Herhangi bir ��pheniz varsa bu de�eri de�i�tirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * E�siz do�rulama anahtarlar�.
 *
 * Her anahtar farkl� bir karakter k�mesi olmal�!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * �erezleri ge�ersiz k�lmak i�in istedi�iniz zaman bu de�erleri de�i�tirebilirsiniz. Bu t�m kullan�c�lar�n tekrar giri� yapmas�n� gerektirecektir.
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
 * WordPress veritaban� tablo �n eki.
 *
 * T�m kurulumlara ayr� bir �nek vererek bir veritaban�na birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt �izgi l�tfen.
 */
$table_prefix  = 'wp_';

/**
 * WordPress yerel dil dosyas�, varsay�lan ingilizce.
 *
 * Bu de�eri de�i�tirmenize gerek yok! Zaten T�rk�e'ye ayarl�.
 * tr_TR.mo T�rk�e dil dosyas�n�n wp-content/languages dizini alt�nda oldu�undan emin olun.
 * T�rk�e �eviri hakk�nda �neri ve ele�tirilerinizi iletisim@wordpress-tr.com adresine iletebilirsiniz.
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
