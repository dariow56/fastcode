<?php

// Cargar el Autoloader nativo
require_once '../Autoloader.php';

// Inicia el Autoloader
Autoloader::register();

// Incluir las clases usando use:
use Fastcode\core\App;

// Instanciar el núcleo del framework
$app = new App();
// Ejecutar la aplicación
$app->run();
