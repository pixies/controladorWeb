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
define('AUTH_KEY',         '%J1bo&t}D#SY0U#hj1CkM<1!5/^T41Zx!k<O#.ntq3gGL+eSP..,-jh)B ]Lu(Pe');
define('SECURE_AUTH_KEY',  'T-1+*bs?](c]| 3>/k++n%Wb9j~a/zco6Q^s>dHlP@-aR6mP%Eg{0PR:hb_kX)<f');
define('LOGGED_IN_KEY',    'u(#)aPn_qx]]Es^#]JfH{042$*-JoPS2&+&%LL)Ep~U+C|1Os@87k9`>;up2yytx');
define('NONCE_KEY',        '|A#z(&Xa(G}7t3,iF/)8A^Puwn5WgW&TJSSXl=O*ntV`Le`!=#qLwaKYs}+~jNj;');
define('AUTH_SALT',        'H>Q?uWKtrnAo]G?H>on]v%;Lhxx`RA*N(@KM1?Y*P*Y)m(?.RNUZsi4qfN[ql@&W');
define('SECURE_AUTH_SALT', 'MNv,ky:).[NU}-[Ku33 430|FBhs5TS3iU^q6h0~aau;;O9OV{N9M*C5]=3-RjEf');
define('LOGGED_IN_SALT',   'G{UJ`y>v=_p1XoF<]RKLgDdI4ftysTIw&-1Rt0g&coClu|9e_vB9lmjI(]~)wk+|');
define('NONCE_SALT',       'yc|Pc/RMGDk;]mY3W&HD^kCcVRL+upnrxEk-E!Ex|E0R!f.ixN|( 2[|hyDGzGse');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'tagiwp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

define( 'WP_ALLOW_MULTISITE', true );

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base='/';
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
