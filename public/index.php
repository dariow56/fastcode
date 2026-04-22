<?php

// Cargar el Autoloader nativo
require_once '../Autoloader.php';

// Inicia el Autoloader
Autoloader::register();

// Incluir las clases usando use:
use Fastcode\core\App;
use Fastcode\core\View;

// Instanciar el núcleo del framework
$app = new App();

// Define una nueva ruta mediante callback
$app->router->get('/', function () {
	return View::render('home', [
		'titulo' => 'Fastcode',
		'estado' => 'Sistema de rutas funcionando con éxito.'
	]);
});

// Ejecutar la aplicación
$app->run();
