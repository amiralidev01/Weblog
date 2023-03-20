<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMV-Weblog</title>
    <!-- Custome Style -->
    <link rel="stylesheet" href="/Content/css/style.css">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font (MONTSERRAT) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- NAV START -->
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">AMVBLOG</a>
            <ul class="nav__items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="Signin.html">SignIn</a></li>

                <li class="nav__profile">
                    <div class="avatar">
                        <img src="Content/images/avatar15.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn"><i class="fa-solid fa-bars"></i></button>
            <button id="close__nav-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>
    <!-- NAV END -->

    <!-- SEARCH START -->
    <section class="search__bar">
        <form class="container search__bar-container" action="">
            <div>
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" name="" placeholder="Search">
            </div>

            <button type="submit" class="btn">Go</button>
        </form>
    </section>
    <!-- SEARCH END -->

    <!-- POSTS START -->
    <section class="posts">
        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbnail">
                    <img src="Content/images/blog10.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Art</a>
                    <h3 class="post__title"><a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Ad, cum!</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima enim molestiae eum iusto nulla
                        dolores ab. Asperiores fugit tenetur deserunt soluta.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Content/images/avatar12.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Jone Mills</h5>
                            <small>June 13, 2023 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="Content/images/blog12.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Art</a>
                    <h3 class="post__title"><a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Ad, cum!</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima enim molestiae eum iusto nulla
                        dolores ab. Asperiores fugit tenetur deserunt soluta.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Content/images/avatar4.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Jone Mills</h5>
                            <small>June 13, 2023 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="Content/images/blog15.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Art</a>
                    <h3 class="post__title"><a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Ad, cum!</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima enim molestiae eum iusto nulla
                        dolores ab. Asperiores fugit tenetur deserunt soluta.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Content/images/avatar5.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Jone Mills</h5>
                            <small>June 13, 2023 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="Content/images/blog6.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Art</a>
                    <h3 class="post__title"><a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Ad, cum!</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima enim molestiae eum iusto nulla
                        dolores ab. Asperiores fugit tenetur deserunt soluta.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Content/images/avatar8.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Jone Mills</h5>
                            <small>June 13, 2023 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="Content/images/blog20.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Art</a>
                    <h3 class="post__title"><a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Ad, cum!</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima enim molestiae eum iusto nulla
                        dolores ab. Asperiores fugit tenetur deserunt soluta.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Content/images/avatar9.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Jone Mills</h5>
                            <small>June 13, 2023 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="Content/images/blog100.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Art</a>
                    <h3 class="post__title"><a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Ad, cum!</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima enim molestiae eum iusto nulla
                        dolores ab. Asperiores fugit tenetur deserunt soluta.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Content/images/avatar17.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Jone Mills</h5>
                            <small>June 13, 2023 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="Content/images/blog56.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Art</a>
                    <h3 class="post__title"><a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Ad, cum!</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima enim molestiae eum iusto nulla
                        dolores ab. Asperiores fugit tenetur deserunt soluta.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Content/images/avatar15.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Jone Mills</h5>
                            <small>June 13, 2023 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- POSTS END -->

    <!-- CATEGORY BUTTONS START -->
    <section class="category__buttons">
        <div class="container category__buttons-container">
            <a href="" class="category__button">Travel</a>
            <a href="" class="category__button">Wild Life</a>
            <a href="" class="category__button">Art</a>
            <a href="" class="category__button">Science & Technology</a>
            <a href="" class="category__button">Music</a>
            <a href="" class="category__button">Food</a>
        </div>
    </section>
    <!-- CATEGORY BUTTONS END -->

    <!-- FOOTER START -->
    <footer>
        <div class="footer__socials">
            <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-telegram"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
        </div>

        <div class="container footer__container">

            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Wild Life</a></li>
                    <li><a href="">Art</a></li>
                    <li><a href="">Science & Technology</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Food</a></li>
                </ul>
            </article>

            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article>

            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>

            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Food</a></li>
                </ul>
            </article>

        </div>

        <div class="footer__copyright">
            <small>Copyright &copy; Developed by AmirAliVerdinejad</small>
        </div>

    </footer>
    <!-- FOOTER END -->

    <script src="Content/js/Main.js"></script>
</body>

</html>