<html>

<head>
    <title>Excluir  </title>
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

if (isset($_GET['id'])) {  

$id = $_GET['id'];



$sql = "DELETE FROM contatos WHERE id = $id";

if (mysqli_query($conexao,$sql)){
    echo "<h2> Contato excluído com sucesso! </h2>";
    echo "<a href='index.php'> VOLTAR </a>";
    exit;
} else{
    echo "<h2> Erro ao excluir o contato.</h2>" .mysqli_error($conexao);
    echo " <a href= 'index.php' > VOLTAR </a>";
    exit;
}
 }