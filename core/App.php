<?php

namespace Fastcode\core;

class App {
	public $router;

	public function __construct() {
		$this->router = new Router();
	}

	public function run() {
		$this->router->resolve();
	}
}
