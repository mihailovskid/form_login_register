<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usersData = file_get_contents('users.txt');

    $users = explode(PHP_EOL, $usersData);

    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username'] ?? '';
    }
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'] ?? '';
    }

    foreach ($users as $user) {
        $credential = explode('|', $user);

        if ($credential[0] == $username) {
            if (password_verify($password, $credential[1])) {
                return header('Location: dashboard.php?message=Welcome!');
            }
        }
    }

    return header('Location: index.php?loginError=Wrong%20Credentials');
} else {
    return header('Location: index.php');
}
