<?php
    /**
     * Create Class Calculator
     * - method add()
     * - method minus()
     * - method multiply()
     * - method divide()
     */
    class Calculator {

        const _MESSAGE_ = "Result: ";

        function add($a, $b) {
            return $a + $b;
        }

        function minus($a, $b) {
            return $a - $b;
        }
        
        function multiply($a, $b) {
            return $a * $b;
        }

        function divide($a, $b) {
            if($b <= 0) {
                return NULL;
            }
            return $a / $b;
        }
    }
