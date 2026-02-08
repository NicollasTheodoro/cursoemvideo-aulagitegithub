<?php include '../db/config.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Contato</title><link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
  <h2>Contato</h2>
  <form action="../actions/contact_action.php" method="post">
    <label>Nome</label>
    <input required type="text" name="name" value="<?php echo isset($_SESSION['user'])?htmlspecialchars($_SESSION['user']['name']):''; ?>">
    <label>Email</label>
    <input required type="email" name="email" value="<?php echo isset($_SESSION['user'])?htmlspecialchars($_SESSION['user']['email']):''; ?>">
    <label>Assunto</label>
    <input type="text" name="subject">
    <label>Mensagem</label>
    <textarea required name="message" rows="6"></textarea>
    <button class="btn" type="submit">Enviar</button>
  </form>
  <p><a href="../index.php">Voltar</a></p>
  <footer>&copy; 2025 - Todos os direitos reservados.</footer>
</div>
</body></html>
