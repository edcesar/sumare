<?php
namespace App;

use Sumare\Init\Bootstrap;

class Route extends Bootstrap
{

	protected function initRoutes()
	{
		$routes['home'] = array('route' => '/@nome/@idade', 'controller' => 'indexController', 'action' => 'index'); 
		$routes['contact'] = array('route' => '/contact', 'controller' => 'indexController', 'action' => 'contact');
		$routes['contato'] = array('route' => '/contato', 'controller' => 'ContatoController', 'action' => 'index'); 
		//Sumare::route('/contato/@nome', 'ContatoController@index')

		$this->setRoutes($routes);
	}


}
