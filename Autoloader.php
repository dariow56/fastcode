<?php

// Convierte el nombre de la clase en una ruta de archivo, de esta no tendremos
// que estar importando o requiriendo clases de forma manual.
// Este código es mucho más robusto y permite subcarpertas infinitas dentro de 
// src/
class Autoloader {
	public static function register() {
		spl_autoload_register(function ($class) {

			// Prefijo de espacio de nombres (Namespace)
			$prefix = 'Fastcode\\';

			// Directorio base para este prefijo
			$base_dir = __DIR__ . '/';

			// ¿La clase utiliza el prefijo?
			$len = strlen($prefix);
			if (strncmp($prefix, $class, $len) !== 0) {
				return; // No es una clase de nuestro framework
			}

			// Obtener el nombre relativo de la clase
			$relative_class = substr($class, $len);

			// Reemplazar el separador de namespace (\) por el de directorios (/)
			// y añadir .php al final
			$file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

			// Si el archivo existe, cargarlo
			if (file_exists($file)) {
				require_once $file;
			}
		});
	}
}
