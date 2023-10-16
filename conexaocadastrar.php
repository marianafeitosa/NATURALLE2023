<?php

$nome = validarDado($_POST['nome']);
$email = validarDado($_POST['email']);
$telefone = validarDado($_POST['telefone']);
$cep = validarDado($_POST['cep']);
$rua = validarDado($_POST['rua']);
$bairro = validarDado($_POST['bairro']);
$cidade = validarDado($_POST['cidade']);
$estado = validarDado($_POST['estado']);
$cpf = validarDado($_POST['cpf']);
$datanascimento = validarDado($_POST['datanascimento']);
$senha = validarDado($_POST['senha']);


// Definindo banco de dados, localhost 

define('MYSQL_HOST', 'localhost:3306');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'bd_naturalle');

try {
    // Conectar ao banco de dados
    $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

    // Gerar um hash seguro da senha
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir dados na tabela cadastro, incluindo a senha criptografada
    $sql = "INSERT INTO cadastro (nome, email, telefone, cep, rua, bairro, cidade, estado, CPF, datanascimento , senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $telefone, $cep, $rua, $bairro, $cidade, $estado, $cpf, $datanascimento, $senhaHash]);

    // Redirecionar ou exibir uma mensagem de sucesso
    if ($stmt) {
        header("Location: sucessocadastrar.php"); // Redirecionar para uma página de sucesso
        exit();
    } else {
        echo "Erro ao cadastrar .";
    }
} catch (PDOException $e) {
    echo "Erro de conexão com o banco de dados: " . $e->getMessage();
}
 

// Função para validar e limpar dados
function validarDado($dado) {
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);
    return $dado;
}

// Validações adicionais (exemplos)
if (empty($nome) || empty($email) || empty($telefone) || empty($cep) || empty($rua) || empty($bairro) || empty($cidade) || empty($estado) || empty($cpf) || empty($datanascimento) || empty($senha)) {
    echo "Por favor, preencha todos os campos obrigatórios.";
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Por favor, insira um endereço de e-mail válido.";
    exit();
}


?>
