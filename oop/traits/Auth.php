<?php
    trait Auth {
        use Database, Business;

        public function methodFromAuth() {
            return 'Method from Auth<br>';
        }
    }