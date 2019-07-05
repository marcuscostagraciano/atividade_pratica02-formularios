<!DOCTYPE html>
<html>

<head>
<title>Exercício 3 - Vender vinho</title>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="quadrado">
    <h1></h1>
    
<?php
$nome= $_POST['nome'];
$vinho= $_POST['vinho'];
$comida= $_POST['refeicao'];?>

<p style="border-bottom:solid 1px black;">Obrigado pela sua apreciação, <?php print " $nome";?></p><br>
<p> Você realmente aprecia <?php print " $comida";?><br>- especialmente com um bom vinho <?php print " $vinho";?></p>


</div>

</body>

</html>