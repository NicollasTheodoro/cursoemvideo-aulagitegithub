<?php include 'db/config.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Pedido de Projeto - Página Inicial</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
  <header>
    <h1>Projeto PHP MySQL</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="pages/register.php">Cadastrar</a>
      <a href="pages/login.php">Login</a>
      <a href="pages/contact.php">Contato</a>
      <a href="pages/profile.php">Perfil</a>
    </nav>
  </header>

  <main>
    <h2>Bem-vindo!</h2>
    <p>Este é um projeto de exemplo com PHP e MySQL. Use o menu acima para navegar.</p>

    <?php if(isset($_SESSION['user'])): ?>
      <p>Você está logado como <strong><?php echo htmlspecialchars($_SESSION['user']['name']); ?></strong>. <a href="actions/logout.php">Sair</a></p>
    <?php else: ?>
      <p><a class="btn" href="pages/register.php">Criar conta</a> 
      <a class="btn" href="pages/login.php">Entrar</a></p>
    <?php endif; ?>
  </main>

  <footer>
    &copy; 2025 - Todos os direitos reservados.
  </footer>
</div>
</body>
</html>
