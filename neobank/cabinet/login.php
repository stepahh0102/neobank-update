<?php
require 'auth.php';
require 'users.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $pass  = $_POST['password'] ?? '';

    $user = findUser($email);
    if (!$user || $user['password'] !== $pass) {
        $error = "Неверный email или пароль";
    } else {
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit;
    }
}

$pageTitle = 'Вход в NeoBank';
require __DIR__ . '/../header.php';
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> / Вход
</div>

<h2 class="page-title">Войти в NeoBank</h2>

<div class="form-card" style="margin:0 auto;">
  <div class="alert alert-success" style="margin-bottom:15px;">
    Демо-доступ: <b>demo@neobank.ru</b> / пароль <b>demo123</b>
  </div>

  <?php if ($error): ?>
    <div class="alert alert-error"><?= $error ?></div>
  <?php endif; ?>

  <form method="post" action="login.php">
    <label>Email</label>
    <input type="email" name="email" value="demo@neobank.ru">

    <label>Пароль</label>
    <input type="password" name="password" value="demo123">

    <button type="submit">Войти</button>
  </form>

  <p style="text-align:center;margin-top:15px;color:#8b949e;">
    Нет аккаунта? <a href="register.php">Зарегистрироваться</a>
  </p>
</div>

<?php require __DIR__ . '/../footer.php'; ?>