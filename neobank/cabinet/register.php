<?php
require 'auth.php';
require 'users.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pass  = $_POST['password'] ?? '';
    $pass2 = $_POST['password2'] ?? '';

    if (!$name)                                         $error = "Введите имя";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $error = "Некорректный email";
    elseif (strlen($pass) < 6)                          $error = "Пароль минимум 6 символов";
    elseif ($pass !== $pass2)                           $error = "Пароли не совпадают";
    elseif (!createUser($name, $email, $pass))          $error = "Пользователь с таким email уже существует";
    else {
        $_SESSION['user'] = findUser($email);
        header("Location: index.php");
        exit;
    }
}

$pageTitle = 'Регистрация в NeoBank';
require __DIR__ . '/../header.php';
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> / Регистрация в кабинете
</div>

<h2 class="page-title">Создать аккаунт NeoBank</h2>

<div class="form-card" style="margin:0 auto;">
  <?php if ($error): ?>
    <div class="alert alert-error"><?= $error ?></div>
  <?php endif; ?>

  <form method="post" action="register.php">
    <label>Имя и фамилия</label>
    <input type="text" name="name">

    <label>Email</label>
    <input type="email" name="email">

    <label>Пароль</label>
    <input type="password" name="password">

    <label>Повторите пароль</label>
    <input type="password" name="password2">

    <button type="submit">Зарегистрироваться</button>
  </form>

  <p style="text-align:center;margin-top:15px;color:#8b949e;">
    Уже есть аккаунт? <a href="login.php">Войти</a>
  </p>
</div>

<?php require __DIR__ . '/../footer.php'; ?>