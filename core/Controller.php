<?php 
	namespace comments\core;

	

	class Controller
	{
		private $controller_name;
		private $controller_method;

		public function __construct($controller,$method)
		{
			$this->controller_name = $controller;
			$this->controller_method = $method;
		}

		public function init()
		{
			$controller_name_class = '\comments\app\controllers\\'.$this->controller_name;
			$controller = new $controller_name_class();
			$controller_method = $this->controller_method;
			$controller->$controller_method();

        }

	}

?>