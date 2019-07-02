<!DOCTYPE html>
<html>

<head>
<title>Exercício 1 - Selecione o seu carro</title>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="quadrado">
<h1> Carro selecionado: </h1><br>

<p style="margin-left:20px;">
<?php

    $carro= $_POST["modelocarro"];
    $cor = $_POST["cor"];

    print "Seu $carro de cor $cor está pronto. Dirija com cuidado!"; ?>
</p>


</div>

</body>

</html>