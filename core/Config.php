<?php

// Namespaces
namespace Fastcode\core;

// Esta clase es un pequeño parser para leer el archivo .env y cargar las 
// variables en nuestro sistema.
class Config {

	public static function load($path) {
		if (!file_exists($path)) return;
		$lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		foreach ($lines as $line) {
			// Ignorar comentarios
			if (strpos(trim($line), '#') === 0) continue;
			list($name, $value) = explode('=', $line, 2);
			$_ENV[trim($name)] = trim($value);
		}
	}
}
