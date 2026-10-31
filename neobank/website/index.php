<?php
$pageTitle = 'Сайт';
require __DIR__ . '/../header.php';
?>

<div class="breadcrumbs"><a href="/neobank/index.php">Главная</a> / Сайт</div>

<h2 class="page-title">Многостраничный сайт</h2>
<p class="page-desc">Практическая работа №3</p>

<ul class="tasks">
  <li><div class="task-text"><span class="task-num">1</span> Страницы сайта</div>
      <a href="/neobank/website/about.php">О нас</a></li>
  <li><div class="task-text"><span class="task-num">2</span> ЧПУ-адреса</div>
      <a href="/neobank/website/about.php">Пример</a></li>
  <li><div class="task-text"><span class="task-num">3</span> QR-код</div>
      <a href="/neobank/website/qr.php">Открыть</a></li>
  <li><div class="task-text"><span class="task-num">4</span> Таблица тарифов</div>
      <a href="/neobank/website/pricing.php">Открыть</a></li>
  <li><div class="task-text"><span class="task-num">5</span> Форма регистрации</div>
      <a href="/neobank/website/signup.php">Открыть</a></li>
</ul>

<?php require __DIR__ . '/../footer.php'; ?>