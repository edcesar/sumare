<?php
namespace App\Controllers;

use vendor\SON\Controller\Action;

class IndexController extends Action
{
	

	public function index()
	{
		$alunos = array('Paulo', 'Joao', 'Lucas', 'Joana', 'Cristina');

		$this->render('index/index', ['alunos',$alunos]);
	}

	public function contact()
	{
		require __DIR__ .'/../Views/index/contact.phtml';
	}

	
}