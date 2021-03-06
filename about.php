<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="css/test.css">
        <link rel="shortcut icon" type="image/png" href="images/loghip.jpeg">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <title>trillo &mdash; Your all-in-one booking app</title>
    </head>
    <body>
        <div class="container-3">
            <header class="header-3">
                <img src="images/loghip.jpeg" alt="trillo logo" class="logo-3">

                <form action="#" class="search-3">
                    <input type="text" class="search-3__input" placeholder="Search content" >
                    <button class="search-3__button">
                        <svg class="search-3__icon">
                            <use xlink:href="images/sprite.svg#icon-magnifying-glass"></use>
                        </svg>
                    </button>
                </form>
                <p><span id="output" style="font-weight:bold"></span> </p>

                <nav class="user-nav-3">
                    <div class="user-nav-3__icon-box">
                        <svg class="user-nav-3__icon">
                            <use xlink:href="images/sprite.svg#icon-bookmark"></use>
                        </svg>
                        <span class="user-nav-3__notification">7</span>
                    </div>
                    <div class="user-nav-3__icon-box">
                        <svg class="user-nav-3__icon">
                            <use xlink:href="images/sprite.svg#icon-chat"></use>
                        </svg>
                        <span class="user-nav-3__notification">13</span>
                    </div>
                    <div class="user-nav-3__user">
                        <img src="images/Foto_graduacion_jpg.jpg" alt="User photo" class="user-nav-3__user-photo">
                        <span class="user-nav-3__user-name"><a href="https://www.linkedin.com/in/alvaro-serrano-rivas-055351177/">Alvaro</a></span>
                    </div>
                    <div class="user-nav-3__user">
                        <img src="images/hunter.jpg" alt="User photo" class="user-nav-3__user-photo">
                        <span class="user-nav-3__user-name">Hunter</span>
                    </div>
                </nav>
            </header>


        <div class="content-3">
                <nav class="sidebar-3">
                    <ul class="side-nav-3">
                        <li class="side-nav-3__item side-nav-3__item--active" style="padding:10px;">
                            <a href="#" class="side-nav-3__link">
                                <i class="fab fa-html5">
                                <span><a href="main.php">HTML</i></a></span>
                            </a>
                        </li>
                        <li class="side-nav-3__item" style="padding:10px;">
                            <a href="#" class="side-nav-3__link">
                                <i class="fab fa-css3-alt"></i>
                                <span><a href="#">CSS</a></span>
                            </a>
                        </li>
                        <li class="side-nav-3__item" style="padding:10px;">
                            <a href="#" class="side-nav-3__link">
                                <i class="fab fa-js-square"></i>
                                <span><a href="#">JAVASCRIPT</a></span>
                            </a>
                        </li>
                        <li class="side-nav-3__item" style="padding:10px;">
                            <a href="#" class="side-nav-3__link">
                                <i class="fab fa-js-square"></i>
                                <span><a href="#">JQUERY</a></span>
                            </a>
                        </li>
                        <li class="side-nav-3__item" style="padding:10px;">
                            <a href="#" class="side-nav-3__link">
                                <i class="fab fa-js-square"></i>
                                <span><a href="#">AJAX</a></span>
                            </a>
                        </li>
                        <li class="side-nav-3__item" style="padding:10px;">
                            <a href="#" class="side-nav-3__link">
                                <i class="fas fa-database"></i>
                                <span><a href="#">SQL</a></span>
                            </a>
                        </li>
                        <li class="side-nav-3__item" style="padding:10px;">
                            <a href="#" class="side-nav-3__link">
                                <i class="fab fa-php"></i>
                                <span><a href="logout.php">PHP</a></span>
                            </a>
                        </li>
                    </ul>
    
                    <div class="legal-3">
                        &copy; All rights reserved.
                    </div>
                </nav>



            <main class="hotel-view-3">
                <div class="gallery-3">
                    <figure class="gallery-3__item">
                        <img src="images/html.png" alt="HTML" class="gallery-3__photo" style = "width:80%; height:80%;  margin-top: 20px;">
                    </figure>
                    <figure class="gallery-3__item">
                        <img src="images/css.png" alt="CSS" class="gallery-3__photo" style = "width:100%; height:100%">
                    </figure>
                    <figure class="gallery-3__item">
                        <img src="images/boot.jpeg" alt="BOOTSTRAP" class="gallery-3__photo" style = "width:100%; height:100%">
                    </figure>
                    <figure class="gallery-3__item">
                        <img src="images/jq.png" alt="jQuery" class="gallery-3__photo" style = "width:80%; height:80%;  margin-top: 20px;">
                    </figure>
                    <figure class="gallery-3__item">
                        <img src="images/git.png" alt="jQuery" class="gallery-3__photo" style = "width:100%; height:100%; margin-top: 20px;">
                    </figure>

                    <div class="navigation" >
                    <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
        
                    <label for="navi-toggle" class="navigation__button">
                        <span class="navigation__icon">&nbsp;</span>
                    </label>
        
                    <div class="navigation__background" >&nbsp;</div>
        
                    <nav class="navigation__nav" >
                        <ul class="navigation__list">
<<<<<<< HEAD
                            <li class="navigation__item" ><a href="main.php" class="navigation__link" ><span>01</span>Hippo Campus</a></li>
                            <li class="navigation__item" ><a href="bambi2.html" class="navigation__link"><span>02</span>Bambi</a></li>
                            <li class="navigation__item" ><a href="landmark2.html" class="navigation__link"><span>03</span>Landmark</a></li>
                            <li class="navigation__item" ><a href="budget.html" class="navigation__link"><span>04</span>Finance</a></li>
                            <li class="navigation__item" ><a href="about.php" class="navigation__link"><span>05</span>Developers</a></li>
=======
                            <li class="navigation__item" target="_blank"><a href="#main.php" class="navigation__link" target="_blank"><span>01</span>Hippo Campus</a></li>
                            <li class="navigation__item" target="_blank"><a href="bambi2.html" class="navigation__link"><span>02</span>Bambi</a></li>
                            <li class="navigation__item" target="_blank"><a href="landmark2.html" class="navigation__link"><span>03</span>Landmark</a></li>
                            <li class="navigation__item" target="_blank"><a href="budget.html" class="navigation__link"><span>04</span>Finance</a></li>
                            <li class="navigation__item" target="_blank"><a href="about.php" class="navigation__link"><span>05</span>Developers</a></li>
>>>>>>> 21b09f3ca99da87390dec5a2ea4c41540f54c15b
                            <li class="navigation__item">
                            <li class="navigation__item" ><a href="index.php" class="navigation__link"><span>06</span>Live chat</a></li>
                            <li class="navigation__item" ><a href="logout.php" class="navigation__link"><span>07</span>Logout</a></li>
                            </ul>
                    </nav>
                </div>
                </div>

                <div class="overview-3">
                    <h1 class="overview-3__heading">
                        Our clients come first
                    </h1>

                    <div class="overview-3__stars">
                        <svg class="overview-3__icon-star">
                            <use xlink:href="images/sprite.svg#icon-star"></use>
                        </svg>
                        <svg class="overview-3__icon-star">
                            <use xlink:href="images/sprite.svg#icon-star"></use>
                        </svg>
                        <svg class="overview-3__icon-star">
                            <use xlink:href="images/sprite.svg#icon-star"></use>
                        </svg>
                        <svg class="overview-3__icon-star">
                            <use xlink:href="images/sprite.svg#icon-star"></use>
                        </svg>
                        <svg class="overview-3__icon-star">
                            <use xlink:href="images/sprite.svg#icon-star"></use>
                        </svg>
                    </div>

                    <div class="overview-3__location">
                        <svg class="overview-3__icon-location">
                            <use xlink:href="images/sprite.svg#icon-location-pin"></use>
                        </svg>
                        <button class="btn-inline-3">Kalamazoo, Michigan</button>
                    </div>

                    <div class="overview-3__rating">
                        <div class="overview-3__rating-average">8.6</div>
                        <div class="overview-3__rating-count">429 votes</div>
                    </div>
                </div>

                <div class="detail-3">
                    <div class="description-3">
                        <p class="paragraph-3">
                            <q>We strive for 2 things: SIMPLICITY AND CLARITY</q>
                        </p>
                        <p class="paragraph-3">
                            <q>"There are 3 responses to a piece of design-yes, no and WOW! Wow is the one we are aiming for"</q>.
                        </p>
                        <ul class="list-3">
                            <li class="list-3__item">Tell us about your idea</li>
                            <li class="list-3__item">Set a deadline</li>
                            <li class="list-3__item">Express your desires</li>
                            <li class="list-3__item">Choose a domain name</li>
                            <li class="list-3__item">Promote yourself</li>
                            <li class="list-3__item">Updated skills</li>
                            <li class="list-3__item">We speak all languages</li>
                            <li class="list-3__item">Perfect for startups</li>
                        </ul>
                        <div class="recommend-3">
                            <p class="recommend-3__count">
                                Lucy and 3 other friends recommend the service provided by Alvaro and Hunter
                            </p>
                            <div class="recommend-3__friends">
                                <img src="images/user-3.jpg" alt="Friend 1" class="recommend-3__photo">
                                <img src="images/user-4.jpg" alt="Friend 2" class="recommend-3__photo">
                                <img src="images/user-5.jpg" alt="Friend 3" class="recommend-3__photo">
                                <img src="images/user-6.jpg" alt="Friend 4" class="recommend-3__photo">
                            </div>
                            <img src="images/git.png" alt="">
                        </div>
                    </div>

                    <div class="user-reviews-3">
                        <figure class="review-3">
                            <blockquote class="review-3__text">
                                Alvaro and Hunter do care about your goals more than anyone. From their first moment they have understood the needs of business and have showcased its strength through a user-friendly website that adapst to all kinds of techologies.
                            </blockquote>
                            <figcaption class="review-3__user">
                                <img src="images/user-1.jpg" alt="User 1" class="review-3__photo">
                                <div class="review-3__user-box">
                                    <p class="review-3__user-name">Nick Smith</p>
                                    <p class="review-3__user-date">Feb 23rd, 2017 </p>
                                </divages>
                                <div class="review-3__rating">7.8</div>
                            </figcaption>
                        </figure>

                        <figure class="review-3">
                            <blockquote class="review-3__text">
                                This group of developers are responsible for the design of responsive and full-stack applications. It is the second time I purchased their services and I can´t stop writing positive reviews about their customer service.
                            </blockquote>
                            <figcaption class="review-3__user">
                                <img src="images/user-2.jpg" alt="User 1" class="review-3__photo">
                                <div class="review-3__user-box">
                                    <p class="review-3__user-name">Mary Thomas</p>
                                    <p class="review-3__user-date">Sept 13th, 2017</p>
                                </div>
                                <div class="review-3__rating">9.3</div>
                            </figcaption>
                        </figure>

                        <button class="btn-inline-3">Show all <span>&rarr;</span></button>
                    </div>
                </div>


            </main>
        </div>
    </div>
    </body>
</html>
