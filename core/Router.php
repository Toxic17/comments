<?php 
	namespace comments\core;

	class Router 
	{
		private $arr_routes = [];

		public function __constuct()
		{
			$this->arr_routes = $arr_routes;
		}

		public function checkURL($url)
		{	
			if(array_search($url, $this->arr_routes) !== false)
			{
				return true;
			}
		}

		public function get($url,$controller,$method)
		{
			if($_SERVER['REQUEST_METHOD'] !== 'GET')
			{
				var_dump('This method not found');
			}
			$this->arr_routes[] = $url;

			if($this->checkURL($_SERVER['REQUEST_URI']))
			{
				$controller = new Controller($controller,$method);
				$controller->init();
			}
			else
			{
				require_once __DIR__.'/../404.php';
			}
		}
	}
?>