<?php
    class Posts {
        use Auth;

        function __construct() {
            $this->table = 'posts';
        }

        public function getList() {
            echo 'Get list';
            echo '<br>';
            echo $this->fetch();
            echo $this->methodFromBs();
            echo $this->methodFromAuth();
        }
    }