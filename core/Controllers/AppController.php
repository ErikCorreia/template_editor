<?php

namespace Core\Controllers;

use DI\Container;
use Core\Controllers\Controller;


class AppController extends Controller
{
    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->view->setLayout('/layout/default.php');

    }
}