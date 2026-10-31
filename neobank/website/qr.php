<?php
$pageTitle = 'QR-код';
$extraCss = ['/neobank/website/style.css'];
require __DIR__ . '/../header.php';

$url = 'http://localhost/neobank/website/index.php';
?>

<div class="breadcrumbs" style="margin-top: 20px; margin-bottom: 30px;">
  <a href="/neobank/index.php">Главная</a> /
  <a href="/neobank/website/index.php">Сайт</a> / <span>QR-код</span>
</div>

<div class="qr-page-wrapper">
  <div class="qr-card">
    <h2 class="qr-title">Ваш пропуск в NeoBank</h2>
    <p class="qr-subtitle">Отсканируйте камерой телефона, чтобы мгновенно открыть главную страницу на мобильном устройстве</p>
    
    <div class="qr-image-wrapper">
      <div id="qrcode"></div>
    </div>

    <div class="qr-url-box">
      <span>Ссылка:</span>
      <a href="<?= $url ?>" target="_blank"><?= htmlspecialchars($url) ?></a>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
<script>
  new QRCode(document.getElementById("qrcode"), {
    text: "<?= $url ?>",
    width: 240,
    height: 240,
    colorDark : "#0d1117",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
  });
</script>

<?php require __DIR__ . '/../footer.php'; ?>