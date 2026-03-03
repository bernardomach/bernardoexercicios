<?php
$media = $_POST["media"];
echo "<h2>Resultado</h2>";
if ($media <= 1.7) {
    echo "Você não poderá realizar o exame.";
}
else if ($media >= 7.0) {
    echo "Você está APROVADO!";
}
else {
   
    $notaExame = (50 - ($media * 6)) / 4;
    echo "Você precisa tirar" . number_format($notaExame, 2) . "no exame para ser aprovado.";
}