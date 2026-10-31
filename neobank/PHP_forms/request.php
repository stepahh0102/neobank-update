<?php
$pageTitle = 'Заявка';
require __DIR__ . '/../header.php';

$catalog = [
    "Карты" => ["Дебетовая", "Кредитная", "Виртуальная", "Premium"],
    "Кредиты" => ["Потребительский", "Ипотека", "Автокредит"],
    "Инвестиции" => ["Брокерский счёт", "ETF", "ПИФы", "Крипто"],
    "Обмен" => ["USD → RUB", "EUR → USD", "FIAT → BTC", "FIAT → USDT"],
];

$category = $_POST['category'] ?? '';
$product = $_POST['product'] ?? '';
$result = "";

if (isset($_POST['formSubmit'])) {
    if (!$category || !$product) {
        $result = "<div class='alert alert-error'>Выберите категорию и продукт</div>";
    } else {
        $result = "<div class='alert alert-success'>Заявка принята. Категория: " . htmlspecialchars($category) . ", продукт: " . htmlspecialchars($product) . "</div>";
    }
}
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> /
  <a href="/neobank/PHP_forms/index.php">Регистрация</a> / Задание 4
</div>

<h2 class="page-title">Заявка на продукт</h2>

<div class="form-card" style="max-width:620px;">
  <?= $result ?>

  <form method="post" action="request.php">
    <label>Категория</label>
    <select name="category" onchange="this.form.submit()">
      <option value="">Выберите...</option>
      <?php foreach ($catalog as $cat => $items): ?>
        <option value="<?= $cat ?>" <?= $cat == $category ? 'selected' : '' ?>><?= $cat ?></option>
      <?php endforeach; ?>
    </select>

    <label>Продукт</label>
    <select name="product">
      <option value="">Не выбрано</option>
      <?php if ($category && isset($catalog[$category])): ?>
        <?php foreach ($catalog[$category] as $item): ?>
          <option value="<?= $item ?>" <?= $item == $product ? 'selected' : '' ?>><?= $item ?></option>
        <?php endforeach; ?>
      <?php endif; ?>
    </select>

    <button type="submit" name="formSubmit" value="1">Отправить</button>
  </form>
</div>

<?php require __DIR__ . '/../footer.php'; ?>