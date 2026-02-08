<?php include '../db/config.php'; ?>
<!doctype html>
<html>
<head><meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Cadastro</title>
<link rel="stylesheet" href="../css/style.css"></head>
<body>
<div class="container">
  <h2>Cadastro de Usuário</h2>
  <form action="../actions/register_action.php" method="post">
    <label>Nome</label>
    <input required type="text" name="name">
    <label>Email</label>
    <input required type="email" name="email">
    <label>Senha</label>
    <input required type="password" name="password">
    <button class="btn" type="submit">Cadastrar</button>
  </form>
  <p><a href="../index.php">Voltar</a></p>
  <footer>&copy; 2025 - Todos os direitos reservados.</footer>
</div>
</body>
</html>
