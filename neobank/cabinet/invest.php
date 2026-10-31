<?php
require 'auth.php';
requireLogin();

$portfolio = [
    ['asset' => 'AAPL',  'name' => 'Apple Inc.',      'qty' => 10, 'price' => 185.40, 'currency' => 'USD'],
    ['asset' => 'TSLA',  'name' => 'Tesla',           'qty' => 5,  'price' => 250.00, 'currency' => 'USD'],
    ['asset' => 'BTC',   'name' => 'Bitcoin',         'qty' => 0.05,'price' => 67320, 'currency' => 'USD'],
    ['asset' => 'SPY',   'name' => 'S&P 500 ETF',     'qty' => 8,  'price' => 445.00, 'currency' => 'USD'],
];

$total = 0;
foreach ($portfolio as $p) $total += $p['qty'] * $p['price'];

$pageTitle = 'Инвестиции';
$extraCss = ['/neobank/cabinet/style.css'];
require __DIR__ . '/../header.php';
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> /
  <a href="index.php">Кабинет</a> / Инвестиции
</div>

<div class="cabinet-layout">
  <?php require 'sidebar.php'; ?>

  <div class="cabinet-content">
    <h2 class="page-title">Инвестиционный портфель</h2>

    <div class="balance-card" style="margin-bottom: 30px; max-width: 600px;">
      <div class="balance-label">Общая стоимость портфеля</div>
      <div class="balance-value">$<?= number_format($total, 2, '.', ' ') ?></div>
    </div>

    <table class="cabinet-table" style="max-width:800px;">
      <thead>
        <tr><th>Актив</th><th>Название</th><th>Кол-во</th><th>Цена</th><th>Стоимость</th></tr>
      </thead>
      <tbody>
        <?php foreach ($portfolio as $p):
          $value = $p['qty'] * $p['price'];
        ?>
          <tr>
            <td><b><?= $p['asset'] ?></b></td>
            <td><?= $p['name'] ?></td>
            <td><?= $p['qty'] ?></td>
            <td>$<?= number_format($p['price'], 2, '.', ' ') ?></td>
            <td>$<?= number_format($value, 2, '.', ' ') ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php require __DIR__ . '/../footer.php'; ?>