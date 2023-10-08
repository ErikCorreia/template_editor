<?php

namespace App\Controllers\Editor;

use Core\Controllers\Controller;

class EditorController extends Controller
{
    public function __invoke($request, $response, $args)
    {
        $this->view->setLayout('/layout/editor-layout.php');
        return $this->view->render($response, '/pages/editor/editor.php', [
            'page' => 'http://wordpress.lh'
        ]);
    }
}