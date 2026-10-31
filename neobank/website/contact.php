<?php
$pageTitle = 'Контакты';
require __DIR__ . '/../header.php';

$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $text = $_POST['message'] ?? '';
    if ($name && $email && $text) {
        $message = "<div class='alert alert-success'>Спасибо, " . htmlspecialchars($name) . "! Мы ответим на " . htmlspecialchars($email) . ".</div>";
    } else {
        $message = "<div class='alert alert-error'>Заполните все поля.</div>";
    }
}
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> /
  <a href="/neobank/website/index.php">Сайт</a> / Контакты
</div>

<h2 class="page-title">Свяжитесь с нами</h2>

<div class="form-card">
  <?= $message ?>
  <form method="post" action="contact.php">
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