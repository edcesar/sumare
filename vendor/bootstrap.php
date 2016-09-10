<?php

function my_autoloader($class) {
    $class = str_replace('\\', '/', $class);
      require_once $class . '.php';
}

spl_autoload_register('my_autoloader');

$route = new App\Route();