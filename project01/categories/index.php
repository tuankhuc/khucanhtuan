<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body>
    <header id="header">
        <div class="grid header__container">
            <!-- Header logo -->
            <div class="logo">
                <a href="#" class="logo-link">
                    <img src="./assets/img/logo.png" alt="" class="logo-link-img">
                </a>
            </div>
            <!-- Menu -->
            <div class="navbar">
                <!-- Menu PC & Tablet -->
                <ul class="navbar__list">
                    <li class="navbar__list-item">
                        <a href="#" class="navbar__list-item-link text--hover">Home</a>
                    </li>
                    <li class="navbar__list-item">
                        <a href="#" class="navbar__list-item-link text--hover">Categories</a>
                    </li>
                    <li class="navbar__list-item">
                        <a href="#" class="navbar__list-item-link text--hover">Foods</a>
                    </li>
                    <li style="border: none" class="navbar__list-item">
                        <a href="#" class="navbar__list-item-link text--hover">Contact</a>
                    </li>
                </ul>
                <!-- Menu Mobile -->
                <input type="checkbox" name="" class="navbar__input" id="check-box">
                <label for="check-box" class="menu--mobile">
                    <i class="fas fa-bars"></i>
                </label>
                <label for="check-box" class="navbar__overlay"></label>
                <div class="navbar__mobile">
                    <label for="check-box" class="navbar__list-item navbar__close">
                        <i class="navbar__close-icon fas fa-times"></i>
                    </label>
                    <li class="navbar__list-item">
                        <a href="#" class="navbar__list-item-link text--hover">Home</a>
                    </li>
                    <li class="navbar__list-item">
                        <a href="#" class="navbar__list-item-link text--hover">Categories</a>
                    </li>
                    <li class="navbar__list-item">
                        <a href="#" class="navbar__list-item-link text--hover">Foods</a>
                    </li>
                    <li class="navbar__list-item">
                        <a href="#" class="navbar__list-item-link text--hover">Contact</a>
                    </li>
                </div>
            </div>
        </div>
    </header>
    <main id="main">
        <section class="search">
            <div class="search__item">
                <input class="search__item-input" type="text" name="" id="" placeholder="Search for Foods..">
                <button class="search__item-button btn--hover">Search</button>
            </div>
        </section>
        <section class="explore grid">
            <h2>Explore Foods</h2>
            <div class="explore__list">
                <div class="explore__list-img">
                    <img src="./assets/img/pizza.jpg" alt="">
                    <p>Pizza</p>
                </div>
                <div class="explore__list-img">
                    <img src="./assets/img/burger.jpg" alt="">
                    <p>Burger</p>
                </div>
                <div class="explore__list-img">
                    <img src="./assets/img/momo.jpg" alt="">
                    <p>Momo</p>
                </div>
            </div>
            <div class="explore__list">
                <div class="explore__list-img">
                    <img src="./assets/img/pizza.jpg" alt="">
                    <p>Pizza</p>
                </div>
                <div class="explore__list-img">
                    <img src="./assets/img/burger.jpg" alt="">
                    <p>Burger</p>
                </div>
                <div class="explore__list-img">
                    <img src="./assets/img/momo.jpg" alt="">
                    <p>Momo</p>
                </div>
            </div>          
        </section>
    </main>
    <footer id="footer">
        <div class="footer__link">
            <i>
                <a href="#"><img src="https://img.icons8.com/color/50/000000/facebook.png"/></a>
            </i>
            <i>
                <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></a>
            </i>
            <i>
                <a href="#"><img src="https://img.icons8.com/color/50/000000/twitter.png"/></a>
            </i>
        </div>
    </footer>
    <footer id="footer">
        <div class="footer__author">
            <p>All right reserved. Designed By <a class="text--hover" href="#">Vijay Thapa</a></p>
        </div>
    </footer>
</body>
</html>