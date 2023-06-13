<?php
    function getContentView($view, $data=[], $ext="tpl"): string|bool {
        $path = __DIR_ROOT__."/views/$view.$ext";
        
        if(file_exists($path)) {
            return file_get_contents($path);
        }
        return false;
    }

    function render($view, $data=[], $ext="tpl"): void {
        if(!empty($data)) {
            extract($data);
        }

        $contentView = getContentView($view, $data, $ext);
        if($contentView !== false) {
            preg_match_all("/{{\s*(.+?)\s*}}/", $contentView, $matches);

            if(!empty($matches[1])) {
                foreach ($matches[1] as $key => $value) {
                    $contentView = str_replace($matches[0][$key], "<?php echo $value; ?>", $contentView);
                }
            }
            eval(" ?> $contentView <?php");
        }
    }
