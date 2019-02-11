<?php
/**
 * Created by PhpStorm.
 * User: Predator
 * Date: 10/21/18
 * Time: 18:35
 */


?>

<!DOCTYPE>
<html lang="EN">
    <head>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="css/normalize.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,700" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="main-nav">
                <ul class="main-nav main-nav-list">
                    <li class="main-nav-list main-nav-item  main-nav-item-logo"><a href="#"><img class="logo-pic" src="interface_pics/YT_logo_6.png" alt=" "> </a></li>

                    <li class="main-nav-list main-nav-item"><a href="#">Movies</a></li>
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
            <section class="news-section">
                <h2 class="news-title">Recent News</h2>
                <div class="articles-container">
                <div class="article">
                    <img class="promo-pic" src="posters_pics/overlord_ver4_xlg.jpg">
                    <a class="news-article-url" href="#"><h3 class="article-title">Transformers has released!</h3></a>
                    <b>date</b>
                    <p class="article-text">Text text text text</p>
                    <a href="#">Read more...</a>
                </div>
                <div class="article">
                    <img class="promo-pic" src="posters_pics/overlord_ver4_xlg.jpg">
                    <a class="news-article-url" href="#"><h3 class="article-title">Title</h3></a>
                    <b>date</b>
                    <p class="article-text">Text text text text</p>
                    <a href="#">Read more...</a>
                </div>
                <div class="article">
                    <img class="promo-pic" src="posters_pics/overlord_ver4_xlg.jpg">
                    <a class="news-article-url" href="#"><h3 class="article-title">Title</h3></a>
                    <b>date</b>
                    <p class="article-text">Text text text text</p>
                    <a href="#">Read more...</a>
                </div>
                </div>
            </section>

            <section class="contents-section">
                <h2 class="contents-title">New Movies</h2>
                <div class="contents-container">
                    <a class="movie-url" href="movie_page_git.html"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>
                    <a class="movie-url" href="#"><img class="movie-poster" src="posters_pics/overlord_ver4_xlg.jpg"></a>

                </div>
                <a class="content-sub-title" href="#"><b>Show All</b></a>
            </section>

            <section class="series-section">
                <h2 class="series-title">New Series</h2>
                <div class="series-content">
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg"></a>
                    <a class="series-url" href="#"><img class="series-poster" src="posters_pics/series_posters/sueprgirld_poster.png"></a>
                </div>

                <a class="content-sub-title button" href="#"><b>Show All</b></a>

            </section>

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
