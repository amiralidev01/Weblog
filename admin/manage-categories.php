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

    <section class="dashboard">
        <div class="container dashboard__container">
            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="fa-solid fa-angle-right"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="fa-solid fa-angle-left"></i></button>
            <aside>
                <ul>
                    <li>
                        <a href="add-post.html"><i class="fa-solid fa-pen"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-posts.html"><i class="fa-solid fa-bars-progress"></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-user.html"><i class="fa-solid fa-user-plus"></i>
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.html"><i class="fa-solid fa-users"></i>
                            <h5>Manage Users</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-category.html"><i class="fa-regular fa-pen-to-square"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-categories.html" class="active"><i class="fa-solid fa-list"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2>Manage Categories</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Travel</td>
                            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Travel</td>
                            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Travel</td>
                            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </section>


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