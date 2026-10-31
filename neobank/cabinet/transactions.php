<?php
require 'auth.php';
requireLogin();
$pageTitle = 'История операций';
$extraCss = ['/neobank/cabinet/style.css'];
require __DIR__ . '/../header.php';

$transactions = [
    ['date' => '2026-10-01', 'name' => 'Перевод в США',        'amount' => -1500.00, 'currency' => 'USD', 'status' => 'Выполнено'],
    ['date' => '2026-10-02', 'name' => 'Покупка BTC',          'amount' => -500.00,  'currency' => 'USDT', 'status' => 'Выполнено'],
    ['date' => '2026-10-03', 'name' => 'Зарплата',             'amount' => 120000.00,'currency' => 'RUB', 'status' => 'Зачислено'],
    ['date' => '2026-10-05', 'name' => 'Обмен EUR → USD',      'amount' => 2180.00,  'currency' => 'USD', 'status' => 'Выполнено'],
    ['date' => '2026-10-07', 'name' => 'Дивиденды ETF',        'amount' => 85.40,    'currency' => 'USD', 'status' => 'Зачислено'],
    ['date' => '2026-10-09', 'name' => 'Подписка Premium',     'amount' => -9.99,    'currency' => 'USD', 'status' => 'Выполнено'],
];
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> /
  <a href="index.php">Личный кабинет</a> / Операции
</div>

<div class="cabinet-layout">
  <?php require 'sidebar.php'; ?>

  <div class="cabinet-content">
    <h2 class="page-title">История операций</h2>

    <table class="cabinet-table">
      <thead>
        <tr><th>Дата</th><th>Операция</th><th>Сумма</th><th>Валюта</th><th>Статус</th></tr>
      </thead>
      <tbody>
        <?php foreach ($transactions as $t): ?>
          <tr>
            <td><?= $t['date'] ?></td>
            <td><?= $t['name'] ?></td>
            <td class="<?= $t['amount'] < 0 ? 'out' : 'in' ?>">
              <?= ($t['amount'] > 0 ? '+' : '') . number_format($t['amount'], 2, '.', ' ') ?>
            </td>
            <td><?= $t['currency'] ?></td>
            <td><?= $t['status'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php require __DIR__ . '/../footer.php'; ?>