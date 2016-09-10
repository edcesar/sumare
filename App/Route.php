<?php
namespace App;

use vendor\SON\Init\Bootstrap;

class Route extends Bootstrap
{

	protected function initRoutes()
	{
		$routes['home'] = array('route' => '/', 'controller' => 'indexController', 'action' => 'index'); 
		$routes['contact'] = array('route' => '/contact', 'controller' => 'indexController', 'action' => 'contact');
		$routes['contato'] = array('route' => '/contato', 'controller' => 'ContatoController', 'action' => 'index'); 

		$this->setRoutes($routes);
	}

}