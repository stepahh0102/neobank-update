<?php
$pageTitle = 'Открытие счёта';
require __DIR__ . '/../header.php';

$error = "";
$success = "";

if (isset($_POST['formSubmit'])) {
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $type = $_POST['accountType'] ?? '';
    $currency = $_POST['currency'] ?? '';

    if (!$firstName) $error .= "<li>Введите имя</li>";
    if (!$lastName) $error .= "<li>Введите фамилию</li>";
    if (!$type) $error .= "<li>Выберите тип счёта</li>";
    if (!$currency) $error .= "<li>Выберите валюту</li>";

    if (!$error) {
        $success = "Счёт открыт для " . htmlspecialchars($firstName) . " " . htmlspecialchars($lastName)
                 . ". Тип: " . htmlspecialchars($type) . ", валюта: " . htmlspecialchars($currency);
    }
}
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> /
  <a href="/neobank/PHP_forms/index.php">Регистрация</a> / Задание 3
</div>

<h2 class="page-title">Открытие счёта</h2>

<div class="form-card">
  <?php if ($error): ?><div class="alert alert-error"><ul style="margin:0;padding-left:20px;"><?= $error ?></ul></div><?php endif; ?>
  <?php if ($success): ?><div class="alert alert-success"><?= $success ?></div><?php endif; ?>

  <form method="post" action="add_account.php">
    <label>Имя</label>
    <input type="text" name="firstName">

    <label>Фамилия</label>
    <input type="text" name="lastName">

    <label>Тип счёта</label>
    <select name="accountType">
      <option value="">Выберите...</option>
      <option value="Текущий">Текущий</option>
      <option value="Сберегательный">Сберегательный</option>
      <option value="Крипто-кошелёк">Крипто-кошелёк</option>
      <option value="Инвестиционный">Инвестиционный</option>
    </select>

    <label>Валюта</label>
    <select name="currency">
      <option value="">Выберите...</option>
      <option value="RUB">RUB</option>
      <option value="USD">USD</option>
      <option value="EUR">EUR</option>
      <option value="USDT">USDT</option>
      <option value="BTC">BTC</option>
    </select>

    <button type="submit" name="formSubmit" value="1">Открыть счёт</button>
  </form>
</div>

<?php require __DIR__ . '/../footer.php'; ?>