<?php
$current = basename(dirname($_SERVER['PHP_SELF']));
if ($current === 'neobank') $current = 'home';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $pageTitle ?? 'NeoBank' ?></title>
  <link rel="stylesheet" href="/neobank/style.css">
  <?php if (!empty($extraCss)): foreach ($extraCss as $css): ?>
    <link rel="stylesheet" href="<?= $css ?>">
  <?php endforeach; endif; ?>
</head>
<body>

<header class="site-header">
  <h1><a href="/neobank/index.php"><span class="logo-mark">N</span>NeoBank</a></h1>
  <div class="header-tagline">Банк · Соцсеть · Крипто · Инвестиции</div>
</header>

<nav class="site-nav">
  <ul>
    <li><a href="/neobank/index.php"      class="<?= $current === 'home' ? 'active' : '' ?>">Главная</a></li>
    <li><a href="/neobank/website/index.php"  class="<?= $current === 'website'  ? 'active' : '' ?>">Сайт</a></li>
    <li><a href="/neobank/payments/index.php"  class="<?= $current === 'payments'  ? 'active' : '' ?>">Оплата</a></li>
    <li><a href="/neobank/PHP_forms/index.php"  class="<?= $current === 'PHP_forms'  ? 'active' : '' ?>">Регистрация</a></li>
    <li><a href="/neobank/cabinet/index.php"  class="<?= $current === 'cabinet'  ? 'active' : '' ?>">Кабинет</a></li>
    <li><a href="/neobank/analytics/index.php" class="<?= $current === 'analytics' ? 'active' : '' ?>">Аналитика</a></li>
    <li><a href="/neobank/3d_models/index.php" class="<?= $current === '3d_models' ? 'active' : '' ?>">3D</a></li>
    <li><a href="/neobank/table_excel/index.php" class="<?= $current === 'table_excel' ? 'active' : '' ?>">Экспорт</a></li>
    <li><a href="/neobank/anim_and_social/index.php" class="<?= $current === 'anim_and_social' ? 'active' : '' ?>">Соцсеть</a></li>
  </ul>
</nav>

<main class="container">