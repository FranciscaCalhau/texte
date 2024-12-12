<?php
// Verifica se o formulário foi enviado



    $nome = $_POST['nome'] ?? "";
    $apelido = $_POST['apelido'] ??'';
    $parentesco = $_POST['parentesco'] ??'';
    $email = $_POST['email'] ??'';
    $nomeCrianca = $_POST['nomeCrianca'] ??'';
    $apelidoCrianca= $_POST['apelidoCrianca'] ??'';
    $idade = $_POST['idade'] ??'';
    $desporto = $_POST['desporto'] ??'';

//configuraçoes de credenciais

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'inscricao';

//conexao com database

    $conn = new mysqli( $server, $username,  $password,  $database);

//verifica se a conexao foi bem sucedida

    if ($conn->connect_error) {
        die("Falha ao comunicar com a tabela : " . $conn->connect_error);

    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql = "INSERT INTO inscricao (nome, apelido, parentesco, email, nomeCrianca, apelidoCrianca, idade, desporto) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";


if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

    }



    //$smtp = $conn->prepare("INSERT INTO inscricao (nome, apelido, parentesco, email, nomeCrianca, apelidoCrianca, idade, desporto) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    //$smtp->bind_param("ssssssis", var: $nome, $apelido, $parentesco, $email, $nomeCrianca, $apelidoCrianca, $idade, $desporto);

    //if($smtp->execute()){
    //    echo "Dados inseridos com sucesso!";
    //} else {
      //  echo "Erro ao inserir dados: " . $smtp->error;  
    //}
    //$smtp->close();
    $conn->close();
    