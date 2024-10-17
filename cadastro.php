<?php
session_start();

// Verifica se já existe uma sessão de alerta
if (!isset($_SESSION['alert'])) {
    $_SESSION['alert'] = 0; // Inicializa a sessão de alerta
}

if (isset($_POST['submit'])) {
    include_once 'PHP/conect.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];
    $tipo = 's';

    $querySelect = "SELECT * FROM users WHERE email='$email'";
    $resultSelect = mysqli_query($conexao, $querySelect);

    if ($resultSelect->num_rows < 1) {
        if ($senha === $confirmarSenha) {
            $criptSenha = password_hash($senha, PASSWORD_DEFAULT);

            // Aqui, insira os dados no banco de dados
            $insertQuery = "INSERT INTO users (name, email, senha, profissional) VALUES ('$nome', '$email', '$criptSenha', '$tipo')";
            mysqli_query($conexao, $insertQuery);

            $_SESSION['alert'] = 1; // Cadastro concluído com sucesso
        } else {
            $_SESSION['alert'] = 3; // As senhas não são iguais
        }
    } else {
        $_SESSION['alert'] = 2; // Email já está em uso
    }

    // Redireciona para evitar reenvio do formulário
    header('Location: cadastro.php'); // Substitua pelo nome do seu arquivo
    exit(); // Encerra o script para evitar mais saídas
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" href="img/top.png." type="image/x-icon">
    <link rel="stylesheet" href="cadastro.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <form action="cadastro.php" method="POST">
        <?php
        // Verificação do PHP dentro do HTML
        if (isset($_SESSION['alert'])) {
            switch ($_SESSION['alert']) {
                case 1:
                    echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Cadastro Concluído com Sucesso',
                        icon: 'success',
                        customClass: {
                    confirmButton: 'custom-confirm-button' // Classe personalizada para o botão
                }
                    });
                });
              </script>";
                    break;

                case 2:
                    echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Este email já está em uso!',
                        icon: 'warning',
                        customClass: {
                    confirmButton: 'custom-confirm-button' // Classe personalizada para o botão
                }
                    });
                });
              </script>";
                    break;

                case 3:
                    echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'As senhas não são iguais!',
                        icon: 'warning',
                        customClass: {
                    confirmButton: 'custom-confirm-button' // Classe personalizada para o botão
                }
                    });
                });
              </script>";
                    break;
            }

            // Limpa o alerta após exibição
            unset($_SESSION['alert']);
        }
        ?>
        <div class="main">
            <div class="loginRight">
                <div class="card-login">
                    <h2>Cadastro</h2>
                    <div class="textfield">
                        <input type="text" placeholder="Nome" name="nome" required>
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="textfield">
                        <input type="password" placeholder="Senha" name="senha" required>
                        <input type="password" placeholder="Confirmar Senha" name="confirmarSenha" required>
                    </div>
                    <a href="login.php" class="Voltar">Voltar</a>
                    <button id="btn-login" type="submit" name="submit" id="submit">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>
    <div class="footer">
        <footer>
            <h2>Todos os direitos reservados para a Equipe SchedueTime || 2024</h2>
        </footer>
    </div>
</body>

</html>