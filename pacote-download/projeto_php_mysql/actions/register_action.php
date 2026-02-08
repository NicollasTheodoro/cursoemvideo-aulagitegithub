<?php
include '../db/config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn = db_connect();
    $stmt = $conn->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
    $stmt->bind_param('sss', $name, $email, $password);
    if ($stmt->execute()) {
        header('Location: ../pages/login.php?msg=registered');
        exit;
    } else {
        $error = $conn->error;
    }
    $stmt->close();
    $conn->close();
} else {
    $error = 'Método inválido.';
}
?>
<!doctype html><html><head><meta charset="utf-8"><title>Resultado Cadastro</title></head><body>
<div style="max-width:600px;margin:20px auto;">
<?php if (!empty($error)): ?>
  <p>Erro: <?php echo htmlspecialchars($error); ?></p>
  <p><a href="register.php">Voltar</a></p>
<?php endif; ?>
</div>
</body></html>
