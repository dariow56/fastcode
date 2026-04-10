<?php

// Requiere el Autoloader nativo
require_once '../Autoloader.php';

// Inicia el Autoloader
Autoloader::register();

// Carga la clase App
use Fastcode\core\App;

// Crea la instancia de la clase App
$app = new App;

// Inicia la instancia de la App
$app->run();
