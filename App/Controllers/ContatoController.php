<?php
namespace App\Controllers;

use vendor\SON\Controller\Action;

class ContatoController extends Action
{
	public function index()
	{
		$this->render('contato/index', ['data', date('Y-m-d h:i:s')]);
	}
}