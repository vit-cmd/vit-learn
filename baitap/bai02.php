<?php
    /**
     * Kiem tra 1 URL hop le
     * - Cau truc URL: protocol + www + domain + port + path
     * Trong do port va www la khong bat buoc
     */
    $url = 'http://regex101.com/regex/hahaha.html';
    $pattern = '~^(http|https)://[a-z]+[a-z0-9-_\.]*\.[a-z]{2,}(:\d+)?(/?|/[a-z-_0-9\./]*)$~';

    $check = preg_match($pattern, $url);

    if($check) {
        echo 'URL valid';
    } else {
        echo 'URL invalid'; 
    }
