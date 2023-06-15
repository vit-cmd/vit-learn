<?php
    /**
     * Data Types & Type Casting
     * 
     * - 4 Scalar Types
     *      + bool  - true / false
     *      + int   - 1, 2, 3, 4, -5 (no decimal)
     *      + float - 1.3, 1.5, -2.4, 0.123
     *      + string - "Hello World", "Vit"
     * - 4 Compound Types
     *      + array
     *      + object
     *      + callable
     *      + iterable
     * - 2 Special Type
     *      + resource
     *      + null
     */

    // strict type (chế độ nghiêm ngặt)
    declare(strict_types=1);

    // type hints
    function sum(int $x,int $y) {
        return $x + $y;
    }

    // Type juggling (kiểu tung hứng)/Type Coercion (Ép buộc kiểu)
    $sum = sum(2, 3); // string(1) '3' => int(3);
    echo $sum.'<br>';

    // var_dump($sum);

    /**
     * Boolean Data Type
     * Falsy:
     * - 0 -> false
     * - 0.0 -> false
     * - '' -> false
     * - '0' -> false
     * - [] -> false
     * - NULL -> false
     */
    $isComplete = false;
    if ($isComplete) {
        // do something
        echo 'Success';
    } else {
        // do something
        echo 'Fail';
    }

    echo '<br>';

    $x = 1;
    $y = 2;
    $z = 3;

    // heredoc strings
    $heredoc = <<<TEXT
        Line $x<br>
        Line $y<br>
        Line $z<br>
    TEXT;

    echo "Heredoc: $heredoc";
    echo '<br>';
    // nowdoc strings
    $nowdoc = <<<'TEXT'
        Line $x<br>
        Line $y<br>
        Line $z<br>
    TEXT;

    echo "Nowdoc: $nowdoc";
