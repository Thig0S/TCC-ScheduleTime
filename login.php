<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Schedule</title>
    <link rel="icon" href="img/top.png." type="image/x-icon">
    <link rel="stylesheet" href="cadastro.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <form action="PHP/testeLogin.php" method="post">
        <div class="mainLogin1">
            <div class="loginLeft1">
                <a href="index.php">
                    <img src="img/Schedule_Logo.png" alt="" id="logo">
                </a>
            </div>
            <div class="loginRight1">
                <div class="card-login1">
                    <h2>Login</h2>
                    <div class="textfield1">
                        <input type="text" placeholder="Email" name="email" required>
                    </div>
                    <div class="textfield1">
                        <input type="password" placeholder="Senha" name="senha" required>
                    </div>
                    <div class="alert">
                        <?php
                        if (isset($_SESSION['testLogin'])) {
                            echo "<script>
                            Swal.fire({
                            title: 'Login ou Senha inválidos',
                            icon: 'error',customClass: {
                    confirmButton: 'custom-confirm-button' // Classe personalizada para o botão
                }
});
                           </script>";
                            unset($_SESSION['testLogin']); // Limpa a mensagem após exibir
                        }
                        ?>
                    </div>
                    <div id="cadastro">
                        <a href="cadastro.php">Cadastre-se</a>
                    </div>
                    <input type="submit" class="btn-login1" name="submit" value="Enviar" type="submit">
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