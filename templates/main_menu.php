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


function draw_popup() {
    $pop_up = " <div class=\"pop-up\">
        <div class=\"pop-up-container\">
            <h2 class=\"pop-up-title\">Welcome!</h2>
            <span class=\"pop-up-cross\"></span>
            <form class=\"pop-up-form\" action=\" \" method=\"post\">
                <div class=\"field-container\">
                    <label class=\"pop-up-label\" for=\"loginField\">Enter your login</label>
                    <input class=\"pop-up-login\" type=\"text\" name=\"login\" id=\"loginField\" required>
                </div>
                <div class=\"field-container\">
                    <label class=\"pop-up-label\" for=\"Pswrd\">Enter your password</label>
                    <input class=\"pop-up-password\" type=\"password\" name=\"password\" id=\"Pswrd\" required>
                </div>
                <div class=\"field-container\">
                    <input class=\"pop-up-submit pop-up-signup\" type=\"submit\" name=\"submit\" value=\"Submit\">
                    <a     class=\"forgot-pass\"   href=\"#\">I forgot my password!</a>
                    <span class=\"or\">OR</span>
                    <a class=\"forgot-pass pop-up-signup\" href=\"index.php?page=register_form\">Sign Up</a>
                </div>
            </form>

        </div>
    </div>";
    return $pop_up;
}