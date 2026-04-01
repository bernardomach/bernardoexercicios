<html>

<head>
    <title>Contatos</title>
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
    color: #f9fbf9;
    border-bottom: 2px solid #81c784;
    padding-bottom: 8px;
}

h3 {
    padding: 10px 20px;
    border-radius: 10px;
    background-color: #c8e6c9;
    color: #1b5e20;
    font-size: 18px;
    font-weight: bold;
}


.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    width: 80%;
}


.formulario {
    width: 40%;
}

form {
    background-color: #307552;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    width: 100%;
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

input[type="submit"]:hover {
    background-color: #2e7d32;
}


.lista {
    width: 60%;
}


table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
}

th {
    background-color: #388e3c;
    color: white;
    padding: 10px;
}

td {
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

tr:hover {
    background-color: #e8f5e9;
}


a {
    text-decoration: none !important;
}


.btn-editar {
    color: #2e7d32;
    background: none;
    padding: 0;
    border-radius: 0;
    font-size: 14px;
}

.btn-excluir {
    color: #2e7d32;
    background: none;
    padding: 0;
    border-radius: 0;
    font-size: 14px;
    margin-left: 5px;
}

    
    </style>
</head>

<body>
    <h1>Agenda </h1>
    <div class="container">
        <div class="formulario">
                
    <form action="salvar.php" method="POST">
        <h2> Cadastro dos contatos </h2>
        Nome: <input type="text" name="nome" >  <br><br>
        Endereço: <input type="text" name="endereco" ><br><br>
        Telefone: <input type="text" name="fone" > <br><br>
        <input type="submit" value="Cadastrar">
    </form>
</div>

    <div class="lista">
    <h3> Lista dos contatos </h3>

    <?php
    include('conexao.php');
    $sql = "SELECT * FROM contatos";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table border=1> <tr><th>Nome</th>
            <th>Endereço</th> <th>Telefone</th><th>Ação</tr>";
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<tr><td>" . $linha['nome'] . "</td><td>" .
                $linha['endereco'] . "</td><td>" . $linha['telefone'] . "</td>
                <td> 
                <a class='btn-editar' href='editar.php?id=" . $linha['id'] . "'>Editar</a> 
                ou
                <a class='btn-excluir' href='excluir.php?id=" . $linha['id'] . "'onclick=\"return confirm('Você quer excluir esse contato?')\">Excluir</a></td></tr>";
        }
        echo "</table>";
    } else {
        echo "<h3>Nenhum contato encontrado!</h3>";
    }


    ?>
</div>
</div>
</body>

</html>