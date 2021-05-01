<?php
require_once 'core/init.php';

/*echo Config::get('mysql/username'); //127.0.0.1*/

$user = DB::getInstance()->get('users', array('username','=','Reymar'));

if( !$user->cnt() ){
    echo 'Not exists';
}else{
    echo 'Ok';
}