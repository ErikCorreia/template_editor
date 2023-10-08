<?php

namespace Core\Controllers;

use DI\Container;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

abstract class Controller
{
    public $view;

    public function __construct(Container $container)
    {
        $this->view = new PhpRenderer(\Core\Helpers\PathManager::getRootDirectory().'/app/views/');
    }
}