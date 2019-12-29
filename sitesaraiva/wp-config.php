<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bdsitesaraiva' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dX?P<G<b$d[Llu7h9=5o8}%D=pDA4) VJzfKL|DR`{WpVO:xYnQ:tnE/nW<@QGeT' );
define( 'SECURE_AUTH_KEY',  '}.-Y#@CT(R-S-qd;[y>hy6G2nR@HcWV D$xC7R9q,&`dK=x|x[CL-if]Q{4l@Cyl' );
define( 'LOGGED_IN_KEY',    'P r{ {t/&KD|1+AnMU8&u=GZQ2Z!cvP.KG)c6O$XT,4Ex<auoouhhQ}>JG`CaCvL' );
define( 'NONCE_KEY',        'eZ$h~wg0LI(wl[:_CKvH<uiv;- ?ldbMy3x{O~|7*Q9eA==/yvN4t0g4mq3jRGpF' );
define( 'AUTH_SALT',        '{MLt.V`-WCSZux7V3w!q$gCd-&TQYvD@HX>7{=*(4,JlZ~AR|=qwTo*H.&,(,Fj;' );
define( 'SECURE_AUTH_SALT', '2F~,}&f?H6:r5Q#rT^R_D5ls|A^`8kN2b2c(R7BE3-vW-]% 4nas{S<#KoJa~FdR' );
define( 'LOGGED_IN_SALT',   'EIMEgqVy8Ky384XHPNA4oU.;Pxv_0;cdT>!]YvAt>_n q_PPr03(<L[XIT`a3!GH' );
define( 'NONCE_SALT',       ':jH7>U+JU~D#BC%0}+70::$+_ls!jR`+y9RuG sK$pUyUH6?+=4K:[cqy*>KQ<Ja' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpss_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
