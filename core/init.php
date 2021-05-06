<?php
session_start();

$GLOBALS['config'] = array(
 'mysql' => array(
     'host' => 'remotemysql.com:3306',
     'username' => 'hFSOvk3dkA',
     'password' => 'd90zi8ZBYX',
     'db' => 'hFSOvk3dkA'
  ),
 'remember' => array(
   'cookie_name' => 'hash',
    'cookie_expiry' => 604800
  ),
 'session' => array(
    'session_name' => 'user' ,
    'token_name' => 'token'
  )
);

//autoloader
spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});

require_once 'functions/sanitize.php';
