<!DOCTYPE html>
<html>

<head>
<title>Exercício 4 - Calculadora</title>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="quadrado">
<h1>Resultado: </h1>

<?php
$n1=$_POST['numero1'];
$n2=$_POST['numero2'];
$operacao=$_POST['calculo'];

if ($n1 == null)
    {$n1=0;}

if ($n2 == null)
{$n2=0;}

if ($operacao == "add")
    {$resultado=$n1+$n2;}

elseif ($operacao == "sub")
    {$resultado=$n1-$n2;}

elseif ($operacao == "mult")
    {$resultado=$n1*$n2;}

elseif ($operacao == "div")
    {$resultado=$n1/$n2;}
?>

<p>O resultado é: <?php print " $resultado";?>

</div>

</body>

</html>