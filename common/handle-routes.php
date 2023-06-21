<?php
    function handleUrl(&$action=null): string {
        global $routes;

        if(!empty($routes)) {
            foreach ($routes as $key => $value) {
                $pattern = "~$key~i";
                if(preg_match($pattern, $_GET['url'])) {
                    $url = preg_replace($pattern, $value, $url);
                    break;
                }
            }
        }

        $url = trim($_GET['url'], '/');
        $path = "services/$url.php";
        return $path;
    }