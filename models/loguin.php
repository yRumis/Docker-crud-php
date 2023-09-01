<?php 
include ('config/config.php');

require_once __DIR__.'/../controllers/pages/dashboard.php';




// Conexão com o banco de dados


if ($data->connect_error) {
    die("Erro na conexão: " . $data->connect_error);
}

// Dados do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Prepara a consulta
$sql = "SELECT * FROM usuarios
        WHERE usuario = ? AND senha = ?";
$stmt = $data->prepare($sql);

// Associa as variáveis à consulta
$stmt->bind_param("ss", $usuario, $senha);

// Executa a consulta
$stmt->execute();

// Armazena o resultado
$result = $stmt->get_result();

// Verifica a quantidade de linhas retornadas
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Armazena os dados na sessão
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['tipo'] = $row['tipo'];

    
    $dash = DashBoard::getDash();
    echo $dash;
    //header("Location: ../pages/dashboard.html");
} else {
    echo "<script>alert('Usuário ou senha incorretos');</script>";
   // echo ; 
}

// Fecha a declaração e a conexão
$stmt->close();
$data->close();






 
?>