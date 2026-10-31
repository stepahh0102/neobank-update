<?php
$pageTitle = 'Тарифы';
$extraCss = ['/neobank/website/style.css'];
require __DIR__ . '/../header.php';

$plans = [
    [
        'name' => 'Basic',
        'price' => '0',
        'currency' => '₽/мес',
        'features' => [
            'Счёт в 1 валюте',
            'Переводы до 100 000 ₽',
            '1 виртуальная карта',
            'Поддержка по email'
        ],
        'popular' => false,
        'btn_class' => 'btn-outline'
    ],
    [
        'name' => 'Premium',
        'price' => '990',
        'currency' => '₽/мес',
        'features' => [
            'Счета в 5 валютах',
            'Переводы без лимита',
            '3 карты (включая металл)',
            'Инвестиции без комиссии',
            'Поддержка 24/7 в чате'
        ],
        'popular' => true,
        'btn_class' => 'btn-primary'
    ],
    [
        'name' => 'Private',
        'price' => '4 990',
        'currency' => '₽/мес',
        'features' => [
            'Счета в 12 валютах',
            'Персональный менеджер',
            'Обмен по курсу 0.1%',
            'VIP-инвестиции и IPO',
            'Доступ в клуб трейдеров'
        ],
        'popular' => false,
        'btn_class' => 'btn-outline'
    ]
];
?>

<div class="breadcrumbs" style="margin-top: 20px; margin-bottom: 30px;">
  <a href="/neobank/index.php">Главная</a> /
  <a href="/neobank/website/index.php">Сайт</a> / <span>Тарифы</span>
</div>

<div class="pricing-header">
  <h2 class="page-title" style="margin: 0 0 15px 0;">Выберите свой тариф</h2>
  <p style="color: #8b949e; font-size: 16px;">Прозрачные условия без скрытых комиссий. Отмените подписку в любой момент.</p>
</div>

<div class="pricing-grid">
  <?php foreach ($plans as $plan): ?>
    <div class="pricing-card <?= $plan['popular'] ? 'popular' : '' ?>">
      <?php if ($plan['popular']): ?>
        <div class="pricing-badge">Хит продаж</div>
      <?php endif; ?>
      
      <h3><?= $plan['name'] ?></h3>
      
      <div class="pricing-price">
        <?= $plan['price'] ?> <span><?= $plan['currency'] ?></span>
      </div>
      
      <ul class="pricing-features">
        <?php foreach ($plan['features'] as $feature): ?>
          <li><?= $feature ?></li>
        <?php endforeach; ?>
      </ul>
      
      <a href="/neobank/PHP_forms/register.php" class="pricing-btn <?= $plan['btn_class'] ?>">
        Подключить
      </a>
    </div>
  <?php endforeach; ?>
</div>

<?php require __DIR__ . '/../footer.php'; ?>