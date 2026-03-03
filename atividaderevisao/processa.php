
<?php
$Noome = $_POST['nome'];
$endereco = $_POST['endereco'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];

echo "Nome: $Noome ";

if ($idade >= 18) {
    echo "Minha idade é:  $idade ";
    echo "Sexo:  $sexo ";
    echo "Endereço:  $endereco";
} else {
    echo "Menor de idade";
}
?>