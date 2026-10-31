<?php
$pageTitle = 'О нас';
$extraCss = ['/neobank/website/style.css'];
require __DIR__ . '/../header.php';
?>

<div class="breadcrumbs" style="margin-top: 20px; margin-bottom: 30px;">
  <a href="/neobank/index.php">Главная</a> /
  <a href="/neobank/website/index.php">Сайт</a> / <span>О нас</span>
</div>

<div class="about-wrapper">

  <div class="about-hero">
    <h2 class="page-title" style="margin: 0 0 20px 0;">О NeoBank</h2>
    <p class="about-lead">
      NeoBank — цифровая экосистема нового поколения, объединяющая традиционный банк, криптобиржу и социальную сеть в одном приложении. Мы стираем границы между странами и валютами.
    </p>
  </div>

  <h3 class="section-title">Что мы делаем</h3>

  <div class="services-grid">
    <div class="service-card">
      <div class="service-icon"></div>
      <h4>Счета в 6 странах</h4>
      <p>Открывайте счета в рублях, долларах, евро, фунтах и криптовалютах в один клик.</p>
    </div>

    <div class="service-card">
      <div class="service-icon"></div>
      <h4>Обмен без границ</h4>
      <p>Конвертируйте фиат в 50+ криптовалют по лучшему рыночному курсу с комиссией от 0.2%.</p>
    </div>

    <div class="service-card">
      <div class="service-icon"></div>
      <h4>Инвестиции</h4>
      <p>Покупайте акции мировых компаний, ETF и крипто-активы прямо с баланса карты.</p>
    </div>

    <div class="service-card">
      <div class="service-icon"></div>
      <h4>Соцсеть для клиентов</h4>
      <p>Общайтесь с трейдерами, делитесь аналитикой и находите единомышленников.</p>
    </div>
  </div>

  <h3 class="section-title">Наши офисы</h3>
  
  <div class="offices-grid">
    <div class="office-tag">Москва</div>
    <div class="office-tag">Дубай</div>
    <div class="office-tag">Сингапур</div>
    <div class="office-tag">Лондон</div>
    <div class="office-tag">Нью-Йорк</div>
    <div class="office-tag">Франкфурт</div>
  </div>

</div>

<?php require __DIR__ . '/../footer.php'; ?>