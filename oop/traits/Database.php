<?php
    trait Database {

        public $table;

        public function fetch() {
            return 'Get data from '. $this->table .'<br>';
        }

        public function methodFromDb() {
            echo 'Method from Database<br>';
        }
    }