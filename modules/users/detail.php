<?php
    $title = 'Detail user';
    $id = getParam(0);
    $slug = getParam(1);

    render('detail', compact('title', 'id', 'slug'));