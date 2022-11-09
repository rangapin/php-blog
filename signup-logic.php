<?php
require 'config/database.php';

//INPUT SANITIZATION

if (isset($_POST['submit'])) {
   $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
   $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

//INPUT VALIDATION

   if (!$firstname) {
      $_SESSION['signup'] = "Please enter your First Name";
   } elseif (!$lastname) {
      $_SESSION['signup'] = "Please enter your Last Name";
   } elseif (!$username) {
      $_SESSION['signup'] = "Please enter your Username";
   } elseif (!$email) {
      $_SESSION['signup'] = "Please enter a valid email";
   } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
      $_SESSION['signup'] = "Your password should be at least 8 characters";
   } else {
      if ($createpassword !== $confirmpassword) {
         $_SESSION['signup'] = "Passwords do not match!";
      } else {
         $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
         $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
         $user_check_result = mysqli_query($connection, $user_check_query);
         if (mysqli_num_rows($user_check_results) > 0) {
            $_SESSION['signup'] = "Username or Email already exist";
         } else {
            $time = time();
            $avatar_name = $time . $avatar['name'];
            $avatar_tmp_name = $avatar['tmp_name'];
            $avatar_destination_path = 'images/' . $avatar_name;

            $allowed_files = ['png', 'jpg', 'jpeg'];
            $extention = explode('.', $avatar_name);
            $extention = end($extention);
            if (in_array($extention, $allowed_files)) {
               if ($avatar['size'] < 1000000) {
                  move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
               } else {
                  $_SESSION['signup'] = 'File size should not exceed 1mb';
               }
            } else {
               $_SESSION['signup'] = 'File should be png, jpg or jpeg';
            }
         }
      }
   }


   
} else {
   header('location: ' . ROOT_URL . 'signup.php');
   die();
}
