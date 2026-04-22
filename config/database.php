<?php

// Este archivo solo retorna un arreglo con los datos de conexión. 
// Separa los datos de la lógica.
return [
	'host' 		=> $_ENV['DB_HOST'],
	'database' 	=> $_ENV['DB_NAME'],
	'username' 	=> $_ENV['DB_USER'],
	'password' 	=> $_ENV['DB_PASS'],
	'driver' 	=> 'mysql',
	'charset' 	=> 'utf8mb4'
];
