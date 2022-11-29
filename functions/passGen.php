<?php
function pass_gen()
{
    $symbols = '!@#$%^&*()_-=+;:,.?';
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $nums = '1234567890';
    $allchars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?';
    $password = '';
    for ($i = 0; $i < $_GET['length']; $i++) {
        $password .= $allchars[rand(0, strlen($allchars) - 1)];
    }
    return $password;
}

pass_gen();
