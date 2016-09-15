<?php
namespace Sumare\Controller;

abstract class Action
{
	protected $view = [];

	protected $action;

	protected $params;

	public function render($view, $params, $layout = true)
	{	
		$this->action = $view;
		$this->params = $params;

		if($layout == true){
			require __DIR__ . '/../../../App/Views/layout.phtml';
		}else{
			$this->content();
		}
	}

	public function content()
	{
		$this->view[$this->params[0]] = $this->params[1];

		require __DIR__ . '/../../../App/Views/' . $this->action . '.phtml';
	}
}
