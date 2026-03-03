<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($usuario == "admin" && $senha == "1234") {
    echo "Bem-vindo, admin!<br>";
    echo "Seu cargo é: Administrador";
}
else if ($usuario == "joao" && $senha == "abcd") {
    echo "Bem-vindo, joao!<br>";
    echo "Seu cargo é: Funcionário";
}
else if ($usuario == "maria" && $senha == "5678") {
    echo "Bem-vindo, maria!<br>";
    echo "Seu cargo é: Gerente";
}
else {
    echo "Erro: Usuário ou senha incorretos!";
}

?>