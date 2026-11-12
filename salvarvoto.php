<?php
    $servidor = "";
    $usuario = "";
    $senha = "";
    $banco = "";

    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);

    $nome = $_POST['nome'];
    $titulo = $_POST['titulo'];
    $cpf = $_POST['cpf'];
    $candidatovotado = $_POST['candidatovotado'];

    $sql = "INSERT INTO votacao (nome, titulo, cpf, candidatovotado) VALUES ('$nome', '$titulo', '$cpf', '$candidatovotado')";
    mysqli_query($conn, $sql);
?>