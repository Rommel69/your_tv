<?php


function switch_title($page) {

    $page = sanitize_string(strtolower($page));



    switch ($page) {
        case "main":            return $title = 'Main';         break;
        case "movies":          return $title = 'Movies';       break;
        case "series":          return $title = 'Series';       break;
        case "register_form":   return $title = 'Sign Up';      break;
        case "user_info":       return $title = 'Profile Name'; break;
        default:                return $title = 'Main';
    }
}

function switch_page($page) {

    $page = sanitize_string(strtolower($page));

    switch ($page) {
        case "main": include            'templates/index_page_content.php';  break;
        case "movies": include          'templates/movies_page.php';         break;
        case 'series': include          'templates/series_page.php';         break;
        case "register_form": include   'templates/register_page.php';       break;
        case "user_info": include       'templates/user_profile_page.php';   break;
        default: include                'templates/index_page_content.php';
    }
}

function sanitize_string($string) {
    return $string = htmlentities(trim($string));
}