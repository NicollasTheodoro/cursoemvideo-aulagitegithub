<?php
include '../db/config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $conn = db_connect();
    $stmt = $conn->prepare('SELECT id, name, email, password FROM users WHERE email = ? LIMIT 1');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($res->num_rows === 1) {
        $row = $res->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'email' => $row['email']
            ];
            header('Location: ../pages/profile.php');
            exit;
        } else {
            $error = 'Senha inválida.';
        }
    } else {
        $error = 'Usuário não encontrado.';
    }
    $stmt->close();
    $conn->close();
} else {
    $error = 'Método inválido.';
}
?>
<!doctype html><html><head><meta charset="utf-8"><title>Resultado Login</title></head><body>
<div style="max-width:600px;margin:20px auto;">
<?php if (!empty($error)): ?>
  <p>Erro: <?php echo htmlspecialchars($error); ?></p>
  <p><a href="../pages/login.php">Voltar</a></p>
<?php endif; ?>
</div>
</body></html>
