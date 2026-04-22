<?php

namespace Fastcode\core;

class App {
	public function run() {
		return View::render('home', [
			'titulo' => 'Fastcode',
			'estado' => 'Sistema de vistas funcionando con éxito.'
		]);
	}
}
