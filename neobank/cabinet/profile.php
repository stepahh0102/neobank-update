<?php
require 'auth.php';
requireLogin();

$success = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['user']['name'] = trim($_POST['name'] ?? $_SESSION['user']['name']);
    $_SESSION['user']['city'] = trim($_POST['city'] ?? $_SESSION['user']['city']);

    $users = getUsers();
    $users[$_SESSION['user']['email']] = $_SESSION['user'];
    saveUsers($users);

    $success = "Профиль обновлён";
}

$user = currentUser();
$pageTitle = 'Профиль';
$extraCss = ['/neobank/cabinet/style.css'];
require __DIR__ . '/../header.php';
?>

<div class="breadcrumbs">
  <a href="/neobank/index.php">Главная</a> /
  <a href="index.php">Кабинет</a> / Профиль
</div>

<div class="cabinet-layout">
  <?php require 'sidebar.php'; ?>

  <div class="cabinet-content">
    <h2 class="page-title">Профиль</h2>

    <div class="form-card" style="max-width:600px;">
      <?php if ($success): ?><div class="alert alert-success"><?= $success ?></div><?php endif; ?>

      <form method="post" action="profile.php">
        <label>Имя и фамилия</label>
        <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>">

        <label>Email</label>
        <input type="email" value="<?= htmlspecialchars($user['email']) ?>" disabled>

        <label>Город</label>
        <input type="text" name="city" value="<?= htmlspecialchars($user['city']) ?>">

        <label>Номер карты</label>
        <input type="text" value="<?= htmlspecialchars($user['card']) ?>" disabled>

        <button type="submit">Сохранить</button>
      </form>
    </div>
  </div>
</div>

<?php require __DIR__ . '/../footer.php'; ?>