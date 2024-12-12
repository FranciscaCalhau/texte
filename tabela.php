<?php
$server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'inscricao';

//conexao com database

    $conn = new mysqli( $server, $username,  $password,  $database);

$sql = 'CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) ,
    apelido VARCHAR(30) ,
    parentesco VARCHAR(30) ,
    email VARCHAR(50),
    nomeCrianca VARCHAR(30) ,
    apelidoCrianca VARCHAR(30),
    idade INT(3)
    desporto VARCHAR(30)
    )';

    if ($conn->query($sql) === TRUE) {
        echo "Tabela criada com sucesso";
    } else {
        echo "Erro ao criar tabela: " . $conn->error;
    }

    ?>