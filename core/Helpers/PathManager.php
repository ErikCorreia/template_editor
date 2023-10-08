<?php

namespace Core\Helpers;

class PathManager
{
    public static function getRootDirectory()
    {
        return $_SERVER['DOCUMENT_ROOT'];
    } 
}