<?php
    const __DIR_ROOT__ = __DIR__;

    require_once 'includes/function.php';
    require_once 'routes.php';

    global $routes;
    
    $module = 'home';
    $action = 'index';
    
    if(!empty($_GET['url'])) {
        handleUrl($module, $action);
    }

    $path = "modules/$module/$action.php";
    if (file_exists($path)){
        require_once $path;
        die();
    } else {
        require_once 'modules/404.php';
        die();
    }
