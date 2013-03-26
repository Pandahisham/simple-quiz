<?php
define('CLASS_DIR','classes/');

function classloader($classname)
{
    $path = CLASS_DIR . strtolower($classname) . '.class.php';
    require($path);
}

spl_autoload_register('classloader');

function baseclassloader($classname)
{
    $path = CLASS_DIR . 'base/' .strtolower($classname) . '.class.php';
    require($path);
}

spl_autoload_register('baseclassloader');
?>