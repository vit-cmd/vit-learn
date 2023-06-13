<?php
    /**
     * Kiem tra 1 the html hop le
     * 1 the html hop le neu tuan thu cau truc sau
     * <tag attribute1="Value 1" attribute2="Value 2">Content</tag>
     *  */    
    $subject = '<a href="https:unicode.vn" target="_blank">Unicode Academy</a>';
    $partten = '/^<[a-z]+(\s+[a-z-]+=\"[^"]+")*(>.+<\/[a-z]+>|\s*\/>)$/';

    $check = preg_match($partten, $subject);
    if($check) {
        echo 'HTML valid';
    } else {
        echo 'HTML invalid';
    }
