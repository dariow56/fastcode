<?php

namespace Fastcode\core;

class Router {
	protected $routes = [];

	// Registro de rutas rápido
	public function get($path, $callback) {
		$this->routes['GET'][$path] = $callback;
	}

	public function resolve() {
		$method = $_SERVER['REQUEST_METHOD'];
		$path   = $_GET['url'] ?? '/';

		// Intentamos obtener el callback, si no existe es null
		$callback = $this->routes[$method][$path] ?? null;

		if (!$callback) {
			http_response_code(404);
			return "404 - Ruta no encontrada en Fastcode";
		}

		// Método 1: Si es una función anónima, se ejecuta normal
		if (is_callable($callback)) return $callback();

		// Método 2: Si es un arreglo [Clase, método], lo procesamos
		if (is_array($callback)) {
			$controller = new $callback[0];
			$method = $callback[1];
			return $controller->$method();
		}

		return "Error: Formato de ruta no válido";
	}
}
