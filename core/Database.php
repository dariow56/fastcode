<?php

namespace Fastcode\core;

// Carga las clases necesarias
use PDO;
use Exception;

// Esta clase utiliza el patrón singleton para que no se abran múltiples
// conexiones a la base de datos innecesariamente, ahorrando recursos del 
// servidor.
class Database {
	private static $instance = null;

	public static function connection() {
		if (self::$instance === null) {
			$config = require_once __DIR__ . '/../config/database.php';
			try {
				$dsn = "{$config['driver']}:host={$config['host']};dbname={$config['database']};charset={$config['charset']}";
				self::$instance = new PDO($dsn, $config['username'], $config['password'], [
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
				]);
			} catch (Exception $e) {
				throw new Exception("Error de conexión: " . $e->getMessage());
			}
		}
		return self::$instance;
	}
}
