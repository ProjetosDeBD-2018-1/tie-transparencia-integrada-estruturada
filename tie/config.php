<?php
/** nome do host do MySQL */
define('DATABASE_HOST', '127.0.0.1');
/** Usuário do banco de dados MySQL */
define('DATABASE_USER', 'root');
/** Senha do banco de dados MySQL */
define('DATABASE_PASSWORD', '');
/** O nome do banco de dados*/
define('DATABASE_NAME', 'tie');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/tie/');

/** caminhos dos templates de header, footer e view **/
define('CONNECTION', ABSPATH . 'inc/connection.php');
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
define('STRINGS_LIB', ABSPATH . 'inc/strings.php');