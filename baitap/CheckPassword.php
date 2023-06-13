<?php
    /**\
     * Kiểm tra mật khẩu hợp hay không?
     * - Bắt đầu bằng chữ cái thường
     * - độ dài >= 6
     * - Kết thúc bằng số
     */
    $password = "viet123";
    $pattern = '/^[a-z][A-Za-z0-9]{5}[0-9]$/';

    $check = preg_match($pattern, $password);
    
    if ($check) {
        echo '<p>Password correct</p>';
    } else {
        echo '<p>Password incorrect</p>';
    }
