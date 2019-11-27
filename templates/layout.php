<?php
include 'scripts/page_switchers.php';





?>

<!DOCTYPE html>
<html lang="EN">
<head>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="css/normalize.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,700" rel="stylesheet">
    <title><?=switch_title($_GET['page']);?></title>
</head>
<body>
<header>
    <nav class="main-nav">
        <ul class="main-nav main-nav-list">
            <li class="main-nav-list main-nav-item  main-nav-item-logo"><a href="index.php?page=main"><img class="logo-pic" src="interface_pics/YT_logo_6.png" alt=" "> </a></li>

            <?
            include 'main_menu.php';
                draw_menu($main_menu, false);
            ?>

        </ul>
        <ul class="user-sector">
            <li class="user-sector-item">
               <button class="login-button">
                    <img class="user-log-icon" src="interface_pics/login-square-arrow-button-outline.svg" alt=" ">
                </button>
            </li>
        </ul>
    </nav>
    <!--Pop-UP Section -->

   <?=draw_popup();?>

    <!--Pop-UP Section -->
</header>
<main>

    <?


    switch_page($_GET['page']);


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

