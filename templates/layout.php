<?php

?>

<!DOCTYPE html>
<html lang="EN">
<head>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="css/normalize.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,700" rel="stylesheet">
    <title></title>
</head>
<body>
<header>
    <nav class="main-nav">
        <ul class="main-nav main-nav-list">
            <li class="main-nav-list main-nav-item  main-nav-item-logo"><a href="#"><img class="logo-pic" src="interface_pics/YT_logo_6.png" alt=" "> </a></li>

            <li class="main-nav-list main-nav-item"><a href="movie_library_part.php">Movies</a></li>
            <li class="main-nav-list main-nav-item"><a href="#">Series</a></li>
            <li class="main-nav-list main-nav-item"><a href="#">Forum</a></li>
        </ul>
        <ul class="user-sector">
            <li class="user-sector-item">
                <button class="login-button">
                    <img class="user-log-icon" src="interface_pics/login-square-arrow-button-outline.svg" alt=" "></button>
            </li>
        </ul>
    </nav>
    <!--Pop-UP Section -->

    <div class="pop-up">
        <div class="pop-up-container">
            <h2 class="pop-up-title">Welcome!</h2>
            <span class="pop-up-cross"></span>
            <form class="pop-up-form" action=" " method="post">
                <div class="field-container">
                    <label class="pop-up-label" for="loginField">Enter your login</label>
                    <input class="pop-up-login" type="text" name="login" id="loginField" required>
                </div>
                <div class="field-container">
                    <label class="pop-up-label" for="Pswrd">Enter your password</label>
                    <input class="pop-up-password" type="password" name="password" id="Pswrd" required>
                </div>
                <div class="field-container">
                    <input class="pop-up-submit pop-up-signup" type="submit" name="submit" value="Submit">
                    <a     class="forgot-pass"   href="#">I forgot my password!</a>
                    <span class="or">OR</span>
                    <a class="forgot-pass pop-up-signup" href="#">Sign Up</a>
                </div>
            </form>

        </div>
    </div>

    <!--Pop-UP Section -->
</header>
<main>

    <?
    include_once 'news_section_index.php';
    include_once 'movies_section_index.php';
    include_once 'series_section_index.php';


    ?>

</main>

<footer>
    <div class="footer-content">
        <div class="contact-adress">
            <p class="adress-content">
                You can contact to us with Email below.
            </p>
        </div>
        <div class="copyright">
            <p class="copy-content">
                &copy;Made by Neo </p>
            <div>Icons made by <a href="https://www.flaticon.com/authors/catalin-fertu" title="Catalin Fertu">Catalin Fertu</a> from <a href="https://www.flaticon.com/"
                                                                                                                                        title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"  title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
        </div>
    </div>
</footer>
</body>
</html>

