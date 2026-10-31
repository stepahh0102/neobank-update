<?php
require 'auth.php';
requireLogin();
$user = currentUser();
$pageTitle = 'Личный кабинет';
$extraCss = ['/neobank/cabinet/style.css'];
require __DIR__ . '/../header.php';
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> / Личный кабинет
</div>

<div class="cabinet-layout">

  <?php require 'sidebar.php'; ?>

  <div class="cabinet-content">

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
      <h2 class="page-title" style="margin: 0;">Привет, <?= htmlspecialchars(explode(' ', $user['name'])[0]) ?>!</h2>
      <span style="color: #8b949e; font-size: 14px;">Сегодня хороший день для инвестиций 📈</span>
    </div>

    <div class="dashboard-cards">

      <div class="balance-card">
        <div class="balance-label">Общий баланс</div>
        <div class="balance-value">
          <?= number_format($user['balance'], 0, '.', ' ') ?> <span><?= $user['currency'] ?></span>
        </div>
        <a href="transactions.php" class="balance-link">История операций →</a>
      </div>

      <div class="card-visual">
        <div class="card-brand">NeoBank Premium</div>
        <div class="card-chip"></div>
        <div class="card-number"><?= htmlspecialchars($user['card']) ?></div>
        <div class="card-holder">
          <div><?= strtoupper(htmlspecialchars($user['name'])) ?></div>
          <div>12/29</div>
        </div>
      </div>

    </div>

    <h3 class="section-title">Быстрые действия</h3>

    <div class="quick-actions">
      <a href="exchange.php" class="action-card">
        <div class="action-icon"></div>
        <div class="action-title">Обмен валют</div>
        <div class="action-desc">RUB, USD, EUR, BTC</div>
      </a>

      <a href="invest.php" class="action-card">
        <div class="action-icon"></div>
        <div class="action-title">Инвестиции</div>
        <div class="action-desc">Акции, ETF, крипта</div>
      </a>

      <a href="/neobank/payments/payment.php" class="action-card">
        <div class="action-icon"></div>
        <div class="action-title">Пополнить</div>
        <div class="action-desc">Карта, перевод, крипта</div>
      </a>

      <a href="/neobank/anim_and_social/chat.html" class="action-card">
        <div class="action-icon"></div>
        <div class="action-title">Чат</div>
        <div class="action-desc">Общение с клиентами</div>
      </a>
    </div>

    <h3 class="section-title">Последние операции</h3>

    <table class="cabinet-table">
      <thead>
        <tr><th>Дата</th><th>Операция</th><th>Сумма</th></tr>
      </thead>
      <tbody>
        <tr><td>2026-10-01</td><td>Перевод в США</td><td class="out">-1 500.00 USD</td></tr>
        <tr><td>2026-10-03</td><td>Зарплата</td><td class="in">+120 000.00 RUB</td></tr>
        <tr><td>2026-10-05</td><td>Обмен EUR → USD</td><td class="in">+2 180.00 USD</td></tr>
        <tr><td>2026-10-09</td><td>Подписка Premium</td><td class="out">-9.99 USD</td></tr>
      </tbody>
    </table>

  </div>
</div>

<?php require __DIR__ . '/../footer.php'; ?>