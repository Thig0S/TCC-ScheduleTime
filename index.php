<?php
session_start();
if ((!isset($_SESSION["email"]) == true) and (!isset($_SESSION["senha"]) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location:login.php');
}
$logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScheduleTime</title>
    <link rel="icon" href="img/top.png." type="image/x-icon">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="index.php">ScheduleTime🖐🕒</a>
        </div>
        <div class="links">
            <a href="./calendario2/index.php">Agendamentos</a>
            <a href="">Sobre</a>
            <a href="./PHP/sair.php">Sair</a>
        </div>
    </div>
    <div class="main2">
        <div class="containerRight">
            <div class="conteudoRight">
                <img src="./img/Schedule_logo.png" alt="">
            </div>
        </div>
        <div class="containerLeft">
            <div class="conteudoLeft">
                <h2>Bem-vindo ao nosso sistema de agendamento de laboratórios ScheduleTime!</h2>
                <p>Aqui, você pode agendar de forma prática e rápida o uso dos nossos laboratórios para suas atividades acadêmicas, profissionais ou de pesquisa. Nossa plataforma foi desenvolvida para facilitar a gestão de horários, permitindo que você escolha o momento mais conveniente para realizar seus trabalhos, 
                    sem complicações. </p>
                <button class="btnPadrao">Saiba Mais</button>
            </div>
        </div>
    </div>
    <div class="span">
        <div class="divider">
            <span class="divider-text">Nossa Proposta</span>
        </div>
    </div>
    <div class="proposta">
        <div class="containerProposta">
            <svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#0097b2">
                <path
                    d="M360-840v-80h240v80H360Zm80 440h80v-240h-80v240Zm40 320q-74 0-139.5-28.5T226-186q-49-49-77.5-114.5T120-440q0-74 28.5-139.5T226-694q49-49 114.5-77.5T480-800q62 0 119 20t107 58l56-56 56 56-56 56q38 50 58 107t20 119q0 74-28.5 139.5T734-186q-49 49-114.5 77.5T480-80Zm0-80q116 0 198-82t82-198q0-116-82-198t-198-82q-116 0-198 82t-82 198q0 116 82 198t198 82Zm0-280Z" />
            </svg>
            <hr>
            <br>
            <strong>Facilidade: </strong>
            <div class="textContainer">
                <p>Agendar seus exames nunca foi tão simples. Com nossa plataforma online, você pode agendar suas aulas em salas e laboratoratórios de forma prática e rápida, diretamente do seu computador ou celular.</p>
            </div>
        </div>
        <div class="containerProposta">
            <svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#0097b2">
                <path
                    d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
            </svg>
            <hr>
            <br>
            <strong>Disponibilidade: </strong>
            <div class="textContainer">
                <p>Oferecemos uma plataforma segura para o gerenciamento de reservas, 
                    evitando conflitos e garantindo que as informações de reservas sejam precisas.
                    Nossa plataforma assegura a proteção de dados pessoais de usuários e permite a fácil visualização do histórico de agendamentos. </p>
            </div>
        </div>
        <div class="containerProposta">
            <svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#0097b2">
                <path
                    d="M400-240v-80h240v80H400Zm-158 0L15-467l57-57 170 170 366-366 57 57-423 423Zm318-160v-80h240v80H560Zm160-160v-80h240v80H720Z" />
            </svg>
            <hr>
            <br>
            <strong>Segurança e Confiança: </strong>
            <div class="textContainer">
                <p>Oferecemos uma plataforma segura e eficiente para o gerenciamento de agendamentos de exames laboratoriais, garantindo uma experiência sem conflitos e com informações precisas. Nossa solução prioriza a proteção dos dados pessoais dos usuários.</p>
            </div>
        </div>
    </div>
    <div class="equipe">
        <div class="equipeText">
            <h2>Equipe ScheduleTime</h2>
            <div class="divider">
            </div>
            <p>
            A equipe ScheduleTime inicialmente composta pelo integrantes: Thiago, Mauricio, Gabriel e Jean foi responsável por este trabalho de TCC é composta por estudantes dedicados das áreas de Programação Web, com o objetivo de criar uma plataforma de agendamento de exames laboratoriais para o agendamento de Salas e Laboratórios do colégio CEDUP. Durante o desenvolvimento do projeto, nossos membros 
            combinaram conhecimentos acadêmicos e experiências práticas para garantir que a solução atendesse
             às necessidades dos usuários e fosse tecnicamente robusta. 
            </p>
        </div>
        <div class="imgEquipe">
            <img src="./img/equipe2.jpg" alt="">
        </div>
    </div>
    <footer>
        <div class="conteudoFooter">
            <div class="title">
                <h3>Sobre Schedule</h3>
                <hr>
            </div>
            <div class="">
                <p>Nossa Empresa</p>
                <p>Políticas de Privacidade</p>
                <p>Contato</p>
            </div>
        </div>
        <div class="conteudoFooter">
            <div class="title">
                <h3>Contato</h3>
                <hr>
            </div>
            <div class="">
                <p>ScheduleTime</p>
                <p>Nossa Equipe</p>
            </div>
        </div>
        <div class="conteudoFooter">
            <div class="title">
                <h3>Redes</h3>
                <hr>
            </div>
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                    xml:space="preserve" width="35" height="35" fill="#FFF">
                    <g>
                        <path
                            d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z" />
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                    xml:space="preserve" width="35" height="35" fill="#FFF">
                    <g>
                        <path style="fill-rule:evenodd;clip-rule:evenodd;"
                            d="M12,0.296c-6.627,0-12,5.372-12,12c0,5.302,3.438,9.8,8.206,11.387   c0.6,0.111,0.82-0.26,0.82-0.577c0-0.286-0.011-1.231-0.016-2.234c-3.338,0.726-4.043-1.416-4.043-1.416   C4.421,18.069,3.635,17.7,3.635,17.7c-1.089-0.745,0.082-0.729,0.082-0.729c1.205,0.085,1.839,1.237,1.839,1.237   c1.07,1.834,2.807,1.304,3.492,0.997C9.156,18.429,9.467,17.9,9.81,17.6c-2.665-0.303-5.467-1.332-5.467-5.93   c0-1.31,0.469-2.381,1.237-3.221C5.455,8.146,5.044,6.926,5.696,5.273c0,0,1.008-0.322,3.301,1.23   C9.954,6.237,10.98,6.104,12,6.099c1.02,0.005,2.047,0.138,3.006,0.404c2.29-1.553,3.297-1.23,3.297-1.23   c0.653,1.653,0.242,2.873,0.118,3.176c0.769,0.84,1.235,1.911,1.235,3.221c0,4.609-2.807,5.624-5.479,5.921   c0.43,0.372,0.814,1.103,0.814,2.222c0,1.606-0.014,2.898-0.014,3.293c0,0.319,0.216,0.694,0.824,0.576   c4.766-1.589,8.2-6.085,8.2-11.385C24,5.669,18.627,0.296,12,0.296z" />
                        <path
                            d="M4.545,17.526c-0.026,0.06-0.12,0.078-0.206,0.037c-0.087-0.039-0.136-0.121-0.108-0.18   c0.026-0.061,0.12-0.078,0.207-0.037C4.525,17.384,4.575,17.466,4.545,17.526L4.545,17.526z" />
                        <path
                            d="M5.031,18.068c-0.057,0.053-0.169,0.028-0.245-0.055c-0.079-0.084-0.093-0.196-0.035-0.249   c0.059-0.053,0.167-0.028,0.246,0.056C5.076,17.903,5.091,18.014,5.031,18.068L5.031,18.068z" />
                        <path
                            d="M5.504,18.759c-0.074,0.051-0.194,0.003-0.268-0.103c-0.074-0.107-0.074-0.235,0.002-0.286   c0.074-0.051,0.193-0.005,0.268,0.101C5.579,18.579,5.579,18.707,5.504,18.759L5.504,18.759z" />
                        <path
                            d="M6.152,19.427c-0.066,0.073-0.206,0.053-0.308-0.046c-0.105-0.097-0.134-0.234-0.068-0.307   c0.067-0.073,0.208-0.052,0.311,0.046C6.191,19.217,6.222,19.355,6.152,19.427L6.152,19.427z" />
                        <path
                            d="M7.047,19.814c-0.029,0.094-0.164,0.137-0.3,0.097C6.611,19.87,6.522,19.76,6.55,19.665   c0.028-0.095,0.164-0.139,0.301-0.096C6.986,19.609,7.075,19.719,7.047,19.814L7.047,19.814z" />
                        <path
                            d="M8.029,19.886c0.003,0.099-0.112,0.181-0.255,0.183c-0.143,0.003-0.26-0.077-0.261-0.174c0-0.1,0.113-0.181,0.256-0.184   C7.912,19.708,8.029,19.788,8.029,19.886L8.029,19.886z" />
                        <path
                            d="M8.943,19.731c0.017,0.096-0.082,0.196-0.224,0.222c-0.139,0.026-0.268-0.034-0.286-0.13   c-0.017-0.099,0.084-0.198,0.223-0.224C8.797,19.574,8.925,19.632,8.943,19.731L8.943,19.731z" />
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                    xml:space="preserve" width="35" height="35" fill="#FFF">
                    <g>
                        <path
                            d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z" />
                        <path
                            d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z" />
                        <circle cx="18.406" cy="5.594" r="1.44" />
                    </g>
                </svg>
            </div>
        </div>
    </footer>
</body>

</html>