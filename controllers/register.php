<?php require_once 'database.php';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "Select * From users Where email='$email'";
    $result = mysqli_query($connection, $query);

    $insert_query = "INSERT INTO `users`( `email`, `password`) VALUES (?,?)";
    $stmt = mysqli_stmt_init($connection);


    if (mysqli_num_rows($result) > 0) {
        echo 'Ez az email cím már létezik !';
    } else {
        if (empty($password) || empty($email)) {
            echo 'Kérem töltse ki az adatokat, nem kell sokat, ne legyél lusta';
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            if (mysqli_stmt_prepare($stmt, $insert_query) == false) {
                echo 'Inícializálás nem működik';
            } else {
                mysqli_stmt_bind_param($stmt, 'ss', $email, $hashed_password);
                mysqli_stmt_execute($stmt);
                
                header("Location: ../index.php?Registered=Success");
            }
        }
    }
}
