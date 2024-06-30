<?php 
	use comments\core\Router;

	$router = new Router();

	$router->get('/','CommentsController','main')
?>