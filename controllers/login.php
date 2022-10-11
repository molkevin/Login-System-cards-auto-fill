<?php 
    require_once 'database.php';

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connection, $query);

    
    if (mysqli_num_rows($result) != 1) {
        echo 'Nem található ilyen email cím! ';
    }
        else {
            $user = mysqli_fetch_assoc($result);
           if (password_verify($password, $user['password'])== true) {
            echo 'Jelszó rendben van!';
            $_SESSION['user']=$user;
            header("Location: ../index.php?LoggedIn=Success");
           } 
           else {
            echo 'Szar vagy!';
           }
        }



?>