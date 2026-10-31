<?php
$pageTitle = 'Регистрация';
require __DIR__ . '/../header.php';

$error = "";

if (isset($_POST['formSubmit'])) {
    $name = $_POST['formName'] ?? '';
    $gender = $_POST['formGender'] ?? '';
    $country = $_POST['formCountry'] ?? '';

    if (!$name) $error .= "<li>Введите имя</li>";
    if (!$gender) $error .= "<li>Выберите пол</li>";
    if (!$country) $error .= "<li>Выберите страну</li>";

    if (!$error) {
        if ($country == "RU") $redir = "RU.html";
        elseif ($country == "US") $redir = "US.html";
        elseif ($country == "EU") $redir = "EU.html";
        elseif ($country == "UK") $redir = "UK.html";
        elseif ($country == "UAE") $redir = "UAE.html";
        elseif ($country == "SG") $redir = "SG.html";
        else $redir = "error.html";

        header("Location: " . $redir);
        exit;
    }
}
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> /
  <a href="/neobank/PHP_forms/index.php">Регистрация</a> / Задание 1
</div>

<h2 class="page-title">Регистрация клиента</h2>

<div class="form-card">
  <?php if ($error): ?>
    <div class="alert alert-error"><ul style="margin:0;padding-left:20px;"><?= $error ?></ul></div>
  <?php endif; ?>

  <form method="post" action="register.php">
    <label>Имя</label>
    <input type="text" name="formName">

    <label>Пол</label>
    <select name="formGender">
      <option value="">Выберите...</option>
      <option value="M">Мужской</option>
      <option value="F">Женский</option>
    </select>

    <label>Страна</label>
    <select name="formCountry">
      <option value="">Выберите...</option>
      <option value="RU">Россия</option>
      <option value="US">США</option>
      <option value="EU">Европа</option>
      <option value="UK">Великобритания</option>
      <option value="UAE">ОАЭ</option>
      <option value="SG">Сингапур</option>
    </select>

    <button type="submit" name="formSubmit" value="1">Открыть счёт</button>
  </form>
</div>

<?php require __DIR__ . '/../footer.php'; ?>