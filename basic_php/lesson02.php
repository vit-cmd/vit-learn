<?php
    // constant
    define('SUCCESS', 'Success');
    const ERROR = 'Error';


    echo SUCCESS;
    echo '<br>';
    echo ERROR;

    // Differences const and define
    if(true) {
        // const STATUS = 'sleep'; // lỗi const không thể sử dụng loop, if/else...
        define('FOO', 'foo');
    }

    echo '<br>';

    // variable variables
    $foo = 'bar';
    $$foo = 'baz';

    echo $foo .'-'.$$foo;