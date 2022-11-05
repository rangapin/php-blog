<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!--stylesheet-->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;700;800;900&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">BLOG</a>
            <ul class="nav__items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <!--<li><a href="signin.html">Signin</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg" alt="avatar">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <section class="dashboard">
        <div class="container dashboard__container">

            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>

            <aside>
                <ul>
                    <li>
                        <a href="add-post.html"><i class="uil uil-pen"></i>
                            <h5>Add Post</h5></i>
                        </a>
                    </li>
                    <li>
                        <a href="manage-post.html"><i class="uil uil-postcard"></i>
                            <h5>Manage Posts</h5></i>
                        </a>
                    </li>
                    <li>
                        <a href="add-user.html"><i class="uil uil-user-plus"></i>
                            <h5>Add User</h5></i>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.html" class="active"><i class="uil uil-users-alt"></i>
                            <h5>Manage Users</h5></i>
                        </a>
                    </li>
                    <li>
                        <a href="add-category.html"><i class="uil uil-edit"></i>
                            <h5>Add Category</h5></i>
                        </a>
                    </li>
                    <li>
                        <a href="manage-categories.html"><i class="uil uil-list-ul"></i>
                            <h5>Manage Categories</h5></i>
                        </a>
                    </li>
                </ul>
            </aside>

            <main>
                <h2> Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monh Die</td>
                            <td>Hard</td>
                            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Danny Dan</td>
                            <td>Yeah</td>
                            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Jacky Chan</td>
                            <td>Hard</td>
                            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                            <td>No</td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </section>

    <footer>
        <div class="footer__socials">
            <a href="www.youtube.com" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="www.facebook.com" target="_blank"><i class="uil uil-facebook"></i></a>
            <a href="www.linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="www.twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Art</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Freediving</a></li>
                    <li><a href="">New stuff</a></li>
                    <li><a href="">Old STuff</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Art</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Freediving</a></li>
                    <li><a href="">New stuff</a></li>
                    <li><a href="">Old STuff</a></li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Art</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Freediving</a></li>
                    <li><a href="">New stuff</a></li>
                    <li><a href="">Old STuff</a></li>
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Freediving</a></li>
                    <li><a href="">New stuff</a></li>
                    <li><a href="">Old STuff</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>Copyright @ 2022 Richard Angapino</small>
        </div>
        </div>
    </footer>

    <script src="./main.js"></script>
</body>

</html>