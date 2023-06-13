<?php
    $title = "List Users";
    $content = "This is page list users";
    $listUsers = ['User 1', 'User 2'];
    render('list', compact('title', 'content', 'listUsers'));