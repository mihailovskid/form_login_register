<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST) {
        if (isset($_POST['username']) && !empty($_POST['username'])) {
            $username = $_POST['username'] ?? '';
        }
        if (isset($_POST['password']) && !empty($_POST['password'])) {
            $password = $_POST['password'] ?? '';
        }
        include_once('functions.php');



        if (!checkUsernameMinCharacters($username)) {
            return header('Location: index.php?registerError=Ussername%20too%20Short');
        }
        if (!checkUsernameMinPassword($password)) {
            return header('Location: index.php?registerError=Password%20too%20Short');
        }
        if (!usernameUnique($username)) {
            return header('Location: index.php?registerError=Username%20Taken');
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        file_put_contents('users.txt', "$username|$hashedPassword" . PHP_EOL, FILE_APPEND);

        header("Location: index.php?registerMessage=Success");
    }
} else {

    return header('Location: index.php');
}
