<?php

namespace Fastcode\core;

# Controlador base del cual extenderán nuestras clases
abstract class Controller {

	# Método para renderizar vistas desde cualquier controlador
	protected function render($view, $data = []) {
		return View::render($view, $data);
	}

	# Método para redirecciones rápidas
	protected function redirect($url) {
		header("Location: $url");
		exit;
	}
}
