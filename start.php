<?php 
    $nome = 'Per averti pagherei, oro oroo!!';
    $parola = $_GET['parolaccia'];
    $testocensurato = str_replace($parola, '***', $nome)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>
</head>
<body>
    <h2>testo canzone</h2>
    <p><?php echo $nome ?> </p>
    <p> lunghezza testo: </p>
    <p> <?php echo strlen($nome) ?> </p> 
    <h2><?php echo $testocensurato?></h2>
    <h2><?php echo strlen($testocensurato)?></h2>
</body>
</html>