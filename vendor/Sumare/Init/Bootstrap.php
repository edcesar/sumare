<?php
namespace Sumare\Init;

abstract class Bootstrap
{
	private $routes;

	public function __construct()
	{
		$this->initRoutes();
		$this->run($this->getUrl());

		
	}

	abstract protected function initRoutes();

	protected function run($url)
	{
		$params = [];

		$original = $url;

		foreach ($this->routes as $routes) {
			
			while( strrpos($routes['route'], '@') > 0){

				$param = substr($routes['route'], 1+ strrpos($routes['route'], '@'));
				$param = str_replace('/', '', $param);
				

				$routes['route'] = substr($routes['route'], 0, strrpos($routes['route'], '@'));

			
				if(substr($url, -1) == '/'){
					$url = substr($url, 0, -1);
				}

				$valor = substr($url, strrpos($url, '/') + 1);
				array_unshift($params, $valor);

				$url = substr($url, 0, 1 + strrpos($url, '/'));		
				
			}
			

			if($url == $routes['route']){
				$class = 'App\\Controllers\\' . ucfirst($routes['controller']);
				$action = $routes['action'];
				$controller = new $class();

				
				return $controller->$action(...$params);
			}

			$url = $original;
		}


	}

	protected function setRoutes(array $routes)
	{
		$this->routes = $routes;
	}

	protected function getUrl()
	{
		$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		
		return $url;
	}

	public static function route($route, $action)
	{
		$params = array();

		
	}
}
