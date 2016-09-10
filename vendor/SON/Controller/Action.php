<?php
namespace vendor\SON\Controller;

abstract class Action
{
	public $view = [];

	public function render($view, $params)
	{	
		
		$this->view[$params[0]] = $params[1];

		require __DIR__ . '/../../../App/Views/' . $view . '.phtml';
	}
}