<?php

use namespace_trial\Content\Content;
use namespace_trial\User\User;


spl_autoload_register( function( $classname ) 
{   
    $str = str_replace('\\', '/', $classname);
    $s = substr($str, (strpos($str, '/')+1));
    $name= $s.'.php';
    include $name;
});


$obj = new Content();
$obj1 = new Users();