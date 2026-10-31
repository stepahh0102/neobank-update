<?php
$pageTitle = 'Оплата';
$extraCss = ['/neobank/payments/style.css'];
require __DIR__ . '/../header.php';
?>

<div class="breadcrumbs" style="margin-top: 20px; margin-bottom: 30px;">
  <a href="/neobank/index.php">Главная</a> /
  <a href="/neobank/payments/index.php">Оплата</a> / <span>Форма оплаты</span>
</div>

<div class="payment-page-wrapper">

  <div class="payment-header">
    <h2 class="page-title" style="margin: 0;">Оплата услуг</h2>
    <p style="color: #8b949e; margin-top: 10px;">Безопасная оплата через CloudPayments</p>
  </div>

  <div class="payment-layout">

    <div class="payment-left">
      
      <div class="card-wrapper">
        <div class="card-container" onclick="this.classList.toggle('flipped')">
          <div class="card">
            <div class="card-face card-front">
              <div style="display:flex; justify-content:space-between; align-items:center;">
                <span style="font-weight:800; font-size: 18px; letter-spacing: 1px;">NeoBank</span>
                <span style="font-size:11px; letter-spacing: 2px;">PREMIUM</span>
              </div>
              <div class="card-chip"></div>
              <div class="card-number">4276 1234 5678 9010</div>
              <div class="card-bottom">
                <div><small>CARD HOLDER</small><br>OSIPOV STEPAN</div>
                <div><small>EXPIRES</small><br>12/29</div>
              </div>
            </div>
            <div class="card-face card-back">
              <div class="stripe"></div>
              <div class="cvv-box">CVV 842</div>
              <div style="margin-top:20px; font-size:12px; opacity:0.5; text-align:center;">Кликните, чтобы перевернуть</div>
            </div>
          </div>
        </div>
      </div>

      <div class="payment-services">
        <h3>Что оплачиваем?</h3>

        <label class="service-option">
          <input type="radio" name="service" value="Пополнение счёта" checked>
          <span>Пополнение счёта</span>
        </label>

        <label class="service-option">
          <input type="radio" name="service" value="Premium-подписка">
          <span>Premium-подписка</span>
        </label>

        <label class="service-option">
          <input type="radio" name="service" value="Покупка криптовалюты">
          <span>Покупка криптовалюты</span>
        </label>

        <label class="service-option">
          <input type="radio" name="service" value="Инвестиции">
          <span>Инвестиции</span>
        </label>
      </div>
    </div>

    <div class="form-card payment-form">
      <h3 style="margin-top:0; margin-bottom: 25px; color: #fff; font-size: 20px;">Данные для оплаты</h3>

      <label>Сумма</label>
      <div class="input-group">
        <input type="number" value="1000">
        <span class="input-suffix">₽</span>
      </div>

      <label>Email для чека</label>
      <input type="email" placeholder="you@example.com">

      <label>Номер карты</label>
      <input type="text" placeholder="0000 0000 0000 0000">

      <div style="display:grid; grid-template-columns:1fr 1fr; gap:15px;">
        <div>
          <label>Срок</label>
          <input type="text" placeholder="MM/YY">
        </div>
        <div>
          <label>CVV</label>
          <input type="password" placeholder="•••" maxlength="3">
        </div>
      </div>

      <div class="payment-total">
        <span>Итого к оплате:</span>
        <b>1 000 ₽</b>
      </div>

      <button type="button" onclick="alert('Здесь подключается CloudPayments')">Оплатить</button>
      
      <div class="secure-badge">
        Данные защищены по стандарту PCI DSS
      </div>
    </div>

  </div>
</div>

<?php require __DIR__ . '/../footer.php'; ?>