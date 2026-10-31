<?php
$pageTitle = 'Обратная связь';
require __DIR__ . '/../header.php';

$message = "";
$type = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $text = $_POST['message'] ?? '';

    if (!$name || !$email || !$text) {
        $type = "error";
        $message = "Заполните все поля";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $type = "error";
        $message = "Некорректный email";
    } else {
        $type = "success";
        $message = "Спасибо, " . htmlspecialchars($name) . "! Обращение отправлено.";
    }
}
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> /
  <a href="/neobank/payments/index.php">Оплата</a> / Обратная связь
</div>

<h2 class="page-title">Обратная связь</h2>

<div class="form-card">
  <?php if ($message): ?>
    <div class="alert <?= $type === 'success' ? 'alert-success' : 'alert-error' ?>"><?= $message ?></div>
  <?php endif; ?>

  <form method="post" action="feedback.php">
    <label>Имя</label>
    <input type="text" name="name">

    <label>Email</label>
    <input type="email" name="email">

    <label>Сообщение</label>
    <textarea name="message" rows="5"></textarea>

    <button type="submit">Отправить</button>
  </form>
</div>

<?php require __DIR__ . '/../footer.php'; ?>