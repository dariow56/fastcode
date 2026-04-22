<?php

namespace Fastcode\core;

class Router {
	protected $routes = [];

	# Registro de rutas rápido
	public function get($path, $callback) {
		$this->routes['GET'][$path] = $callback;
	}

	public function resolve() {
		$method = $_SERVER['REQUEST_METHOD'];
		$path   = $_GET['url'] ?? '/';

		# Intentamos obtener el callback, si no existe es null
		$callback = $this->routes[$method][$path] ?? null;

		if (!$callback) {
			http_response_code(404);
			return "404 - No encontrado";
		}

		# Ejecutar si es una función (callback)
		return is_callable($callback) ? $callback() : "Error: Ruta no ejecutable";
	}
}
