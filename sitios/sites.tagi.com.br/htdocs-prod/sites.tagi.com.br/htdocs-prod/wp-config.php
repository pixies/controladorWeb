<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'sites_tagi');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'supertagi');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'sup3rt4g1');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?n`y%kb5e_C|E(9K<:3;oIYgwg ++ ]4UeA6&@+lJ-W/`(9^aOfO)P)A/@G_%o+m');
define('SECURE_AUTH_KEY',  'q<1D%fmR.Rcr*-GwKA7)TM&CaDU#okk~;9+oKR3?6-F?<yc!zztg:jOGt05G-bF`');
define('LOGGED_IN_KEY',    '5<._cka;<b4<dsbf%[0Mz==*tq%.`Yqk+BT9Yh6nc6^qODc;]6^I+|kihlRiR5=i');
define('NONCE_KEY',        'dqf!}I>WhU7CGoay%@mL%q_-O9,(=a5Be),gEbDrF8:=H+bASDo#YGl3-4nUct)}');
define('AUTH_SALT',        '|Z-- yVP^N4{O 4USNea8,ag*ZodQ3KR>N#y@A)+TM|RpL`fpkPG%.?I](97Mb:]');
define('SECURE_AUTH_SALT', ' <{Y]Fv7-T4`sj=CwPOIPhkIdJ8?`aN(E q1% qUP|8Km^I~ +dwq6=~kUydT+Mk');
define('LOGGED_IN_SALT',   'V6E>;a[5F)vlt[gd,{}_Gb A21fCk[60fpKmJ9h/C?bgyRK#+5kFk,EwREJtLuS-');
define('NONCE_SALT',       'Mx)e<yVe2iK4j0d-AOY,r[=s^B=N^+P`^/3k|Cx`wZ<RBQg1?U-s7Ews1?CD0+n*');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'tagicompany_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */

define('WP_DEBUG', false);
define('WP_ALLOW_MULTISITE', true);

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'sites.tagi.com.br' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
