<?php
// Função para validar e limpar dados
function validarDado($dado) {
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);
    return $dado;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber dados do formulário
    $email = validarDado($_POST['email']);
    $senhaFornecida = validarDado($_POST['senha']);

    // Conectar ao banco de dados
    $pdo = new PDO('mysql:host=localhost; dbname=bd_naturalle', 'root', '');

    // Verificar se o usuário com o email fornecido existe
    $sql = "SELECT * FROM cadastro WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        // Verificar se a senha fornecida corresponde a senha armazenada no banco de dados
        if (password_verify($senhaFornecida, $usuario['senha'])) {
            // Autenticação bem-sucedida
            session_start();
            $_SESSION['email'] = $usuario['email']; // Armazenar o email do usuário na sessão
            header("Location: perfil.php");
            exit();
        } else {
            // Senha incorreta
            echo "Senha incorreta. Tente novamente.";
        }
    } else {
        // Usuário não encontrado
        echo "Usuário com o email fornecido não encontrado. Verifique o email.";
    }
}
?>
