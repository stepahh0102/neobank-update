<?php
require 'auth.php';
requireLogin();

$rates = [
    'RUB' => 1,
    'USD' => 92.30,
    'EUR' => 100.50,
    'BTC' => 6200000,
    'ETH' => 325000,
];

$result = "";
$error  = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $from = $_POST['from'] ?? '';
    $to   = $_POST['to']   ?? '';
    $amount = (float)($_POST['amount'] ?? 0);

    if ($amount <= 0)              $error = "Введите сумму больше 0";
    elseif ($from === $to)         $error = "Выберите разные валюты";
    elseif (!isset($rates[$from], $rates[$to])) $error = "Неверная валюта";
    else {
        $inRub  = $amount * $rates[$from];
        $result_amount = $inRub / $rates[$to];
        $commission = $result_amount * 0.005;
        $final = $result_amount - $commission;

        $result = sprintf(
            "%s %s → %s %s (комиссия: %s %s)",
            number_format($amount, 2, '.', ' '), $from,
            number_format($final, 2, '.', ' '),  $to,
            number_format($commission, 2, '.', ' '), $to
        );
    }
}

$pageTitle = 'Обмен валют';
$extraCss = ['/neobank/cabinet/style.css'];
require __DIR__ . '/../header.php';
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> /
  <a href="index.php">Кабинет</a> / Обмен валют
</div>

<div class="cabinet-layout">
  <?php require 'sidebar.php'; ?>

  <div class="cabinet-content">
    <h2 class="page-title">Обмен валют</h2>

    <div class="form-card" style="max-width:600px; margin-bottom: 30px;">
      <?php if ($error):  ?><div class="alert alert-error"><?= $error ?></div><?php endif; ?>
      <?php if ($result): ?><div class="alert alert-success">Обмен выполнен: <?= $result ?></div><?php endif; ?>

      <form method="post" action="exchange.php">
        <label>Из валюты</label>
        <select name="from">
          <?php foreach ($rates as $code => $rate): ?>
            <option value="<?= $code ?>"><?= $code ?></option>
          <?php endforeach; ?>
        </select>

        <label>В валюту</label>
        <select name="to">
          <?php foreach ($rates as $code => $rate): ?>
            <option value="<?= $code ?>" <?= $code === 'USD' ? 'selected' : '' ?>><?= $code ?></option>
          <?php endforeach; ?>
        </select>

        <label>Сумма</label>
        <input type="number" name="amount" value="1000" step="0.01">

        <button type="submit">Обменять</button>
      </form>
    </div>

    <h3 class="section-title">Курсы NeoBank</h3>
    <table class="cabinet-table" style="max-width:600px;">
      <thead><tr><th>Валюта</th><th>Курс к RUB</th></tr></thead>
      <tbody>
        <?php foreach ($rates as $code => $rate): ?>
          <tr><td><?= $code ?></td><td><?= number_format($rate, 2, '.', ' ') ?> ₽</td></tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php require __DIR__ . '/../footer.php'; ?>