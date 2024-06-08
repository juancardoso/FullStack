<?php

if(!empty($_POST)){
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
$name = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['senha'];

// Validando dados do formulário
if (trim($name) === "" || trim($email) === "" || trim($password) === ""){
    echo '<script>alert("Por favor, preencha todos os campos!");</script>';
}else {
// Preparando e executando a consulta para inserir os dados no banco de dados

    $query_usuario = "SELECT * FROM usuarios where email = '".$email."'";

    if($conn->query($query_usuario)->num_rows > 0) {
        echo '<script>alert("Email já cadastrado")</script>';
    }else {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$name', '$email', '$password')";
    
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Usuário cadastrado com sucesso!");window.location.href = "index.php";</script>';
        } else {
            echo '<script>alert("Erro ao cadastrar. Tente novamente.");</script>';
        }
    }
}

// Fechando a conexão
$conn->close();
}

include("html\cadastro.html")
?>