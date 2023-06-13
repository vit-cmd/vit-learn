<?php
    function handleUrl(&$module=null, &$action=null): array {
        global $routes;

        $url = trim($_GET['url'], '/');
        
        if(!empty($routes)) {
            foreach ($routes as $key => $value) {
                $pattern = "~$key~i";
                if(preg_match($pattern, $_GET['url'])) {
                    $url = preg_replace($pattern, $value, $url);
                    break;
                }
            }
        }
        
        $urlArr = array_filter(explode('/', $url));
        
        if (!empty($urlArr[0])) {
            $module = $urlArr[0];
            unset($urlArr[0]);
        }

        if(!empty($urlArr[1])) {
            $action = $urlArr[1];
            unset($urlArr[1]);
        }

        $urlArr = array_values($urlArr);
        return $urlArr;
    }

    function getParam($index=0) {
        $urlArr = handleUrl();
        return $urlArr[$index];
    }

    function contentView($view, $data=[], $extFile="tpl") {
        global $module;

        $view = __DIR_ROOT__."/modules/$module/views/$view.$extFile";
        
        if (file_exists($view)) {
            return file_get_contents($view);
        }
        return false;
    }

    function render($view, $data=[], $extFile="tpl") {
        if(!empty($data)) {
            extract($data);
        }

        $contentView = contentView($view, $data, $extFile);
        
        preg_match_all("/{{\s*(.+?)\s*}}/", $contentView, $matches);

        if(!empty($matches[1])) {
            foreach($matches[1] as $key => $value) {
                $contentView = str_replace($matches[0][$key], "<?php echo $value; ?>", $contentView);
            }
        }
        eval(" ?> $contentView <?php ");
    }

