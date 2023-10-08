<?php

namespace App\Controllers\Home;

use Core\Controller\Controller;
use Core\Controllers\AppController;

class HomeController extends AppController
{
    public function __invoke($request, $response, $args)
    {
        return $this->view->render($response, '/pages/home/index.php');
    }
}