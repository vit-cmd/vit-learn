<?php
    /**
     * Kiem tra do manh, yeu cua mat khau
     * - co do dai toi thieu la 8
     * - chua it nhat 2 chu so (0-9)
     * - Chua it nhat 2 chu cai thuong (a-z)
     * - chua it nhat 2 chu cai hoa (A-Z)
     * - chua it nhat 1 ki tu dac biet
     * 
     * * Giải quyết: sử dụng Look Around
     */

    $password = "VIet@123";
    $pattern = "/(?=.*[A-Z].*[A-Z])(?=.*[a-z].*[a-z])(?=.*[0-9].*[0-9])(?=.*[!@#\$%\^\*\(\)-\+]).{8,}$/";

    $check = preg_match($pattern, $password);

    var_dump($check);
