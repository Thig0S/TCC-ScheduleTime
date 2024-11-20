<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    // Acessa o sistema
    include_once 'conect.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Faz a consulta para recuperar o usuário com o email fornecido
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        // Se não encontrar o usuário
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        $_SESSION['testLogin'] = true;
        header('Location: ../login.php');
    } else {
        // Se o usuário existir, pega os dados
        $user = $result->fetch_assoc();

        // Verifica a senha usando password_verify
        if (password_verify($senha, $user['senha'])) {
            // Se a senha estiver correta
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $user['name']; // Armazena o nome do usuário na sessão

            header('Location: ../index.php');
        } else {
            // Se a senha estiver incorreta
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../login.php');
        }
    }
} else {
    // Se não acessar, redireciona
    header('Location: ../index.php');
}