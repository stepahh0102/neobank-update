<?php
$page = basename($_SERVER['PHP_SELF']);
$user = currentUser();
?>
<aside class="cabinet-sidebar">
  <div class="sidebar-user">
    <div class="user-avatar"><?= mb_substr($user['name'], 0, 1) ?></div>
    <div>
      <div class="user-name"><?= htmlspecialchars($user['name']) ?></div>
      <div class="user-email"><?= htmlspecialchars($user['email']) ?></div>
    </div>
  </div>

  <nav class="sidebar-nav">
    <a href="index.php"        class="<?= $page === 'index.php'        ? 'active' : '' ?>">Дашборд</a>
    <a href="transactions.php" class="<?= $page === 'transactions.php' ? 'active' : '' ?>">Операции</a>
    <a href="exchange.php"     class="<?= $page === 'exchange.php'     ? 'active' : '' ?>">Обмен валют</a>
    <a href="invest.php"       class="<?= $page === 'invest.php'       ? 'active' : '' ?>">Инвестиции</a>
    <a href="profile.php"      class="<?= $page === 'profile.php'      ? 'active' : '' ?>">Профиль</a>
    <a href="logout.php"       class="logout">Выйти</a>
  </nav>
</aside>