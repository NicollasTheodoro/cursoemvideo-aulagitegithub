<?php include '../db/config.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Login</title><link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
  <h2>Login</h2>
  <?php if(isset($_GET['msg']) && $_GET['msg']=='registered') echo '<p>Registrado com sucesso. Faça login.</p>'; ?>
  <form action="../actions/login_action.php" method="post">
    <label>Email</label>
    <input required type="email" name="email">
    <label>Senha</label>
    <input required type="password" name="password">
    <button class="btn" type="submit">Entrar</button>
  </form>
  <p><a href="register.php">Criar conta</a> | <a href="../index.php">Voltar</a></p>
  <footer>&copy; 2025 - Todos os direitos reservados.</footer>
</div>
</body></html>
