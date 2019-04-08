<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/icon-font.css">

        <link rel="stylesheet" href="css/test.css">
        <link rel="shortcut icon" type="ima™ge/png" href="images/favicon.png">
        
        <title>Hippo Campus | The Halocline</title>
    </head>

    <body>
        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item" target="_blank"><a href="#" class="navigation__link" target="_blank"><span>01</span>About us</a></li>
                    <li class="navigation__item" target="_blank"><a href="bambi2.html" class="navigation__link"><span>02</span>Bambi</a></li>
                    <li class="navigation__item" target="_blank"><a href="landmark2.html" class="navigation__link"><span>03</span>Landmark</a></li>
                    <li class="navigation__item" target="_blank"><a href="budget.html" class="navigation__link"><span>04</span>Finance</a></li>
                    <li class="navigation__item" target="_blank"><a href="about.php" class="navigation__link"><span>05</span>Developers</a></li>
                    <li class="navigation__item">
                    <li class="navigation__item" target="_blank"><a href="loginPage.php" class="navigation__link"><span>06</span>Logout</a></li>
                    </ul>
            </nav>
        </div>

        <header class="header">
            <div class="header__logo-box">
                <img src="images/logo-white.png" alt="Logo" class="header__logo">
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Indie</span>
                    <span class="heading-primary--sub">isn´t just a music genre</span>
                </h1>

                <a href="#section-tours" class="btn btn--white btn--animated">Discover our tours</a>
            </div>
        </header>

        <main>
            <section class="section-about">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Travel the world with your favourite music band
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">Landmark album and warm glow EP (2016-2018)</h3>
                        <p class="paragraph">
                            An album loaded with hickly cushioned ambiance, billowy melodies and concisely written songs.
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">Bambi(2018-present)</h3>
                        <p class="paragraph">
                        A massive step forward with more synthesizer and programmed drums. Hippo Campus headlined their own tour from Fall 2018 into Winter 2019 across the United States, the United Kingdom and Europe. They did a live session at WFUV radio,among other similar appearances.
                        </p>

                        <a href="band.html" class="btn-text">Meet our artists &rarr;</a>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">

                            <img srcset="images/nat-1.jpg 300w, images/nat-1-large.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 1"
                                 class="composition__photo composition__photo--p1"
                                 src="images/nat-1-large.jpg">

                            <img srcset="images/nat-2.jpg 300w, images/nat-2-large.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 2"
                                 class="composition__photo composition__photo--p2"
                                 src="images/nat-2-large.jpg">

                            <img srcset="images/nat-3.jpg 300w, images/nat-3-large.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 3"
                                 class="composition__photo composition__photo--p3"
                                 src="images/nat-3-large.jpg">

                            <!--
                            <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                            <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                            <img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                            -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-features">
                
                <div class="row">
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-world"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                            <p class="feature-box__text">
                                Tours across the United States and Europe
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-compass"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Meet nature</h3>
                            <p class="feature-box__text">
                            Look deep into nature and then you will understand everything better
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-map"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Find your way</h3>
                            <p class="feature-box__text">
                            Sometimes you need to get lost to find your way    
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-heart"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Philantrophy</h3>
                            <p class="feature-box__text">
                            We are part of the "Me Too" movement
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-tours" id="section-tours">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Most popular tours
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-3">
                       <div class="card">
                           <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">The Sea Explorer</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>3 day tours</li>
                                        <li>Up to 30 people</li>
                                        <li>2 tour guides</li>
                                        <li>Sleep in cozy hotels</li>
                                        <li>Difficulty: easy</li>
                                    </ul>
                                </div>
                           </div>
                           <div class="card__side card__side--back card__side--back-1">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$297</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                       </div>
                    </div>


                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--2">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--2">The Forest Hiker</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>7 day tours</li>
                                        <li>Up to 40 people</li>
                                        <li>6 tour guides</li>
                                        <li>Sleep in provided tents</li>
                                        <li>Difficulty: medium</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-2">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$497</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--3">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--3">The Snow Adventurer</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>5 day tours</li>
                                        <li>Up to 15 people</li>
                                        <li>3 tour guides</li>
                                        <li>Sleep in provided tents</li>
                                        <li>Difficulty: hard</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-3">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$897</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="u-center-text u-margin-top-huge">
                    <a href="budget.html" target="_blank" class="btn btn--green">Watch your budget</a>
                </div>
            </section>

            <section class="section-stories">
                <div class="bg-video">
                    <video class="bg-video__content" autoplay muted loop>
                        <source src="images/video.mp4" type="video/mp4">
                        <source src="images/video.webm" type="video/webm">
                        Your browser is not supported!
                    </video>
                </div>

                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Live a life you won´t forget
                    </h2>
                </div>

                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img src="images/nat-8.jpg" alt="Person on a tour" class="story__img">
                            <figcaption class="story__caption">Mary Smith</figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-bottom-small">I had the best week ever with my family</h3>
                            <p>
                                "Their ideology really made us take a look at how toxic masculinity has influenced the way we see ourselves and the world overall, in the past, we might have been apprehensive about being super-vulnerable, but now we’re more aware of how important it is to come forward about dealing with depression or anxiety. Because if more men are able to do that, they might be less likely to express those feelings as anger or violence.”
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img src="images/nat-9.jpg" alt="Person on a tour" class="story__img">
                            <figcaption class="story__caption">Jack Wilson</figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-bottom-small">WOW! My life is completely different now</h3>
                            <p>
                                "This drift from the status quo is apparent throughout the album. It’s playful and quirky, but with a vulnerability that lies in the fragile melodies and honest lyrics. They’re stretching, moving, and expanding what our society considers to be masculine. Bambi is unexpected, and once you get into a beat, it changes. It’ll have you bobbing your head to bubble sounds and loud glitches."
                            </p>
                        </div>
                    </div>
                </div>

                <div class="u-center-text u-margin-top-huge">
                    <a href="about.php" class="btn-text">Meet our developers &rarr;</a>
                </div>
            </section>

            <section class="section-book">
                <div class="row">
                    <div class="book">
                        <div class="book__form">
                            <form action="./includes/booking.inc.php" class="form">
                                <div class="u-margin-bottom-medium">
                                    <h2 class="heading-secondary">
                                        Start booking now
                                    </h2>
                                </div>

                                <div class="form__group">
                                    <input type="text" class="form__input" placeholder="Full name"  name= "fullName" required>
                                    <label for="fullName" class="form__label">Full name</label>
                                </div>

                                <div class="form__group">
                                    <input type="email" class="form__input" placeholder="Email address" name="email" required>
                                    <label for="email" class="form__label">Email address</label>
                                </div>

                                <div class="form__group u-margin-bottom-medium">
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="small" name="tour">
                                        <label for="small" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Small tour group
                                        </label>
                                    </div>

                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="large" name="tour">
                                        <label for="large" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Large tour group
                                        </label>
                                    </div>
                                </div>

                                <div class="form__group">
                                    <button type="submit" class="btn btn--green">Next step &rarr;</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <section class="contact">
            <?php
                // include 'contact.php';
            ?>
        </section>

        <footer class="footer">
            <div class="footer__logo-box">
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="about.html" class="footer__link">Company</a></li>
                            <li class="footer__item"><a href="about.html" class="footer__link">Contact us</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Careers</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer__copyright">
                        Built by Alvaro Serrano and Hunter Nyenhuis for our CS3500 project using HTML, CSS and Javascript.
                        <span><a class="footer__link" href="about.html">Meet our Developers</a></span> 
                       <br>    Copyright &copy; .
                    </p>
                </div>
            </div>
        </footer>

        <div class="popup" id="popup">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="images/nat-8.jpg" alt="Tour photo" class="popup__img">
                    <img src="images/nat-9.jpg" alt="Tour photo" class="popup__img">
                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-small">Start booking now</h2>
                    <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before booking</h3>
                    <p class="popup__text">
                    Your access to and use of the Service is conditioned on your acceptance of and compliance with
                    these Terms. These Terms apply to all visitors, users and others who access or use the Service.
                    By accessing or using the Service you agree to be bound by these Terms. If you disagree
                    with any part of the terms then you may not access the Service.

                    If you wish to purchase any product or service made available through the Service ("Purchase"),
                    you may be asked to supply certain information relevant to your Purchase including, without
                    limitation, your credit card number and ID.
                    Some parts of the service are billed on a subscription basis. You will be billed on a recurring period of 2 years.
                    Our service allows you to post, link, store, share and otherwise make available certain information, text, graphics, videos or other material. You are responsible for the Copyright fines that you may incur.
                    </p>
                    <a href="hotel.html" class="btn btn--green">Book now</a>
                </div>
            </div>
        </div>

        <!--
        <section class="grid-test">
            <div class="row">
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-2-of-3">
                    Col 2 of 3
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-2-of-4">
                    Col 2 of 4
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-3-of-4">
                    Col 3 of 4
                </div>
            </div>
        </section>
        -->

    </body>
</html> 