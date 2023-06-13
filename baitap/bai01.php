<?php
    /**
     * Kiem tra sdt VN hợp lệ
     * - Bắt đầu bằng số 0 hoặc +84
     * - Có tổng 10 số (+84 quy ước là 1 số)
     */

     $phoneNumber = '+84987654321';
     $pattern = '/^(0|\+84)\d{9}$/';

     $check = preg_match($pattern, $phoneNumber, $matches);

     var_dump($matches);
     echo '<hr>';
     var_dump($check);