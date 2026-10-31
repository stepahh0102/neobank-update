<?php
$pageTitle = 'Поддержка';
require __DIR__ . '/../header.php';

$message = "";
$type = "";

if (isset($_POST['formSubmit'])) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if (!$name || !$email) {
        $type = "error";
        $message = "Заполните все поля";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $type = "error";
        $message = "Некорректный email";
    } else {
        $type = "success";
        $message = "Спасибо, " . htmlspecialchars($name) . "! Обращение принято.";
    }
}
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> /
  <a href="/neobank/PHP_forms/index.php">Регистрация</a> / Задание 5
</div>

<h2 class="page-title">Служба поддержки</h2>

<div class="form-card">
  <?php if ($message): ?>
    <div class="alert <?= $type == 'success' ? 'alert-success' : 'alert-error' ?>"><?= $message ?></div>
  <?php endif; ?>

  <form method="post" action="feedback.php">
    <label>Имя</label>
    <input type="text" name="name">

    <label>Email</label>
    <input type="text" name="email">

    <button type="submit" name="formSubmit" value="1">Отправить</button>
  </form>
</div>

<?php require __DIR__ . '/../footer.php'; ?>