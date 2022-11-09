<?php
session_start();
require 'config/constants.php'; 

$firstname = $_SESSION['signup-data']['firstname'];
$lastname = $_SESSION['signup-data']['lastname'];
$username = $_SESSION['signup-data']['username'];
$email = $_SESSION['signup-data']['email'];
$createpassword = $_SESSION['signup-data']['createpassword'];
$confirmpassword = $_SESSION['signup-data']['confirmpassword'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!--stylesheet-->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;700;800;900&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
</head>

    <section class="form__section">
        <div class="container form__section-container">
            <h2>Sign Up</h2>

                <?php if(isset($_SESSION['signup'])) : ?>
                    <div class="alert__message error">
                    <p><?= $_SESSION['signup']; unset($_SESSION['signup']); ?></p>
                </div>
               <?php endif ?>

            <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
                <input type="text" name="firstname" value="<?= $firstname ?>"placeholder="First Name">
                <input type="text" name="lastname" value="<?= $lastname ?>"placeholder="Last Name">
                <input type="text" name="username" value="<?= $username ?>"placeholder="Username">
                <input type="email" name="email" value="<?= $email ?>"placeholder="Email">
                <input type="password" name="createpassword" value="<?= $createpassword ?>"placeholder="Create Password">
                <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>"placeholder="Confirm Password">
                <div class="form__control">
                    <label for="avatar">User Avatar</label>
                    <input type="file" name="avatar"id="avatar">
                </div>
                <button class="btn" name="submit" type="submit">Sign Up</button>
                <small>Already have an account? <a class="" href="signin.php">Sign In</a></small>
            </form>
        </div>
    </section>

 <?php include 'partials/footer.php'; ?>