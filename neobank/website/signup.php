<?php
$pageTitle = 'Регистрация';
require __DIR__ . '/../header.php';

$error = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $pass = $_POST['password'] ?? '';
    $pass2 = $_POST['password2'] ?? '';

    if (!$name) $error = "Введите имя";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $error = "Некорректный email";
    elseif (strlen($pass) < 6) $error = "Пароль минимум 6 символов";
    elseif ($pass !== $pass2) $error = "Пароли не совпадают";
    else $success = "Аккаунт создан для " . htmlspecialchars($email);
}
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> /
  <a href="/neobank/website/index.php">Сайт</a> / Регистрация
</div>

<h2 class="page-title">Создайте аккаунт</h2>

<div class="form-card">
  <?php if ($error): ?><div class="alert alert-error"><?= $error ?></div><?php endif; ?>
  <?php if ($success): ?><div class="alert alert-success"><?= $success ?></div><?php endif; ?>

  <form method="post" action="signup.php">
    <label>Имя</label>
    <input type="text" name="name">

    <label>Email</label>
    <input type="email" name="email">

    <label>Пароль</label>
    <input type="password" name="password">

    <label>Повторите пароль</label>
    <input type="password" name="password2">

    <button type="submit">Создать аккаунт</button>
  </form>
</div>

<?php require __DIR__ . '/../footer.php'; ?>