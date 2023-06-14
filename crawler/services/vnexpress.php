<?php
    class VnExpress {};

    $title = "Crawler Vnexpress";
    $content = "Crawler title, description, image and link post of list page";

    $url = "https://vnexpress.net/thoi-su/dan-sinh";

    $html = file_get_contents($url);
    $dataPosts = [];
    
    preg_match_all('/<article class="item-news thumb-left item-news-common".*?>(.+?)\n<\/article>/ius', $html, $matches);

    if (!empty($matches[1])) {
        foreach($matches[1] as $key => $value) {
            $post = new VnExpress();
            // regex title & link post
            preg_match('/<h2 class="title-news">(.+?)\n<\/h2>/uis', $value, $titleNew);
            if(!empty($titleNew[1])) {
                // title post
                preg_match('/<a.*>(.+?)<\/a>/uis', $titleNew[1], $titlePost);
                $post->title = $titlePost[1];
                // link post
                preg_match('/.*href="(.+?)".*/uis', $titleNew[1], $linkPost);
                $post->link = $linkPost[1];
            }
            // regex description
            preg_match('/<p class="description">.*?<a.*?>(<span.*?<\/span>)?(.+?)(<span.*)?<a.*/uis', $value, $description);
            if(!empty($description[2])) {
                $post->description = $description[2];
            }
            // regex image
            preg_match('/<img.*?src="(.+?)"/uis', $value, $image);
            if(!empty($image[1])) {
                if(preg_match('/base64/',$image[1])) {
                    preg_match('/<img.*?data-src="(.+?)"/uis', $value, $image);
                }
                $post->image = $image[1];
            }

            if(!empty($post->title)) {
                array_push($dataPosts, $post);
            }
        }
    }
    render("vnexpress", compact("title", 'content', 'dataPosts'));