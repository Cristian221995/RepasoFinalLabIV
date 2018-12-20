<?php 
namespace config;

define('ROOT', str_replace('\\','/',dirname(__DIR__) . "/"));

define('FRONT_ROOT', '/parcial-ecommerce-master/');

define('HOME', 'http://localhost/parcial-ecommerce-master/');

$base=explode($_SERVER['DOCUMENT_ROOT'],ROOT);
  define("BASE",$base[1]);

  define('HOST',"localhost");
  define('USER',"root");
  define('PASS',"");
  define('DB',"repaso");
?>

