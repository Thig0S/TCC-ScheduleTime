<?php

// Incluir o arquivo com a conexão com banco de dados
include_once './conexao.php';

// Receber os dados enviados pelo JavaScript
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Verificar se os dados necessários foram enviados
if (!$dados['cad_start'] || !$dados['cad_end']) {
    echo json_encode(['status' => false, 'msg' => 'Erro: Dados incompletos enviados!']);
    exit;
}

// Verificar se há conflitos de horário no banco de dados
$query_check_conflict = "
    SELECT id 
    FROM events 
    WHERE 
        :start < end AND :end > start
";
$result_check_conflict = $conn->prepare($query_check_conflict);
$result_check_conflict->bindParam(':start', $dados['cad_start']);
$result_check_conflict->bindParam(':end', $dados['cad_end']);
$result_check_conflict->execute();

// Verificar se há horários inválidos


// Verificar se há conflitos
if ($result_check_conflict->rowCount() > 0) {
    $retorna = [
        'status' => false,
        'msg' => 'Erro: Já existe um evento cadastrado neste horário!'
    ];
} elseif (!empty($res)) {
    $retorna = [
        'status' => false,
        'msg' => 'Existem registros com hora de término igual ou antes da hora de início!'
    ];
} else {
    // Recuperar os dados do usuário
    $query_user = "SELECT id, name, email FROM users WHERE id = :id LIMIT 1";
    $result_user = $conn->prepare($query_user);
    $result_user->bindParam(':id', $dados['cad_user_id']);
    $result_user->execute();
    $row_user = $result_user->fetch(PDO::FETCH_ASSOC);
    if (!$row_user) {
        echo json_encode(['status' => false, 'msg' => 'Erro: Usuário não encontrado!']);
        exit;
    }

    // Recuperar os dados do cliente
    $query_client = "SELECT id, name, email FROM users WHERE id = :id LIMIT 1";
    $result_client = $conn->prepare($query_client);
    $result_client->bindParam(':id', $dados['cad_client_id']);
    $result_client->execute();
    $row_client = $result_client->fetch(PDO::FETCH_ASSOC);
    if (!$row_client) {
        echo json_encode(['status' => false, 'msg' => 'Erro: Cliente não encontrado!']);
        exit;
    }

    // Criar a QUERY para cadastrar evento no banco de dados
    $query_cad_event = "INSERT INTO events (title, color, start, end, obs, user_id, client_id) 
                        VALUES (:title, :color, :start, :end, :obs, :user_id, :client_id)";
    $cad_event = $conn->prepare($query_cad_event);
    $cad_event->bindParam(':title', $dados['cad_title']);
    $cad_event->bindParam(':color', $dados['cad_color']);
    $cad_event->bindParam(':start', $dados['cad_start']);
    $cad_event->bindParam(':end', $dados['cad_end']);
    $cad_event->bindParam(':obs', $dados['cad_obs']);
    $cad_event->bindParam(':user_id', $dados['cad_user_id']);
    $cad_event->bindParam(':client_id', $dados['cad_client_id']);

    if ($cad_event->execute()) {
        $retorna = [
            'status' => true,
            'msg' => 'Evento cadastrado com sucesso!',
            'id' => $conn->lastInsertId(),
            'title' => $dados['cad_title'],
            'color' => $dados['cad_color'],
            'start' => $dados['cad_start'],
            'end' => $dados['cad_end'],
            'obs' => $dados['cad_obs'],
            'user_id' => $row_user['id'],
            'name' => $row_user['name'],
            'email' => $row_user['email'],
            'client_id' => $row_client['id'],
            'client_name' => $row_client['name'],
            'client_email' => $row_client['email']
        ];
    } else {
        $retorna = ['status' => false, 'msg' => 'Erro: Evento não cadastrado!'];
    }
}

// Retornar como JSON
echo json_encode($retorna);
