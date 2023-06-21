
<?php
    const __DIR_ROOT__ = __DIR__;

    require_once "./common/handle-routes.php";
    require_once "./common/template-engine.php";
    require_once "routes.php";

    $action = '';

    if(!empty($_GET['url'])) {
        $path = handleUrl($action);
    }

    if(!empty($path) && file_exists($path)) {
        require_once $path;
    } else {
        render("404");
    }

