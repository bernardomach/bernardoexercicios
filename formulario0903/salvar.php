<html>

<head>
    <title> Realizado</title>
    <style>

        body {
    background-color: #e8f5e9;
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    height: 100vh; 
    flex-direction: column;
    justify-content: center;  
    align-items: center;
}

       

       h2 {
    text-align: center;
    padding: 15px 30px;
    border-radius: 20px;
    color: #1b5e20;
    display: inline-block;
    background: linear-gradient(135deg, #c8e6c9, #a5d6a7);
}

        a {
    position: absolute;
    top: 20px;
    left: 50%;
    text-decoration: none;
    color: #1b5e20;
    font-weight: bold;
    background: none;
    padding: 0;
}

            
           
        

        
    
    </style>
</head>

<body>

<?php

include('conexao.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];

$sql = "INSERT INTO contatos (nome, endereco, telefone) 
         VALUES ('$nome', '$endereco', '$fone')";

if (mysqli_query($conexao, $sql)) {
    echo "<h2>Cadastro realizado com sucesso!</h2>";
    echo "<a href='index.php'>VOLTAR</a>";
} else {
    echo "<h2>Erro ao salvar o contato!</h2>" . mysqli_error($conexao);
    echo "<a href='index.php'> VOLTAR </a>";
}