<html>

<head>
    <title>Edição de contatos</title>
    <style>

        body {
    background-color: #e8f5e9;
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

        h1 {
        
    text-align: center;
    color: #1b5e20;
    margin-bottom: 20px;
}

h2 {
    color: #3f863f;
    border-bottom: 2px solid #81c784;
    padding-bottom: 5px;
}


         
        form {
    background-color: #307552;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    width: 50%;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #a5d6a7;
    border-radius: 8px;
}

input[type="submit"] {
    background-color: #388e3c;
    display: block;
    margin: 10px auto;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
}

    
    </style>
</head> 
<body>

<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "SELECT * FROM contatos WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1) {
    $contato = mysqli_fetch_assoc($resultado);
} else {
    echo "Contato não encontrado.";
    exit;
}

if (isset($_POST['atualizar'])) {

    $novo_nome = $_POST['nome'];
    $novo_endereco = $_POST['endereco'];
    $novo_fone = $_POST['fone'];

    $sql2 = "UPDATE contatos SET nome='$novo_nome', endereco='$novo_endereco', 
    telefone='$novo_fone' WHERE id = $id";

    if (mysqli_query($conexao, $sql2)) {
        echo "<h2>Contato foi atualizado com sucesso!</h2>";
        echo "<a href='index.php'><h1>VOLTAR</h1></a>";
        exit;
    } else {
        echo "<h2>Erro ao atulizar contato. " . mysqli_error($conexao);
        echo "<a href='index.php'><h1>VOLTAR</h1></a>";
        exit;
    }
}


?>
<h1>Editar contatos</h1>
<form method="POST">
    Nome: <input type="text" name="nome" value="<?php echo $contato['nome']; ?>"><br><br>
    Endereço: <input type="text" name="endereco" value="<?php echo $contato['endereco']; ?>"><br><br>
    Telefone: <input type="text" name="fone" value="<?php echo $contato['telefone']; ?>">
    <br><br>

    <input type="submit" name="atualizar" value="Atualizar">
</form>