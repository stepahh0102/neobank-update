<?php
$pageTitle = 'Главная';
require __DIR__ . '/header.php';
?>

<section class="hero">
  <h2>Один банк — весь мир</h2>
  <p>NeoBank — соцсеть, банк и криптобиржа в одном приложении.</p>
  <a href="/neobank/PHP_forms/register.php" class="btn-primary">Открыть счёт</a>
</section>

<h2 class="page-title">Разделы</h2>
<p class="page-desc">Практические работы по оптимизации веб-приложений</p>

<div class="cards">
  <a href="/neobank/website/index.php" class="card">
    <h3>Многостраничный сайт</h3>
    <p>Страницы, ЧПУ, QR, тарифы, формы</p>
  </a>
  <a href="/neobank/payments/index.php" class="card">
    <h3>Оплата и GitHub</h3>
    <p>Оплата, обратная связь, GitHub Pages</p>
  </a>
  <a href="/neobank/PHP_forms/index.php" class="card">
    <h3>Регистрация</h3>
    <p>Счета и продукты банка</p>
  </a>
  <a href="/neobank/cabinet/index.php" class="card">
    <h3>Личный кабинет</h3>
    <p>Осипов Степан</p>
  </a>
  <a href="/neobank/3d_models/index.php" class="card">
    <h3>3D-витрина</h3>
    <p>Карта, курсы, крипта</p>
  </a>
  <a href="/neobank/table_excel/index.php" class="card">
    <h3>Экспорт данных</h3>
    <p>Выгрузка в Excel</p>
  </a>
  <a href="/neobank/anim_and_social/index.php" class="card">
    <h3>Соцсеть</h3>
    <p>Фильтры, поиск, чат</p>
  </a>
</div>

<?php require __DIR__ . '/footer.php'; ?>