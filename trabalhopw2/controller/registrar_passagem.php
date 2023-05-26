<?php
require_once "../model/connect.php";

$nomeCompleto = $_POST['completname'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$destino = $_POST['destino'];
$data = $_POST['data'];
$hora = $_POST['time'];

if(isset($nomeCompleto) && isset($cpf) && isset($telefone) && isset($destino) && isset($data) && isset($hora)){
    $sql = "INSERT INTO passagens_clientes(nomecompleto, CPF, telefone, destinos, dataviagem, horario) VALUES ('$nomeCompleto','$cpf','$telefone','$destino','$data','$hora')";
    $con->query($sql);
    header('location: ../view/cadastrado.php');
}else{
    header('location: ../view/passagens.php');
}
?>