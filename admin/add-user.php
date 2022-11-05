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


    <section class="form__section">
        <div class="container form__section-container">
            <h2>Add User</h2>
            <div class="alert__message error">
                <p>This is an error</p>
            </div>
            <form action="">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="text" placeholder="Username">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Create Password">
                <input type="password" placeholder="Confirm Password">
                <select>
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <div class="form__control">
                    <label for="avatar">Enter User Avatar</label>
                    <input type="file" id="avatar">
                </div>
                <button class="btn" type="submit">Add User</button>
            </form>
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
</body>

</html>