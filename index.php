<?php

/*
function my_autoloader($class) {
    $class = str_replace('\\', '/', $class);
     
    if(substr($class, 0, 3) == 'App'){
    	require_once  $class . '.php';
    }else{
    	require_once 'vendor/' . $class . '.php';
    }
     
      print $class . '<br>';
}


spl_autoload_register('my_autoloader');


$route = new App\Route();

*/

//spl_autoload_register('my_autoloaderB');

require_once 'vendor/bootstrap.php';







