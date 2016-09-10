<?php
namespace vendor\SON\Init;

abstract class Bootstrap
{
	private $routes;

	public function __construct()
	{
		$this->initRoutes();
		print $this->run($this->getUrl());
	}

	abstract protected function initRoutes();

	protected function run($url)
	{
		foreach ($this->routes as $routes) {
			
			if($url == $routes['route']){
				$class = 'App\\Controllers\\' . ucfirst($routes['controller']);
				$action = $routes['action'];
				$controller = new $class();
				return $controller->$action();
			}
			
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
}