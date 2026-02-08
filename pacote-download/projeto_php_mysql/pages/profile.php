<?php include '../db/config.php'; ?>
<?php
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Perfil</title><link rel="stylesheet" href="css/style.css"></head><body>
<div class="container">
  <h2>Perfil do Usuário</h2>
  <p>Nome: <?php echo htmlspecialchars($_SESSION['user']['name']); ?></p>
  <p>Email: <?php echo htmlspecialchars($_SESSION['user']['email']); ?></p>
  <p><a href="../actions/logout.php" class="btn">Sair</a> <a href="../index.php">Home</a></p>
  <footer>&copy; 2025 - Todos os direitos reservados.</footer>
</div>
</body></html>
