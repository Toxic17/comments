<?php 
	namespace comments\app\controllers;

	use comments\app\models\Comments;
    use comments\core\View;

    class CommentsController
	{
		
		public function main()
		{
			$viewClass = new View();
            $view = $viewClass->init();
            $model = new Comments();
            $comments_arr = $model->get_comments();

            echo $view->render('index.twig',['comments'=>$comments_arr]);

		}
	}
?>