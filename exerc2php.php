<!DOCTYPE html>
<html>

<head>
<title>Exercício 1 - Selecione o seu carro</title>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="quadrado">
<h1> Cor selecionada: </h1><br>

<?php 

    $r= $_POST["r"];
    $g= $_POST["g"];
    $b= $_POST["b"];

    $rgb = $r.",".$g.",".$b; ?>

<p>
    R: <?php echo $r;?>
    G: <?php echo $g;?>
    B: <?php echo $b;?>
</p>

<div style="background "></div> 

</div>

</body>

</html>