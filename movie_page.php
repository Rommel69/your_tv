<?php
/**
 * Created by PhpStorm.
 * User: Predator
 * Date: 12/30/18
 * Time: 11:34
 */

?>

<!DOCTYPE>
<html lang="EN">
<head>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="css/normalize.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:300" rel="stylesheet">
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


<section class="movie-section">
    <div class="movie-content-wrapper">
        <div class="movie-wrapper">
            <div class="movie-top-wrapper">
            <div class="movie-page top-part">
                <img class="movie-poster" src="posters_pics/series_posters/the_last_kingdom_poster.jpg" alt="">

            </div>
            <div class="movie-page middle-part">
                <h3 class="movie-title">The Last Kingdom</h3>
                <p class="movie-descr movie-year">Year: 2019            </p>
                <p class="movie-descr movie-director">Director: Radja Kutropali    </p>
                <p class="movie-descr movie-actors">Actors: Sed consequat, Sed consequat, Sed consequat        </p>
                <p class="movie-descr movie-scenarist">Scenarist: Sed consequat   </p>
                <p class="movie-descr movie-producer">Producer: Sed consequat     </p>
                <p class="movie-descr movie-artist">Artist: Sed consequat        </p>
                <p class="movie-descr movie-editor">Editor: Sed consequat         </p>
                <p class="movie-descr movie-operator">Operator: Sed consequat     </p>
                <p class="movie-descr movie-genre">Genre: Porno, Action          </p>
                <p class="movie-descr movie-rdate">Release Date World: 02.08.2019</p>
                <p class="movie-descr movie-country">Country: USA,England      </p>
                <p class="movie-descr movie-length">Movie Length: 2:19    </p>
                <p class="movie-descr movie-slogan">Slogan: Sed consequatSed consequatSed consequat        </p>

            </div>
            </div>
            <div class="description-sector">
                <h3 class="description-sector-header">Description:</h3>
                <p class="description-text">Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida
                    magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                    nonummy id, metus.
                    Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida
                    magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                    nonummy id, metus.Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida
                    magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                    nonummy id, metus.Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida
                    magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                    nonummy id, metus.</p>
            </div>
            <div class="screens-sector">
                <img class="movie-screen" alt=" " src="posters_pics/series_posters/the_last_kingdom_poster.jpg">
                <img class="movie-screen" alt=" " src="posters_pics/series_posters/the_last_kingdom_poster.jpg">
                <img class="movie-screen" alt=" " src="posters_pics/series_posters/the_last_kingdom_poster.jpg">
                <img class="movie-screen" alt=" " src="posters_pics/series_posters/the_last_kingdom_poster.jpg">
            </div>

            <div class="player-sector">
                <video class="movie-player" controls width="1160">
                    <source src="test_videos/Boom Boom Satellites All in the Day (live) [360p].mp4">
                    Sorry, your browser doesn't support embedded videos.
                </video>
                <a class="download-movie" href="#">Download</a>
            </div>

            <div class="movie-page bottom-part">
                <div class="comments-sector">
                    <div class="user-comment">
                        <div class="user-comment-wrapper">
                            <div class="user-avatar">
                                <img class="user-avatar-pic" src="#" alt=" ">
                            </div>
                            <div class="user-comment-container">
                                <p class="user-comment-text">This is the best movie that I have ever seen!</p>
                            </div>
                            <div class="user-comment-dateCont">
                                <b class="user-comment-date">02.08.19</b>
                                <b class="user-comment-like">0</b>
                                <b class="user-comment-dislike">0</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="leave-comment-sector">
                <textarea class="write-comment" cols="14" rows="6"></textarea>
            </div>
        </div>
    </div>
</section>

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
