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

    <section class="form__section">
        <div class="container form__section-container">
            <h2>Sign Up</h2>
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
                <div class="form__control">
                    <label for="avatar"></label>
                    <input type="file" id="avatar">
                </div>
                <button class="btn" type="submit">Sign Up</button>
                <small>Already have an account? <a class="" href="signin.html">Sign In</a></small>
            </form>
        </div>
    </section>

</body>

</html>