<?php
namespace App\Controllers;

use Sumare\Controller\Action;

class IndexController extends Action
{
	
	public function index($nome, $idade)
	{
		$alunos = array('Paulo', 'Joao', 'Lucas', 'Joana', 'Cristina', $nome, $idade);

		$this->render('index/index', ['alunos',$alunos]);
	}

	public function contact()
	{
		require __DIR__ .'/../Views/index/contact.phtml';
	}

}
