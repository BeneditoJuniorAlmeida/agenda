<?php 
#Caminhos absolutos 
$dirInt = "";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$dirInt}"); //constante para do site

$bar = (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') ? "" : "/";
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}"); //constante para inserir arquivos


#Banco de dados
define('HOST', 'localhost');
define('DB', 'agenda');
define('USER', 'root');
define('PASS', '');

#Includes arquivos
include(DIRREQ. 'www/lib/composer/vendor/autoload.php');
