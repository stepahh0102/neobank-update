<?php
session_start();

function getUsers() {
    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = [
            'demo@neobank.ru' => [
                'name'     => 'Осипов Степан',
                'email'    => '$tep@neobank.ru',
                'password' => 'demo123',
                'balance'  => 125000,
                'currency' => '₽',
                'card'     => '4276 1234 5678 9010',
                'city'     => 'Москва',
            ],
        ];
    }
    return $_SESSION['users'];
}

function saveUsers($users) {
    $_SESSION['users'] = $users;
}

function findUser($email) {
    $users = getUsers();
    return $users[$email] ?? null;
}

function createUser($name, $email, $password) {
    $users = getUsers();
    if (isset($users[$email])) return false;

    $users[$email] = [
        'name'     => $name,
        'email'    => $email,
        'password' => $password,
        'balance'  => 1000,
        'currency' => '₽',
        'card'     => '0000 0000 0000 ' . rand(1000, 9999),
        'city'     => '—',
    ];
    saveUsers($users);
    return true;
}