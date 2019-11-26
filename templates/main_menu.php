<?php


function draw_menu($menu, $vertical = false) {
    foreach ($menu as $item) {
        echo "<li class='{$item['class']}'><a href='{$item['href']}'>{$item['link']}</a></li>";
    }
}

$main_menu = array(
    array('class' => 'main-nav-list main-nav-item', 'href' => 'index.php?page=movies', 'link' => 'Movies'),
    array('class' => 'main-nav-list main-nav-item', 'href' => 'index.php?page=series', 'link' => 'Series'),
    array('class' => 'main-nav-list main-nav-item', 'href' => 'index.php?page=forum', 'link'  => 'Forum'),
);