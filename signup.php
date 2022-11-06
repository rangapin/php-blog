<?php include 'partials/header.php'; ?>

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
                <small>Already have an account? <a class="" href="signin.php">Sign In</a></small>
            </form>
        </div>
    </section>

 <?php include 'partials/footer.php'; ?>