<?php
session_start();
include "includes/db.php";

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['idAgendamento'])) {
    $idAgendamento = intval($_POST['idAgendamento']);
    $bd = new Banco();
    $conn = $bd->getConexao();
    // Atualiza o status para 'Cancelado'
    $stmt = $conn->prepare("UPDATE Agendamento SET statusAgendamento = 'Cancelado' WHERE idAgendamento = ? AND Cliente_idCliente = ?");
    $stmt->bind_param("ii", $idAgendamento, $_SESSION['usuario_id']);
    if ($stmt->execute()) {
        header("Location: usuario/agendamentos_usuario.php?cancelado=1");
        exit;
    } else {
        header("Location: usuario/agendamentos_usuario.php?erro=1");
        exit;
    }
} else {
    header("Location: usuario/agendamentos_usuario.php");
    exit;
}
?>
