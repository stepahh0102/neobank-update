<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['user']);
}

function requireLogin() {
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit;
    }
}

function currentUser() {
    return $_SESSION['user'] ?? null;
}

function updateBalance($newBalance) {
    $_SESSION['user']['balance'] = $newBalance;
}