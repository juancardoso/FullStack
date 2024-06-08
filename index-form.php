<?php
session_start();

// Definindo as credenciais do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facensplay";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebendo os dados do formulário
$email = $_POST['email'];
$password = $_POST['password'];

// Preparando e executando a consulta para verificar as credenciais
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Se as credenciais forem válidas, iniciamos a sessão e redirecionamos para a página inicial
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    header("Location: home.php");
} else {
    // Se as credenciais forem inválidas, exibe a mensagem de erro e redireciona para login.html
    echo '
            <script>
                alert("Usuário ou senha incorretos!"); 
                window.location.href = "index.php";
            </script>';
}

// Fechando a conexão
$conn->close();
?>