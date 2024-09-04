<?php

// Iniciar a sessão
session_start();


// Conexão
include_once 'connection.php';

if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Consulta ao banco de dados para verificar se o usuário existe
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        // Verificando a senha
        if (password_verify($password, $user['senha'])) {
            // Login válido, iniciar sessão
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            // Login válido, redirecionando para home.php
            header('Location: ../../pages/home.php');
            exit();
        } else {
            header('Location: ../../pages/login.php');
        }
    } else {
        header('Location: ../../pages/login.php');
    }
}
?>