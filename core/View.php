<?php

namespace Fastcode\core;

# Esta clase separa el código HTML de la lógica PHP.
class View
{
	# Renderiza una vista desde el directorios /views
	public static function render($view, $data = [])
	{
		# Convierte ['nombre' => 'Juan'] en $nombre = 'Juan'
		extract($data);
		$file = __DIR__ . "/../views/$view.php";
		if (file_exists($file)) {
			require_once $file;
		} else {
			die("Error: La vista '$view' no existe en /views/");
		}
	}
}
