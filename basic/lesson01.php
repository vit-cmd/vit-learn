<?php
    /**
     * Giới thiệu cú pháp PHP
     */
    echo "Hello World";

    echo '<br>';
    $print = print('Hello World'); //print in ra va return 1; 
    echo '<br>';
    print $print;

    echo '<br>';

    echo 'Hello', ' ', "World";

    echo '<br>';

    $name = 'Vit';
    echo $name;

    echo '<br>';

    $x = 1;
    $y = $x; 
    $x = 4;

    echo $y; // print 1

    echo '<br>';

    $a = 2;
    $b = &$a;

    $a= 3;

    /**
     * Kết quả: 3
     * Bởi vì biến $b là biến tham chiếu của $a, $a và $b trỏ cùng một con trỏ
     * Khi $a hoặc $b thay đổi giá trị biến, thì biến còn lại cũng bị thay đổi 
     */
    echo $b; 

    echo '<br>';

    echo "Hello {$name}";
    echo '<br>';
    echo 'Hello {$name}';

