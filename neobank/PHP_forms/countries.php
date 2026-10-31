<?php
$pageTitle = 'Страны';
$extraCss = ['/neobank/PHP_forms/style.css'];
require __DIR__ . '/../header.php';

$error = "";
$result = "";

if (isset($_POST['formSubmit'])) {
    $countries = $_POST['formCountries'] ?? [];

    if (count($countries) == 0) {
        $error = "Вы не выбрали ни одной страны";
    } else {
        $n = count($countries);
        $result = "Вы выбрали $n стран: ";
        for ($i = 0; $i < $n; $i++) {
            $result .= $countries[$i] . ", ";
        }
    }
}
?>

<div class="breadcrumbs" style="margin-top:20px;">
  <a href="/neobank/index.php">Главная</a> /
  <a href="/neobank/PHP_forms/index.php">Регистрация</a> / Задание 2
</div>

<h2 class="page-title">Страны обслуживания</h2>
<p class="page-desc">NeoBank доступен в 6 ключевых регионах мира</p>

<div class="world-map-container">
  <img src="https://upload.wikimedia.org/wikipedia/commons/8/80/World_map_-_low_resolution.svg" class="world-map-img" alt="Карта мира">
  
  <div class="map-pin pin-us" style="top: 36%; left: 24%;"><span>USA</span></div>
  <div class="map-pin pin-uk" style="top: 30%; left: 46%;"><span>UK</span></div>
  <div class="map-pin pin-eu" style="top: 34%; left: 51%;"><span>EU</span></div>
  <div class="map-pin pin-ru" style="top: 25%; left: 68%;"><span>RU</span></div>
  <div class="map-pin pin-uae" style="top: 46%; left: 61%;"><span>UAE</span></div>
  <div class="map-pin pin-sg" style="top: 56%; left: 76%;"><span>SG</span></div>
</div>

<div class="form-card" style="margin: 0 auto; max-width: 600px;">
  <?php if ($error): ?><div class="alert alert-error"><?= $error ?></div><?php endif; ?>
  <?php if ($result): ?><div class="alert alert-success"><?= $result ?></div><?php endif; ?>

  <form method="post" action="countries.php">
    <label>Выберите страны для обслуживания (Ctrl для мультивыбора)</label>
    <select multiple name="formCountries[]" style="min-height:180px;">
      <option value="Россия">Россия</option>
      <option value="США">США</option>
      <option value="Европа">Европа</option>
      <option value="Великобритания">Великобритания</option>
      <option value="ОАЭ">ОАЭ</option>
      <option value="Сингапур">Сингапур</option>
    </select>
    <button type="submit" name="formSubmit" value="1">Подтвердить</button>
  </form>
</div>

<?php require __DIR__ . '/../footer.php'; ?>