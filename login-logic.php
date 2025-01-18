<?php
session_start(); 
include "connect.php"; 

if(isset($_POST['login_email']) && isset($_POST['login_password'])) {
    
    function validate($data) {
        $data = trim($data); 
        $data = stripslashes($data); 
        $data = htmlspecialchars($data); 
        return $data; 
    }

    $email = validate($_POST['login_email']);
    $pass = validate($_POST['login_password']);

    if(empty($email)) {
        header("Location: index.php?error=username is required");
        exit();
    } else if(empty($pass)) {
        header("Location: index.php?error=password is required");
        exit();
    }


    $sql = "SELECT * FROM users WHERE user_email = '$email'"; 

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result); 

        if(password_verify($pass, $row['user_password'])) {
            $_SESSION['user_email'] = $row['user_email'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['login_success'] = true; 
            header("Location: home.php");
            exit(); 
        } else {
            header("Location: index.php?error=Incorrect username or password");
            exit(); 
        }
    } else {
        header("Location: index.php?error=Incorrect username or password");
        exit(); 
    }
} else {
    header("Location: index.php?error=Both fields are required");
    exit(); 
}
?>