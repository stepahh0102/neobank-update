<?php
$pageTitle = 'BI Аналитика NeoBank';
$extraCss = ['/neobank/analytics/style.css'];
require __DIR__ . '/../header.php';
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> / Аналитика
</div>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
  <h2 class="page-title" style="margin: 0;">Дашборд аналитики</h2>
  <div style="color: #8b949e; font-size: 14px;">Данные за: <b>Октябрь 2026</b></div>
</div>

<div class="analytics-grid">
  <div class="metric-card blue">
    <div class="metric-title">Всего пользователей</div>
    <div class="metric-value">5 950</div>
    <div class="metric-trend up">▲ 12% к прошлому месяцу</div>
  </div>
  
  <div class="metric-card green">
    <div class="metric-title">Новые регистрации</div>
    <div class="metric-value">1 890</div>
    <div class="metric-trend up">▲ 8% к прошлому месяцу</div>
  </div>

  <div class="metric-card orange">
    <div class="metric-title">Активные карты</div>
    <div class="metric-value">3 240</div>
    <div class="metric-trend up">▲ 4% к прошлому месяцу</div>
  </div>

  <div class="metric-card purple">
    <div class="metric-title">Объём транзакций</div>
    <div class="metric-value">68.1M ₽</div>
    <div class="metric-trend down">▼ 2% к прошлому месяцу</div>
  </div>
</div>

<div class="chart-container">
  <div class="chart-header">
    <h3 class="chart-title">Сравнение трафика пользователей (Сентябрь / Октябрь)</h3>
  </div>
  <div style="height: 300px;">
    <canvas id="compareChart"></canvas>
  </div>
</div>

<div class="chart-container">
  <div class="chart-header">
    <h3 class="chart-title">Активность пользователей в системе (за неделю)</h3>
  </div>
  <div style="height: 300px;">
    <canvas id="activityChart"></canvas>
  </div>
</div>

<h3 class="section-title" style="color:#fff; margin-bottom: 15px;">Детальная статистика</h3>
<div class="table-container">
  <table class="analytics-table">
    <thead>
      <tr>
        <th>Период</th>
        <th>Всего посещений</th>
        <th>Старые пользователи</th>
        <th>Новые пользователи</th>
        <th>Конверсия</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Октябрь 2026</td>
        <td>5 950</td>
        <td>4 060</td>
        <td>1 890</td>
        <td><span class="conversion-badge">31.7%</span></td>
      </tr>
      <tr>
        <td>Сентябрь 2026</td>
        <td>5 320</td>
        <td>3 570</td>
        <td>1 750</td>
        <td><span class="conversion-badge">32.8%</span></td>
      </tr>
      <tr>
        <td>Август 2026</td>
        <td>4 800</td>
        <td>3 100</td>
        <td>1 700</td>
        <td><span class="conversion-badge">35.4%</span></td>
      </tr>
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="/neobank/analytics/charts.js"></script>

<?php require __DIR__ . '/../footer.php'; ?>