<?php

function checkUsernameMinCharacters($username)
{
    if (strlen($username) < 4) {
        return false;
    }
    return true;
}

function checkUsernameMinPassword($password)
{
    if (strlen($password) < 6) {
        return false;
    }
    return true;
}

function usernameUnique($username)
{
    $usersData = file_get_contents('users.txt');
    $users = explode(PHP_EOL, $usersData);

    foreach ($users as $user) {
        $credential = explode('|', $user);

        if ($credential[0] == $username) {
            return false;
        }
    }
    return true;
}
