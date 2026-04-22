<?php

namespace Fastcode\controllers;

// Carga la clase controllers para poder heredar de ella
use Fastcode\core\Controller;

class HomeController extends Controller {
	public function home() {
		return $this->render('home', [
			'titulo' => 'Fastcode',
			'estado' => 'Sistema de controladores funcionando correctamente.'
		]);
	}
}
