<?php
    require_once "./classes/Calculator.php";
    require_once "./traits/Database.php";
    require_once "./traits/Business.php";
    require_once "./traits/Auth.php";
    require_once "./classes/Post.php";

    require_once "./classes/admin/Post.php";
    require_once "./classes/home/Post.php";

    $calc = new Calculator;
    echo $calc::_MESSAGE_.$calc->add(3,5); 

    echo "<hr>";

    $post = new Posts();
    $post->getList();

    echo "<hr>";

    use HomePost\Post as HomePost;
    use AdminPost\Post as AdminPost;

    $adminPost = new AdminPost();
    echo '<br>';
    $homePost = new HomePost();
