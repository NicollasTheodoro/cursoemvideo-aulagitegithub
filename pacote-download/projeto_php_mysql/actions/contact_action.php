<?php
include '../db/config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    $user_id = isset($_SESSION['user'])?$_SESSION['user']['id']:null;

    $conn = db_connect();
    $stmt = $conn->prepare('INSERT INTO messages (user_id, name, email, subject, message) VALUES (?, ?, ?, ?, ?)');
    $stmt->bind_param('issss', $user_id, $name, $email, $subject, $message);
    if ($stmt->execute()) {
        $success = true;
    } else {
        $error = $conn->error;
    }
    $stmt->close();
    $conn->close();
} else {
    $error = 'Método inválido.';
}
?>
<!doctype html><html><head><meta charset="utf-8"><title>Contato Resultado</title></head><body>
<div style="max-width:600px;margin:20px auto;">
<?php if (!empty($success)): ?>
  <p>Mensagem enviada com sucesso.</p>
  <p><a href="../index.php">Voltar</a></p>
<?php else: ?>
  <p>Erro: <?php echo htmlspecialchars($error); ?></p>
  <p><a href="../pages/contact.php">Voltar</a></p>
<?php endif; ?>
</div>
</body></html>
